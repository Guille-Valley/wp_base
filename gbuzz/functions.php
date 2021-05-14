<?php
// Modificaciones del panel de WP ---------------
function gbuzz_theme_support()
{
    // Añadimos un titulo dinamico con una etiqueta de soporte
    add_theme_support('title-tag');
    // Añadimos un logo dinámico en apariencia
    add_theme_support('custom-logo');
    // Añadimos la posibilidad de añadir imagenes destacadas a los post
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'gbuzz_theme_support');

// Menus del día ---------------

function gbuzz_menus()
{
    $location = array(
        'primary' => "Lado izquierdo de la pantalla",
        'footer' => "Menu pie de pagina"
    );
    register_nav_menus($location);
}

add_action('init', 'gbuzz_menus');

// Bootstrap y CSS ---------------

function gbuzz_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('gbuzz-style', get_template_directory_uri() . "/style.css", array('gbuzz-bootstrap'), $version, 'all');
    //wp_enqueue_style('gbuzz-style-2', get_template_directory_uri() . "/assets/css/style.css", array('gbuzz-bootstrap'), $version, 'all');
    wp_enqueue_style('gbuzz-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('gbuzz-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css', array(), '5.12.2', 'all');
}

add_action('wp_enqueue_scripts', 'gbuzz_register_styles');

function gbuzz_register_scripts()
{
    // el último parametro es verdadero para mandar al pie de la pagina los scripts.
    wp_enqueue_script('gbuzz-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', array(), '5.0.0', true);
    wp_enqueue_script('gbuzz-mainJs', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'gbuzz_register_scripts');

// Widgets ---------------
function gbuzz_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'gbuzz_widget_areas');
