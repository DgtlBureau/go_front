$('document').ready(function () {
  // ПРИ НАЖАТИИ НА КОРЗИНКУ ПОЯВЛЯЕТСЯ МОДАЛКА С ТОВАРОМ
  $('.card-products__buy-block').on('click', function () {
    $('.product-added__modal').removeClass('hide');
    $('bode').addClass('no-overflow');
  });
  // ПРИ НАЖАТИИ НА КНОПКУ "ПРОДОЛЖИТЬ ПОКУПКИ" СКРЫВАЕТСЯ МОДАЛКА
  $('.product-added__btn').on('click', function () {
    $('.product-added__modal').addClass('hide');
    $('body').removeClass('no-overflow');
  });
  // ПРИ НАЖАТИИ НА КНОПКУ "КЕСТИК" СКРЫВАЕТСЯ МОДАЛКА
  $('.product-added__close-btn').on('click', function () {
    $('.product-added__modal').addClass('hide');
    $('body').removeClass('no-overflow');
  });
  // ПРИ НАЖАТИИ НА ЛЮБУЮ ОБЛАСТЬ ВНЕ МОДАЛКИ - МОДАЛКА СКРЫВАЕТСЯ
  $(document).mouseup(function (e) {
    var div = $('.product-added__content');
    if (!div.is(e.target) && div.has(e.target).length === 0) {
      $('.product-added__modal').addClass('hide');
      $('body').removeClass('no-overflow');
    }
  });
  // ПРИ НАЖАТИИ НА РАЗМЕРЫ ТОВАРА ДОБАВЛЯТЬ И УДАЛЯТЬ СТИЛИ АКТИВНОСТИ
  $('.card-products__size-selection-item').on('click', function () {
    $('.card-products__size-selection-item').removeClass(
      'card-products__size-selection-item-active'
    );
    $(this).addClass('card-products__size-selection-item-active');
  });

  // ИНИЦИАЛИЗАЦИЯ ДВУХ СИНХРОННЫХ СЛАЙДЕРОВ
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
    responsive: [
      {
        breakpoint: 781,
        settings: {
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
        },
      },
    ],
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    asNavFor: '.slider-for',
    centerMode: true,
    arrows: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1361,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
    ],
  });

  let custom_surname_label = '';
  $('.custom_label_preview').text(custom_surname_label);

  $('.surname_input').on('input', function () {
    custom_surname_label = this.value;

    $('.custom_label_preview').text(this.value);
    $('.custom_label_preview').attr('text', this.value);
  });
});
