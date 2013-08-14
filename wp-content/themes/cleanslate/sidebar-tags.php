<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

<?php
    if ( have_posts() ) :
        
        // Query Category Object
        $cat_obj = $wp_query->get_queried_object();
        
        $tagId =  $cat_obj->term_id;
        $tagName = $cat_obj->name;
?>
        <div id="sidebar" class="article-preview">
            
            <h2>
            <?php
                echo 'Posts tagged with<br/> <em>' . $tagName . '</em>';
            ?>
            </h2>
            
            <ul>
                <li><a href="<?php echo get_page_link(271); ?>">&larr; Back to Artists</a></li>
            </ul>
            
        </div><!-- #sidebar -->
<?php
    endif;
?>