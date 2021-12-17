<?php
declare( strict_types = 1 );

add_action( 'wp_enqueue_scripts', 'twentysixteen_halka_load_styles' );

function twentysixteen_halka_load_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}

function twentysixteen_fonts_url() {

}