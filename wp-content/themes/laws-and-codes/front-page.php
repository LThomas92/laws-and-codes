<?php get_header(); ?>

<div class="content">

    <section class="home-header">
        <div class="home-header__content">
          <h1 class="home-header__title">We are <span>Coding Digital Legacies</span></h1>
          <a class="home-header__cta" href="">Explore Now</a>
        </div>
        <div>2</div>
    </section>

    <section class="our-services">
        <h2 class="our-services__title">Our Services</h2>
        <div class="our-services__container">

        <?php if( have_rows('our_services') ):
    while( have_rows('our_services') ) : the_row();

        // Load sub field value.
        $icon = get_sub_field('service_icon');
        $title = get_sub_field('service_title');
        $desc = get_sub_field('service_description'); ?>
       
        <div class="our-services__service">
        <img class="our-services__service-icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
        <h4 class="our-services__service-title"><?php echo $title; ?></h4>
        <p class="our-services__service-desc"><?php echo $desc; ?></p>
    </div>

    <?php // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif; ?>
    </section>

    <section class="c-about-us">
        <?php $aboutTitle = get_field('about_title'); 
              $aboutDesc = get_field('about_description');
              $aboutImg = get_field('about_image');
        ?>
        <div class="c-about-us__content">
            <p class="c-about-us__heading">About Us</p>
            <h4 class="c-about-us__title">We're <span>client centric</span> Web Development Agency</h4>
            <p class="c-about-us__desc"><?php echo $aboutDesc; ?></p>
        </div>
        <div class="c-about-us__image">
            <figure>
                <img src="<?php echo $aboutImg['url']; ?>" alt="<?php echo $aboutImg['alt']; ?>">
            </figure>
        </div>
    </section>

</div>

<?php get_footer(); ?>