<li>
	<a href="<?php echo get_permalink(); ?>">
		<?php the_post_thumbnail(); ?>
		<div class="gallery-content">
			<div class="project-title"><?php the_title(); ?></div>
			<div class="project-client"><?php the_author(); ?></div>
		</div>
	</a>
</li>