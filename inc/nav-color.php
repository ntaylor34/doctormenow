<?php
function add_nc_color_meta_box() {
	add_meta_box(
		'nc_color_meta_box', // $id
		'Nav Item Color', // $title
		'show_nc_color_meta_box', // $callback
		array('post','page'), // $screen
		'normal', // $context
		'high' // $priority
	);
}
add_action( 'add_meta_boxes', 'add_nc_color_meta_box' );
add_action( 'admin_enqueue_scripts', 'nc_color_backend_scripts');
if ( ! function_exists( 'nc_color_backend_scripts' ) ){
    function nc_color_backend_scripts($hook) {
        wp_enqueue_media();
        wp_enqueue_style( 'wp-color-picker');
        wp_enqueue_script( 'wp-color-picker');
    }
}
function show_nc_color_meta_box() {
    global $post;  
    
		$meta = array_values(get_post_meta( $post->ID, 'nc_color', true )); ?>

  <input type="hidden" name="nc_color_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
	<script>
	jQuery(document).ready(function($){
		$('.color-field').each(function(){
      $(this).wpColorPicker();
    });
	})
			
	</script>
	<div class="pagebox">
		<h4><?php esc_attr_e('Main color', 'nav-color' ); ?></h4>
		<input class="color-field" type="text" name="nc_color['main']" value="<?php if (is_array($meta) && isset($meta[0])){ echo $meta[0]; }?>"/>
		<h4><?php esc_attr_e('Hover color', 'nav-color' ); ?></h4>
		<input class="color-field" type="text" name="nc_color['hover']" value="<?php if (is_array($meta) && isset($meta[1])){ echo $meta[1]; }?>"/>
	</div>

  <?php }
function save_nc_color_meta( $post_id ) {   
	// verify nonce
	if ( isset($_POST['nc_color_meta_box_nonce']) 
			&& !wp_verify_nonce( $_POST['nc_color_meta_box_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	
	$old = get_post_meta( $post_id, 'nc_color', true );
		if (isset($_POST['nc_color'])) { //Fix 3
			$new = $_POST['nc_color'];
			if ( $new && $new !== $old ) {
				update_post_meta( $post_id, 'nc_color', $new );
			} elseif ( '' === $new && $old ) {
				delete_post_meta( $post_id, 'nc_color', $old );
			}
		}
}

add_action( 'save_post', 'save_nc_color_meta' );

?>