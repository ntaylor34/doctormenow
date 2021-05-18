<?php
/**
* Template Name: Care We Provide Page
*
* @package LRM
* 
*/
get_header(); ?>
<main id="main" role="main">
  <div class="divider"></div>
  <div class='container'>
    <?php echo "<div class=\"breadcrumbs\">";
			get_breadcrumbs($post);
			echo "</div>"; ?>
  </div>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
      <section id="ways-we-help">
        <div class="container text-center">
          <h2>What Are The Ways We Can Help You And Your Family?</h2>
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-duration="800">
              <img src="http://doctormenow.flywheelsites.com/wp-content/uploads/stethoscope-icon.png" alt="icon of a stethoscope">
              <h3>GENERAL MEDICAL</h3>
              <div class="content">
                <p>
                  <a href="http://development.linkrightmedia.com/doctormenow/family-care-practitioner/">Family Medicine</a><br>
                  <a href="http://development.linkrightmedia.com/doctormenow/pediatrics/">Pediatrics</a><br>
                  <a href="http://development.linkrightmedia.com/doctormenow/dermatology/">Dermatology</a><br>
                  <a href="http://development.linkrightmedia.com/doctormenow/urgent-care/">Urgent Care</a><br>
                  <a href="http://development.linkrightmedia.com/doctormenow/sexual-health/">Sexual Health</a></p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
              <img src="http://doctormenow.flywheelsites.com/wp-content/uploads/test-tubes-icon-1.png" alt="icon of three test tubes in a holder">
              <h3>LAB TESTING</h3>
              <div class="content content-middle">
                <p>
                  <a href="http://development.linkrightmedia.com/doctormenow/covid-19-testing/">COVID-19 Testing</a><br>
                  <a href="http://development.linkrightmedia.com/doctormenow/drug-testing/">Drug Testing</a><br>
                  <a href="http://development.linkrightmedia.com/doctormenow/std-testing/">STD Testing</a><br>
                  Hormone Level Check<br>
                  Blood Work</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
              <img src="http://doctormenow.flywheelsites.com/wp-content/uploads/perscription-icon.png" alt="icon of a prescription paper">
              <h3>PERSCRIPTIONS AND TREATMENTS</h3>
              <div class="content">
                <p>New Prescriptions<br>
                  <a href="http://development.linkrightmedia.com/doctormenow/prescription-refills/">Prescription Refills</a><br>
                  <a href="http://development.linkrightmedia.com/doctormenow/hormone-replacement-therapy/">Hormone Replacement Therapy</a><br>
                  Erectile Dysfunction Treatment</p>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- #ways-we-help -->
    </div><!-- .entry-content -->
  </article><!-- #post-## -->
</main><!-- #main -->
<?php
get_footer();