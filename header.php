<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name')?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head();  ?>
	</head>

	<body>
		<header onmousedown="return false" onselectstart="return false">
				<div class="header" id="header">
					<div class="header-contacts wrapper">
							<div class="header-contacts__left">
								<!--<a href=""><i class="fa fa-whatsapp fa-2x header-contacts__whatsapp" aria-hidden="true"></i></a>-->
								<script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
								<div class="header-contacts__skype" id="SkypeButton_Call_warrior_ua1_1">
								<script type="text/javascript">
									Skype.ui({
										"name": "chat",
										"element": "SkypeButton_Call_warrior_ua1_1",
										"participants": ["warrior_ua1"],
										"imageColor": "white",
										"imageSize": 24
									});
								</script>
								</div>
								<a href="tel:+13056802247" class="header-contacts__phone">+1 305 680 2247</a>
								<a href="#book-form" class="header-calendar-button"><span class="calendar-button__text">book online <br>training</span></a>

								<div class="hidden" id="bookTraining-modal" tabindex="-1" role="dialog" aria-labelledby="bookTraining-modalLabel">
									<form id="book-form" class="bookTraining-modal">
										<p class="bookTraining-modal__heading">Write your info</p>
										<p class="bookTraining-modal__text">Name:</p><br>
										<input class="bookTraining-modal__input" type="text" name="name"><br>
										<p class="bookTraining-modal__text">Phone:</p><br>
										<input class="bookTraining-modal__input" type="text" name="phone"><br>
										<p class="bookTraining-modal__text">Adress:</p><br>
										<input class="bookTraining-modal__input bookTraining-modal__input_mapMarker" type="text" name="adress"><br>
										<button class="bookTraining-modal__sendButton">Send</button>
									</form>

								</div>
								
							</div>
							<div class="header-contacts__right">
								<a href="https://www.youtube.com/channel/UC0D3S8T_xbOP_zb7qteevKg" class="header-contacts__rightSocials"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
								<a href="https://www.instagram.com/kplyshko_fitnessmiami" class="header-contacts__rightSocials"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
								<a href="https://www.facebook.com/kplyshko" class="header-contacts__rightSocials"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
								<a href="https://vk.com/kplyshko" class="header-contacts__rightSocials"><i class="fa fa-vk fa-2x" aria-hidden="true"></i></a>
								<a href=""><p class="header-contacts__langEn">en</p></a>
								<a href=""><p class="header-contacts__langRu">ru</p></a>
							</div>
					</div>
					<div class="header-nav-box__wrapper">
						<div class="header-nav-box wrapper">
							<a href="#" class="header-logo__link"><img src="<?php bloginfo('template_url')?>/images/logo.png" alt="Logo" class="header-logo"></a>
							<div class="header-nav_mobile-open"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
							<div class="header-nav_mobile-close hidden"><i class="fa fa-times fa-2x" aria-hidden="true"></i></div>

							<?php 
								$menu = wp_nav_menu( array(
									'echo' => 0,
									'theme_location' => 'menu',
									'container_class' => 'header-nav',
									'menu_class' => 'header-nav',
									'container' => 'ul'
								) );

								$menu = str_replace(
									'class="menu-item', 'class="header-nav__item', $menu );
								echo $menu;
							?>

						</div>
					</div>
					<div class="header-offer-box">
						<h1 class="header-caption">your personal trainer</h1>
						<ul class="header-offer-list">
							<li class="header-offer-list__item">Online training 50% off <span class="header-actualPrice">299</span><span class="header-oldPrice">599</span></li>
							<li class="header-offer-list__item">Order now and get free nutrition plan</li>
						</ul>
						<a href="#consultation-form" class="header-button">GET FREE<br>CONSULTATION</a>

						<div class="hidden" id="bookTraining-modal" tabindex="-1" role="dialog" aria-labelledby="bookTraining-modalLabel">
							<form id="consultation-form" class="bookTraining-modal">
								<p class="bookTraining-modal__heading">Write your info</p>
								<p class="bookTraining-modal__text">Name:</p><br>
								<input class="bookTraining-modal__input" type="text" name="name"><br>
								<p class="bookTraining-modal__text">Phone:</p><br>
								<input class="bookTraining-modal__input" type="text" name="phone"><br>
								<p class="bookTraining-modal__text">Email:</p><br>
								<input class="bookTraining-modal__input" type="email" name="email"><br>
								<button class="bookTraining-modal__sendButton">Send</button>
							</form>
						</div>
						
					</div>
				</div>

				<?php echo do_shortcode("[metaslider id=9]"); ?>
		</header>