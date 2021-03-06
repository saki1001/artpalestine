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
                get_sidebar('sub-categories');
                
                while ( have_posts() ) : the_post();
                    get_template_part('content-thumb', get_post_format() );
                endwhile;
        ?>
                    
                </div>
                
        <?php
                get_template_part('pagination');
        ?>
                
        <?php
            else :
                // Content Not Found Template
                include('content-not-found.php');
                
            endif;
        ?>
        
    </section>
    
<?php get_footer(); ?>