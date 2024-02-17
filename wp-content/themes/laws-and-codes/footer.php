<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package laws-and-codes
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

    <div class="site-footer__sm">
      <a href="<?php echo get_site_url(); ?>">
      <img class="site-footer__logo" src="<?php echo get_template_directory_uri(); ?>/img/laws-codes-logo.png"" alt="Laws & Codes logo">
      </a>
      <p class="site-footer__desc">We transform visions into immersive online experiences, ensuring your brand stands out in the ever-evolving digital landscape.</p>
      <?php if( have_rows('social_media_icons', 'option') ): ?>

   <ul class="site-footer__social-media-icons">
    <?php while( have_rows('social_media_icons','option') ) : the_row();

        $cta = get_sub_field('social_media_cta');
        $icon = get_sub_field('social_media_icon');
        ?>
        <li class="site-footer__social-media">
          <a target="_blank" href="<?php echo $cta; ?>">
            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'];?>">
          </a>
        </li>

    <?php // End loop.
    endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif;
?>
    </div>

    <div class="site-footer__nav">
    <nav id="footer-navigation" class="footer-navigation">
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
    </div>

    <div class="site-footer__contact">
      <p class="site-footer__newsletter-desc">Sign up for our newsletter. Stay tuned for any updates, promotions, & discounts!</p>
      <div class="site-footer__newsletter-form">
        <?php echo do_shortcode('[mc4wp_form id=80]'); ?>
      </div>
    </div>
			
		</div><!-- .site-info -->
    <div class="site-footer__meta-info">
      <?php 
        $copyright = get_field('footer_copyright', 'option');
      ?>
      <p class="site-footer__copyright">
        <?php echo $copyright; ?>
      </p>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php 
  $formTitle = get_field('form_title', 'option');
  $formContent = get_field('form_content', 'option');
;?>

<div id="modal" class="c-popup-modal">
  <div class="c-popup-modal__header">
  <svg class="c-popup-modal__close" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"/></svg>
  <h2 class="c-popup-modal__title"><?php echo $formTitle; ?></h2>
    <p class="c-popup-modal__content"><?php echo $formContent; ?></p>  
</div>
  <div class="c-newsletter-popup__form">
    <div class="c-popup-modal__form">
    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"] '); ?>
    </div>
  </div>
	</div>

<?php wp_footer(); ?>

</body>
</html>
