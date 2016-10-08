<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-160.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/favicon-57.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<?php wp_head(); ?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>

	<!-- header -->
	<div class="wrapper header-wr">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 logo-container">
					<a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Казино у Адмирала"></a>
				</div>
				<div class="col-xs-7 menu-container">
					<div class="burger-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<ul class="menu">
						<li class="<?php if(is_home()): ?>current-menu-item<?php endif; ?>">
							<a href="/">
								<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 27 27">
									<path d="M3.7 24.9s0 .6.6.6H11v-5.6s-.1-.9.8-.9h2.8c1.1 0 1 .9 1 .9v5.6h6.7c.8 0 .7-.8.7-.8V14.4L13.6 6l-10 8.4.1 10.5z" class="st0"/>
									<path d="M0 13.6s.9 1.6 2.7 0l11-9.3L24 13.6c2.1 1.5 2.9 0 2.9 0l-13.3-12L0 13.6zm23.8-9.3h-2.7v3.2l2.7 2.3" class="st0"/>
								</svg>
								Главная
							</a>
						</li>
						<?php if(is_single() && in_category('news')){$news = true;}; ?>
						<li class="<?php if(is_category('news') || $news): ?>current-menu-item<?php endif; ?>">
							<a href="/category/news/">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 343 343">
									<path d="M180.8 176c0 2.2-1.8 4-4 4H89c-2.2 0-4-1.8-4-4v-8.1c0-2.2 1.8-3.9 4-3.9h87.8c2.2 0 4 1.8 4 4v8.1-.1zm123.9 0c0 2.2-1.8 4-4 4H213c-2.2 0-4-1.8-4-4v-8.1c0-2.2 1.8-3.9 4-3.9h87.8c2.2 0 4 1.8 4 4v8.1-.1zm-123.9 43.8c0 2.2-1.8 4-4 4H89c-2.2 0-4-1.8-4-4v-8.1c0-2.1 1.8-3.9 4-3.9h87.8c2.2 0 4 1.8 4 4v8.2-.2zm123.9 0c0 2.2-1.8 4-4 4H213c-2.2 0-4-1.8-4-4v-8.1c0-2.1 1.8-3.9 4-3.9h87.8c2.2 0 4 1.8 4 4v8.2-.2zm-123.9 43.7c0 2.2-1.8 4-4 4H89c-2.2 0-4-1.8-4-4v-8.1c0-2.2 1.8-3.9 4-3.9h87.8c2.2 0 4 1.8 4 4v8.2-.2zm123.9 0c0 2.2-1.8 4-4 4H213c-2.2 0-4-1.8-4-4v-8.1c0-2.2 1.8-3.9 4-3.9h87.8c2.2 0 4 1.8 4 4v8.2-.2z"/>
									<path d="M.4 98.4L46.3 300c.9 4.4 2.6 7.5 4.8 9.1 3.5 4.8 9.3 8 15.8 8h256.6c10.7 0 19.5-8.7 19.5-19.5V45.2c0-10.7-8.7-19.4-19.5-19.4H66.9c-10.7 0-19.5 8.7-19.5 19.4 0 0-2.8 128.6 0 171.9.4 6.3-1.2 9.2-1.3 8.8C38 195.2 14.5 95.5 14.5 95.5c-.2-1-.1-1.9.4-2.4.4-.5 1.3-.8 2.3-.8h11.2s4.2.1 4.2-3.3v-7.7c0-3.4-4.2-3.3-4.2-3.3H17.2c-5.4 0-10.3 2.2-13.5 6.2-3.2 3.7-4.4 9-3.3 14.2zm61.5-53.1c0-2.7 2.3-5 5.1-5h256.6c2.7 0 5.1 2.3 5.1 5v252.4c0 2.8-2.3 5.1-5 5.1H66.9c-2.8 0-5.1-2.3-5.1-5 .1-.1.1-252.5.1-252.5z"/>
									<path d="M303.3 63.1H86.4c-1.9 0-3.6 1.6-3.6 3.6v68.1c0 1.9 1.6 3.5 3.5 3.5h216.9c2 0 3.5-1.6 3.5-3.6v-68c.2-2-1.4-3.6-3.4-3.6zm-150.9 57.5c0 1.8-1.5 3.3-3.3 3.3h-1.4c-1.6 0-3.4-1-4.3-2.3L131.7 103l-2.3-3.7c-.2-.3-2.4-3.9-4.7-8.1-.2-.4-.5-.3-.4.1.1 3.2.2 8.3.2 12.8v16.5c0 1.8-1.5 3.2-3.3 3.2h-1c-1.8 0-3.3-1.5-3.3-3.3V81c0-1.8 1.5-3.2 3.3-3.2h1.8c1.6 0 3.4 1 4.2 2.3L138 98.6c.6 1 1.7 2.7 2.3 3.7.1.2 2.3 3.8 4.3 7.5.1.2.4.4.3-.1-.1-3.2-.4-8.1-.4-12.6V81c0-1.8 1.5-3.3 3.3-3.3h1c1.8 0 3.3 1.5 3.3 3.3v39.6h.3zm34.6 0c0 1.8-1.5 3.3-3.3 3.3h-20.3c-1.8 0-3.3-1.5-3.3-3.3V81c0-1.8 1.5-3.3 3.3-3.3h19.4c1.8 0 3.2 1.5 3.2 3.3v.4c0 1.8-1.5 3.3-3.3 3.3H169c-.6 0-1.1.4-1.1 1v9.5c0 .6.5 1.1 1.1 1.1h12.7c1.8 0 3.3 1.4 3.3 3.2v.3c0 1.8-1.5 3.2-3.3 3.2H169c-.6 0-1.1.5-1.1 1.1v11.5c0 .6.5 1.1 1.1 1.1h14.7c1.8 0 3.3 1.4 3.3 3.2v.7zm56.9-39.4l-11.3 39.7c-.5 1.6-2.1 2.9-3.8 2.9h-1.6c-1.7 0-3.3-1.3-3.7-2.9l-4.5-18.7c-.3-1.2-.7-3.1-1-4.3-.1-.2-.8-3.5-1.5-7-.6 2.4-1.4 5.9-2.3 9.1l-5.7 20.7c-.5 1.6-2.2 2.9-3.8 2.9h-1.6c-1.7 0-3.4-1.3-3.8-2.9l-10-39.6c-.3-.9-.1-1.8.4-2.4s1.3-1 2.2-1h1.6c1.7 0 3.3 1.3 3.7 2.9l4.2 18 1 4.2c0 .1.6 2.7 1.5 6.8.3 1.2.6.4.7-.2.6-2.6 1.4-6 2.1-8.8l5.3-20.1c.4-1.6 2.1-2.9 3.8-2.9h1.6c1.7 0 3.4 1.3 3.8 2.9l4.4 18.1 1 4.2c0 .2.8 3.4 1.5 6.9.1.4.2 1 .4.3.6-2.8 1.4-6.1 2.2-9.4l5.2-20c.4-1.6 2.1-2.9 3.8-2.9h1.5c.9 0 1.7.4 2.2 1.1.5.7.6 1.6.4 2.4h.1zm14 43.3c-4.4 0-9.4-2-9.6-2.1-1.6-.7-2.5-2.5-2-4.2 0 0 .7-2.6 1-3.4.2-.4.6-.3.6-.3l.8.5c2.8 1.7 6.3 2.7 9.6 2.7 5 0 8.1-2.5 8.1-6.4 0-3.1-1.3-5.3-7.6-7.7-8.4-3-12.3-7.3-12.3-13.4 0-7.7 6.3-13 15.3-13 5.4 0 8.7 1.4 10.2 2.3l.3.1s.5.3.3.8l-1 2.8c-.4 1.2-1.5 2-2.8 2-.4 0-.9-.1-1.3-.3 0 0-2.2-1.1-5.9-1.1-5.3 0-7.2 2.9-7.2 5.5 0 3.3 2 5.1 8.1 7.4 8.4 3.2 11.9 7.4 11.9 13.9 0 6.3-4.3 13.7-16.4 13.7l-.1.2z"/>
								</svg>
								Новости
							</a>
						</li>
						<?php if(is_single() && in_category('minsk')){$events = true;}; ?>
						<li class="<?php if(is_category('minsl') || $events): ?>current-menu-item<?php endif; ?>">
							<a href="/category/events/minsk/">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 298.3 298.3">
									<path d="M172.7 157c-8.7 0-15.7 7-15.7 15.7s7 15.7 15.7 15.7 15.7-7 15.7-15.7-7-15.7-15.7-15.7zm-47.1-15.7c8.7 0 15.7-7 15.7-15.7s-7-15.7-15.7-15.7-15.7 7-15.7 15.7 7 15.7 15.7 15.7zm47.1-31.4c-8.7 0-15.7 7-15.7 15.7s7 15.7 15.7 15.7 15.7-7 15.7-15.7-7-15.7-15.7-15.7zm15.7-78.5h-78.5v31.4h78.5V31.4zm31.4 109.9c8.7 0 15.7-7 15.7-15.7s-7-15.7-15.7-15.7-15.7 7-15.7 15.7 7 15.7 15.7 15.7zm0 47.1c8.7 0 15.7-7 15.7-15.7s-7-15.7-15.7-15.7-15.7 7-15.7 15.7 7 15.7 15.7 15.7zm-94.2 0c8.7 0 15.7-7 15.7-15.7s-7-15.7-15.7-15.7-15.7 7-15.7 15.7 7 15.7 15.7 15.7zm-47.1 47.1c8.7 0 15.7-7 15.7-15.7s-7-15.7-15.7-15.7-15.7 7-15.7 15.7 7 15.7 15.7 15.7zM266.9 31.4h-15.7v31.4h15.7v204.1H31.4V62.8h15.7V31.4H31.4C14.1 31.4 0 45.5 0 62.8v204.1c0 17.4 14.1 31.4 31.4 31.4h235.5c17.4 0 31.4-14 31.4-31.4V62.8c0-17.3-14-31.4-31.4-31.4zm-188.4 157c8.7 0 15.7-7 15.7-15.7s-7-15.7-15.7-15.7-15.7 7-15.7 15.7 7 15.7 15.7 15.7zm0-47.1c8.7 0 15.7-7 15.7-15.7s-7-15.7-15.7-15.7-15.7 7-15.7 15.7 7 15.7 15.7 15.7zm47.1 94.2c8.7 0 15.7-7 15.7-15.7s-7-15.7-15.7-15.7-15.7 7-15.7 15.7 7 15.7 15.7 15.7zM78.5 62.8c8.7 0 15.7-7 15.7-15.7V15.7C94.2 7 87.2 0 78.5 0S62.8 7 62.8 15.7v31.4c0 8.7 7 15.7 15.7 15.7zm141.3 0c8.7 0 15.7-7 15.7-15.7V15.7c0-8.7-7-15.7-15.7-15.7s-15.7 7-15.7 15.7v31.4c0 8.7 7.1 15.7 15.7 15.7z"/>
								</svg>
								События
							</a>
						</li>
						<li class="<?php if(is_page('poker') || is_page('ruletka') || is_page('blek-dzhek') || is_page('dzhanket-tur') || is_page('igrovyie-avtomatyi') || is_page('pokernyiy-klub') || is_page('bukmekerskaya-kontora') || is_page('pontun')): ?>current-menu-item<?php endif; ?>">
							<a href="/poker">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 232.1 232.1">
									<path d="M116 0C52 0 0 52 0 116s52 116 116 116 116-52.1 116-116S180 0 116 0zm-9.3 9h18v18h-18V9zm90.4 107c0 44.7-36.4 81-81 81-44.7 0-81-36.4-81-81s36.3-81 81-81c44.6 0 81 36.3 81 81zM46.7 34l12.7 12.7-12.7 12.8L34 46.7 46.7 34zm-20 91h-18v-18h18v18zm20 73.1L34 185.3l12.7-12.7 12.7 12.7-12.7 12.8zm78 24.9h-18v-18h18v18zm60.6-24.9l-12.7-12.7 12.7-12.7 12.7 12.7-12.7 12.7zm0-138.6l-12.7-12.7L185.3 34 198 46.7c.1 0-12.7 12.8-12.7 12.8zm19.4 65.5v-18h18v18h-18z"/>
									<path d="M50 116c0 36.4 29.6 66 66 66s66-29.6 66-66-29.6-66-66-66-66 29.6-66 66zm97.6-5.6c3.1 5.1 4.1 9.6 4.1 14.9 0 13.2-9.3 20.3-19.9 20.3-7.2 0-11.4-3.4-13.6-6.3L122 153h-12l3.8-13.3c-2.3 2.8-6.4 6.2-13.4 6.2-10.6 0-20-7.2-20-20.5 0-5.4 1-10 4.1-15.1 4.8-7.9 31.7-30.7 31.7-30.7s26.6 22.9 31.4 30.8z"/>
								</svg>
								Игры
							</a>
						</li>
						<li class="<?php if(is_page('kontaktyi')): ?>current-menu-item<?php endif; ?>">
							<a href="/kontaktyi/">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
									<path d="M17.9 20h-.7c-.4 0-.6-.3-.6-.6 0-.1 0-.2.1-.3.4-.4.8-.9 1-1.4.1.1.1.1.2.1.4 0 .8-.8.8-1.4s0-1-.4-1h-.1c0-1.5-.4-3.4-2.8-3.4s-2.7 1.9-2.8 3.4h-.1c-.4 0-.4.5-.4 1 0 .6.4 1.4.8 1.4h.1c.2.5.6 1 .9 1.4.1.1.2.2.2.4 0 .4-.3.6-.7.6h-.7c-1.4 0-2.6 1.1-2.6 2.6v.7c0 .5.4.8.8.8h8.7c.4 0 .8-.4.8-.8v-.7c.1-1.5-1.1-2.7-2.5-2.8zm7.8-7.1h-7.3c.2.5.4 1.1.4 1.8.2.1.3.3.4.4h6.5c.3 0 .6-.3.6-.6v-1c0-.4-.3-.6-.6-.6z"/>
									<path d="M25.6 16.9h-6.3c-.2.6-.6 1.3-1.2 1.5l-.1.1v.6h7.6c.3 0 .6-.3.6-.6v-1c.1-.3-.2-.6-.6-.6zm0 4h-4.9c.3.5.5 1.1.5 1.8v.3h4.4c.3 0 .6-.3.6-.6v-1c.1-.3-.2-.5-.6-.5z"/>
									<path d="M28.3 6.8H8.1c-2.1 0-3.7 1.7-3.7 3.7v14.8c0 2.1 1.7 3.7 3.8 3.7h20.1c2.1 0 3.8-1.7 3.8-3.7V10.6c0-2.1-1.7-3.8-3.8-3.8zm1.9 18.6c0 1.1-.9 2-2 2H8.1c-1.1 0-2-.9-2-2V10.6c0-1.1.9-2 2-2h20.1c1.1 0 2 .9 2 2v14.8z"/>
									<path d="M3.7 4.6h20.1c.8 0 1.5.5 1.8 1.2h1.8c-.4-1.7-1.9-3-3.7-3h-20C1.7 2.8 0 4.5 0 6.6v14.8c0 2 1.5 3.5 3.4 3.7v-1.8c-.9-.2-1.6-1-1.6-1.9V6.6c0-1.1.9-2 1.9-2z"/>
								</svg>
								Контакты
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-2 header-btn">
					<a href="#fform" class="btn btn-primary fancybox">Заказать звонок</a>
				</div>
			</div>
		</div>
	</div>