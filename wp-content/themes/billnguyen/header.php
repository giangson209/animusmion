<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package billnguyen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="<?php the_field('favicon','option'); ?>" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" title="" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
	<link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/style.css?v=<?= time(); ?>">
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/lib/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<div class="header-main">
        <div class="container">
            <div class="content-header">
                <div class="logo"><a href="/"><?php the_field('name', 'option'); ?></a></div>
                <div class="h-menu">
                    <div class="head-menu">
                        <a href="javascript:void(0)" class="clc-menu">
                            <span>MENU</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.33203 8L12.6654 8" stroke="#181818" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                                <path d="M8 3.3335L8 12.6668" stroke="#181818" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <div class="nav-menu">
                            <?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>