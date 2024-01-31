<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package laws-and-codes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<div class="dark-bg"></div>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'laws-and-codes' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<a href="<?php echo get_site_url(); ?>">
		<img title="Laws & Codes Logo" class="site-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/laws-codes-logo-blue.png" alt="Laws & Codes Logo"/>
		</a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

			<div class="quote-search-section">
			<button class="quote-btn">Get a quote</button>
			<svg class="search-btn" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#070945;}
</style>
<path class="st0" d="M23.8,21.6l-6.2-6.2c1.2-1.6,1.9-3.6,1.9-5.7c0-5.4-4.4-9.7-9.7-9.7C4.4,0,0,4.4,0,9.7c0,5.4,4.4,9.7,9.7,9.7
	c2,0,3.9-0.6,5.5-1.7l6.2,6.2C21.5,24,23.8,21.6,23.8,21.6z M2.9,9.7c0-3.8,3.1-6.9,6.9-6.9s6.9,3.1,6.9,6.9s-3.1,6.9-6.9,6.9
	C5.9,16.6,2.9,13.5,2.9,9.7z"/>
</svg>
			</div>
	</header><!-- #masthead -->

  <div class="mobile-header">
    <a href="<?php echo site_url(); ?>">
    <img title="Laws & Codes Logo" class="mobile-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/mobile-logo.png" alt="Laws & Codes Logo"/>
    </a>

    <div id="nav-icon3" class="mobile-header__menu-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>
    
  </div>

  <div class="mobile-menu-overlay">
    MOBILE MENU
  </div>

  <div class="overlay-menu">
<img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close Icon"/>
  <div class="container-margins">
<div class="header-search-form">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'What are you looking for?', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" name="submit" value="submit"></button>
</form>
    </div> <!-- header search form -->
    </div> <!-- container margins -->
</div> <!-- overlay menu -->

