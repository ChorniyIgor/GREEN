<?php
$args = array(
    "bg" => '',
    "title" => '',
    "text" => ''
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);


echo "<div class='getg_about_item'><img src='".wp_get_attachment_image_url($bg, 'full')."'><h4>".$title."</h4><p>".$text."</p></div>";

?>

