<?php
$args = array(
    "title" => '',
    "content" => '',
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);

?>

<div class="getg_contact_block">
    <h4><?php echo $title;?></h4>
    <?php echo $content;?>
</div>
