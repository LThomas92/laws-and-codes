<?php get_header(); ?>

<div class="content">

    <section class="home-header">
        <?php 
            $headerDesc = get_field('header_description');
            $headerCTA = get_field('header_cta');
            $ourWorkCTA = get_field('our_work');
            $headerImage = get_field('header_image');
        ?>
        <div class="home-header__content">
          <h1 class="home-header__title">We are<span>Coding Digital Legacies</span></h1>
          <p class="home-header__desc"><?php echo $headerDesc; ?></p>
          <div class="home-header__ctas">
          <a class="home-header__cta" href="<?php echo $headerCTA['url']; ?>"><?php echo $headerCTA['title']; ?></a>
          <a class="home-header__cta home-header__cta--nofill" href="<?php echo $ourWorkCTA['url']; ?>"><?php echo $ourWorkCTA['title']; ?></a>
          </div>
        </div>
        <div class="home-header__image">
                <figure class="home-header__image">
                    <img src="<?php echo $headerImage['url']; ?>" alt="<?php echo $headerImage['alt']; ?>">
                </figure>
        </div>

        <div class="home-header__stats">
    <ul class="home-header__stats-list">

        <li class="home-header__stats-list-item">
            <p class="home-header__stats-list-item-title">Years of Experience</p>
            <p akhi="6" class="value home-header__stats-list-item-num">0</p>
        </li>


        <li class="home-header__stats-list-item">
            <p class="home-header__stats-list-item-title">Digital Legacies Started</p>
            <p akhi="14" class="value home-header__stats-list-item-num">0</p>
        </li>


        <li class="home-header__stats-list-item">
            <p class="home-header__stats-list-item-title">Client Satisfaction</p>
            <p akhi="100" class="value home-header__stats-list-item-num">0</p>
        </li>

    </ul>
        </div>
    </section>

    <section class="our-services gutenberg-styles">
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

    <section class="c-about-us gutenberg-styles">
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