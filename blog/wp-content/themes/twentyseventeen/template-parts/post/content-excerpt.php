<article id="post-<?php the_ID(); ?>">
	<div class="post">
		<a href="<?php the_permalink(); ?>" class="pic">
			<div style="background-image:url(<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url();} ?>);" <?php the_title( 'alt="', '"') ?><?php the_title( 'title="', ' | One 80/20"') ?>></div>
		</a>
		<div class="title">
			<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
		</div>
		<p class="intro">
			<?php the_excerpt(); ?>
		</p>
			<a href="<?php the_permalink(); ?>" class="continue-reading">Leia mais</a>
	</div>
</article>