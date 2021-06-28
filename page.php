<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package LRM
 */

get_header(); ?>

<div class="container">
	<main id="main" role="main">
		<?php while ( have_posts() ) : the_post();
			echo "<div class=\"breadcrumbs\">";
			get_breadcrumbs($post);
			echo "</div>";
			get_template_part( 'template-parts/content', 'page' );
		endwhile; ?>
	</main><!-- #main -->
</div>
<?php if(is_page('dermatology')) : ?>
	<section id="green-bg">
		<div class="container">
			<h2>Doctor<span class="white">Me</span>Now</h2>
			<p>When you have a skin, hair, or nail problem, rest assured that the providers at DoctorMeNow are there for you! Our team is highly-qualified and passionate about helping you feel confident and comfortable in your skin. Contact our team today to schedule an appointment or for more information on our services!</p>
			<a href="https://doctormenow.evisit.com/" class="btn-2">START NOW</a>
		</div>
	</section>
<?php endif; ?>
<?php
get_footer();
