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
                    <?php 
                        $args = array(
                            'post_type' => 'movie',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'ASC',
                        );

                        $movie_query = new WP_Query( $args );
                        
                        if ( $movie_query->have_posts() ) :
                            while ( $movie_query->have_posts() ) : $movie_query->the_post();
                                ?>
                                    <div class="movie-wrapper">
                                        <div class="movie-title">
                                            <h2><a href="<?php the_permalink() ?>"><?php echo get_post_meta (get_the_ID(), 'movie_title', true) ?></a></h2>
                                        </div>
                                        <div class="movie-content">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                <?php
                            endwhile;
                        endif;
                        
                        wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
            <?php wp_footer(); ?>
        </div>
    </body>
</html>
<?php