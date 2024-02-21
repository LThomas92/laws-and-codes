<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package laws-and-codes
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="content">

		<section class="error-404 not-found">
			<?php $image = get_field('image','option'); ?>
			<div class="error-404__content">
			<figure>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</figure>
        <a class="error-404__cta" href="<?php echo site_url(); ?>">Back to Home</a>
      </div>
		</section><!-- .error-404 -->

		</div>
	</main><!-- #main -->

<?php
get_footer();
