<?php
/**
 * The template for displaying Search Results pages.
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
                    
                    <div class="article">
                        <h2>Showing results<br/> for "<?php the_search_query() ?>"</h2>
                    </div>
        <?php
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
                
                // Content Not Found Template
                include('content-no-results.php');
                
            endif;
        ?>
        
    </section>
    
<?php get_footer(); ?>
