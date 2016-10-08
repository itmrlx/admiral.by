<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

	<div class="wrapper news-wr">
		<div class="container news-container single-container">
			<div class="row">
				<div class="col-xs-12 search-images">
					<h1 class="hr-title"><?php the_title(); ?></h1>
					<?php if(get_field('ev_full')): ?><?php the_field('ev_full') ?>
					<?php else: ?><?php the_content(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>