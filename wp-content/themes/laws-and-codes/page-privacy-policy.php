<?php get_header(); ?>

<div class="content">

<div class="c-page-privacy-policy">
    <?php $date = get_field('date'); ?>
    <div class="c-page-privacy-policy__title">
        <h1><?php the_title(); ?></h1>
        <p class="c-page-privacy-policy__date"><span>Updated on:</span><?php echo $date; ?></p>
    </div>
    <div class="c-page-privacy-policy__content">
    <?php the_content(); ?>
    </div>
</div>

</div>

<?php get_footer(); ?>