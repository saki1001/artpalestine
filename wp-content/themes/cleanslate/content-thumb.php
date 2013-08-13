<?php
/**
 * The template to display thumbnails.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<a href="<?php the_permalink(); ?>" class="article" >
    <div class="caption">
        <h4 class="post-title">
            <?php the_title(); ?>
        </h4>
        <p class="post-date">
            <?php echo get_the_date(); ?>
        </p>
        <p class="post-excerpt">
            <?php echo get_the_excerpt(); ?>
        </p>
    </div>
    
    <?php
        $thumbnail = get_thumbnail_custom($post->ID, 'medium');
        
        if ( $thumbnail != '' ) {
    ?>
        <figure class="post-thumb" style="height:<?php echo $thumbnail[2] . 'px'; ?>;">
            <img src="<?php echo $thumbnail[0]; ?>" width="<?php echo $thumbnail[1]; ?>" height="<?php echo $thumbnail[2]; ?>" alt="<?php the_title(); ?>" />
        </figure>
        <div class="border thin"></div>
    <?php
        } else {
    ?>
        <div class="border"></div>
    <?php
        }
    ?>
</a>