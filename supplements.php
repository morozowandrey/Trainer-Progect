<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
	</head>

	<body>
		<header onmousedown="return false" onselectstart="return false">
				<div class="header-sup">
					<div class="header-contacts_sup_bg">
                        <div class="header-contacts_sup wrapper">
                            <div class="header-contacts__left">
                                <i class="fa fa-whatsapp fa-2x header-contacts__whatsapp" aria-hidden="true"></i>
                                <i class="fa fa-phone fa-2x header-contacts__phoneIcon" aria-hidden="true"></i>
                                <p class="header-contacts__phone">305-680-2247</p>
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
                                <a href="" class="header-contacts__rightSocials"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                                <a href="" class="header-contacts__rightSocials"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                                <a href="" class="header-contacts__rightSocials"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                                <a href="" class="header-contacts__rightSocials"><i class="fa fa-vk fa-2x" aria-hidden="true"></i></a>
                                <a href=""><p class="header-contacts__langEn">en</p></a>
                                <a href=""><p class="header-contacts__langRu">ru</p></a>
                            </div>
                        </div>
					</div>

					<div class="header-nav-box__wrapper">
						<div class="header-nav-box wrapper">
							<img src="./images/logo.png" alt="Logo" class="header-logo">
							<div class="header-nav_mobile-open"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
							<div class="header-nav_mobile-close hidden"><i class="fa fa-times fa-2x" aria-hidden="true"></i></div>
							<nav class="header-nav">
								<a href="" class="header-nav__item">About me</a>
								<a href="" class="header-nav__item">Classes</a>
								<a href="" class="header-nav__item">Suplements</a>
								<a href="" class="header-nav__item">Feedbacks</a>
								<a href="" class="header-nav__item">Gallery</a>
								<a href="" class="header-nav__item">Contact</a>
							</nav>
						</div>
					</div>
					
				</div>

		</header>

        <section class="products">
            <div class="hidden" id="bookTraining-modal" tabindex="-1" role="dialog" aria-labelledby="bookTraining-modalLabel">
                <form id="order-modal" class="bookTraining-modal">
                    <p class="bookTraining-modal__heading">Product name</p>
                    <p class="bookTraining-modal__text">Amount:</p><br>
                    <input class="bookTraining-modal__input" placeholder="write your amount..." type="text" name="amount"><br>
                    <p class="bookTraining-modal__text">Adress:</p><br>
                    <input class="bookTraining-modal__input" type="text" name="adress"><br>
                    <p class="bookTraining-modal__text">Comments:</p><br>
                    <textarea class="bookTraining-modal__input order-textarea" type="text" name="comments" id="textarea-comments" tabindex="4"></textarea><br>
                    <div class="order-modal-checkbox">
                        <input class="order-modal__check" type="checkbox" name="choose" id="checkbox1">
                        <label class="order-modal__inner" for="checkbox1"></label>
                        <p class="order-modal-checkbox__text">Door delivery</p>
                    </div>
                    <p class="order-modal-checkbox__description">Additional cost for door delivery will be charged according to 
                    delivery company</p>
                    <button class="bookTraining-modal__sendButton supOrder-modal">Send</button>
                </form>
            </div>

            <h2 class="products-heading">Products List</h2>

            <div class="product-pak">
                <img src="images/box2.jpg" alt="Clean 9 Pak - Vanilla Ultra Lite" class="product-img">
                <div class="product-discription">
                    - Contains a natural appetite suppressant
                    <br>- Temporarily inhibits the enzyme that converts calories into fat
                    <br>- A useful tool in weight management
                </div>
                <div class="product-name_wrapper">
                    <h4 class="product-name">Clean 9 Pak - Vanilla Ultra Lite</h4>
                    <a href="#order-modal" class="product-button">order!</a>
                </div>
            </div>
            <div class="product-pak">
                <img src="images/box1.jpg" alt="Clean 9 Pak - Vanilla Ultra Lite" class="product-img">
                <div class="product-discription">
                    - Contains a natural appetite suppressant
                    <br>- Temporarily inhibits the enzyme that converts calories into fat
                    <br>- A useful tool in weight management
                </div>
                <div class="product-name_wrapper">
                    <h4 class="product-name">Clean 9 Pak - Vanilla Ultra Lite</h4>
                    <a href="#order-modal" class="product-button">order!</a>
                </div>
            </div>
            <div class="product-pak">
                <img src="images/box3.jpg" alt="Clean 9 Pak - Vanilla Ultra Lite" class="product-img">
                <div class="product-discription">
                    - Contains a natural appetite suppressant
                    <br>- Temporarily inhibits the enzyme that converts calories into fat
                    <br>- A useful tool in weight management
                </div>
                <div class="product-name_wrapper">
                    <h4 class="product-name">Clean 9 Pak - Vanilla Ultra Lite</h4>
                    <a href="#order-modal" class="product-button">order!</a>
                </div>
            </div>

            <div class="products-container wrapper clearfix">
                <div class="product">
                    <img src="images/garcinia_large.png" alt="" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                     <div class="product-name_wrapper">
                        <h4 class="product-name">Forever Garcinia</h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/forever-lean.png" alt="" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                     <div class="product-name_wrapper">
                        <h4 class="product-name">Forever Lean®</h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/forever-therm.png" alt="" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                    <div class="product-name_wrapper">
                        <h4 class="product-name">Forever Therm™</h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/forever-daily.png" alt="" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                    <div class="product-name_wrapper">
                        <h4 class="product-name">Forever Daily®</h4>
                        <a href="#" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/forever-arctic-sea.png" alt="" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                    <div class="product-name_wrapper">
                        <h4 class="product-name">Forever Arctic Sea®</h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/fast-break.png" alt="Forever Fast Break®" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                    <div class="product-name_wrapper">
                        <h4 class="product-name">Forever Fast Break®</h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/aloe-vera-gel.png" alt="Forever Aloe Vera Gel™" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                    <div class="product-name_wrapper">
                        <h4 class="product-name">Forever Aloe Vera Gel™</h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/forever-freedom.png" alt="Forever Freedom®" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                    <div class="product-name_wrapper">
                        <h4 class="product-name">Forever Freedom®</h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/forever-aloe-bits-npeaches.png" alt="Forever Aloe Bits N’ Peaches®" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                    <div class="product-name_wrapper">
                        <h4 class="product-name">Forever Aloe Bits N’ Peaches®</h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/ultra-vanilla.png" alt="Forever Lite Ultra® with Aminotein® Vanilla" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                    <div class="product-name_wrapper">
                        <h4 class="product-name product-name_center product-name_mb">
                            Forever Lite Ultra®
                            <br>with Aminotein®
                            <br>Vanilla
                        </h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/argi.png" alt="ARGI+ Stick Pack" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                    <div class="product-name_wrapper">
                        <h4 class="product-name">ARGI+ Stick Pack</h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                <div class="product">
                    <img src="images/probiotic.png" alt="Forever Active Probiotic®" class="product-img">
                    <div class="product-discription">
                        - Contains a natural appetite suppressant
                        <br>- Temporarily inhibits the enzyme that converts calories into fat
                        <br>- A useful tool in weight management
                    </div>
                    <div class="product-name_wrapper product-name_wrapper_mt">
                        <h4 class="product-name">Forever Active Probiotic®</h4>
                        <a href="#order-modal" class="product-button">order!</a>
                    </div>
                </div>
                
            </div>
        </section>

		<footer class="footer">
			<img src="images/logo.png" alt="footer logo" class="footer-logo">
		</footer>

		<script src="https://use.fontawesome.com/884393b4ef.js"></script>
        <script src="js/main.js"></script>
	</body>
</html>