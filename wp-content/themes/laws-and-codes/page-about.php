<?php get_header(); ?>

<div class="content">
    <div class="c-about-page">
        <div class="c-about-page__header">
            <h5 class="c-about-page__small-title"><?php echo get_the_title(); ?></h5>
            <h2 class="c-about-page__title">we are a <span>web design agency</span> for digital legacies.</h2>
        </div>

        <section class="c-about-page__image-section">
        <?php if( have_rows('about_images') ): ?>
            <ul class="c-about-page__image-slides">
    <?php while( have_rows('about_images') ) : the_row(); ?>
        <?php $image = get_sub_field('image'); ?>
               <li class="c-about-page__image-slide">
               <figure>
                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
               </figure>
           </li>
    <?php endwhile; ?>
    </ul>

<?php else :

endif; ?>
        </section>

        <section class="c-about-page__description">
            <?php $aboutDescTitle = get_field('about_description_title');
                  $aboutDescContent = get_field('about_description');
            ?>
            <h2 class="c-about-page__description-title"><?php echo $aboutDescTitle;?></h2>
            <div class="c-about-page__content"><?php echo $aboutDescContent; ?></div>
        </section>


    </div>
</div>

<?php get_footer(); ?>