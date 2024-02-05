<?php get_header(); ?>

<div class="content">

<div class="c-our-work">

<div class="c-our-work__header">
    <h1 class="c-our-work__title">Our<span>Work</span></h1>
</div>

<section class="c-our-work__content">
<?php $args = array(
    'post_type' => 'projects',
    'posts_per_page' => -1
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
    <ul class="c-our-work__projects">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li class="c-our-work__project">
        <a href="<?php echo get_the_permalink(); ?>">
        <figure>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </figure>
        <h2 class="c-our-work__project-title"><?php the_title(); ?></h2>
        </a>
    </li>
    <?php endwhile; ?>
    </ul>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>
    
</section>
    
</div>

</div>

<?php get_footer(); ?>