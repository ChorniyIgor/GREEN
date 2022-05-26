<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package GETG
 */

get_header();
?>
    <style>
        .breadcrumbs-container{
            display: none;
        }
    </style>

	<main id="primary" class="site-main">

		<section class="error-404 not-found" style="background: #f1ecec;">
			<header class="page-header container" style=" min-height: 100vh; display: flex; flex-direction: column;  justify-content: center; align-items: center; color: #222629;">
                <img src="https://getg.me/wp-content/uploads/2021/02/404.png" alt="404" style="max-height: 40vh; margin-bottom: 3em; margin-top: 140px;">
                <h1 class="page-title" style="font-size: 2em; margin-bottom: 1em;"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'getg' ); ?></h1>
                <a class="site-button" href="<?php echo get_site_url(); ?>" style="margin-bottom: 50px;">Go to Main Page</a>
			</header><!-- .page-header -->

			<div class="page-content">





			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
