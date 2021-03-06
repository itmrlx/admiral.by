<?php get_header(); ?>

	<div class="wrapper news-wr">
		<h1 class="hr-title">События</h1>
		<div class="container">
			<div class="row">
				<ul class="tab-menu">
					<li class="<?php if(is_category('minsk')):echo " current-menu-item"; endif; ?>"><a href="/category/events/minsk/">Минск</a></li>
					<li class="<?php if(is_category('gomel')):echo "current-menu-item"; endif; ?>"><a href="/category/events/gomel/">Гомель</a></li>
				</ul>
			</div>
		</div>



		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="container news-container">
				<div class="row">
					<div class="col-xs-3 col-xs-offset-2">
						<?php $imgevent = get_field('ev_img'); ?>
						<img src="<?php echo $imgevent['sizes']['event_archive']; ?>" alt="<?php echo $imgevent['alt']; ?>">
						<div class="centered"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Смотреть подробнее</a></div>
					</div>
					<div class="col-xs-5">
						<p class="edate"><?php the_field('ev_date'); ?></p>
						<p class="date"><?php the_field('ev_month'); ?></p>
						<h2 class="etitle">
							<?php the_title(); ?>
						</h2>
						<p class="desc"><?php the_field('ev_short_archive'); ?></p>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<div class="clearfix"></div>
		<div class="centered">
			<?php if(function_exists('proPagination')) { proPagination(); } ?>
		</div>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>