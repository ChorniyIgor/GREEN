<?php
$args = array(
    "type" => ''
);

$atts = vc_map_get_attributes( $this -> getShortcode(), $atts);
extract($atts);


switch ($type) {
    case 'Left Vertical Line':
        echo "<div class='decoration_square--vertical_left_line'></div>";
        break;
    case "Horizontal Line":
        echo '<div class="getg_horizontal_line"></div>';
        break;
    case "Horizontal Line in Container":
        echo '<div class="getg_horizontal_line getg_horizontal_line--container"></div>';
        break;
    case 'Bottom Right Square':
        echo "<div class='decoration_square--right_bottom'></div>";
        break;
    case 'Top Left Square':
        echo "<div class='decoration_square--left_top'></div>";
        break;
    case 'Top Right Square':
        echo "<div class='decoration_square--right_top'></div>";
        break;
    case 'Right Vertical Column':
        echo "<div class='decoration_square--right_vertical_column'></div>";
        break;

}

?>

