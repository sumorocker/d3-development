<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<!-- <nav class="navbar navbar-toggleable-md"> -->
		<div class="mobile-test">
		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>
				<div class='corner-logo'>
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
				</div>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js">
					$('#trigger').click(function() {
					        $(".corner-logo").toggleClass("bounce");
					        console.log('testing-1');
					    }
					});

				</script>
			<!-- <div class="burger-menu"> -->
			<input style="position:fixed" type="checkbox" id="menu-toggle"/>
			  <label style="position:fixed" id="trigger" for="menu-toggle"></label>
			  <label style="position:fixed" id="burger" for="menu-toggle"></label>
			<!-- </div>   -->
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						// 'container_class' => 'collapse navbar-collapse',
						'container'    => false,
						// 'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'menu',
					)
				); ?>
				
			</div>
		
			<!-- .container -->

		<!-- </nav> -->
		<!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
