<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LRM
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_option('favicon'); ?>" type="image/x-icon">
<link rel="icon" href="<?php echo get_option('favicon'); ?>" type="image/x-icon">
<?php wp_head();
	// Load in header code snippets only if theme option is in use
	if ( get_option('snippets_header') ) :
		echo get_option('snippets_header');
	endif;
	// Load in custom styles only if theme option is in use
	if ( get_option('custom_css') ) :
		echo "<style type='text/css' media='all'>" . get_option('custom_css') . "</style>";
	endif;
?>
</head>

<body <?php body_class(); ?>>

	<?php if ( get_option('snippets_body') ) : echo get_option('snippets_body'); endif; ?>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lrm' ); ?></a>

	<header id="masthead" role="banner">
		<div class="action-bar container">
			<div class="login-btns text-right">
					<a href="#" class="btn-1">Patient Login</a>
					<a href="" class="btn-1">Providers</a>
			</div>
		</div>
		<div class="container">
			<div class="row align-items-end">
				<div class="col-sm-12 col-md-4">
					<?php if ( get_option('site_logo') ) : ?>
						<div class="header-logo">
							<p class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php echo get_option('site_logo'); ?>" alt="<?php bloginfo('name'); ?>" class="img-fluid">
								</a>
							</p>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="header-nav">
						<nav class="navbar navbar-expand-lg navbar-header" role="navigation">
							<button class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="mobile-menu-close"><i class="fa fa-times-circle-o" aria-hidden="true"></i></div>
							<?php wp_nav_menu( array(
								'theme_location'  => 'primary',
								'depth'           => 6, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'div',
								'container_class' => 'navbar-collapse',
								'container_id'    => 'navbarNav',
								'menu_class'      => 'navbar-nav ml-auto',
								'fallback_cb'     => false,
								'walker'          => new WP_Bootstrap_Navwalker(),
							) );
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
        <div class="clearfix"></div>
	</header><!-- #masthead -->
	
	<?php $meta = get_post_meta( $post->ID, 'hero', true ); ?>
	<?php if (is_front_page()) : ?>
		<div id="front-page">
	<?php elseif (is_404()) : ?>
		<div id="content">
	<?php elseif (is_archive()) : ?>
		<header class="banner-header" style="background-image: linear-gradient(to right,rgba(0, 0, 0, 0.5) 0%,rgba(0, 0, 0, 0.5) 100%), url('<?php if (is_array($meta) && isset($meta["image"])){ echo $meta["image"]; } ?>')">
			<?php the_archive_title( '<h1 class="banner-title">', '</h1>' ); ?>
		</header><!-- .page-header -->
	<?php elseif (is_search()) : ?>
		<header class="banner-header">
			<h1 class="banner-title"><?php printf( esc_html__( 'Search Results for: %s', 'lrm' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>
	<?php else : ?>
		<div id="content">
			<?php if (is_home()) : ?>
				<header class="banner-header" style="background-image: linear-gradient(to right,rgba(0, 0, 0, 0.5) 0%,rgba(0, 0, 0, 0.5) 100%), url('')">
					<div class="container">
					<?php (is_home() ? single_post_title( '<h1 class="banner-title">', '</h1>' ) : the_title( '<h1 class="banner-title">', '</h1>' )); ?>
					<?php if ( 'post' === get_post_type() && is_single() ) : ?>
						<div class="entry-meta">
							<?php lrm_posted_on(); ?>
						</div>
					<?php endif; ?>
					</div>
				</header>
			<?php else : ?>
			<header class="banner-header" style="background-image: linear-gradient(to right,rgba(0, 0, 0, 0.5) 0%,rgba(0, 0, 0, 0.5) 100%), url('<?php if (is_array($meta) && isset($meta["image"])){ echo $meta["image"]; } ?>')">
			<div class="container">
				<?php (is_home() ? single_post_title( '<h1 class="banner-title">', '</h1>' ) : the_title( '<h1 class="banner-title">', '</h1>' )); ?>
				<?php if ( 'post' === get_post_type() && is_single() ) : ?>
					<div class="entry-meta">
						<?php lrm_posted_on(); ?>
					</div>
				<?php endif; ?>
				</div>
			</header>
	<?php endif; endif; ?>