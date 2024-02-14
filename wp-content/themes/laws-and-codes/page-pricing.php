<?php get_header(); ?>

<div class="content">

<div class="c-page-pricing">
    <div class="c-page-pricing__header">
        <h1>Pricing</h1>
    </div>

<div class="c-page-pricing__why-section">
    <div class="c-page-pricing__why-content">
        <?php 
            $whyBigTitle = get_field('why_section_big_title');
            $companyMissionDesc = get_field('company_mission_desc');
            $companyVisionDesc = get_field('company_vision_desc');
            $learnMoreCTA = get_field('learn_more_cta');
        ?>
        <h5>Why Choose Us</h5>
        <h3><?php echo $whyBigTitle; ?></h3>

        <div class="c-page-pricing__company-mission">
            <h4>Company Mission</h4>
            <p><?php echo $companyMissionDesc; ?></p>
        </div>

        <div class="c-page-pricing__company-vision">
            <h4>Company Vision</h4>
            <p><?php echo $companyVisionDesc; ?></p>
        </div>

        <a class="c-page-pricing__learn-cta" target="_blank" href="<?php echo $learnMoreCTA['url']; ?>"><?php echo $learnMoreCTA['title']; ?></a>

    </div>

    <?php if( have_rows('pricing_highlights') ): ?>

        <ul class="c-page-pricing__highlights">
    <?php while( have_rows('pricing_highlights') ) : the_row(); ?>
        <?php $icon = get_sub_field('icon');
              $title = get_sub_field('pricing_highlight_title');
              $desc = get_sub_field('pricing_highlight_description'); 
        ?>
              <li class="c-page-pricing__highlight">
                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                <h4><?php echo $title; ?></h4>
                <p><?php echo $desc; ?></p>
              </li>

    <?php endwhile; ?>
    </ul>

<?php else :
endif; ?>
</div>

<div class="c-page-pricing__package-section gutenberg-styles">
    <div class="c-page-pricing__package-header">
        <?php 
            $packageTitle = get_field('package_title');
        ?>
        <h5>Pricing Package</h5>
        <h2><?php echo $packageTitle; ?></h2>
    </div>

    <?php if( have_rows('pricing_packages') ): ?>

    <ul class="c-page-pricing__packages">
    <?php while( have_rows('pricing_packages') ) : the_row();
        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $price = get_sub_field('price');
    ?>    
        
        <li class="c-page-pricing__package">
            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
            <h5><?php echo $title; ?></h4>
            <h3><span>Starting at</span>$<?php echo $price; ?></h3>

        <?php if( have_rows('features') ): ?>
        <ul class="c-page-pricing__package-features">
        <?php while( have_rows('features') ) : the_row();
        $feature = get_sub_field('feature'); ?>
        <li class="c-page-pricing__package-feature">
            <?php echo $feature; ?>
        </li>

<?php endwhile; ?>
    </ul>

<?php 
else :
endif; ?>

        </li>

<?php 
    endwhile; ?>
</ul>

<?php 
else :
    // Do something...
endif; ?>


</div>




</div>
    
</div>

<?php get_footer(); ?>