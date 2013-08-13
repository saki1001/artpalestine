<?php
/**
 * The template for routing Category posts to their respective pages.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<?php get_header(); ?>
    
    <section id="content">
        
        <?php
            if ( have_posts() ) :
        ?>
                
                <div id="articles">
                
        <?php
                // if( is_category('resources') ) :
                    get_sidebar('sub-categories');
                // else :
                //     get_sidebar('tag-cloud');
                // endif;
                
                while ( have_posts() ) : the_post();
                    get_template_part('content-thumb', get_post_format() );
                endwhile;
        ?>
                    
                </div>
                
                <div class="pagination">
                    <div id="next-page"><?php next_posts_link('Next &rarr;','') ?></div>
                </div>
        <?php
            else :
                $sidebar = TRUE;
                
                // Content Not Found Template
                include('content-not-found.php');
                
            endif;
        ?>
        
    </section>
    
<?php get_footer(); ?>