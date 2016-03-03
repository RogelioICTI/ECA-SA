//jQuery to collapse the navbar on scroll

$( document ).ready(function() {
	
    if($(".navbar").outerHeight(true)>51){
		$("#logo").css('width','70%');
	}else{
		$("#logo").css('width','50%');
	}
});


$(window).scroll(function() {
	
	
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
		$("#logo").css('width','50%');
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");		
		setTimeout(function(){
			var elmnt = document.getElementById("navbar_main");
	
			if(elmnt.offsetHeight>51){
				$("#logo").css('width','70%');
			}
		},100);
    }
		
	
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
		
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
		
        event.preventDefault();
    });
});
