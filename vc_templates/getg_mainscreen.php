<?php
$args = array(
    "bg" => ''
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);


echo "<div class='getg_mainscreen' style=' background: url(".wp_get_attachment_image_url($bg, 'full').") no-repeat;background-size:cover;'>
<div class='container'>
<h1><span>".get_the_title()."</span></h1>
</div>
</div>";

?>

