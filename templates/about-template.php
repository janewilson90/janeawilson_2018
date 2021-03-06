<?php
/*
Template Name: About template
*/
get_header();
?>

<section class="row">
  <div class="container">
    <div class="col-8">
      <h1 id="page-title screen-reader-text">About me</h1>
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

<section class="row dark">
    <div class="container">
        <div class="col-12">
            <h2>My CV</h2>
        </div>

        <div class="row">
            <div class="col-6 cv-elements">
                <?php
                    if( have_rows('cv_elements') ):
                        while ( have_rows('cv_elements') ) : the_row(); ?>
                            <div class="cv-element">
                                <h3><?php the_sub_field('timeframe'); ?></h3>
                                <p><?php the_sub_field('position'); ?> - <?php the_sub_field('company');?></p>
                            </div>
                        
                        <?php endwhile;

                    else :

                        // no rows found
                        echo("no jobs");

                    endif;
                ?>
            </div>

            <div class="col-6 education">
                <?php
                    if( have_rows('education_element') ):
                        while ( have_rows('education_element') ) : the_row(); ?>
                            <div class="education-element"> 
                                <h3><?php the_sub_field('degree'); ?></h3>
                                <p><?php the_sub_field('institution'); ?> - <?php the_sub_field('year');?></p>
                            </div>
                        
                        <?php endwhile;

                    else :

                        // no rows found
                        echo("no education");

                    endif;
                ?>
            </div>

        </div>

        <div class="row">
            <div class="center">
            <a target="_blank" href="https://janeawilson.co.uk/wp-content/uploads/2018/05/JaneWilsonCV_2018.pdf" class="button button-secondary">Download</a>
            </div>
        </div>

    </div>
</section>

<section class="row">
  <div class="container">
    <div class="col-12">
      <h2>Hobbies & Interests</h2>
      <small>Rebuilding this website 1000 times apparently</small>
      <p>some things here - fencing, gin, walking, sims3, tv shows about serial killers</p>
    </div>
  </div>
</section>


<?php get_footer(); ?>

