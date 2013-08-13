<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */

get_header(); ?>
        
        <section id="content">
            
            <?php
                while ( have_posts() ) : the_post();
                    
                    get_template_part( 'content-page' );
                    
                endwhile; // end of the loop.
            ?>
            
        </section>
        
<?php get_footer(); ?>