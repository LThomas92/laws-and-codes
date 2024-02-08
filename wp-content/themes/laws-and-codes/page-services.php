<?php get_header(); ?>

<div class="content">
    <div class="c-page-services">
        <div class="c-page-services__header">

        </div>

        <section class="c-page-services__description">
            <?php 
                $serviceTitle = get_field('services_title');
                $servicesSubDesc = get_field('services_sub_description');
                $serviceCTA = get_field('services_cta');
            ?>
            <div class="c-page-services__description-title">
                <h3><?php echo $serviceTitle; ?></h3>
                <p><?php echo $servicesSubDesc; ?></p>
                <a href="<?php echo $serviceCTA['url']; ?>"><?php echo $servicesCTA['title']; ?></a>
            </div>
            
            <div class="c-page-services__desc">
                <p></p>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>