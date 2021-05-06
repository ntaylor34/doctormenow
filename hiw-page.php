<?php
/**
* Template Name: How It Works Page
*
* @package LRM
* 
*/
get_header(); ?>
<main id="main" role="main">
  <div class='container'>
    <?php echo "<div class=\"breadcrumbs\">";
			get_breadcrumbs($post);
			echo "</div>"; ?>
  </div>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
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
            <a href="http://doctormenow.flywheelsites.com/how-it-works/" class="btn-1">SEE A DOCTOR</a>
          </div>
        </div>
      </section> <!-- #three-steps -->
      <section id="here-to-help">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-8">
              <div class="help-header">
                <h2>Doctor<span class="blue">Me</span>Now Is Here To Help</h2>
              </div>
              <div class="content">
                <p>We’re committed to providing you with the best online medical care possible 24/7. Call now to see how easy it is to get help.</p>
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <b>Medical</b>
                    <ul>
                      <li>Cough</li>
                      <li>Diarrhea</li>
                      <li>Fever</li>
                      <li>Headache</li>
                      <li>Nausea</li>
                      <li>Vomiting</li>
                      <li>Allergies / Hay Fever</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <b>Dermatology</b>
                    <ul>
                      <li>Acne</li>
                      <li>Rosacea</li>
                      <li>Cold Sores (HSV)</li>
                      <li>Poison Ivy</li>
                      <li>Spots</li>
                      <li>Moles</li>
                      <li>Rash</li>
                      <li>Psoriasis</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <b>Wellness & Prevention</b>
                    <ul>
                      <li>COVID, STD, & Drug Testing</li>
                      <li>Complete Allergy Testing</li>
                      <li>Order Lab Tests</li>
                      <li>Weight Loss</li>
                      <li>Anti-aging</li>
                      <li>Wrinkle Treatments</li>
                    </ul>
                  </div>
                </div>
                <div class="text-center">
                  <a href="http://doctormenow.flywheelsites.com/how-it-works/" class="btn-1">START NOW</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- #here-to-help -->
    </div><!-- .entry-content -->
  </article><!-- #post-## -->
</main><!-- #main -->
<div class="divider"></div>
<?php
get_footer();