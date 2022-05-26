<?php


if ( class_exists("WPBackeryShortCode")) {
    class WPBackeryShortCode_GETG_Industry_Section extends WPBakeryShortCode {}
}
if (function_exists('vc_map')) {
    vc_map( array(
        'name'                    => __( 'Industry Element', 'getg' ),
        'base'                    => 'getg_industry_section',
        'category'                => __( 'GETG Elements', 'getg' ),
        'description'             => __( 'Industry information card', 'getg' ),
        'show_settings_on_create' => true,
        'weight'                  => - 5,
        'icon'                    => 'icon-vc-getg',
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => __( "Section title", "getg" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => __( "Insert a title of your section.", "getg" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => __( "Learn more button", "getg" ),
                "param_name"  => "url",
                "value"       => '',
                "description" => __( "Insert a url of your button.", "getg" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => __( "Section icon", "getg" ),
                "param_name"  => "icon",
                "value"       => '',
                "description" => __( "Insert a icon of your section.", "getg" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => __( "Section description", "getg" ),
                "param_name"  => "description",
                "value"       => '',
                "description" => __( "Insert a description of your section.", "getg" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => __( "Section bottom background image", "getg" ),
                "param_name"  => "bg_buttom_image",
                "value"       => '',
                "description" => __( "Insert a bottom image of your section.", "getg" )
            ),
        )
    ));
}


if ( class_exists("WPBackeryShortCode")) {
    class WPBackeryShortCode_GETG_Title extends WPBakeryShortCode {}
}
if (function_exists('vc_map')) {
    vc_map( array(
        'name'                    => __( 'Title Element', 'getg' ),
        'base'                    => 'getg_title',
        'category'                => __( 'GETG Elements', 'getg' ),
        'description'             => __( 'GETG Site Title', 'getg' ),
        'show_settings_on_create' => true,
        'weight'                  => - 5,
        'icon'                    => 'icon-vc-getg',
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => __( "Title", "getg" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => __( "Insert a title.", "getg" )
            ),
            array(
                "type"        => "checkbox",
                "heading"     => __( "Show decoration Background", "getg" ),
                "param_name"  => "decoration",
                "value"         => "",
                "description" => __( "Mark if you want to show decoration background.", "getg" )
            ),
        )
    ));
}

if ( class_exists("WPBackeryShortCode")) {
    class WPBackeryShortCode_GETG_Decorations extends WPBakeryShortCode {}
}
if (function_exists('vc_map')) {
    vc_map( array(
        'name'                    => __( 'Decoration Element', 'getg' ),
        'base'                    => 'getg_decorations',
        'category'                => __( 'GETG Elements', 'getg' ),
        'description'             => __( 'GETG Decoration Elements', 'getg' ),
        'show_settings_on_create' => true,
        'weight'                  => - 5,
        'icon'                    => 'icon-vc-getg',
        'params'                  => array(
            array(
                'type'        => 'dropdown',
                'heading'     => __( "Decoration Element Type", "getg" ),
                'param_name'  => 'type',
                'admin_label' => true,
                'value'       => array(
                    'Horizontal Line'   => 'Horizontal Line',
                    'Horizontal Line in Container'   => 'Horizontal Line in Container',
                    'Bottom Right Square'   => 'Bottom Right Square',
                    'Top Left Square'  => 'Top Left Square',
                    'Top Right Square'  => 'Top Right Square',
                    'Right Vertical Column'  => 'Right Vertical Column',
                    'Left Vertical Line'  => 'Left Vertical Line',
                ),
                'std'         => 'Horizontal Line', // Your default value
                'description' => __( "Choose the type of decoration element.", "getg" )
            )
        )
    ));
}

if ( class_exists("WPBackeryShortCode")) {
    class WPBackeryShortCode_GETG_Section_Side_Title extends WPBakeryShortCode {}
}
if (function_exists('vc_map')) {
    vc_map( array(
        'name'                    => __( 'Section Side Title', 'getg' ),
        'base'                    => 'getg_section_side_title',
        'category'                => __( 'GETG Elements', 'getg' ),
        'description'             => __( 'GETG Section Side Title', 'getg' ),
        'show_settings_on_create' => false,
        'weight'                  => - 5,
        'icon'                    => 'icon-vc-getg',
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => __( "Side Title", "getg" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => __( "Insert a side title.", "getg" )
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __( "Side Title Position", "getg" ),
                'param_name'  => 'position',
                'admin_label' => true,
                'value'       => array(
                    'Left Side'   => 'Left Side',
                    'Right Side'   => 'Right Side'
                ),
                'std'         => 'Left Side', // Your default value
                'description' => __( "Choose the position of your side title.", "getg" )
            )
        )
    ));
}

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_GETG_Slider extends WPBakeryShortCodesContainer {
    }
}
if (function_exists('vc_map')) {
    vc_map( array(
        "name" => __("Slider", "getg"),
        "base" => "getg_slider",
        "as_parent" => array('only' => 'getg_slider_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
        'description'             => __( 'GETG Slider Element', 'getg' ),
        'category'                => __( 'GETG Elements', 'getg' ),
        "show_settings_on_create" => false,
        'icon'                    => 'icon-vc-getg',
        "is_container" => true,
        "params" => array(
            // add params same as with any other content element
            array(
                "type" => "textfield",
                "heading" => __("Extra class name", "getg"),
                "param_name" => "el_class",
                "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "getg")
            )
        ),
        "js_view" => 'VcColumnView'
    ) );

}

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_GETG_Slider_Item extends WPBakeryShortCode {
    }
}
if (function_exists('vc_map')) {
    vc_map( array(
        "name" => __("Slider Item", "getg"),
        "base" => "getg_slider_item",
        'description'             => __( 'GETG Slider Item Element', 'getg' ),
        "content_element" => true,
        'category'                => __( 'GETG Elements', 'getg' ),
        'icon'                    => 'icon-vc-getg',
        "as_child" => array('only' => 'getg_slider'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
            array(
                "type"        => "attach_image",
                "heading"     => __( "Background image", "getg" ),
                "param_name"  => "background",
                "value"       => '',
                "description" => __( "Select slide background image.", "getg" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => __( "Background image WebP", "getg" ),
                "param_name"  => "background_webp",
                "value"       => '',
                "description" => __( "Select slide background WebP image.", "getg" )
            ),
            array(
                "type" => "textarea_html",
                "heading" => __("Slide supporting text", "getg"),
                "value"       => '',
                "param_name" => "content",
                "description" => __("Edit supporting slide text.", "getg")
            ),
            array(
                "type" => "textarea",
                "heading" => __("Slide main text", "getg"),
                "param_name" => "text",
                "value"       => '',
                "description" => __("Edit main slide text.", "getg")
            ),
        )
    ) );
}

if ( class_exists("WPBackeryShortCode")) {
    class WPBackeryShortCode_GETG_Number_Section extends WPBakeryShortCode {}
}
if (function_exists('vc_map')) {
    vc_map( array(
        'name'                    => __( 'Number Section', 'getg' ),
        'base'                    => 'getg_number_section',
        'category'                => __( 'GETG Elements', 'getg' ),
        'description'             => __( 'GETG Number Section', 'getg' ),
        'show_settings_on_create' => true,
        'weight'                  => - 5,
        'icon'                    => 'icon-vc-getg',
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => __( "Title", "getg" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => __( "Insert a title.", "getg" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => __( "Description", "getg" ),
                "param_name"  => "description",
                "value"       => '',
                "description" => __( "Insert a description.", "getg" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => __( "Background image", "getg" ),
                "param_name"  => "icon",
                "value"       => '',
                "description" => __( "Select section icon.", "getg" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => __( "Number", "getg" ),
                "param_name"  => "number",
                "value"       => '',
                "description" => __( "Insert a number.", "getg" )
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __( "Mode", "getg" ),
                'param_name'  => 'position',
                'admin_label' => true,
                'value'       => array(
                    'Left'   => 'Left',
                    'Right'   => 'Right'
                ),
                'std'         => 'Left', // Your default value
                'description' => __( "Choose the mode of your card.", "getg" )
            )
        )
    ));
}


if ( class_exists("WPBackeryShortCode")) {
    class WPBackeryShortCode_GETG_Contact_Block extends WPBakeryShortCode {}
}
if (function_exists('vc_map')) {
    vc_map( array(
        'name'                    => __( 'Contact Information Block', 'getg' ),
        'base'                    => 'getg_contact_block',
        'category'                => __( 'GETG Elements', 'getg' ),
        'description'             => __( 'GETG Contact Information', 'getg' ),
        'show_settings_on_create' => true,
        'weight'                  => - 5,
        'icon'                    => 'icon-vc-getg',
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => __( "Title", "getg" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => __( "Insert a title.", "getg" )
            ),
            array(
                "type" => "textarea_html",
                "heading" => __("Info text", "getg"),
                "value"       => '',
                "param_name" => "content",
                "description" => __("Edit info text.", "getg")
            ),
        )
    ));
}
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_GETG_News_Container extends WPBakeryShortCodesContainer {
    }
}
if (function_exists('vc_map')) {
    vc_map( array(
        "name" => __("News Container", "getg"),
        "base" => "getg_news_container",
        "as_parent" => array('only' => 'getg_news_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
        'description'             => __( 'GETG News Element', 'getg' ),
        'category'                => __( 'GETG Elements', 'getg' ),
        "show_settings_on_create" => false,
        'icon'                    => 'icon-vc-getg',
        "is_container" => true,
        "params" => array(
            array(
                "type"        => "attach_image",
                "heading"     => __( "Background image", "getg" ),
                "param_name"  => "bg",
                "value"       => '',
                "description" => __( "Select section icon.", "getg" )
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => __( "Background color", "getg" ),
                "param_name" => "color",
                "value" => '#FF0000',
                "description" => __( "Choose text color", "getg" )
            )

        ),
        "js_view" => 'VcColumnView'
    ) );

}

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_GETG_News_Item extends WPBakeryShortCode {
    }
}
if (function_exists('vc_map')) {
    vc_map( array(
        "name" => __("News Item", "getg"),
        "base" => "getg_news_item",
        'description'             => __( 'GETG News Item Element', 'getg' ),
        "content_element" => true,
        'category'                => __( 'GETG Elements', 'getg' ),
        'icon'                    => 'icon-vc-getg',
        "as_child" => array('only' => 'getg_slider'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
            array(
                "type"        => "textarea",
                "heading"     => __( "News Text", "getg" ),
                "param_name"  => "text",
                "value"       => '',
                "description" => __( "Insert a news text.", "getg" )
            ),
        )
    ) );
}


if ( class_exists("WPBackeryShortCode")) {
    class WPBackeryShortCode_GETG_MainScreen extends WPBakeryShortCode {}
}
if (function_exists('vc_map')) {
    vc_map( array(
        'name'                    => __( 'Main Screen Element', 'getg' ),
        'base'                    => 'getg_mainscreen',
        'category'                => __( 'GETG Elements', 'getg' ),
        'description'             => __( 'GETG Main Screen Elements', 'getg' ),
        'show_settings_on_create' => true,
        'weight'                  => - 5,
        'icon'                    => 'icon-vc-getg',
        'params'                  => array(
            array(
                "type"        => "attach_image",
                "heading"     => __( "Background image", "getg" ),
                "param_name"  => "bg",
                "value"       => '',
                "description" => __( "Select section icon.", "getg" )
            ),

        )
    ));
}

if ( class_exists("WPBackeryShortCode")) {
    class WPBackeryShortCode_GETG_About_Item extends WPBakeryShortCode {}
}
if (function_exists('vc_map')) {
    vc_map( array(
        'name'                    => __( 'About Element', 'getg' ),
        'base'                    => 'getg_about_item',
        'category'                => __( 'GETG Elements', 'getg' ),
        'description'             => __( 'GETG Elements', 'getg' ),
        'show_settings_on_create' => true,
        'weight'                  => - 5,
        'icon'                    => 'icon-vc-getg',
        'params'                  => array(
            array(
                "type"        => "attach_image",
                "heading"     => __( "Background image", "getg" ),
                "param_name"  => "bg",
                "value"       => '',
                "description" => __( "Select section icon.", "getg" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => __( "Title", "getg" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => __( "Insert a title.", "getg" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => __( "Text", "getg" ),
                "param_name"  => "text",
                "value"       => '',
                "description" => __( "Insert a text.", "getg" )
            ),
        )
    ));
}

if ( class_exists("WPBackeryShortCode")) {
    class WPBackeryShortCode_GETG_Horizontal_Card extends WPBakeryShortCode {}
}
if (function_exists('vc_map')) {
    vc_map( array(
        'name'                    => __( 'Horizontal Card', 'getg' ),
        'base'                    => 'getg_horizontal_card',
        'category'                => __( 'GETG Elements', 'getg' ),
        'description'             => __( 'Industry Horizontal card item', 'getg' ),
        'show_settings_on_create' => true,
        'weight'                  => - 5,
        'icon'                    => 'icon-vc-getg',
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => __( "Section title", "getg" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => __( "Insert a title of your section.", "getg" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => __( "Section icon", "getg" ),
                "param_name"  => "icon",
                "value"       => '',
                "description" => __( "Insert a icon of your section.", "getg" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => __( "Section image", "getg" ),
                "param_name"  => "image",
                "value"       => '',
                "description" => __( "Insert a bottom image of your section.", "getg" )
            ),
            array(
                "type"        => "textarea_html",
                "heading"     => __( "Section description", "getg" ),
                "param_name"  => "content",
                "value"       => '',
                "description" => __( "Insert a description of your section.", "getg" )
            ),
        )
    ));
}

?>
