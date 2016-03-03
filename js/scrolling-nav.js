//jQuery to collapse the navbar on scroll

$( document ).ready(function() {
	
    if($(".navbar").outerHeight(true)>51){
		$(".navbar-brand").css('max-width','340px');
                            $(".imagen_chiquilla").css('margin-top','0px');
	}else{
            $(".navbar-brand").css('max-width','280px');
            $(".imagen_chiquilla").css('margin-top','5px');
	}

});


$(window).scroll(function() {
	
	
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
            $(".navbar-brand").css('max-width','280px');
            $(".imagen_chiquilla").css('margin-top','5px');
		//$("#logo").css('width','30%');
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");		
		setTimeout(function(){
			var elmnt = document.getElementById("navbar_main");
	
			if(elmnt.offsetHeight>51){
                            $(".navbar-brand").css('max-width','340px');
                            $(".imagen_chiquilla").css('margin-top','0px');
				//$("#logo").css('width','37%');
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
