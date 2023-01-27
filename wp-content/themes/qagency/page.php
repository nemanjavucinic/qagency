<?php
/*
    Template Name: Default
*/

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
                    <div id="top-section">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
            <?php wp_footer(); ?>
        </div>
    </body>
</html>
<?php
