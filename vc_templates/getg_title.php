<?php
$args = array(
    "title" => '',
    "decoration" => ''
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);

?>

<div class="getg_title <?php if ($decoration){ echo "getg_title--with-decoration-background"; } ?>">
    <h2><?php echo $title;  ?></h2>
</div>