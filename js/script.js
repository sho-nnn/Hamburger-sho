jQuery( function( $ ) {
	$( ".js-sidebar" ).on( "click", function() {
		$( ".p-sidebar" ).toggleClass( "is-open" );
        $("body").append('<div class="c-menu__bg">');
        $(".c-menu__bg").fadeIn();
        $( ".js-sidebar__out" ).on( "click", function() {
            $(".c-menu__bg").fadeOut(function() {
                $(this).remove();
            });
        });

		// $( ".p-gmenu" ).toggleClass( "is-open" );
		// $( "body" ).toggleClass( "is-open" );
        return false;
	} );
} );



