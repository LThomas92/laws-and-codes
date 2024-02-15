<?php get_header(); ?>

<div class="content">
    <div class="c-page-contact-us">
        <div class="c-page-contact-us__content">
            <?php $contactTitle = get_field('contact_us_title'); ?>
            <div class="c-page-contact-us__text">
                <h1><?php echo $contactTitle; ?></h1>
            </div>

            <div class="c-page-contact-us__form">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>