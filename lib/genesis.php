<?php

namespace Infinity\genesis;

function svg_logo_in_title( $title, $inside, $wrap ){
    $logo = file_get_contents( dirname(__FILE__) . '/../images/marzolf-logo.svg' );

    // Build the title.
    $title = genesis_markup( array(
        'open'    => '',
        'close'   => '',
        'content' => '<a href="' . trailingslashit( home_url() ) . '">' . $logo . '</a>',
        'context' => 'site-title',
        'echo'    => false,
        'params'  => array(
            'wrap' => $wrap,
        ),
    ) );

    return $title;
}
add_filter( 'genesis_seo_title', __NAMESPACE__ . '\\svg_logo_in_title', 10, 3 );

//* Change the footer text

function footer_creds_filter( $creds ) {
    $creds = '&copy; Copyright ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . '. All rights reserved. &middot; Designed by <a href="https://mwender.com">Michael Wender</a>';
    return $creds;
}
add_filter( 'genesis_footer_creds_text', __NAMESPACE__ . '\\footer_creds_filter' );