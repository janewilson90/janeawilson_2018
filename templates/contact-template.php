<?php
/*
Template Name: Contact template
*/
get_header();
?>

<section class="row">
  <div class="container">
    <div class="col-8">
      <h1 id="page-title screen-reader-text">Contact me</h1>
      <h2>UX Analyst <span class="fw500">- Waracle ltd</span></h2>
    </div>
    <div class="col-4">
      <?php 
        if ( has_post_thumbnail() ) {
          the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']);
        }  
      ?>
    </div>
  </div>
</section>

<section class="row">
    <div class="container">
        <div class="col-12">
            <?php the_field('strapline'); ?>
        </div>
    </div>
</section>

<section class="row">
  <div class="container">
    <div class="col-6">
        <?php
        // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <div class="entry-content-page">
                    <?php the_content(); ?> <!-- Page Content -->
                </div><!-- .entry-content-page -->

            <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>
    </div>
    <div class="col-6">
        <ul class="contact-links">
		    <li>
				<a href="https://www.linkedin.com/in/janewilson90/" target="_blank">
					<img src="<?php echo get_template_directory_uri();?>/assets/icons/linkedin.png" alt="Linkedin icon"/>
                    LinkedIn
				</a>
			</li>
			<li>
				<a href="https://twitter.com/janewilson90" target="_blank">
					<img src="<?php echo get_template_directory_uri();?>/assets/icons/twitter.png" alt="Twitter icon"/>
                    @janewilson90
				</a>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri();?>/assets/icons/ember.png" alt="Email icon"/>
                mail-AT-janeawilson.co.uk
			</li>
		</ul>
    </div>
  </div>
</section>


<?php get_footer(); ?>

