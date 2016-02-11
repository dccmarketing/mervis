jQuery(function($){
	$(function() {
		$( "#accordion" ).accordion({
			heightStyle: "content",
			collapsible: true,
			active: false
		});
	});
});

setTimeout(
	function(){
		var a=document.createElement("script");
		var b=document.getElementsByTagName("script")[0];
		a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0018/2018.js?"+Math.floor(new Date().getTime()/3600000);
		a.async=true;
		a.type="text/javascript";
		b.parentNode.insertBefore(a,b);
	},
1);

/**
 * Show location info
 */
jQuery(document).ready(function($){

	$(".location").each( function() {

		var location = $(this);
		var button = location.children(".show-info");
		var content = location.children(".loc-info");
		var plus_minus = button.children(".show-button");

		if ( ! content.hasClass( "open" ) ) {

			button.click( function(){

				content.toggleClass("open");

				if ( content.hasClass( "open" ) ) {

					plus_minus.html("-");
					plus_minus.css( "padding", "0 0.5625em 0.1em" );

				} else {

					plus_minus.html("+");
					plus_minus.css( "padding", "" );

				}

			}); // button.click()

		}
	}); // .location
});