<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php get_header(); ?>
        <!DOCTYPE html>
        <html <?php language_attributes(); ?>>

        <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link rel="apple-touch-icon" sizes="180x180"
                href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32"
                href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16"
                href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-16x16.png">
            <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/site.webmanifest">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">
            <?php wp_head(); ?>
            <title>Akwanza</title>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </head>

        <body>
            <header>
                <nav class="navbar navbar-expand-sm justify-content-between px-4">
                    <a class="navbar-brand" id="akwanza-logo" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/akwanza_logo.png"
                            alt="akwanza Logo" width="80" height="90" style="color: black;">AKWANZA
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><i
                            class="fas fa-solid fa-bars"></i></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex align-items-center-md justify-content-center-md flex-grow-1">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>"
                                        href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                                </li>
                                <span class="vr" style="height: 40px; width:2px; color:black;"></span>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo is_page('about') ? 'active' : ''; ?>"
                                        href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>">About</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex">
                            <a href="https://akwanza.teemill.com" class="btn btn-shop">
                                <span><i class="fas fa-tshirt mx-2"></i></span>Shop</a>
                        </div>
                    </div>
                </nav>
                <div id="header-image"
                    class="d-flex flex-column justify-content-center text-align-center container-fluid text-center bg-image text-white"
                    style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Header.svg'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
                    <?php
                    // Check if the current URL slug includes '/about'
                    if (strpos($_SERVER['REQUEST_URI'], '/about') !== false) {
                        // If the URL contains '/about', display this header text
                        echo '<div id="header-text">
                            <h1 style="font-family: \'Colonna MT\', serif;">Once upon a time...</h1>
                            <h2>after a trip up Mount Kilimanjaro</h2>
                        </div>';
                    } else {
                        // Else, display the default header text
                        echo '<div id="header-text">
                            <h1 style="font-family: \'Colonna MT\', serif;">Uniting for Wildlife Conservation</h1>
                            <h2 style="color: #fbecd4;">Together, Every Purchase is a Pledge to Protect</h2>
                        </div>';
                    }
                    ?>
                </div>

            </header>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>