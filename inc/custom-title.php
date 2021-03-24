<?php
function add_custom_title_meta_box() {
	add_meta_box(
		'custom_title_meta_box', // $id
		'Custom Page Title', // $title
		'show_custom_title_meta_box', // $callback
		array('post','page'), // $screen
		'normal', // $context
		'high' // $priority
	);
}
add_action( 'add_meta_boxes', 'add_custom_title_meta_box' );

function show_custom_title_meta_box() {
    global $post;  
    
		$ct_meta = get_post_meta( $post->ID, 'custom_title', true ); ?>

  <input type="hidden" name="custom_title_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
  <p>
    <label for="custom_title">Title</label><br>
    <input type="text" name="custom_title" id="custom_title" style="width: 50%;" value="<?php if (isset($ct_meta)){ esc_attr_e($ct_meta); }?>">
  </p>
  <?php }
function save_custom_title_meta( $post_id ) {   
	// verify nonce
	if ( isset($_POST['custom_title_meta_box_nonce']) 
			&& !wp_verify_nonce( $_POST['custom_title_meta_box_nonce'], basename(__FILE__) ) ) {
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
	
	$ct_old = get_post_meta( $post_id, 'custom_title', true );
		if (isset($_POST['custom_title'])) { //Fix 3
			$ct_new = $_POST['custom_title'];
			if ( $ct_new && $ct_new !== $old ) {
				update_post_meta( $post_id, 'custom_title', $ct_new );
			} elseif ( '' === $ct_new && $old ) {
				delete_post_meta( $post_id, 'custom_title', $old );
			}
		}
}

add_action( 'save_post', 'save_custom_title_meta' );

?>