<?php get_header();  ?>
		<section class="about-me" id="about-me">
			<div class="wrapper">
				<div class="about-me_center flex">
					<img src="<?php bloginfo('template_url')?>/images/trainer.png" alt="tariner-image" class="about-me__img">

					<div class="about-me-box">
						<h3 class="about-me__heading">About me</h3>

						<div class="about-me__countries">
							<div class="country-box">
								<p class="country-name">Ukraine <br><span class="country-city">Kiyv</span></p>
							</div>
							<div class="country-box">
								<p class="country-name">UK <br><span class="country-city">London</span></p>
							</div>
							<div class="country-box">
								<p class="country-name">USA <br><span class="country-city">Baltimor</span></p>
							</div>
							<div class="country-box">
								<p class="country-name">UAE <br><span class="country-city">Abu-Dhabi</span></p>
							</div>
							<div class="country-box">
								<p class="country-name">USA <br><span class="country-city">Miami</span></p>
							</div>
							<div class="country-box">
								<p class="country-name--clients">118 <br><span class="country-city--clients">clients<br>satsfied</span></p>
							</div>
						</div>
						<div class="country-box_mobile">
							<p class="country-name--clients_mobile">118 <br><span class="country-city--clients_mobile">clients<br>satsfied</span></p>
						</div>

						<p class="about-me__text">
							There are many variations of passages of 
							Lorem Ipsum available, but the majority have
							suffered alteration in some form, by injected 
							humour, or randomised words which don't look 
							even slightly believable. If you are going to use 
							a passage of Lorem Ipsum, you need to be sure
							there isn't  the Internet.
						</p>
						<a href="#book-form" class="about-me__button">book the training</a>

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
				</div>
			</div>
		</section>

		<section class="training wrapper flex" id="classes">
			<img src="<?php bloginfo('template_url')?>/images/trainer2.png" alt="trainer image" class="training-trainer">
			<img src="<?php bloginfo('template_url')?>/images/trainer-full.png" alt="trainer image" class="training-trainer_mobile">
			<div class="training-plans-box">
				<div class="training-plan-box">
					<div class="plan">
						<img src="<?php bloginfo('template_url')?>/images/athlete-1.png" alt="Body building image" class="plan-img">
						<div class="plan-heading">
							<h4 class="plan-heading__caption">Body building</h4>
							<div class="plan-heading__price">$130</div>
						</div>
						<p class="plan-text">There are many variations of 
							passages of Lorem Ipsum available,
							but the majority suffered alteration 
							are many variations of passages 
							of Lorem Ipsum available,but 
							the majority suffered alterationare 
							many variation of passages of 
							Lorem Ipsum available,but the 
							majority suffered alteration.
						</p>
						<a href="" class="plan-vievButton">VIEW THIS TRAINING</a>
						<a href="#book-form" class="plan-bookButton">book the training</a>

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
				</div>
				<div class="training-plan-box">
					<div class="plan">
						<img src="<?php bloginfo('template_url')?>/images/athlete-2.png" alt="Body building image" class="plan-img">
						<div class="plan-heading">
							<h4 class="plan-heading__caption">Body building</h4>
							<div class="plan-heading__price plan-heading__price_second">$130</div>
						</div>
						<p class="plan-text">There are many variations of 
							passages of Lorem Ipsum available,
							but the majority suffered alteration 
							are many variations of passages 
							of Lorem Ipsum available,but 
							the majority suffered alterationare 
							many variation of passages of 
							Lorem Ipsum available,but the 
							majority suffered alteration.
						</p>
						<a href="" class="plan-vievButton">VIEW THIS TRAINING</a>
					</div>
				</div>
				<div class="training-plan-box">
					<div class="plan plan_lust">
						<img src="<?php bloginfo('template_url')?>/images/athlete-3.png" alt="Body building image" class="plan-img">
						<div class="plan-heading">
							<h4 class="plan-heading__caption">Body building</h4>
							<div class="plan-heading__price plan-heading__price_third">$130</div>
						</div>
						<p class="plan-text">There are many variations of 
							passages of Lorem Ipsum available,
							but the majority suffered alteration 
							are many variations of passages 
							of Lorem Ipsum available,but 
							the majority suffered alterationare 
							many variation of passages of 
							Lorem Ipsum available,but the 
							majority suffered alteration.
						</p>
						<a href="" class="plan-vievButton">VIEW THIS TRAINING</a>
					</div>
				</div>
			</div>
		</section>

		<section class="feedbacks wrapper" id="feedbacks">
			<h2 class="feedbacks-heading">Feedbacks</h2>
			<div class="feedbacks-slider">
			
			<?php
				$connection = mysql_connect("localhost", "admin", "12345");
				$connectedDe = mysql_select_db('wptest');
				if(!$connection || $connectedDe){
					mysql_error();
				}

				$result = mysql_query("SELECT * FROM testimonials");
				mysql_close();

				$row = mysql_fetch_array($result);

				$start_limit = 0;
				$limit = 6;

				while($row = mysql_fetch_array($result))
			{?>
				<div class="feedback">
					<div class="feedback-content">
						<p class="feedback-heading"><?php echo $row['name'] ?></p>
						<p class="feedback-text"><?php echo $row['feedback'] ?></p>
						<a href="#feedback-form" class="feedback-link">LEAVE YOUR FEEDBACK</a>
					</div>
				</div>
			<?php }?>
			</div>

			<?php include_once("testimonials.php") ?>
			<div class="hidden" id="bookTraining-modal" tabindex="-1" role="dialog" aria-labelledby="bookTraining-modalLabel">
				<form id="feedback-form" class="bookTraining-modal" method="post" enctype="multipart/form-data">
					<p class="bookTraining-modal__heading">Write your feedback</p>
					<p class="bookTraining-modal__text">Your name:</p><br>
					<input class="bookTraining-modal__input" type="text" name="name" autocomplete="off"><br>
					<p class="bookTraining-modal__text">Feedback:</p><br>
					<textarea class="bookTraining-modal__input feedback-textarea" autocomplete="off" type="text" name="feedback" id="feedback" tabindex="4" maxlength="500" autocomplete="off"></textarea><br>
					<input class="bookTraining-modal__sendButton" type="submit" name="send" value="Send" action="testimonials.php">
				</form>
			</div>
			

		</section>

		<section class="gallery" id="gallery">
			<h2 class="gallery-heading">Gallery</h2>
			<div id="dg-container" class="dg-container">
				<div class="dg-wrapper">
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image01"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image02"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image03"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image04"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image05"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image06"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image07"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image08"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image09"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image10"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image11"><div></div></a>
					<a href="#"><img src="<?php bloginfo('template_url')?>/images/training1.jpg" alt="image12"><div></div></a>
				</div>
				<nav class="nav-left">	
					<span class="dg-prev"></span>
				</nav>
				<nav class="nav-right">	
					<span class="dg-next"></span>
				</nav>
			</div>
		</section>

		<section class="promotions wrapper">
			<h2 class="promotions-heading">Uncoming Promotions</h2>
			<div class="promotion">
				<div class="promotion-days"><span class="promotion-days__day">7</span> <br><span class="promotion-days__text">days</span></div>
				<div class="promotion-content">
					<h3 class="promotion-content__caption">Special training</h3>
					<p class="promotion-content__dates">01 SEP - 07 SEP</p>
					<p class="promotion-content__text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores 
						officia aut vel facilis, ducimus doloremque harum dicta laborum repellat 
						exercitationem id fuga libero!
					</p>
					<a href="#promotions-form" class="promotion-content__button">Join</a>

					<div class="hidden" id="bookTraining-modal" tabindex="-1" role="dialog" aria-labelledby="bookTraining-modalLabel">
						<form id="promotions-form" class="promotions-form">
							<p class="promotions-form__heading">Fill the form</p>
							<div class="promotions-form__infoBox">
								<p class="infoBox__heading">Name of ivent</p>
								<span class="infoBox__date">19.03.2017</span>
							</div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.47041570603!2d-80.30104416165085!3d25.782461762434902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2z0JzQsNC50LDQvNC4LCDQpNC70L7RgNC40LTQsCwg0KHQqNCQ!5e0!3m2!1sru!2sua!4v1487592363036" id="google-map" frameborder="0" allowfullscreen></iframe><br>
							<p class="bookTraining-modal__text">Name:</p><br>
							<input class="bookTraining-modal__input" type="text" name="name"><br>
							<p class="bookTraining-modal__text">Phone:</p><br>
							<input class="bookTraining-modal__input" type="text" name="phone"><br>
							<p class="bookTraining-modal__text">Email:</p><br>
							<input class="bookTraining-modal__input" type="email" name="email"><br>
							<button class="promotions-form__button">Join</button>
						</form>
					</div>

				</div>
			</div>
			<div class="promotion">
				<div class="promotion-days"><span class="promotion-days__day">7</span> <br><span class="promotion-days__text">days</span></div>
				<div class="promotion-content">
					<h3 class="promotion-content__caption">Special training</h3>
					<p class="promotion-content__dates">01 SEP - 07 SEP</p>
					<p class="promotion-content__text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores 
						officia aut vel facilis, ducimus doloremque harum dicta laborum repellat 
						exercitationem id fuga libero!
					</p>
					<a href="#promotions-form" class="promotion-content__button">Join</a>
				</div>
			</div>
		</section>
<?php get_footer();  ?>