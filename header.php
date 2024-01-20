<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body>

    <!-- menus -->
    <nav>
        <div class="container nav">

            <!-- company logo -->
            <div class="company-logo">

                <?php
                if (function_exists("the_custom_logo")) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);

                }
                ;
                ?>
                <img src="<?= $logo[0] ?>" alt="company-logo">
                <p>
                    <?= get_bloginfo('name') ?>
                </p>
            </div>
            <!-- end company logo -->

            <div class='flex items-center gap-8'>
                <!-- menus -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'head-menus',
                        'menu_class' => 'head-menus',
                        'container' => 'div',
                        'container_class' => '',
                    )
                );
                ?>
                <!-- end menus -->

                <!-- sosmed -->
                <ul class="sosmed flex items-center gap-3">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
                <!-- end sosmed -->
            </div>
        </div>
    </nav>