<?php get_header(); ?>

<div class="content">
<div class="c-page-thank-you__content">
  <?php 
    $title = get_field('title');
    $content = get_field('content');
    $icon = get_field('icon');
  ?>
  <h1 class="c-page-thank-you__title"><?php echo $title; ?></h1>

  <div class="c-page-thank-you__icon">
    <img src="" alt="Check Mark">
  </div>

  <div class="c-page-thank-you__content">
    <?php echo $content; ?>
  </div>

  <a target="_blank" href="<?php echo site_url(); ?>">Back to Home</a>
</div>



  
</div>


<?php get_footer(); ?>