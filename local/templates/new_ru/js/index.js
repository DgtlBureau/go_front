import ModalWindow from './modal.js';

window.ModalWindow = ModalWindow;


$('document').ready(function () {

    // избранное
    $(document).on('click', '.products__item-like', function (event) {
        event.preventDefault();

        let itemId = $(this).closest('.products__item').data('item-id');
        if (!itemId)
            itemId = $(this).closest('.shop__swiper-item-image').data('item-id');

        if (itemId) {
            const children = $(this).children();
            if ($(children[1]).hasClass('hide'))
                var action = 'favourites_delete';
            else
                var action = 'favourites_add';

            addFavorite(itemId, action, children[1]);
        }
        return false;
    });

    function addFavorite(id, action, element) {
        $.ajax({
            url: '/shop/basket/ajax.php',
            type: "post",
            data: {
                action: action,
                id: id,
            },
            success: function (response) { // Если Данные отправлены успешно
                $(element).toggleClass('hide');

                let favoritesWidget = $('.favorites-image');
                favoritesWidget.find('.basket-ellipse__txt').html(response)

                console.log(response)

                if (response > 0) {
                    if (favoritesWidget.hasClass('hide'))
                        favoritesWidget.removeClass('hide');
                } else
                    favoritesWidget.addClass('hide');
            },
            error: function (jqXHR, textStatus, errorThrown) { // Ошибка
                console.log('Error: ' + errorThrown);
            }
        });
    }


    // ЕСЛИ ИНПУТ ПОИСКОВИКА ПУСТ, СКРЫТЬ КРЕСТИК ОЧИЩАЮЩИЙ ПОЛЕ
    $(document).on('click', '.modal-search-input', function (event) {
        $('.input-clear').addClass('hide');
    });

    // ПРИ КАЖДОМ ВВОДЕ С КЛАВИАТУРЫ В ИНПУТ ПРОВЕРЯТЬ ПУСТОТУ ПОЛЯ
    // ЕСЛИ ПОЛЯ ПУСТО, КРЕСТИК СДЕЛАТЬ НЕВИДИМЫМ
    $(document).on('click', '.modal-search-input', function (event) {
        if ($(this).val() == '') {
            $(this).parent('.input-block').children('.input-clear').addClass('hide');
        } else {
            $(this)
                .parent('.input-block')
                .children('.input-clear')
                .removeClass('hide');
        }
    });

    // ПРИ НАЖАТИИ НА КРЕСТИК В ИНПУТЕ ОЧИЩАТЬ ПОЛЕ И СКРЫТЬ КРЕСТИК
    $(document).on('click', '.modal-search-input-clear', function (event) {
        $('.modal-search-input').val('');
        $(this).addClass('hide');
    });

    // ПРИ НАЖАТИИ НА ФИЛЬТР (ТЕКСТ) СДЕЛАТЬ ЕГО АКТИВНЫМ И ПЕРЕМЕСТИТЬ НА ПЕРВОЕ МЕСТО
    $(document).on('click', '.catalog__filters-mobail-item', function (event) {
        event.preventDefault();

        var sort_item = $('.catalog__filters-mobail-item');
        var sort_item_active = $('.catalog__filters-mobail-item.catalog__filters-mobail-item--active');
        var baseUrl = location.href;
        var sort1, sort2, href;

        if ($(this).hasClass('catalog__filters-mobail-item--active')) {
            $(this).removeClass('catalog__filters-mobail-item--active');

            sort_item_active = $('.catalog__filters-mobail-item.catalog__filters-mobail-item--active');

            sort1 = $(sort_item_active[0]).data('sort');
            $(sort_item_active[0]).insertBefore($(sort_item[0]));
        } else {
            let first = $(sort_item_active)[0];

            sort_item_active.removeClass('catalog__filters-mobail-item--active');

            $(first).addClass('catalog__filters-mobail-item--active');
            $(this).addClass('catalog__filters-mobail-item--active');


            $(first).insertBefore($(sort_item[0]));
            $(this).insertBefore($(sort_item[0]));

            sort1 = $(this).data('sort');
            sort2 = $(first).data('sort');
        }

        if (sort1)
            href = baseUrl + '?SORT_1=' + sort1;
        if (sort2)
            href = href + '&SORT_2=' + sort2;

        $.get(
            href,
            function (data) {
                $('.products__list').html($(data).find('.products__list').html());
            }
        );
    });

    // ПРИ НАЖАТИИ НА ЛУПУ ВЫВЕСТИ МОДАЛКУ С ФОРМОЙ ПОИСКА И ЗАПРЕТИТЬ body ПРОКРУТКУ
    $(document).on('click', '.catalog__serch-mobail', function (event) {
        console.log('catalog__serch-mobail');

        $('#search-modal').removeClass('hide');
        $('body').addClass('no-overflow');
    });
    // ПРИ НАЖАТИИ НА ЗНАЧЕК ФИЛЬТРА ВЫВЕСТИ МОДАЛКУ С ФОРМОЙ ПОИСКА И ЗАПРЕТИТЬ body ПРОКРУТКУ
    $(document).on('click', '.catalog__filters-mobail', function (event) {
        console.log('catalog__filters-mobail');
        $('#filters-modal').removeClass('hide');
        $('body').addClass('no-overflow');
    });

    // ПРИ НАЖАТИИ НА КРЕСТИК В ЛЮБОЙ МОДАЛКЕ СВОРАЧИВАЕМ ИХ ВСЕ И РАЗРЕШАЕМ ПРОКРУТКУ body
    $(document).on('click', '.modal__close', function (event) {
        $('.catalog__modal').addClass('hide');
        $('body').removeClass('no-overflow');
    });
    // ПРИ НАЖАТИИ НА КНОПКУ "ЗАКРЫТЬ" В ЛЮБОЙ МОДАЛКЕ СВОРАЧИВАЕМ ИХ ВСЕ И РАЗРЕШАЕМ ПРОКРУТКУ body
    $(document).on('click', '.close-btn', function (event) {
        $('.catalog__modal').addClass('hide');
        $('body').removeClass('no-overflow');
    });

});




