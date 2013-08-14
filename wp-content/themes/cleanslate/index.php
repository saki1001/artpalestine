<?php
/**
 * The main template file.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<?php get_header(); ?>
        
    <section id="content">
        
        <div id="articles">
        
            <div id="description" class="article-preview">
                <p>Art Palestine International is a New York-based cultural organization dedicated to Palestinian contemporary art. We collaborate with museums, galleries, and non-profits to produce art exhibitions, events, and publications.</p>
                <p>This blog is a research tool that allows us to chart our research and invite others along on the journey.</p>
                
                <div class="border"></div>
                
            </div>
        
        <?php
            if ( have_posts() ) :
                
                while ( have_posts() ) : the_post();
                    get_template_part( 'content-thumb' );
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