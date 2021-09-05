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
function filter_function_name_3020( $atts, $item, $args, $depth )
{
    // filter...
    $atts['class'] = 'nav-link';

    return $atts;
}

add_filter('excerpt_more', function($more)
{
    return '...';
});

/**
 * @param $links
 * @param $args
 * @return string
 */
function bootstrap_paginate_links_data( $links, $args )
{
    $navigation = '';

    if ( $links ) {
        $pagination = '<ul class="pagination pagination-sm flex-wrap">';

        foreach ( $links as $link ) {
            $active   = strpos( $link, 'current' );
            $disabled = strpos( $link, 'dots' );
            $link     = str_replace( 'page-numbers', 'page-numbers page-link', $link );

            if ( $active ) {
                $pagination .= "<li class=\"page-item active\">$link</li>";
            } elseif ( $disabled ) {
                $pagination .= "<li class=\"page-item disabled\">$link</li>";
            } else {
                $pagination .= "<li class=\"page-item\">$link</li>";
            }
        }
        $pagination .= '</ul>';
        $navigation  = _navigation_markup( $pagination, 'pagination-nav', $args['screen_reader_text'] );
    }

    return $navigation;
}

/**
 * @return string
 */
function get_the_bootstrap_pagination()
{
    global $wp_query;
    $navigation = '';
    $big        = 999999999;

    $args = array(
        'base'               => str_replace( $big, '%#%', wp_specialchars_decode( esc_url( get_pagenum_link( $big ) ) ) ),
        'format'             => '?paged=%#%',
        'current'            => max( 1, get_query_var( 'paged' ) ),
        'total'              => $wp_query->max_num_pages,
        'screen_reader_text' => __( 'Posts navigation', 'textdomain' ),
        'end_size'           => 1,
        'mid_size'           => 3,
        'prev_text'          => '&laquo;',
        'next_text'          => '&raquo;',
        'type'               => 'array',
    );

    // Set up paginated links.
    $links      = paginate_links( $args );
    $navigation = bootstrap_paginate_links_data( $links, $args );
    $navigation = str_replace('<h2 class="screen-reader-text">Posts navigation</h2>', '', $navigation);

    return $navigation;
}

function addClasses2Tags($content)
{
    $content = str_replace('<a', '<a class="link"', $content);
    return $content;
}
add_filter('the_tags', 'addClasses2Tags', 10, 1);