<?php
$args = array(
    "title" => '',
    "description" => '',
    "icon" => '',
    "number" => '',
    "position" => ''
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);
?>

<div class="getg_number_section <?php echo $position == "Right" ?  'getg_number_section--right' : ''; ?>">
    <div class="getg_number_section__content">
        <div class="getg_number_section__content__number">
            <span class="getg_number_section__content__number__item"><?php echo $number; ?> </span>
            <span class="side-numb"><?php echo $number; ?></span>
        </div>
        <div class="getg_number_section__content__descr">
            <h3><?php echo $title; ?></h3>
            <?php echo $description; ?>
        </div>
        <div class="getg_number_section__content__icon">
            <img src="<?php echo wp_get_attachment_image_url($icon, 'full'); ?>" alt="<?php echo $title; ?> icon">
        </div>

    </div>
</div>