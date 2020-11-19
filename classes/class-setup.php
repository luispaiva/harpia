<?php

/**
 * Harpia setup.
 *
 * @package Harpia
 * @since Harpia 1.0
 */

if (!class_exists('Harpia_Setup')) {

    class Harpia_Setup
    {
        public static function init()
        {
            add_action('after_setup_theme', array(__CLASS__, 'harpia_theme_support'));
        }

        public static function harpia_theme_support()
        {
            add_theme_support('post-thumbnails');
            add_theme_support('title-tag');
            add_theme_support('woocommerce');
        }
    }

    Harpia_Setup::init();
}
