<?php
/*
Template Name: Static Home
*/
get_header();
?>

<section class="row hero-unit">
  <div class="container">
    <div class="col-8">
      <h1 id="page-title screen-reader-text">Hey, I'm Jane</h1>
      <h2><span class="fw500">UX Analyst specialising in</span> <span id="js-swap">app optimisation, UX analysis, digital transformation</span></h2>
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
      <h2>About me</h2>
      <?php the_field('content'); ?>
    </div>
    <div class="center">
      <a href="#" class="button button-secondary">Find out more</a>
    </div>
  </div>
</section>

<section class="row">
  <div class="container">
    <div class="col-12">
      <h2>Portfolio</h2>
      <p>At some point - I'll get around to this</p>
    </div>
  </div>
</section>


<?php get_footer(); ?>

