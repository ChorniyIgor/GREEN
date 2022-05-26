<?php
$args = array(
    "background" => '',
    "background_webp" => '',
    "text" => '',
    "content" => ''
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);

$backgroundUrl = "";
if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {
  $backgroundUrl = $background_webp;
} else {
  $backgroundUrl = $background;
}
?>

<li style="height:100vh; background: url(<?php echo wp_get_attachment_image_url($backgroundUrl, 'full'); ?>) center no-repeat; background-size: cover">
    <div class="container border_right--header border_left--header">
        <h2 class="getg_slider_title"><?php echo $text; ?></h2>
        <div class="getg_slider_content">
            <?php echo $content; ?>
        </div>
        <div class="getg_horizontal_line--header"></div>
    </div>
</li>
