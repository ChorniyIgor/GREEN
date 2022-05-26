<?php
$args = array(
    "title" => '',
    "icon" => '',
    "content" => '',
    "image" => ''
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);

?>

<div class="getg_horizontal_card">
        <?php if ($icon) {?>
            <img class="getg_horizontal_card__icon" src="<?php echo wp_get_attachment_image_url($icon, 'full');?>" alt="<?php echo $title;?> icon">
        <?php }?>
    <div class="getg_horizontal_card__text">
        <h3 class="getg_horizontal_card__title"><?php echo $title;?></h3>
        <p class="getg_horizontal_card__description"><?php echo $content;?></p>
    </div>
    <?php if ($image) {?>
        <img class="getg_horizontal_card__image" src="<?php echo wp_get_attachment_image_url($image, 'full');?>" alt="<?php echo $title;?> image">
    <?php }?>
</div>
