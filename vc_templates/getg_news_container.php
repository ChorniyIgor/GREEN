<?php wp_enqueue_style( 'jquery-1.11.0'); ?>
<?php wp_enqueue_style( 'lightslider-style'); ?>
<?php wp_enqueue_script( 'lightslider-script');?>
<?php wp_enqueue_script( 'getg_news_container');?>


<?php
$args = array(
    "bg" => '',
    "color" => '',
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);

?>

<div class="getg_news_container" style="background: <?php echo $color; ?> url('<?php echo wp_get_attachment_image_url($bg, 'full'); ?>') ">
    <div class="container">
        <span>News</span>
        <ul class="getg_news_list" >
            <?php  echo do_shortcode($content); ?>
        </ul>
    </div>
</div>


<script type="text/javascript">


</script>
