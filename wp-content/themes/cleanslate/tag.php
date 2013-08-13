<?php
/**
 * The template for the Browse category.
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
                get_sidebar('tags');
            
                while ( have_posts() ) : the_post();
                    get_template_part('content-thumb', get_post_format() );
                endwhile;
    ?>
            
            </div>
            
    <?php
        else :
            // Content Not Found Template
            include('content-not-found.php');
            
        endif;
    ?>
    
    </section>
    
<?php get_footer(); ?>