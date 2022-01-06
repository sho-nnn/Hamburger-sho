jQuery( function( $ ) {
	$( ".js-sidebar" ).on( "click", function() {
		$( ".p-sidebar" ).toggleClass( "is-open" );
        $("body").append('<div class="c-menu__bg">');
        $("body").addClass("fixed");
        $("aside").addClass("scroll");

        $(".c-menu__bg").fadeIn();
        $( ".js-sidebar__out" ).on( "click", function() {
            $("body").removeClass("fixed");
            $("aside").removeClass("scroll");
            $(".c-menu__bg").fadeOut(function() {
                $(this).remove();
            });
        });
		// $( ".p-gmenu" ).toggleClass( "is-open" );
		// $( "body" ).toggleClass( "is-open" );
        return false;
	} );
} );

// $(function(){
//     var state = false;
//     var pos;
//     $(‘.hamburger’).click(function(){
//     if (state == false) {
//     pos = $(window).scrollTop();
//     $(‘body’).addClass(‘fixed’).css({‘top’: -pos});
//     state = true;
//     } else {
//     $(‘body’).removeClass(‘fixed’).css({‘top’: 0});
//     window.scrollTo(0, pos);
//     state = false;
//     }
//     });
//     });


