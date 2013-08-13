<div id="midCol">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="postMeta"><span class="date"><?php the_time('M j, Y') ?></span></div>
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h3>
			<div class="entry">
				<p><?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?></p>
			</div>

<div class="postMeta"><br/>Posted by <?php the_author(); ?></div>
		</div>
		<?php endwhile; else: ?>
		<div class="post">
			<h2>No matching results</h2>
			<div class="entry">
				<p>You seem to have found a mis-linked page or search query with no associated results. Please trying your search again. If you feel that you should be staring at something a little more concrete, feel free to email the author of this site or browse the archives.</p>
			</div>
		</div>


		<?php endif; ?>
		<div id="more_reading">
		<p><?php next_posts_link('Next') ?>, <?php previous_posts_link('Previous') ?></p>
		</div>

</div>