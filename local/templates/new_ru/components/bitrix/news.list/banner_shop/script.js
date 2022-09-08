$('document').ready(function () {
    // ИНИЦИАЛИЗАЦИЯ СЛАЙДЕРА БАНЕРА И ЕГО АВТОВОСПРОИЗВЕДЕНИЕ
    var itemCount = $('.shop__banner-item');
    if (itemCount.length > 0) {
        itemCount = itemCount.length;
        $('.shop__banner-swiper').slick({
            autoplay: true,
            arrows: false,
            autoplaySpeed: 3500,
        });

        const initSwiper = () => {
            // ИНИЦИАЛИЗАЦИЯ МАГАЗИННОГО СЛАЙДЕРА
            $('.shop__swiper').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: true,
                variableWidth: true,
                responsive: [
                    {
                        breakpoint: 2460,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: true,
                            adaptiveHeight: true,
                            variableWidth: true,
                        },
                    },
                    {
                        breakpoint: 1480,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: false,
                            adaptiveHeight: true,
                            variableWidth: true,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: 'unslick',
                    },
                ],
            });
        };

        // ДОБАВЛЕНИЕ И УДАЛЕНИЕ АКТИВНОГО КЛАССА ДЛЯ ТОЧЕК СЛАЙДЕРА
        $('.shop__banner-swiper').on('afterChange', function (currentSlide) {
            var banners = $('.shop__switcher-dot');
            var currentSlide = $('.shop__banner-swiper').slick('slickCurrentSlide');

            if (currentSlide == 0) {
                banners[currentSlide].classList.add('shop__switcher-dot--active');
                $('.shop__switcher-dot')
                    .not(banners[currentSlide])
                    .removeClass('shop__switcher-dot--active');
            } else if (currentSlide == itemCount - 1 && itemCount > 2) {
                banners[2].classList.add('shop__switcher-dot--active');
                $('.shop__switcher-dot')
                    .not(banners[2])
                    .removeClass('shop__switcher-dot--active');
            } else {
                banners[1].classList.add('shop__switcher-dot--active');
                $('.shop__switcher-dot')
                    .not(banners[1])
                    .removeClass('shop__switcher-dot--active');
            }
        });

        initSwiper();


        $(window).on('resize', _.debounce(initSwiper, 200));
        // $(window).on('resize', $.debounce(200, initSwiper));

    }
});
