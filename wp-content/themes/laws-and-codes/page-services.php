<?php get_header(); ?>

<div class="content">
    <div class="c-page-services">
        <?php 
            $headerTitle = get_field('header_title');
            $subTitle = get_field('sub_title');
        ?>
        <div class="c-page-services__header">
            <h5 class="c-page-services__header-title"><?php echo get_the_title(); ?></h5>
            <h1 class="c-page-services__title"><?php echo $headerTitle; ?></h1>
            <p class="c-page-services__sub-title"><?php echo $subTitle; ?></p>
            <button class="c-page-services__quote-cta">Get a quote</button>
        </div>


        <div class="c-page-services__stats-bar">
            <ul class="c-page-services__stats-list">
                <li class="c-page-services__stats-list-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/person-working.svg" alt="Person Working Icon">
                    <h5>Years of Experience</h5>
                    <p>6</p>
                </li>
                <li class="c-page-services__stats-list-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/computer-icon.svg" alt="Computer Icon">
                    <h5>Digital Legacies Started</h5>
                    <p>14</p>
                </li>
                <li class="c-page-services__stats-list-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/handshake-icon.svg" alt="Handshake Icon">
                    <h5>Client Satisfaction</h5>
                    <p>100</p>
                </li>
            </ul>
        </div>

        <section class="c-page-services__overview">
            <?php 
                $overviewImage = get_field('overview_image');
                $overViewTitle = get_field('overview_title');
                $overViewDesc = get_field('overview_description');
            ?>
            <div class="c-page-services__overview-content">
                <h5 class="c-page-services__overview-sm-title">Overview</h5>
                <h2 class="c-page-services__overview-title"><?php echo $overViewTitle; ?></h2>
                <div class="c-page-services__overview-desc">
                    <?php echo $overViewDesc; ?>
                </div>
            </div>

            <figure class="c-page-services__overview-img">
                <img title="<?php echo $overviewImage['title']; ?>" src="<?php echo $overviewImage['url']; ?>" alt="<?php echo $overviewImage['alt']; ?>">
            </figure>
          
        </section>

        <section class="c-page-services__service-section">
            SERVICES SECTION
        </section>


    </div>
</div>

<?php get_footer(); ?>