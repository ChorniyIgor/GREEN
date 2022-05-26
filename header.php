<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GETG
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">

	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53F2JC9');</script>
<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53F2JC9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header>
	<div id="main_site_header" class="site-header">
        <div class="container border_left--header border_right--header">
            <div class="site-header__logo">
                 <?php the_custom_logo();  ?>
            </div>
            <ul class="site-header__phones">
                <li class="contact_phone_usa"><span>usa</span><a href="tel:<?php echo get_theme_mod('contact_phone_usa');?>"><?php echo get_theme_mod('contact_phone_usa');?></a></li>
                <li class="contact_phone_intl"><span>intl.</span><a href="tel:<?php echo get_theme_mod('contact_phone_intl');?>"><?php echo get_theme_mod('contact_phone_intl');?></a></li>
            </ul>
            <ul class="site-header__emails">
                <li class="contact_email_1"><a href="mailto:<?php echo get_theme_mod('contact_email_1');?>"><?php echo get_theme_mod('contact_email_1');?></a></li>
                <li class="contact_email_2"><a href="mailto:<?php echo get_theme_mod('contact_email_2');?>"><?php echo get_theme_mod('contact_email_2');?></a></li>
            </ul>
            <div class="site-header__quote_btn">
                <a class="site-button" href="<?php get_site_url();?>/contact-us/">Get a Quote </a>
            </div>
            <div class="site-header__menu_section">
                <div id="main_menu_toggle" class="">
                    <span>MENU</span>
                    <div class="hamburger hamburger--spin">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>


        <nav id="site-navigation" class="main-navigation  main_menu">
            <div class="container">
                <div class="main_menu__first_level border_right">
                    <span class="main_menu__mobile_title" id="mobile_title__first_level">MAIN MENU</span>
                    <ul>
                    </ul>
                    <div class="main_menu__first_level__call_section">
                        <h4>Call Centers</h4>
                        <ul class="main_menu__first_level__call_section__phones">
                            <li class="contact_phone_usa"><span>usa</span><a href="tel:<?php echo get_theme_mod('contact_phone_usa');?>"><?php echo get_theme_mod('contact_phone_usa');?></a></li>
                            <li class="contact_phone_intl"><span>intl.</span><a href="tel:<?php echo get_theme_mod('contact_phone_intl');?>"><?php echo get_theme_mod('contact_phone_intl');?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="main_menu__second_level border_right">
                    <span class="main_menu__mobile_title" id="mobile_title__second_level"></span>
                    <button class="main_menu__back_btn_mobile" id="second_level_back_btn">< Back</button>
                    <ul>
                    </ul>
                </div>
                <div class="main_menu__third_level">
                    <button class="main_menu__back_btn_mobile" id="third_level_back_btn">< Back</button>
                    <ul>

                                            </ul>
                                        </div>
                                    </div>
                                </nav>
        <div class="breadcrumbs-container border_left--header border_right--header">
            <?php the_breadcrumb();?>
        </div>
                           </header>
