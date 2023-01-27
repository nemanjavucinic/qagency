<?php
/*
Template Name: Movie Single
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
                        <div class="movie-wrapper-single">
                            <div class="movie-title">
                                <h2><?php echo get_post_meta (get_the_ID(), 'movie_title', true) ?></h2>
                            </div>
                            <div class="movie-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php wp_footer(); ?>
        </div>
    </body>
</html>
<?php
