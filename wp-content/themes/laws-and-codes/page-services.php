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
                    <p>100%</p>
                </li>
            </ul>
        </div>

        <section class="c-page-services__overview gutenberg-styles">
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
          <?php 
            $serviceHeaderDesc = get_field('service_header_desc'); 
            ?>
  
          <h2 class="c-page-services__service-big-title">Our Services</h2>
          <p class="c-page-services__service-small-desc"><?php echo $serviceHeaderDesc; ?></p>
        <?php if( have_rows('services_list') ): ?>
        <ul class="c-page-services__services">
    <?php while( have_rows('services_list') ) : the_row();
        $serviceIcon = get_sub_field('service_icon'); 
        $serviceTitle = get_sub_field('service_title');
        $serviceDesc = get_sub_field('service_desc');
        ?>
       <li class="c-page-services__service-item">
          <img src="<?php echo $serviceIcon['url']; ?>" alt="<?php echo $serviceIcon['alt']; ?>">
          <h4 class="c-page-services__service-title"><?php echo $serviceTitle; ?></h4>
          <p class="c-page-services__service-desc"><?php echo $serviceDesc; ?></p>
       </li>

   <?php endwhile; ?>
    </ul>

<?php else :
    // Do something...
endif; ?>
        </section>

        <section class="c-page-services__process-section gutenberg-styles">
          <?php 
            $processTitle = get_field('process_title');
            $processDesc = get_field('process_desc');
          ?>
          <div class="c-page-services__process-header">
            <h4><?php echo $processTitle; ?></h4>
            <p><?php echo $processDesc; ?></p>
          </div>

          <?php if( have_rows('process_list') ): ?>
        <ul class="c-page-services__process-list">
   <?php while( have_rows('process_list') ) : the_row(); ?>
        <?php $image = get_sub_field('image'); 
              $number = get_sub_field('number');
              $title = get_sub_field('title');
              $desc = get_sub_field('description')
        ?>
            <li class="c-page-services__process-item">
              <div class="c-page-services__process-item-image">

              <div class="c-page-services__process-item-number">
                <?php echo $number; ?>
              </div>
              <figure>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
              </figure>

              </div>

              <div class="c-page-services__process-item-content">
                <h4 class="c-page-services__process-item-title"><?php echo $title; ?></h4>
                <p class="c-page-services__process-item-desc"><?php echo $desc; ?></p>
              </div>

          </li>
    <?php endwhile;  ?>
    </ul>

<?php 
else :
endif; ?>

        </section>


    </div>
</div>

<?php get_footer(); ?>