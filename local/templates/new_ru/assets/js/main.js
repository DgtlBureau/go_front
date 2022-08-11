$(document).ready(function () {
	if (document.documentElement.clientWidth <= 768) {
        const shareButton = document.querySelector('.go-news__modal-banner-share'),
            thisUrl = window.location.href,
            thisTitle = document.title;
		if (shareButton != null) {
			shareButton.addEventListener('click', event => {
				if (navigator.share) {
					navigator.share({
							title: thisTitle,
							url: thisUrl
						})
						.catch(console.error);
				} else {
					alert('Web Share API не поддерживается');
				}
			});
		}
    }

    if (document.documentElement.clientWidth > 768) {
        $('.go-news__modal-banner-share').on('click', function () {
            $(this).children('.go-news__modal-banner-share-links').toggleClass("show")
        });

        $(document).mouseup(function (e) {
            if (!e.target.matches('.go-news__modal-banner-share')) {
                $(".go-news__modal-banner-share-links").removeClass("show")
            }
        })
    }

    $(document).mouseup(function (e) { // событие клика по веб-документу
        var div = $(".go-news__modal-block"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            &&
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            $(".go-news__modal-window").removeClass("flex");
            $("body").removeClass("overflow-no")
            $("html").removeClass("overflow-no")
        }
    });

    $('.main-news__item').on('click', function () {
        var index = $(this).attr("modal-index")
        $(`#modal${index}`).addClass("flex")
        if ($(`#modal${index}`).hasClass("flex")) {
            $("body").addClass("overflow-no")
            $("html").addClass("overflow-no")
        }
    });

    $(document).mouseup(function (e) {
        var div = $(".popup__modal-block");
        if (!div.is(e.target) &&
            div.has(e.target).length === 0) {
            $("#confidentiality-modal").removeClass("flex");
            $("#offer-agreement-modal").removeClass("flex");
            $("body").removeClass("overflow-no")
            $("html").removeClass("overflow-no")
        }
    });

    $('.politics').on('click', function () {

        if ($(this).attr('id') == 'confidentiality-button') {
            $('#confidentiality-modal').addClass("flex")
        }
        if ($(this).attr('id') == 'offer-agreement-button') {
            $('#offer-agreement-modal').addClass("flex")
        }
        if ($('#confidentiality-modal').hasClass("flex") || ($('#offer-agreement-modal').hasClass("flex"))) {
            $("body").addClass("overflow-no")
            $("html").addClass("overflow-no")
        }
    });

    $('.match__button').not('.live').on('click', function () {
        //var previewId = $(this).attr("preview-match")
        $('#preview__modal1').addClass("flex")
        $("body").addClass("overflow-no");
        $("html").addClass("overflow-no")
        return false;
    });

    $(document).mouseup(function (e) {
        var div = $(".popup__modal-block");
        //var previewId = $(".match__button").attr("preview-match")
        if (!div.is(e.target) &&
            div.has(e.target).length === 0) {
            $("#confidentiality-modal").removeClass("flex");
            $("#offer-agreement-modal").removeClass("flex");
            $('#preview__modal1').removeClass("flex");
            $("body").removeClass("overflow-no")
            $("html").removeClass("overflow-no")
        }
    });

    $(document).mouseup(function (e) { // событие клика по веб-документу
        var div = $(".go-news__modal-block"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            &&
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            $(".go-news__modal-window").removeClass("flex");
            $("body").removeClass("overflow-no")
            $("html").removeClass("overflow-no")
        }
    });

    $('.go-news__item').on('click', function () {
        var index = $(this).attr("modal-index")
        console.log(index)
        $(`#modal${index}`).addClass("flex")
        if ($(`#modal${index}`).hasClass("flex")) {
            $("body").addClass("overflow-no")
            $("html").addClass("overflow-no")
        }
    });


    //Раскрытие и скрытие блока с новостями
    $(".go-news__btn").on("click", function () {
        if ($(".go-news__btn").text() == "Все новости") {
            $(".go-news__news-items-block").addClass("max-height")
            $(".go-news__btn").text("Свернуть")
        } else {
            $(".go-news__news-items-block").removeClass("max-height")
            $(".go-news__btn").text("Все новости")
        }
    })

    $(document).mouseup(function (e) { // событие клика по веб-документу
        var div = $(".gohockey-news__modal-block"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            &&
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            $(".gohockey-news__modal-window").removeClass("flex");
            $("body").removeClass("overflow-no")
            $("html").removeClass("overflow-no")
        }
    });

    $('.gohockey-news__item').on('click', function () {
        var index = $(this).attr("modal-index")
        console.log(index)
        $(`#modal${index}`).addClass("flex")
        if ($(`#modal${index}`).hasClass("flex")) {
            $("body").addClass("overflow-no")
            $("html").addClass("overflow-no")
        }
    });

    //Раскрытие и скрытие блока с новостями
    $(".gohockey-news__btn").on("click", function () {
        if ($(".gohockey-news__btn").text() == "Все новости") {
            $(".gohockey-news__news-items-block").addClass("max-height")
            $(".gohockey-news__btn").text("Свернуть")
        } else {
            $(".gohockey-news__news-items-block").removeClass("max-height")
            $(".gohockey-news__btn").text("Все новости")
        }
    })


    $('.popup-open').click(function () {
        $('.popup-fade').fadeIn();
        $('.popup').fadeIn();
        if ($(this).hasClass('slider_img')) {
            $('.popup-img').html($(this).find('img').get(0).outerHTML);
        }
        return false;
    });

    $('.popup-close').click(function () {
        $(this).parents('.popup-fade').fadeOut();
        $('.popup').fadeOut();
        return false;
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade').fadeOut();
        }
    });

    $('.popup-fade').click(function (e) {
        if ($(e.target).closest('.popup').length == 0) {
            $(this).fadeOut();
        }
    });

    $('.popup-open-news').click(function () {
        $('.popup-fade').fadeIn();
        return false;
    });

    $('.popup-close-news').click(function () {
        $(this).parents('.popup-fade-news').fadeOut();
        return false;
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade-news').fadeOut();
        }
    });

    $('.popup-fade-news').click(function (e) {
        if ($(e.target).closest('.popup-news').length == 0) {
            $(this).fadeOut();
        }
    });

    $('.popup-open-search').click(function () {
        $('.popup-fade-search').fadeIn();
        return false;
    });

    $('.popup-close-search').click(function () {
        $(this).parents('.popup-fade-search').fadeOut();
        return false;
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade-search').fadeOut();
        }
    });

    $('.popup-fade-search').click(function (e) {
        if ($(e.target).closest('.popup-search').length == 0) {
            $(this).fadeOut();
        }
    });


    $('.accordion-list > li.filter_mob > .answer').hide();

    $('.accordion-list > li.filter_mob').click(function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active").find(".answer").slideUp();
        } else {
            $(".accordion-list > li.active .answer").slideUp();
            $(".accordion-list > li.active").removeClass("active");
            $(this).addClass("active").find(".answer").slideDown();
        }
        return false;
    });

    // ИНИЦИАЛИЗАЦИЯ СЛАЙДЕРА И ОБОЗНАЧЕНИЕ СТРЕЛОК МОИМИ КЛАССАМИ
    var itemCount = $('.about-us__swiper-item')
    itemCount = itemCount.length
    $('.about-us__swiper').slick({
        prevArrow: '.about-us__switcher-previous',
        nextArrow: '.about-us__switcher-next',
    });

    // ДОБАВЛЕНИЕ И УДАЛЕНИЕ АКТИВНОГО КЛАССА ДЛЯ НОМЕРА СЛАЙДЕРА
    $('.about-us__swiper').on('afterChange', function (currentSlide) {
        var banners = $(".about-us__switcher-dot")
        var currentSlide = $('.about-us__swiper').slick('slickCurrentSlide');

        if (currentSlide == 0) {
            banners[currentSlide].classList.add("about-us__switcher-dot--active")
            $('.about-us__switcher-dot').not(banners[currentSlide]).removeClass('about-us__switcher-dot--active')
        } else if (currentSlide == itemCount - 1) {
            banners[2].classList.add("about-us__switcher-dot--active")
            $('.about-us__switcher-dot').not(banners[2]).removeClass('about-us__switcher-dot--active')
        } else {
            banners[1].classList.add("about-us__switcher-dot--active")
            $('.about-us__switcher-dot').not(banners[1]).removeClass('about-us__switcher-dot--active')
        }
    });

    $('.main-news__swiper').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1441,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 901,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 610,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                    arrows: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $(".regular").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        dots: false,
        responsive: [{
            breakpoint: 481,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: false
            }
        }]
    });

    $('.variable').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1441,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 931,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 501,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                    arrows: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.responsive').slick({
        dots: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.about_swipe').slick({
        prevArrow: '.swiper-button-prev',
        nextArrow: '.swiper-button-next',
    });

    $('.about_swipe').on('afterChange', function (currentSlide) {
        var banners = $(".swiper-pagination-item")
        var currentSlide = $('.about_swipe').slick('slickCurrentSlide');

        banners[currentSlide].classList.add("swiper-pagination-item-active");
        $('.swiper-pagination-item').not(banners[currentSlide]).removeClass('swiper-pagination-item-active');
    })

    $('.go-tournament__swiper').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1376,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 610,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                    arrows: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.gohockey-tournament__swiper').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1376,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 610,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                    arrows: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.quarter-final__swiper').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1376,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 610,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                    arrows: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.go-semi-final__swiper').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1376,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 610,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                    arrows: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.gohockey-semi-final__swiper').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1376,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 610,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                    arrows: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.go-final__swiper').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1376,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 610,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                    arrows: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.gohockey-final__swiper').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1376,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                }
            },
            {
                breakpoint: 610,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                    arrows: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

});