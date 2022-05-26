<?php
$args = array(
    "text" => '',
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);

?>


<li class="getg_news_item">
        <p> <?php echo $text;?></p>
</li>