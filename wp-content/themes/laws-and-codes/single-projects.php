<?php get_header(); ?>

<div class="content">
    <div class="c-single-project">
    <div class="c-single-project__header">
        <h2 class="c-single-project__title"><?php echo get_the_title(); ?></h2>
    </div>

    <h4 class="c-single-project__details-small-title">Details</h4>
    <div class="c-single-project__details">
        <div class="c-single-project__details-title">
            <div><?php echo the_content(); ?></div>
        </div>

        <div class="c-single-project__meta-info">
            <?php 
                $link = get_field('website_link');
                $cat = get_the_category();
                $catName = $cat[0]->cat_name;
            ?>

            <ul class="c-single-project__details-list">
                <li>Category:<span><?php echo $catName;?> </span></li>
                <li>Client:<span><?php echo get_the_title(); ?></span></li>
                <li>Website: <span><a target="_blank" href="<?php echo $link; ?>"><?php echo $link; ?></span></a></li>
            </ul>

            <?php if( have_rows('social_media_icons') ): ?>
    <ul class="c-single-project__social-media-icons">
    <?php while( have_rows('social_media_icons') ) : the_row();
        $icon = get_sub_field('social_media_icon');
        $link = get_sub_field('social_media_link'); 
    ?>
        <li class="c-single-project__social-media-icon">
            <a target="_blank" href="<?php echo $link; ?>">
                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
            </a>
        </li>

    <?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>
        </div> 
    </div>

    <section class="c-single-project__site-images">
    <?php if( have_rows('site_images') ): ?>

    <ul class="c-single-project__images">
    <?php while( have_rows('site_images') ) : the_row(); ?>
        <?php 
            $image = get_sub_field('site_image');
        ?>
        <li class="c-single-project__image">
            <figure>
                <img title="<?php echo $image['title']; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
        </li>

    <?php endwhile; ?>
    </ul>

<?php else :
    // Do something...
endif; ?>
    </section>


    </div>



</div>
</div>

<?php get_footer(); ?>