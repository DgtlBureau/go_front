$(document).ready(function() {

$(".regular").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    dots: false,
    responsive: [
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        }
      ]
});

$(".variable").slick({
    dots: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true
});

$('.responsive').slick({
  dots: false,
  infinite: false,
  slidesToShow: 1,
  slidesToScroll: 1
});





});

$(document).ready(function($) {
	$('.popup-open').click(function() {
		$('.popup-fade').fadeIn();
		return false;
	});	
	
	$('.popup-close').click(function() {
		$(this).parents('.popup-fade').fadeOut();
		return false;
	});		
 
	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			$('.popup-fade').fadeOut();
		}
	});
	
	$('.popup-fade').click(function(e) {
		if ($(e.target).closest('.popup').length == 0) {
			$(this).fadeOut();					
		}
	});
});

$(document).ready(function($) {
	$('.popup-open-news').click(function() {
		$('.popup-fade').fadeIn();
		return false;
	});	
	
	$('.popup-close-news').click(function() {
		$(this).parents('.popup-fade-news').fadeOut();
		return false;
	});		
 
	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			$('.popup-fade-news').fadeOut();
		}
	});
	
	$('.popup-fade-news').click(function(e) {
		if ($(e.target).closest('.popup-news').length == 0) {
			$(this).fadeOut();					
		}
	});
});

$(document).ready(function($) {
	$('.popup-open-search').click(function() {
		$('.popup-fade-search').fadeIn();
		return false;
	});	
	
	$('.popup-close-search').click(function() {
		$(this).parents('.popup-fade-search').fadeOut();
		return false;
	});		
 
	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			$('.popup-fade-search').fadeOut();
		}
	});
	
	$('.popup-fade-search').click(function(e) {
		if ($(e.target).closest('.popup-search').length == 0) {
			$(this).fadeOut();					
		}
	});
});

$(document).ready(function(){
  $('.accordion-list > li.filter_mob > .answer').hide();
    
  $('.accordion-list > li.filter_mob').click(function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active").find(".answer").slideUp();
    } else {
      $(".accordion-list > li.active .answer").slideUp();
      $(".accordion-list > li.active").removeClass("active");
      $(this).addClass("active").find(".answer").slideDown();
    }
    return false;
  });
  
});

if ($(window).width() >= 1200) {
    $('.go-tournament__swiper').slick({
     infinite: false,
     slidesToShow: 4,
     slidesToScroll: 1,
   });
 }
 if (($(window).width() < 1200) && ($(window).width() >= 930)) {
   $('.go-tournament__swiper').slick({
     infinite: false,
     slidesToShow: 3,
     slidesToScroll: 1,
   });
 }
 if (($(window).width() < 930) && ($(window).width() >= 650)) {
   $('.go-tournament__swiper').slick({
     infinite: false,
     slidesToShow: 2,
     slidesToScroll: 1,
   });
 }
 if (($(window).width() < 650)) {
   $('.go-tournament__swiper').slick({
     infinite: false,
     slidesToShow: 1,
     slidesToScroll: 1,
   });
 }

 if ($(window).width() >= 1200) {
    $('.gohockey-tournament__swiper').slick({
     infinite: false,
     slidesToShow: 4,
     slidesToScroll: 1,
   });
 }
 if (($(window).width() < 1200) && ($(window).width() >= 930)) {
   $('.gohockey-tournament__swiper').slick({
     infinite: false,
     slidesToShow: 3,
     slidesToScroll: 1,
   });
 }
 if (($(window).width() < 930) && ($(window).width() >= 650)) {
   $('.gohockey-tournament__swiper').slick({
     infinite: false,
     slidesToShow: 2,
     slidesToScroll: 1,
   });
 }
 if (($(window).width() < 650)) {
   $('.gohockey-tournament__swiper').slick({
     infinite: false,
     slidesToShow: 1,
     slidesToScroll: 1,
   });
 }

 if ($(window).width() >= 1300) {
  $('.go-final__swiper').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
  });
}
if (($(window).width() < 1300) && ($(window).width() >= 930)) {
  $('.go-final__swiper').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
  });
}
if (($(window).width() < 930) && ($(window).width() >= 650)) {
  $('.go-final__swiper').slick({
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
  });
}
if (($(window).width() < 650)) {
  $('.go-final__swiper').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
}

if ($(window).width() >= 1300) {
  $('.gohockey-semi-final__swiper').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
  });
}
if (($(window).width() < 1300) && ($(window).width() >= 930)) {
  $('.gohockey-semi-final__swiper').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
  });
}
if (($(window).width() < 930) && ($(window).width() >= 650)) {
  $('.gohockey-semi-final__swiper').slick({
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
  });
}
if (($(window).width() < 650)) {
  $('.gohockey-semi-final__swiper').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
}