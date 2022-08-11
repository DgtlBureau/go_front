if ($(window).width() >= 1441) {
    $('.variable').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
    });
}
if (($(window).width() < 1441) && ($(window).width() >= 930)) {
    $('.variable').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
    });
}
if (($(window).width() < 930) && ($(window).width() >= 650)) {
    $('.variable').slick({
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1,
    });
}
if (($(window).width() < 500)) {
    $('.variable').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
}