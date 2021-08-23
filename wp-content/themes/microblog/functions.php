<?php

add_filter( 'nav_menu_css_class', 'change_menu_nav_classes');
function change_menu_nav_classes($classes)
{
    $classes = [
        'nav-item'
    ];

    return $classes;
}

add_filter( 'nav_menu_link_attributes', 'filter_function_name_3020', 10, 4 );
function filter_function_name_3020( $atts, $item, $args, $depth ){
    // filter...
    $atts['class'] = 'nav-link';

    return $atts;
}