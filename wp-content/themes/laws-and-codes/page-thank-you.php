<?php get_header(); ?>

<div class="content">
<div class="c-page-thank-you__content">
  <?php 
    $title = get_field('title');
    $content = get_field('content');
    $icon = get_field('icon');
    $problemCTA = get_field('problem_cta');
  ?>
  <h1 class="c-page-thank-you__title"><?php echo $title; ?></h1>

  <div class="c-page-thank-you__icon">
    <img src="<?php echo $icon['url']; ?>" alt="Check Mark">
  </div>

  <div class="c-page-thank-you__content">
    <?php echo $content; ?>
  </div>

  <a class="c-page-thank-you__cta" target="_blank" href="<?php echo site_url(); ?>">Back to Home</a>
  <a class="c-page-thank-you__cta-problem" href="<?php echo $problemCTA['url']; ?>"><?php echo $problemCTA['title']; ?></a>
</div>



  
</div>


<?php get_footer(); ?>