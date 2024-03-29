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

	<meta property="og:title" content="Laws & Codes" />
	<meta property="og:type" content="image/jpeg" />
	<meta property="og:url" content="https://www.lawscodes.com/" />
	<meta property="og:image" content="" />

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
			<img class="search-btn" title ="Search Icon" src="<?php echo get_template_directory_uri(); ?>/img/search.svg" alt="Search Icon">
			</div>
	</header><!-- #masthead -->

  <div class="mobile-header">

    <div id="nav-icon3" class="mobile-header__menu-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>

	<a href="<?php echo site_url(); ?>">
    <img title="Laws & Codes Logo" class="mobile-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/mobile-logo.png" alt="Laws & Codes Logo"/>
    </a>

	<img class="search-btn" title ="Search Icon" src="<?php echo get_template_directory_uri(); ?>/img/search.svg" alt="Search Icon">
    
  </div>

  <div class="mobile-menu-overlay">
	<div class="mobile-menu-overlay__container">
	<div class="mobile-menu-overlay__header">
	<img class="mobile-menu-overlay__close-icon" src="<?php echo get_template_directory_uri(); ?>/img/close-white.svg" alt="Close Icon"/>

	<a href="<?php echo site_url(); ?>">
    <img title="Laws & Codes Logo" class="mobile-menu-overlay__logo" src="<?php echo get_template_directory_uri(); ?>/img/lc-logo-white.png" alt="Laws & Codes Logo"/>
    </a>

	<img class="search-btn" title ="Search Icon" src="<?php echo get_template_directory_uri(); ?>/img/search-white.svg" alt="Search Icon">
	</div>
  <nav class="mobile-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			<?php 
				$mobileQuoteLink = get_field('quote_link', 'option');
			?>
			
				<a class="mobile-navigation__quote-btn" href="<?php echo $mobileQuoteLink['url']; ?>">Get Quote</a>

		</nav><!-- #site-navigation -->
		</div>
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

