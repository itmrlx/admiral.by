<?php get_header(); ?>

	<!-- slider -->
	<div class="wrapper slider-wr">
		<div class="main-slider">
			<?php if( have_rows('m_slide','option') ):while ( have_rows('m_slide','option') ) : the_row(); ?>
				<?php $img = get_sub_field('m_slide_img'); ?>
				<div class="slide" style="background-image: url(<?php echo $img['sizes']['slide']; ?>);">
					<div class="text-block">
						<div class="black-block">
							<?php if(get_sub_field('m_slide_title')): ?><h1><?php the_sub_field('m_slide_title'); ?></h1><?php endif; ?>
							<p><?php the_sub_field('m_slide_text'); ?></p>
						</div>
						<div class="clearfix"></div>
						<?php if(get_sub_field('m_slide_link')): ?><a href="<?php the_sub_field('m_slide_link'); ?>" class="btn btn-blue">Открыть</a><?php endif; ?>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>

	<!-- about -->
	<div class="container about-container">
		<div class="about-block">
			<h2 class="hr-title"><?php the_field('about_title','option'); ?></h2>
			<?php the_field('about_text','option'); ?>
		</div>
	</div>

	<!-- events -->
	<div class="wrapper fishka-wr"><div class="fishka"></div></div>
	<div class="wrapper events-wr">
		<div class="container">
			<h2 class="hr-title">События</h2>
			<div class="row">
				<div class="events-slider">
					<?php query_posts('category_name=minsk&posts_per_page=10'); ?>
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<div class="slide-container">
							<a href="<?php the_permalink(); ?>" class="slide">
								<?php $imgevent = get_field('ev_img'); ?>
								<img data-lazy="<?php echo $imgevent['sizes']['event_main']; ?>" alt="<?php echo $imgevent['alt']; ?>">
								<div class="text-block">
									<div class="title"><?php the_field('ev_date'); ?></div>
									<div class="year"><?php the_field('ev_month'); ?></div>
									<p class="desc"><?php the_field('ev_short_main'); ?></p>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
					<?php endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>

	<!-- games -->
	<div class="wrapper fishka-wr fishka-top"><div class="fishka"></div></div>
	<div class="container games-container">
		<h2 class="hr-title">Игры</h2>
		<?php if( have_rows('game','option') ):while ( have_rows('game','option') ) : the_row(); ?>
			<div class="col-xs-3">
				<a href="<?php the_sub_field('game_link'); ?>" class="game-block">
					<div class="img-container">
						<?php $img_game = get_sub_field('game_img'); ?>
						<img src="<?php echo $img_game['sizes']['game'] ?>" alt="<?php the_sub_field('game_title'); ?>">
					</div>
					<h2 class="title"><?php the_sub_field('game_title'); ?></h2>
					<div class="more">Подробнее</div>
				</a>
			</div>
		<?php endwhile; endif; ?>
	</div>

	<!-- jackpot -->
	<div class="wrapper jackpot-wr">
		<div class="container">
			<h2 class="title"><?php the_field('mj_title','option'); ?></h2>
			<div class="numbers">
				<?php if(strlen(get_field('mj_num1','option')) !== 0): ?><span><?php the_field('mj_num1','option') ?></span><?php endif; ?>
				<?php if(strlen(get_field('mj_num2','option')) !== 0): ?><span class="pr"><?php the_field('mj_num2','option') ?></span><?php endif; ?>
				<?php if(strlen(get_field('mj_num3','option')) !== 0): ?><span><?php the_field('mj_num3','option') ?></span><?php endif; ?>
				<?php if(strlen(get_field('mj_num4','option')) !== 0): ?><span><?php the_field('mj_num4','option') ?></span><?php endif; ?>
				<?php if(strlen(get_field('mj_num5','option')) !== 0): ?><span class="pr"><?php the_field('mj_num5','option') ?></span><?php endif; ?>
				<?php if(strlen(get_field('mj_num6','option')) !== 0): ?><span><?php the_field('mj_num6','option') ?></span><?php endif; ?>
				<?php if(strlen(get_field('mj_num7','option')) !== 0): ?><span><?php the_field('mj_num7','option') ?></span><?php endif; ?>
				<?php if(strlen(get_field('mj_num8','option')) !== 0): ?><span><?php the_field('mj_num8','option') ?></span><?php endif; ?>
			</div>
		</div>
	</div>
		<div class="wrapper socials-wr">
			<a href="http://vk.com/casino_admiral_by" target="_blank" class="soc vk">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 532.3 532.3">
				  <path d="M472 241.3c7.6-9.8 13.6-17.6 18-23.6 32-42.5 45.8-69.6 41.6-81.5l-1.7-2.8c-1.1-1.7-4-3.2-8.6-4.6-4.6-1.4-10.5-1.6-17.7-.7l-79.8.6c-1.8-.2-3.7-.1-5.5.1-1.8.3-3 .6-3.6.8l-1.4.7-1.1.8c-.9.6-1.9 1.5-3 2.9s-2 3-2.8 4.9c-8.7 22.4-18.6 43.1-29.7 62.4-6.8 11.5-13.1 21.4-18.8 29.8-5.7 8.4-10.5 14.6-14.4 18.6-3.9 4-7.4 7.2-10.5 9.6-3.1 2.4-5.5 3.4-7.2 3.1-1.7-.4-3.2-.7-4.7-1.1-2.6-1.7-4.7-3.9-6.2-6.8-1.6-2.9-2.6-6.5-3.2-10.8-.6-4.3-.9-8.1-1-11.2-.1-3.1 0-7.6.1-13.3.2-5.7.3-9.6.3-11.6 0-7 .1-14.6.4-22.9.3-8.2.5-14.7.7-19.5.2-4.8.3-9.9.3-15.2 0-5.3-.3-9.6-1-12.6-.6-3-1.6-6-2.9-8.9-1.3-2.9-3.2-5.1-5.7-6.6-2.5-1.6-5.6-2.8-9.3-3.7-9.8-2.2-22.3-3.4-37.4-3.6-34.4-.4-56.5 1.9-66.2 6.7-3.9 2-7.4 4.8-10.5 8.3-3.3 4.1-3.8 6.3-1.4 6.6 11.1 1.7 18.9 5.6 23.6 11.9l1.7 3.3c1.3 2.4 2.6 6.7 3.9 12.8 1.3 6.1 2.1 12.8 2.5 20.2.9 13.5.9 25 0 34.6-.9 9.6-1.8 17.1-2.6 22.4-.8 5.4-2.1 9.7-3.7 13-1.7 3.3-2.8 5.4-3.3 6.1-.6.7-1 1.2-1.4 1.4-2.4.9-4.9 1.4-7.5 1.4-2.6 0-5.7-1.3-9.4-3.9-3.7-2.6-7.5-6.1-11.5-10.7-4-4.5-8.5-10.9-13.4-19-5-8.1-10.2-17.7-15.5-28.8l-4.4-8c-2.8-5.2-6.6-12.7-11.4-22.6s-9.1-19.4-12.7-28.7c-1.5-3.9-3.7-6.8-6.7-8.9l-1.4-.8c-.9-.7-2.4-1.5-4.4-2.4-2-.8-4.2-1.4-6.4-1.8l-75.9.6c-7.8 0-13 1.8-15.8 5.3l-1.1 1.7c-.6.9-.8 2.4-.8 4.4 0 2 .6 4.5 1.7 7.5 11.1 26.1 23.1 51.2 36.2 75.4 13 24.2 24.3 43.7 34 58.5 9.6 14.8 19.4 28.7 29.4 41.9s16.6 21.5 19.8 25.2c3.2 3.7 5.8 6.5 7.6 8.3l6.9 6.7c4.4 4.4 10.9 9.7 19.5 15.9 8.6 6.2 18.1 12.3 28.6 18.3 10.4 6 22.6 10.9 36.4 14.7 13.9 3.8 27.3 5.3 40.5 4.6H293c6.5-.6 11.4-2.6 14.7-6.1l1.1-1.4c.7-1.1 1.4-2.8 2.1-5.1.6-2.3 1-4.9 1-7.6-.2-7.9.4-15.1 1.8-21.5s3-11.2 4.7-14.4c1.8-3.2 3.7-6 6-8.2 2.2-2.2 3.8-3.5 4.7-4 .9-.5 1.7-.8 2.2-1 4.4-1.5 9.6 0 15.7 4.3 6 4.4 11.6 9.7 16.9 16.1 5.3 6.4 11.6 13.5 19 21.5 7.4 7.9 13.9 13.9 19.4 17.7l5.5 3.3c3.7 2.2 8.5 4.2 14.4 6.1 5.9 1.8 11.1 2.3 15.5 1.4l71-1.1c7 0 12.5-1.1 16.4-3.5 3.9-2.3 6.2-4.9 6.9-7.6.7-2.8.8-5.9.1-9.4-.6-3.5-1.3-6-1.9-7.3-.6-1.4-1.3-2.5-1.8-3.5-9.2-16.6-26.9-37.1-52.9-61.3l-.6-.6-.3-.3-.3-.3h-.3c-11.8-11.3-19.3-18.9-22.4-22.7-5.7-7.4-7-14.9-3.9-22.4 1.6-5.9 9.9-18 24.3-36.5z"/>
				</svg>
			</a>
			<a href="https://www.instagram.com/casino_admiral_by/" target="_blank" class="soc gp">
				<svg xmlns="http://www.w3.org/2000/svg" id="7386b513-a296-4954-baa6-6cada6ff373e" data-name="Capa 1" viewBox="0 0 512 512">
				  <path id="96c52b96-bca5-4b34-9434-49f89c649dfc" d="M460.8 0H51.2A51.35 51.35 0 0 0 0 51.2v409.6A51.35 51.35 0 0 0 51.2 512h409.6a51.35 51.35 0 0 0 51.2-51.2V51.2A51.35 51.35 0 0 0 460.8 0zM256 153.6c56.32 0 102.4 46.08 102.4 102.4S312.32 358.4 256 358.4 153.6 312.32 153.6 256 199.68 153.6 256 153.6zM64 460.8c-7.68 0-12.8-5.12-12.8-12.8V230.4H105c-2.56 7.68-2.56 17.92-2.56 25.6 0 84.48 69.12 153.6 153.6 153.6S409.6 340.48 409.6 256c0-7.68 0-17.92-2.56-25.6h53.76V448c0 7.68-5.12 12.8-12.8 12.8H64zm396.8-345.6c0 7.68-5.12 12.8-12.8 12.8h-51.2c-7.68 0-12.8-5.12-12.8-12.8V64c0-7.68 5.12-12.8 12.8-12.8H448c7.68 0 12.8 5.12 12.8 12.8v51.2z" class="2f51fd4e-30f3-43ba-8d49-42b9a3e08c26" data-name="post-instagram"/>
				</svg>
			</a>
			<a href="https://www.facebook.com/casino.admiral.by" target="_blank" class="soc fb">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.1 96.1">
				  <path d="M72.1 0H59.6c-14 0-23.1 9.3-23.1 23.7v10.9H24c-1.1 0-2 .9-2 2v15.8c0 1.1.9 2 2 2h12.5v39.9c0 1.1.9 2 2 2h16.4c1.1 0 2-.9 2-2v-40h14.7c1.1 0 2-.9 2-2V36.5c0-.5-.2-1-.6-1.4s-.9-.6-1.4-.6H56.8v-9.2c0-4.4 1.1-6.7 6.8-6.7H72c1.1 0 2-.9 2-2V2c0-1.1-.8-2-1.9-2z"/>
				</svg>
			</a>
		</div>

<?php get_footer(); ?>