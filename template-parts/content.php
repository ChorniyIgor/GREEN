<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GETG
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="getg_horizontal_line"></div>
        <div class="post-item container border_left border_right">
                <div class="post_image"><?php the_post_thumbnail('singlepost-thumb'); ?></div>
                <div class="post_information">
                    <?php echo the_title( '<h2 class="entry-title post_title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                    <p class="post_description"> <?php echo get_field('short_description');?></p>
                    <a href="<?php the_permalink();?>" class="site-btn" style="cursor: pointer;">View  Details</a>
                </div>
        </div>
</article>
