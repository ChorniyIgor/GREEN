<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GETG
 */

get_header();

$queried_object = get_queried_object();
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;
$ACF_Cat_Name = $taxonomy . '_' . $term_id;

?>

	<main id="primary" class="site-main">
        <div class="getg_mainscreen" style="
        background: url(<?php echo get_field('category_image', $ACF_Cat_Name ) ? get_field('category_image', $ACF_Cat_Name ) : get_site_url().'/wp-content/uploads/2021/01/about_us.jpg'; ?>) no-repeat;
        background-size:cover;">
            <div class="container border_left border_right">
                <h1><span><?php single_cat_title(); ?></span></h1>
            </div>
        </div>
        <?php
        echo get_field('category_description', $ACF_Cat_Name ) ? '<div class="getg_horizontal_line"></div>' : "";
        ?>
        <div class="category_page__descr--container container border_left border_right">
            <p class="category_page__descr">
                <?php
                 echo get_field('category_description', $ACF_Cat_Name ) ? get_field('category_description', $ACF_Cat_Name ) : "";
                ?>
            </p>
        </div>

		<?php if ( have_posts() ) : ?>
            <div class="category_page">
			<?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', get_post_type() );

                endwhile; ?>
                <div class="getg_horizontal_line"></div>
			</div>

            <?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
