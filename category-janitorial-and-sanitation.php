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
        <div class="getg_horizontal_line"></div>
        <div class="container border_left border_right">
            <div class="main_category">
                <?php
                $currCat = get_queried_object();

                $childCategories = get_categories(
                    array( 'parent' => $currCat->cat_ID )
                );

                foreach ($childCategories as $catItem){
                    $url = get_category_link($catItem->cat_ID);
                    $name = $catItem->name;
                    echo "
                    <a  href='".$url."' class='main_category__item'>
                        <h3>".$name."</h3>
                        <span>".$currCat->name."</span>
                        <div class='main_category__item__img'>
                            <img src='". (get_field('small_category_image', $catItem) ? get_field('small_category_image', $catItem) : get_site_url().'/wp-content/uploads/2021/01/Cleaning-2.jpg')."' alt='image ".$name."'>
                        </div>
                    </a>
                    ";
                }
                ?>
            </div>
        </div>

    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
