<section class="contacts" id="contacts">
    <h2 class="contacts-heading">Contact Me</h2>
    <div class="contacts-box wrapper">
        <div class="contacts-left">
            <div class="contacts-left__box1">
                <a href="" class="contacts-link"><i class="fa fa-vk fa-3x" aria-hidden="true"></i></a>
                <a href="" class="contacts-link"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
            </div>
            <div class="contacts-left__box2">
                <a href="" class="contacts-link"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                <a href="" class="contacts-link"><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></a>
            </div>
        </div>
        <form action="/" method="post"> 
        <div class="contacts-inputs">
            <div class="field-wrap">
                <input class="input_first" placeholder="Name:" type="text"/>
            </div>
            <div class="field-wrap">
                <input placeholder="Email:" type="email"/>
            </div>
            <div class="field-wrap">
                <textarea class="input-textarea input_last" name="message" id="message" tabindex="4" placeholder="Please write your question here..."></textarea>
            </div>
        </div>
        </form>
        <div class="contacts-right">
            <div class="contacts-right_box">
                <a href="" class="contacts-link contacts-link_right"><i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i></a>
                <p class="contacts-right_discription">E-mail</p>
            </div>
            <div class="contacts-right_box">
                <a href="" class="contacts-link contacts-link_right"><i class="fa fa-mobile fa-4x" aria-hidden="true"></i></a>
                <p class="contacts-right_discription">Phone</p>
            </div>
            <div class="contacts-right_box">
                <a href="" class="contacts-link contacts-link_right"><i class="fa fa-skype fa-3x" aria-hidden="true"></i></a>
                <p class="contacts-right_discription">Skype</p>
            </div>

        </div>
    </div>
    <a href="#" class="contacts-button">Send</a>
    <div class="contacts-icons_mobile">
        <a href="" class="contacts-link_mobile"><i class="fa-3x fa fa-vk" aria-hidden="true"></i></a>
        <a href="" class="contacts-link_mobile"><i class="fa-3x fa fa-facebook" aria-hidden="true"></i></a>
        <a href="" class="contacts-link_mobile"><i class="fa-3x fa fa-instagram" aria-hidden="true"></i></a>
        <a href="" class="contacts-link_mobile"><i class="fa-3x fa fa-youtube" aria-hidden="true"></i></a>
        <a href="" class="contacts-link_mobile"><i class="fa-3x fa fa-envelope-o" aria-hidden="true"></i></a>
        <a href="" class="contacts-link_mobile"><i class="fa-3x fa fa-mobile" aria-hidden="true"></i></a>
        <a href="" class="contacts-link_mobile"><i class="fa-3x fa fa-skype" aria-hidden="true"></i></a>
    </div>
</section>
<footer class="footer">
    <img src="<?php bloginfo('template_url')?>/images/logo.png" alt="footer logo" class="footer-logo">
</footer>

<script src="https://use.fontawesome.com/884393b4ef.js"></script>
<?php wp_footer();  ?>
</body>
</html>