<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LRM
 */

?>
<?php if(!is_page('how-it-works') && !is_front_page()) : ?>
<hr class="green-divider">
<section id="three-step">
	<div class="container text-center">
		<h2>Using Doctor<span class="green">Me</span>Now is as easy as 1-2-3</h2>
		<p class="subtext">Doctors are ready to help you get the care you need,<br>
			anywhere and anytime in the United States</p>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-duration="800">
				<h3>STEP 1</h3>
				<div class="content">
					<h4>REGISTER NOW</h4>
					<p>Schedule and pay for your appointment.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
				<h3>STEP 2</h3>
				<div class="content content-middle">
					<h4>REQUEST A VISIT</h4>
					<p>Choose a time/day that is convenient for you. Our physicians are available 24/7. Same day appointments
						available.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
				<h3>STEP 3</h3>
				<div class="content">
					<h4>FEEL BETTER</h4>
					<p>Our healthcare provider will reach out to you.</p>
				</div>
			</div>
		</div>
		<div class="text-center cta">
			<a href="#" class="btn-1">BOOK AN APPOINTMENT</a>
		</div>
	</div>
</section> <!-- #three-steps -->
<?php endif; ?>
<section id="faq">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-6"></div>
		<div class="col-sm-12 col-md-12 col-lg-6">
		    <h3>Ask us something</h3>
			<div class="header">
				<h2>Frequently asked questions</h2>
				<hr>
			</div>
			<hr class="outside-hr">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6"></div>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="content">
					<p>With our telemedicine services, we have made it affordable to seek care again, and you can file your receipt with your insurance company.</p>
				</div>
				<div id="accordion">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Refunds / Cancellations / Reschedule <i class="fas fa-chevron-right"></i>
							</h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								<p>All appointments are NON-refundable.  Please be sure of your appointment date and time before confirming. You may reschedule for an additional $25 charge by contacting us.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Accepted Forms of Payment <i class="fas fa-chevron-right"></i>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								<p>We take all major credit cards, FSA, and HSA cards.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Insurance <i class="fas fa-chevron-right"></i>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								<p>We do not take Insurance, Medicare, or Medicaid. We can send you an invoice that you may file with your insurance company.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour">
							<h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Minors <i class="fas fa-chevron-right"></i>
							</h5>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							<div class="card-body">
								<p>Minors must be accompanied by their parent or guardian during the visit.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFive">
							<h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Do I still need a Primary Care Doctor? <i class="fas fa-chevron-right"></i>
							</h5>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
							<div class="card-body">
								<p>Yes, DoctorMeNow is not a replacement for your primary care doctor.  If you need care right away, can’t leave the home or office, or your PCP does not have an appointment available we are here to help.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingSix">
							<h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									How do I get my prescription? <i class="fas fa-chevron-right"></i>
							</h5>
						</div>
						<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
							<div class="card-body">
								<p>Your prescriptions are sent electronically to the pharmacy of your choice.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingSeven">
							<h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									Do you prescribe pain medications? <i class="fas fa-chevron-right"></i>
							</h5>
						</div>
						<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
							<div class="card-body">
								<p>We do NOT prescribe narcotics or any other controlled medications.</p>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="text-center">
					<a href="http://doctormenow.flywheelsites.com/how-it-works/" class="btn-1">START NOW</a>
				</div>
			</div>
		</div>
	</div>
</section> <!-- #faq -->

<section id="latest-news">
	<div class="container">
		<div class="header">
			<h2>Our Blogs And News</h2>
		</div>
		<div class="row">
			<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 3,
					'order' => 'ASC' 
				);
				$query = new WP_Query($args);
				$alternate = true;
				$i = 0;
				if ($query->have_posts()) :
					while ($query->have_posts()) :
						if ($alternate) :
							$dateClass = 'blue';
							$alternate = false;
						else :
							$dateClass = "green";
							$alternate = true;
						endif;
						$query->the_post();
						$alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>
						<div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-right" data-aos-delay="<?php echo $i; ?>" data-aos-duration="800">
							<div class="bg">
								<a href="<?php echo the_permalink(); ?>">
									<div class="img">
										<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>" class="img-fluid">
									</div>
									<div class="content">
										<div class="title">
											<div class="date <?php echo $dateClass; ?>">
												<span class="day"><?php echo get_the_date('j'); ?></span>
												<span class="month"><?php echo the_date('M'); ?></span>
											</div>
											<b><?php echo the_title(); ?></b>
										</div>
										<div class="text">
										<p><?php echo get_the_excerpt(); ?></p>
											<a class="read-more" href="<?php echo the_permalink(); ?>">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
										</div>
									</div>
								</a>
							</div>
						</div>
			<?php $i += 100; endwhile; endif; wp_reset_postdata();			?>
		</div>
	</div>
</section>
<?php if (is_front_page() || is_page() || is_single()) : ?>
        </div><!-- #content / #front-page -->
<?php else : ?>
        </div><!-- .container -->
	</div><!-- #content / #front-page -->
<?php endif; ?>

<div class="clearfix"></div>

<footer id="site-footer" role="contentinfo">

<?php if ( is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3') or is_active_sidebar('footer-4') ) : ?>
    <div class="container-fluid footer-info">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar('footer-1') ) : ?>
                    <div class="col-sm-6 col-md-3">
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar('footer-2') ) : ?>
                    <div class="col-sm-6 col-md-3">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar('footer-3') ) : ?>
                    <div class="col-sm-6 col-md-3">
                        <?php dynamic_sidebar('footer-3'); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar('footer-4') ) : ?>
                    <div class="col-sm-6 col-md-3">
                        <?php dynamic_sidebar('footer-4'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div><!-- .footer-info -->
<?php endif; ?>
<div class="copybar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <p>
                    &copy; <?php echo current_time('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="sep"> | </span><?php printf( esc_html__( 'Website by %1$s', 'lrm' ), "<a href='".esc_url('https://www.linkrightmedia.com/')."' rel='designer'>".__( 'Link Right Media', 'lrm' )."</a>" ); ?>
                </p>
            </div>
            <div class="col-sm-12 col-md-6">
            <?php if ( get_option('primary_email') or get_option('social_facebook') or get_option('social_twitter') or get_option('social_instagram') or get_option('social_linkedin') or get_option('social_pinterest') or get_option('social_youtube') or get_option('social_yelp') or get_option('social_houzz') or get_option('social_rss') ) : ?>
                <ul class="social-list">
                    <?php if (get_option('primary_email')) : ?>
                        <li><a href="mailto:<?php echo get_option('primary_email'); ?>"><i class="fa fa-envelope"></i></a></li>
                    <?php endif; if (get_option('social_facebook')) : ?>
                        <li><a href="<?php echo get_option('social_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <?php endif; if (get_option('social_twitter')) : ?>
                        <li><a href="<?php echo get_option('social_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <?php endif; if (get_option('social_instagram')) : ?>
                        <li><a href="<?php echo get_option('social_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <?php endif; if (get_option('social_linkedin')) : ?>
                        <li><a href="<?php echo get_option('social_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <?php endif; if (get_option('social_pinterest')) : ?>
                        <li><a href="<?php echo get_option('social_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                    <?php endif; if (get_option('social_youtube')) : ?>
                        <li><a href="<?php echo get_option('social_youtube'); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <?php endif; if (get_option('social_yelp')) : ?>
                        <li><a href="<?php echo get_option('social_yelp'); ?>" target="_blank"><i class="fa fa-yelp"></i></a></li>
                    <?php endif; if (get_option('social_houzz')) : ?>
                        <li><a href="<?php echo get_option('social_houzz'); ?>" target="_blank"><i class="fa fa-houzz"></i></a></li>
                    <?php endif; if (get_option('social_rss')) : ?>
                        <li><a href="<?php echo get_option('social_rss'); ?>" target="_blank"><i class="fa fa-rss"></i></a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div><!-- copybar -->

</footer><!-- #site-footer -->

<?php
    wp_footer();
    // Load in footer code snippets only if theme option is in use
    if ( get_option('snippets_footer') ) :
        echo get_option('snippets_footer');
    endif;
    // Load in conversion tracking only if theme option is in use and only on the specified page
    if ( get_option('conversion_page') && get_option('conversion_code') ) :
        if ( is_page(get_option('conversion_page')) ) :
            echo get_option('conversion_code');
        endif;
    endif;
?>

</body>
</html>
