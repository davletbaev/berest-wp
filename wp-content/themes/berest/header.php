<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package insur-asia
 */

$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light align-items-stretch">
			<div class="container d-flex justify-content-between align-items-stretch">
				<?php echo get_custom_logo(); ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<svg class="navbar-toggler-icon">
						<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/icons.svg#menu"></use>
					</svg>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarNav">
					<button class="navbar-toggler navbar-toggler--close d-lg-none d-xl-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<svg class="navbar-toggler-icon--close">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/icons.svg#plus"></use>
						</svg>
					</button>

					<?php
					wp_nav_menu( [
						'theme_location' => 'menu-1',
						'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
						'container'      => false,
						'menu'           => '',
						'menu_class'     => 'navbar-nav ml-auto',
						'add_li_class'   => 'nav-item'
					 ] );
					?>
				</div>
			</div>
		</nav>
	</header>

	<main class="main">
