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
        <div id="sidebar" class="article-preview">
            <h2>
            <?php
                if( is_category() ) :
                    echo $parent_cat_name . ' &gt; ' . $primary_cat_name;
                else :
                    echo 'Tag &gt; ' . $primary_cat_name;
                endif;
            ?>
            </h2>
            
            <?php
            
            $args = array(
                // 'taxonomy' => $cat_obj->slug
            );
            
            // _log($args);
            // wp_tag_cloud( $args );
            
                $args = array( 'categories' => $cat_obj->term_id );
                $tags = get_category_tags($args);
                
                foreach ($tags as $tag) {
                    $class = '';
                    $title = $tag->tag_name;
                    
                    if ($current_tag_title === $title) :
                        $class = "class='current'";
                    endif;
            ?>
                    <li <?php echo $class; ?>>
                        <a href="<?php echo get_tag_link($tag->tag_id); ?>"><?php echo $title; ?></a>
                    </li>
            <?php
                }
            ?>
            
        </div><!-- #sidebar -->
<?php
    endif;
?>