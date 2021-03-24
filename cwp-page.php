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
                <p>Family Medicine<br>
                  Pediatrics<br>
                  Dermatology<br>
                  Urgent Care<br>
                  Sexual Health</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
              <img src="http://doctormenow.flywheelsites.com/wp-content/uploads/test-tubes-icon-1.png" alt="icon of three test tubes in a holder">
              <h3>LAB TESTING</h3>
              <div class="content content-middle">
                <p>COVID-19 Testing<br>
                  Drug Testing<br>
                  STD Testing<br>
                  Hormone Level Check<br>
                  Blood Work</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
              <img src="http://doctormenow.flywheelsites.com/wp-content/uploads/perscription-icon.png" alt="icon of a prescription paper">
              <h3>PERSCRIPTIONS AND TREATMENTS</h3>
              <div class="content">
                <p>New Prescriptions<br>
                  Prescription Refills<br>
                  Hormone Replacement<br>
                  Therapy<br>
                  Erectile Dysfunction Treatment</p>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- #ways-we-help -->
      <section id="three-step">
        <div class="container text-center">
          <h2>Using Doctor<span class="green">Me</span>Now is as easy as 1-2-3</h2>
          <p class="subtext">Doctors are ready to help you get the care you need,<br>
            anywhere and anytime in the United States</p>
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-4">
              <h3>STEP 1</h3>
              <div class="content">
                <h4>REGISTER NOW</h4>
                <p>Schedule and pay for your appointment.</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <h3>STEP 2</h3>
              <div class="content content-middle">
                <h4>REQUEST A VISIT</h4>
                <p>Choose a time/day that is convenient for you. Our physicians are available 24/7. Same day appointments
                  available.</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <h3>STEP 3</h3>
              <div class="content">
                <h4>FEEL BETTER</h4>
                <p>Our healthcare provider will reach out to you.</p>
              </div>
            </div>
          </div>
          <div class="text-center cta">
            <a href="http://doctormenow.flywheelsites.com/how-it-works/" class="btn-1">BOOK AN APPOINTMENT</a>
          </div>
        </div>
      </section> <!-- #three-steps -->
    </div><!-- .entry-content -->
  </article><!-- #post-## -->
</main><!-- #main -->
<?php
get_footer();