<?php

add_action( 'after_setup_theme', function (): void {

    add_theme_support( 'block-templates' );

    add_editor_style( 'assets/css/main.css' );

} );

add_action( 'wp_enqueue_scripts', function (): void {

    wp_enqueue_style(
        'fse-theme-main',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        [],
        wp_get_theme()->get( 'Version' )
    );

} );

add_action( 'init', function (): void {

    register_block_style( 'core/button', [
        'name'  => 'secondary',
        'label' => 'Secondary',
    ] );

    register_block_style( 'core/button', [
        'name'  => 'outline',
        'label' => 'Outline',
    ] );

    register_block_style( 'core/button', [
        'name'  => 'outline-secondary',
        'label' => 'Outline Secondary',
    ] );

} );