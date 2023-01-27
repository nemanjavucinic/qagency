<?php
/**
 * Template Name: Login
 */

?>

<?php


add_action( 'wp_enqueue_scripts', function (){
    wp_enqueue_script( 'qlogin', get_template_directory_uri().'/js/qlogin.js');
} );
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="content-wrapper">
            <header>
            </header>
                <div id="content">
                    <h1>The login page</h1>
                </div>
            </div>
            <?php wp_footer(); ?>
        </div>
    </body>
</html>
<?php