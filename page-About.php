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
            <?php wp_head(); ?>
            <title>Akwanza</title>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </head>

        </html>
        <?php include 'content-story.php'; ?>

    </main><!-- #main -->
</div><!-- #primary -->
<!-- <?php include 'content-footer.php'; ?> -->