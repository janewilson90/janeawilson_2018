<?php
/*
Template Name: Static Home
*/
get_header();
?>

<section class="row">
  <div class="container">
    <div class="col-8">
      <h1 id="page-title">Hey, I'm Jane</h1>
      <h2><span class="fw500">UX Analyst specialising in</span> <span id="js-swap">app optimisation, UX analysis, digital transformation</span></h2>
    </div>
    <div class="col-4">
      <img src=""
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
      <p>put some things in here - perth archery, auchtermuchty dental, winters computing, variety of waracle projects (no names).</p>
    </div>
  </div>
</section>


<?php get_footer(); ?>

