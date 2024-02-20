<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Blog</h1>
    <div class="page-banner__intro">
      <p>Keep up some latest news.</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php 
  while(have_posts()) {
   the_post();?>

<div class= "post-item">
<div class="generic-content">
  <?php the_content(); ?>
  
  </div>
  </div>
  <?php }
?>
</div>

<?php get_footer();?>