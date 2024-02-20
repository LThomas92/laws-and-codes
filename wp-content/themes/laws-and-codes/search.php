<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package laws-and-codes
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="content">
		<div class="c-search-results container-margins">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'laws-and-codes' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->


			<ul class="c-search-results__list">
			<?php while ( have_posts() ) :
				the_post(); ?>

					<li class="c-search-results__list-item">
					<a href="<?php echo get_the_permalink(); ?>">
					<figure>
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""/>
					</figure>
					<h4 class="c-search-results__list-item-title"><?php the_title(); ?></h4>
					</a>
				</li>



			

			<?php endwhile; ?>
			</ul>


		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</div>
</div>

	</main><!-- #main -->

<?php get_footer(); ?>
