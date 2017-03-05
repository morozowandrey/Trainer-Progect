$(window).on("load", function(){

	// MOBILE MENU
    $(".header-nav_mobile-open").on("click", function(e){
        $(".header-nav, .header-nav_mobile-close").addClass("visible");  
        $(".header-nav_mobile-close").removeClass("hidden");  
        $(".header-nav_mobile-open").addClass("hidden");  
    })

    $(".header-nav_mobile-close, .header-nav__item").on("click", function(e){
        $(".header-nav, .header-nav_mobile-close").removeClass("visible");  
        $(".header-nav_mobile-close").addClass("hidden");  
        $(".header-nav_mobile-open").removeClass("hidden");  
    })

    // FIXED MENU
    $(window).scroll(function(){

        if ($(this).scrollTop() > 20) {
            $(".header-nav-box__wrapper").addClass("fixed-nav").fadeIn('slow');
        } else {
            $(".header-nav-box__wrapper").removeClass("fixed-nav").fadeIn('fast');
        };
        
        // hide slider dots
        if ($(this).scrollTop() > 550) {
            $(".header").css('z-index', '6');
        } else {
             $(".header").css('z-index', '5');
        };
    });

    // ANKERS
    $('a[href^="#"]').on("click", function (e) {
        e.preventDefault();
        
        var headerHeight = $(".header-nav-box").outerHeight();

        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;

        $('body').animate( { scrollTop: (destination - headerHeight) }, 1000 );
    });

    // POPUPS
    $('.header-calendar-button').magnificPopup();
    $('.header-button').magnificPopup();
    $('.about-me__button').magnificPopup();
    $('.plan-bookButton').magnificPopup();
    $('.feedback-link').magnificPopup();
    $('.promotion-content__button').magnificPopup();
    $('.product-button').magnificPopup();

        // supplemenst
    $('.product-button').magnificPopup();
    $('.header-calendar-button').magnificPopup();
    
    // POPUP FILE UPLOAD
    $(function(){
        var wrapper = $( ".feedback-file-upload" ),
            inp = wrapper.find( "input" ),
            btn = wrapper.find( "button" ),
            lbl = wrapper.find( "div" );

        var file_api = ( window.File && window.FileReader && window.FileList && window.Blob ) ? true : false;

        inp.change(function(){
            var file_name;
            if( file_api && inp[ 0 ].files[ 0 ] ) 
                file_name = inp[ 0 ].files[ 0 ].name;
            else
                file_name = inp.val().replace( "C:\\fakepath\\", '' );

            if( ! file_name.length )
                return;

            if( lbl.is( ":visible" ) ){
                lbl.text( file_name );
                btn.text( "Add your photo" );
            }else
                btn.text( file_name );
        }).change();

    });

	// GALLERY SLIDER
    $(function() {
				$('#dg-container').gallery();
			});

	// FEEDBACKS SLIDER
    $('.feedbacks-slider').slick({
        arrows: false,
        dots: true
    });

});

