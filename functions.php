<?php

/**
 * Funciones y definiciones del tema
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nombre_del_Tema
 */

if (!function_exists('nombre_del_tema_setup')) :
    function nombre_del_tema_setup()
    {
        // Añade soporte para la traducción del tema
        load_theme_textdomain('nombre_del_tema', get_template_directory() . '/languages');

        // Añade soporte para imágenes destacadas
        add_theme_support('post-thumbnails');

        // Añade soporte para el título del documento
        add_theme_support('title-tag');
    }
endif;
add_action('after_setup_theme', 'nombre_del_tema_setup');
