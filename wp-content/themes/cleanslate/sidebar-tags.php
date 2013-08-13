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
        $primary_cat_name = $cat_obj->cat_name;
        $class = '';
        
        // For Child Categories
        if( $cat_obj->parent ) :
            $parent_cat_id = $cat_obj->parent;
            $parent_cat = get_category($parent_cat_id);
            $parent_cat_name = $parent_cat->cat_name;
            
        // For the Parent Category
        else :
            $parent_cat_id =  $cat_obj->term_id;
            $parent_cat_name = $cat_obj->name;
            $class = "class='current'";
        endif;
?>
        <div id="sidebar" class="article">
            
            <h2>
            <?php
                echo 'Posts tagged with<br/> <em>' . $parent_cat_name . '</em>';
            ?>
            </h2>
            
            <ul>
                <li><a href="<?php echo get_page_link(271); ?>">&lt; Back to All Tags</a></li>
            </ul>
            
        </div><!-- #sidebar -->
<?php
    endif;
?>