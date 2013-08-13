<?php
/**
 * The general template used for displaying page content in page.php.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div id="text" class="text-container">
        
        <h2><?php the_title(); ?></h2>
        
        <?php the_content(); ?>
    </div>
    
    <?php
        if( is_page('artists-and-people-of-note') ) :
            
            wp_tag_cloud();
            
        endif;
    ?>
    
    <div class="border"></div>
    
</article>