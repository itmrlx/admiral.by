<?php /*
template name: Покер
*/ ?>

<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

	<div class="container">
		<div class="row">
			<ul class="tab-menu">
				<li class="<?php if(is_page('poker')):echo " current-menu-item"; endif; ?>"><a href="/poker">Покер</a></li>
				<li class="<?php if(is_page('ruletka')):echo "current-menu-item"; endif; ?>"><a href="ruletka">Рулетка</a></li>
				<li class="<?php if(is_page('blek-dzhek')):echo " current-menu-item"; endif; ?>"><a href="/blek-dzhek">Блек Джек</a></li>
				<li class="<?php if(is_page('dzhanket-tur')):echo " current-menu-item"; endif; ?>"><a href="dzhanket-tur">Джанкет тур</a></li>
				<li class="<?php if(is_page('igrovyie-avtomatyi')):echo " current-menu-item"; endif; ?>"><a href="/igrovyie-avtomatyi">Игровые автоматы</a></li>
				<li class="<?php if(is_page('bukmekerskaya-kontora')):echo " current-menu-item"; endif; ?>"><a href="/bukmekerskaya-kontora">Букмекерская контора</a></li>
				<li class="<?php if(is_page('pontun')):echo " current-menu-item"; endif; ?>"><a href="/pontun">Понтун</a></li>
				<li class="<?php if(is_page('pontun')):echo " current-menu-item"; endif; ?>"><a href="/lovi-volnu">Лови волну</a></li>
				<li class="<?php if(is_page('pontun')):echo " current-menu-item"; endif; ?>"><a href="/punto-banko">Пунто Банко</a></li>
				<li class="<?php if(is_page('pokernyiy-klub')):echo " current-menu-item"; endif; ?>"><a href="/pokernyiy-klub">Покерный клуб</a></li>
			</ul>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="poker-title">Виды покера</div>
				<div class="row">
					<ul class="tab-menu2" id="nav-tab">
						<?php $cnt1 = 0; ?>
						<?php if( have_rows('poker') ):while ( have_rows('poker') ) : the_row(); ?>
							<li class="one"><a href="#tab<?=$cnt1++;?>"><?php the_sub_field('poker_title'); ?></a></li>
						<?php endwhile; endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- tab -->
	<div class="tabs-container-wr">
		<?php $cnt2 = 0; ?>
		<?php if( have_rows('poker') ):while ( have_rows('poker') ) : the_row(); ?>
			<div class="tabs-pane" id="tab<?=$cnt2++;?>">
				<div class="container white-container">
					<h1 class="hr-title"><?php the_sub_field('poker_title'); ?></h1>
					<?php the_sub_field('poker_desc'); ?>
				</div>
				<!-- jackpot -->
				<?php if(
					strlen(get_sub_field('poker_jack_num1')) !== 0 ||
					strlen(get_sub_field('poker_jack_num2')) !== 0 ||
					strlen(get_sub_field('poker_jack_num3')) !== 0 ||
					strlen(get_sub_field('poker_jack_num4')) !== 0 ||
					strlen(get_sub_field('poker_jack_num5')) !== 0 ||
					strlen(get_sub_field('poker_jack_num6')) !== 0 ||
					strlen(get_sub_field('poker_jack_num7')) !== 0 ||
					strlen(get_sub_field('poker_jack_num8')) !== 0
				): ?>
					<div class="wrapper jackpot-wr">
						<div class="container">
							<h2 class="title"><?php the_sub_field('poker_jack_title'); ?></h2>
							<div class="numbers">
								<?php if(strlen(get_sub_field('poker_jack_num1')) !== 0): ?><span><?php the_sub_field('poker_jack_num1') ?></span><?php endif; ?>
								<?php if(strlen(get_sub_field('poker_jack_num2')) !== 0): ?><span class="pr"><?php the_sub_field('poker_jack_num2') ?></span><?php endif; ?>
								<?php if(strlen(get_sub_field('poker_jack_num3')) !== 0): ?><span><?php the_sub_field('poker_jack_num3') ?></span><?php endif; ?>
								<?php if(strlen(get_sub_field('poker_jack_num4')) !== 0): ?><span><?php the_sub_field('poker_jack_num4') ?></span><?php endif; ?>
								<?php if(strlen(get_sub_field('poker_jack_num5')) !== 0): ?><span class="pr"><?php the_sub_field('poker_jack_num5') ?></span><?php endif; ?>
								<?php if(strlen(get_sub_field('poker_jack_num6')) !== 0): ?><span><?php the_sub_field('poker_jack_num6') ?></span><?php endif; ?>
								<?php if(strlen(get_sub_field('poker_jack_num7')) !== 0): ?><span><?php the_sub_field('poker_jack_num7') ?></span><?php endif; ?>
								<?php if(strlen(get_sub_field('poker_jack_num8')) !== 0): ?><span><?php the_sub_field('poker_jack_num8') ?></span><?php endif; ?>
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
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.8 96.8">
							  <path d="M62.6 0H39.5C29.2 0 22.1 2.3 15.7 7.6c-5 4.4-8.1 10.7-8.1 16.9 0 9.6 7.3 19.8 20.9 19.8 1.3 0 2.8-.1 4-.3l-.2.5c-.5 1.3-1.1 2.5-1.1 4.5 0 3.8 1.8 6.1 3.6 8.3l.2.3h-.4c-5.6.4-16 1.1-23.7 5.8-9 5.4-9.7 13.1-9.7 15.4 0 9 8.4 18.1 27.1 18.1 21.8 0 33.1-12 33.1-23.9 0-8.8-5.1-13.1-10.6-17.7l-4.6-3.6c-1.4-1.2-3.2-2.6-3.2-5.4 0-2.7 1.8-4.4 3.3-6l.2-.2c5-3.9 10.6-8.4 10.6-18 0-9.7-6-14.6-8.9-17H56c.1 0 .2 0 .3-.1L62.9.8c.2-.1.3-.3.2-.6-.1-.1-.3-.2-.5-.2zm-28 91.5c-13.3 0-22.2-6.2-22.2-15.4 0-6 3.6-10.4 10.8-13 5.7-1.9 13.2-2 13.2-2 1.3 0 1.9 0 2.9.1C48.6 67.8 53 71.3 53 77.9c.1 8.4-7 13.6-18.4 13.6zm-.1-50.7c-11.1 0-15.8-14.6-15.8-22.5 0-4 .9-7 2.8-9.4 2-2.5 5.5-4.2 8.8-4.2 10.2 0 15.9 13.7 15.9 23.2 0 1.5 0 6.1-3.1 9.2-2.2 2.2-5.6 3.7-8.6 3.7zM95 45.2H82.8V33.1c0-.3-.2-.5-.5-.5h-5.2c-.3 0-.5.2-.5.5v12.1H64.5c-.3 0-.5.2-.5.5V51c0 .3.2.5.5.5h12.1v12.2c0 .3.2.5.5.5h5.2c.3 0 .5-.2.5-.5V51.5H95c.3 0 .5-.2.5-.5v-5.3c0-.3-.2-.5-.5-.5z"/>
							</svg>
						</a>
						<a href="https://www.facebook.com/casino.admiral.by" target="_blank" class="soc fb">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.1 96.1">
							  <path d="M72.1 0H59.6c-14 0-23.1 9.3-23.1 23.7v10.9H24c-1.1 0-2 .9-2 2v15.8c0 1.1.9 2 2 2h12.5v39.9c0 1.1.9 2 2 2h16.4c1.1 0 2-.9 2-2v-40h14.7c1.1 0 2-.9 2-2V36.5c0-.5-.2-1-.6-1.4s-.9-.6-1.4-.6H56.8v-9.2c0-4.4 1.1-6.7 6.8-6.7H72c1.1 0 2-.9 2-2V2c0-1.1-.8-2-1.9-2z"/>
							</svg>
						</a>
					</div>
				<?php endif; ?>
			</div>
		<?php endwhile; endif; ?>
	</div>
	
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>