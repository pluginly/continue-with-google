<?php

defined( 'ABSPATH' ) || exit;

use ContinueWithGoogle\WpMVC\App;
use ContinueWithGoogle\DI\Container;

function continue_with_google():App {
    return App::$instance;
}

function continue_with_google_config( string $config_key ) {
    return continue_with_google()::$config->get( $config_key );
}

function continue_with_google_app_config( string $config_key ) {
    return continue_with_google_config( "app.{$config_key}" );
}

function continue_with_google_version() {
    return continue_with_google_app_config( 'version' );
}

function continue_with_google_container():Container {
    return continue_with_google()::$container;
}

function continue_with_google_singleton( string $class ) {
    return continue_with_google_container()->get( $class );
}

function continue_with_google_url( string $url = '' ) {
    return continue_with_google()->get_url( $url );
}

function continue_with_google_dir( string $dir = '' ) {
    return continue_with_google()->get_dir( $dir );
}

function continue_with_google_render( string $content ) {
    //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    echo $content;
}