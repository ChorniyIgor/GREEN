<?php
$args = array(
    "title" => '',
    "url" => '',
    "icon" => '',
    "description" => '',
    "bg_buttom_image" => ''
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);

?>

<div class="getg_industry_section">
        <div class="getg_industry_section__text">
            <?php if ($icon) {?>
                <img class="getg_industry_section__icon" src="<?php echo wp_get_attachment_image_url($icon, 'full');?>" alt="<?php echo $title;?> icon">
            <?php }?>
            <h3 class="getg_industry_section__title"><?php echo $title;?></h3>
            <p class="getg_industry_section__description"><?php echo $description;?></p>
            <?php if($url) {?>
              <a class="site-button" href="<?php echo $url;?>">Learn More</a>
            <?php } ?>
        </div>
        <?php if ($bg_buttom_image) {?>
         <img class="getg_industry_section__image" src="<?php echo wp_get_attachment_image_url($bg_buttom_image, 'full');?>" alt="<?php echo $title;?> image">
        <?php }?>
</div>
