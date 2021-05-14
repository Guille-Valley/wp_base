<?php
/**
 * La cabecera
 * Esta plantilla muestra en todas las paginas la seccion <head> 
 * https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>

<header class="header text-center">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="pt-lg-4 mb-0" href="index.php">
                <?php
                echo get_bloginfo('name');
                echo get_bloginfo('description');
                ?>
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">

                <?php
                // En functions añadimos un add_theme_support 'custom_logo' para crear esta opción dinámica
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }

                ?>
                <a class="navbar-brand" href="index.php"><img class="mb-3 max-auto logo" src="<?php echo $logo[0] ?>" width="78px" alt="logo"></a>



                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>'
                    )
                );
                ?>
                <?php
                dynamic_sidebar('sidebar-1');
                ?>
            </div>
        </div>

    </nav>

    <div class="page-title theme-bg-light text-center gradient">
        <h1 class="heading"><?= get_the_title() ?></h1>
    </div>
</header>

