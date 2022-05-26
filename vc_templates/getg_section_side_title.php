<?php
$args = array(
    "title" => '',
    "position" => ''
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);

?>

<div class="section_side_title <?php if ($position == 'Right Side') { echo 'section_side_title--right'; }?>" ><?php echo $title; ?></div>


