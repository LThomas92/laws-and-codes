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
                $date = get_field('date');
                $link = get_field('website_link');

            ?>

            <ul class="c-single-project__details-list">
                <li>Date: <span><?php echo $date; ?></span></li>
                <li>Category: </li>
                <li>Client: <span><?php echo get_the_title(); ?></span></li>
                <li>Website: <span><a target="_blank" href="<?php echo $link; ?>"><?php echo $link; ?></span></a></li>
            </ul>

            <?php if( have_rows('social_media_icons') ): ?>
    <ul class="c-single-project__social-media-icons">
    <?php while( have_rows('social_media_icons') ) : the_row();
        $icon = get_sub_field('social_media_icon');
        $link = get_sub_field('social_media_link'); 
    ?>
        <li class="c-single-project__social-media-icon">
            <a href="<?php echo $link; ?>">
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
    <?php if( have_rows('repeater_field_name') ): ?>

    <ul class="c-single-project__images">
    <?php while( have_rows('site_iamges') ) : the_row(); ?>
        <?php 
            $image = get_field('site_image');
        ?>
        <li class="c-single-project__site-image">
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

    <div class="c-single-project__fun-facts">
        <?php 
            $funFactTitle = get_field('fun_facts_title');
        ?>
        <h4 class="c-single-project__fun-facts-title"><?php echo $funFactTitle; ?></h4>
        <div class="c-single-project__fun-facts-content">
        <?php if( have_rows('fun_facts') ): ?>
        <ul class="c-single-project__fun-facts">
        <?php while( have_rows('fun_facts') ) : the_row();
        $funFact = get_sub_field('fun_fact'); ?>
            <li><?php echo $funFact; ?></li>

    <?php endwhile; ?>
    </ul>
<?php 
else :
    // Do something...
endif; ?>
        </div>
    </div>



</div>
</div>

<?php get_footer(); ?>