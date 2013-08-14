<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>
        <div id="sidebar" class="featured">
            
            <h2>More Articles</h2>
            
            <?php
                $args = array(
                    orderby => 'rand',
                    posts_per_page => 3
                );
                
                $the_query = new WP_Query($args);
                
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <a href="<?php the_permalink(); ?>" class="article-preview">
                        
                        <?php
                            $thumbnail = get_thumbnail_custom($post->ID, 'thumbnail');
                            
                            if ( $thumbnail != '' ) {
                        ?>
                            <figure class="post-thumb" style="height:<?php echo $thumbnail[2] . 'px'; ?>;">
                                <img src="<?php echo $thumbnail[0]; ?>" width="<?php echo $thumbnail[1]; ?>" height="<?php echo $thumbnail[2]; ?>" alt="<?php the_title(); ?>" />
                            </figure>
                        <?php
                            } else {
                                // do nothing
                            }
                        ?>
                        
                        <div class="caption">
                            <h4 class="post-title">
                                <?php the_title(); ?>
                            </h4>
                            <p class="post-date">
                                <?php echo get_the_date(); ?>
                            </p>
                        </div>
                        
                        <div class="border"></div>
                        
                    </a>
            <?php
                endwhile;
            ?>
            
        </div><!-- #sidebar -->