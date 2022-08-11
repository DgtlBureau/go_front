<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/SHOP/shop-catalog/shop-catalog.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/SHOP/shop-catalog/shop-catalog.js');

?>

    <div class="catalog__modal modal hide" id="search-modal">
        <div class="modal__content">
            <div class="catalog__title-block">
                <div class="catalog__title">Поиск</div>
                <div class="modal__close">
                    <div class="modal__close-stick"></div>
                    <div class="modal__close-stick"></div>
                </div>
            </div>
            <form class="catalog__serch-form">
                <div class="input-block"><input type="search" placeholder="Поиск" id="modal-search-input">
                    <div class="input-clear" id="modal-search-input-clear">x</div>
                </div>
            </form>
        </div>
    </div>
    <div class="catalog__modal modal hide" id="filters-modal">
        <div class="modal__content">
            <div class="catalog__title-block">
                <div class="catalog__title">Фильтры</div>
                <div class="modal__close">
                    <div class="modal__close-stick"></div>
                    <div class="modal__close-stick"></div>
                </div>
            </div>
            <div class="modal__btn close-btn">
                <div class="modal__btn-txt">Закрыть</div>
            </div>
            <div class="modal__btn" id="modal-apply-btn-filters">
                <div class="modal__btn-txt">Применить</div>
            </div>
            <div class="modal__btn modal-reset-btn" id="modal-reset-btn-filters">
                <div class="modal__btn-txt">Сбросить</div>
            </div>
        </div>
    </div>
    <div class="catalog__modal modal hide" id="gender-modal">
        <div class="modal__content">
            <div class="catalog__title-block">
                <div class="catalog__title">Разделы</div>
                <div class="modal__close">
                    <div class="modal__close-stick"></div>
                    <div class="modal__close-stick"></div>
                </div>
            </div>
            <div class="modal__btn close-btn">
                <div class="modal__btn-txt">Закрыть</div>
            </div>
            <div class="modal__btn hide" id="modal-apply-btn-gender">
                <div class="modal__btn-txt">Применить</div>
            </div>
            <div class="modal__btn modal-reset-btn hide" id="modal-reset-btn-gender">
                <div class="modal__btn-txt">Сбросить</div>
            </div>
        </div>
    </div>
    <div class="catalog__modal modal hide" id="price-modal">
        <div class="modal__content">
            <div class="catalog__title-block">
                <div class="catalog__title">Цена</div>
                <div class="modal__close">
                    <div class="modal__close-stick"></div>
                    <div class="modal__close-stick"></div>
                </div>
            </div>
            <div class="modal__btn close-btn">
                <div class="modal__btn-txt">Закрыть</div>
            </div>
            <div class="modal__btn hide" id="modal-apply-btn-price">
                <div class="modal__btn-txt">Применить</div>
            </div>
            <div class="modal__btn modal-reset-btn hide" id="modal-reset-btn-price">
                <div class="modal__btn-txt">Сбросить</div>
            </div>
        </div>
    </div>
    <div class="catalog__modal modal hide" id="collection-modal">
        <div class="modal__content">
            <div class="catalog__title-block">
                <div class="catalog__title">Коллекции</div>
                <div class="modal__close">
                    <div class="modal__close-stick"></div>
                    <div class="modal__close-stick"></div>
                </div>
            </div>
            <div class="modal__btn close-btn">
                <div class="modal__btn-txt">Закрыть</div>
            </div>
            <div class="modal__btn hide" id="modal-apply-btn-collection">
                <div class="modal__btn-txt">Применить</div>
            </div>
            <div class="modal__btn modal-reset-btn hide" id="modal-reset-btn-collection">
                <div class="modal__btn-txt">Сбросить</div>
            </div>
        </div>
    </div>
    <div class="catalog__modal modal hide" id="category-modal">
        <div class="modal__content">
            <div class="catalog__title-block">
                <div class="catalog__title">Товары</div>
                <div class="modal__close">
                    <div class="modal__close-stick"></div>
                    <div class="modal__close-stick"></div>
                </div>
            </div>
            <div class="modal__btn close-btn">
                <div class="modal__btn-txt">Закрыть</div>
            </div>
            <div class="modal__btn hide" id="modal-apply-btn-category">
                <div class="modal__btn-txt">Применить</div>
            </div>
            <div class="modal__btn modal-reset-btn hide" id="modal-reset-btn-category">
                <div class="modal__btn-txt">Сбросить</div>
            </div>
        </div>
    </div>
    <div class="catalog__banner">
        <div class="catalog__banner-title-block">
            <div class="catalog__banner-title">Новая<br>коллекция GO</div>
            <div class="catalog__banner-arrow">↙️</div>
        </div>
    </div>
    <main class="shop">
        <div class="shop__catalog catalog">
            <div class="catalog__filters">
                <div class="catalog__title-block">
                    <div class="catalog__title">Фильтры</div>
                </div>
                <div class="catalog__filters-form"></div>
            </div>
            <div class="catalog__products products"><a class="go-back-bnt hide" href="#">
                    <div class="go-back-arrow">←</div>
                    <div class="go-back-txt">В магазин</div>
                </a>
                <div class="catalog__title-block">
                    <div class="catalog__title">Товары</div>
                    <div class="catalog__mobile-elements-block">
                        <form class="catalog__serch-form"><input type="search" placeholder="Поиск"></form>
                        <div class="catalog__serch-mobail"><img src="/local/templates/new_ru/img/mobile_search.svg"
                                                                alt="serch-mobail"></div>
                        <div class="catalog__filters-mobail"><img src="/local/templates/new_ru/img/mobile_filters.svg"
                                                                  alt="mobail-filters"></div>
                    </div>
                </div>
                <ul class="catalog__filters-mobail-nav-list">
                    <li class="catalog__filters-mobail-item" id="gender-filter">Раздел<div
                                class="catalog__filters-mobail-item-close hide">x</div>
                    </li>
                    <li class="catalog__filters-mobail-item" id="price-filter">Цена<div
                                class="catalog__filters-mobail-item-close hide">x</div>
                    </li>
                    <li class="catalog__filters-mobail-item" id="collection-filter">Коллекции<div
                                class="catalog__filters-mobail-item-close hide">x</div>
                    </li>
                    <li class="catalog__filters-mobail-item" id="category-filter">Товары<div
                                class="catalog__filters-mobail-item-close hide">x</div>
                    </li>
                </ul>
                <div class="products__list">
                    <a href="#" class="products__item">
                        <div class="products__item-image scale">
                            <div class="products__item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like"><img
                                        class="like-active hide" src="/local/templates/new_ru/img/full_like.svg" alt="full_like">
                            </div>
                            <div class="products__item-sale">sale</div><img src="/local/templates/new_ru/img/swiper_image_01.png"
                                                                            alt="swiper_image_01">
                        </div>
                        <div class="products__item-footer">
                            <div class="products__item-txt">
                                <div class="products__item-name">Футболка клуба GO!</div>
                                <div class="products__item-price">2 500 ₽</div><del class="products__item-old-price">2
                                    500 ₽</del>
                            </div>
                            <div class="products__item-basket"><img src="/local/templates/new_ru/img/basket.svg" alt="basket">
                            </div>
                        </div>
                    </a>
                    <a href="#" class="products__item">
                        <div class="products__item-image scale">
                            <div class="products__item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like"><img
                                        class="like-active hide" src="/local/templates/new_ru/img/full_like.svg" alt="full_like">
                            </div>
                            <div class="products__item-hit">ХИТ</div><img src="/local/templates/new_ru/img/swiper_image_02.png"
                                                                          alt="swiper_image_02">
                        </div>
                        <div class="products__item-footer">
                            <div class="products__item-txt">
                                <div class="products__item-name">Футболка клуба GO!</div>
                                <div class="products__item-price">2 500 ₽</div>
                            </div>
                            <div class="products__item-basket"><img src="/local/templates/new_ru/img/basket.svg" alt="basket">
                            </div>
                        </div>
                    </a>
                    <a href="#" class="products__item">
                        <div class="products__item-image scale">
                            <div class="products__item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like"><img
                                        class="like-active hide" src="/local/templates/new_ru/img/full_like.svg" alt="full_like">
                            </div>
                            <div class="products__item-sale">sale</div>
                            <div class="products__item-hit products__item-hit-twice">ХИТ</div><img
                                    src="/local/templates/new_ru/img/swiper_image_03.png" alt="swiper_image_03">
                        </div>
                        <div class="products__item-footer">
                            <div class="products__item-txt">
                                <div class="products__item-name">Футболка клуба GO!</div>
                                <div class="products__item-price">2 500 ₽</div>
                            </div>
                            <div class="products__item-basket"><img src="/local/templates/new_ru/img/basket.svg" alt="basket">
                            </div>
                        </div>
                    </a>
                    <a href="#" class="products__item">
                        <div class="products__item-image scale">
                            <div class="products__item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like"><img
                                        class="like-active hide" src="/local/templates/new_ru/img/full_like.svg" alt="full_like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_01.png" alt="swiper_image_01">
                        </div>
                        <div class="products__item-footer">
                            <div class="products__item-txt">
                                <div class="products__item-name">Футболка клуба GO!</div>
                                <div class="products__item-price">2 500 ₽</div><del class="products__item-old-price">2
                                    500 ₽</del>
                            </div>
                            <div class="products__item-basket"><img src="/local/templates/new_ru/img/basket.svg" alt="basket">
                            </div>
                        </div>
                    </a>
                    <a href="#" class="products__item">
                        <div class="products__item-image scale">
                            <div class="products__item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like"><img
                                        class="like-active hide" src="/local/templates/new_ru/img/full_like.svg" alt="full_like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_02.png" alt="swiper_image_02">
                        </div>
                        <div class="products__item-footer">
                            <div class="products__item-txt">
                                <div class="products__item-name">Футболка клуба GO!</div>
                                <div class="products__item-price">2 500 ₽</div>
                            </div>
                            <div class="products__item-basket"><img src="/local/templates/new_ru/img/basket.svg" alt="basket">
                            </div>
                        </div>
                    </a>
                    <a href="#" class="products__item">
                        <div class="products__item-image scale">
                            <div class="products__item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like"><img
                                        class="like-active hide" src="/local/templates/new_ru/img/full_like.svg" alt="full_like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_03.png" alt="swiper_image_03">
                        </div>
                        <div class="products__item-footer">
                            <div class="products__item-txt">
                                <div class="products__item-name">Футболка клуба GO!</div>
                                <div class="products__item-price">2 500 ₽</div>
                            </div>
                            <div class="products__item-basket"><img src="/local/templates/new_ru/img/basket.svg" alt="basket">
                            </div>
                        </div>
                    </a>
                    <a href="#" class="products__item">
                        <div class="products__item-image scale">
                            <div class="products__item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like"><img
                                        class="like-active hide" src="/local/templates/new_ru/img/full_like.svg" alt="full_like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_01.png" alt="swiper_image_01">
                        </div>
                        <div class="products__item-footer">
                            <div class="products__item-txt">
                                <div class="products__item-name">Футболка клуба GO!</div>
                                <div class="products__item-price">2 500 ₽</div><del class="products__item-old-price">2
                                    500 ₽</del>
                            </div>
                            <div class="products__item-basket"><img src="/local/templates/new_ru/img/basket.svg" alt="basket">
                            </div>
                        </div>
                    </a>
                    <a href="#" class="products__item">
                        <div class="products__item-image scale">
                            <div class="products__item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like"><img
                                        class="like-active hide" src="/local/templates/new_ru/img/full_like.svg" alt="full_like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_02.png" alt="swiper_image_02">
                        </div>
                        <div class="products__item-footer">
                            <div class="products__item-txt">
                                <div class="products__item-name">Футболка клуба GO!</div>
                                <div class="products__item-price">2 500 ₽</div>
                            </div>
                            <div class="products__item-basket"><img src="/local/templates/new_ru/img/basket.svg" alt="basket">
                            </div>
                        </div>
                    </a>
                    <a href="#" class="products__item">
                        <div class="products__item-image scale">
                            <div class="products__item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like"><img
                                        class="like-active hide" src="/local/templates/new_ru/img/full_like.svg" alt="full_like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_03.png" alt="swiper_image_03">
                        </div>
                        <div class="products__item-footer">
                            <div class="products__item-txt">
                                <div class="products__item-name">Футболка клуба GO!</div>
                                <div class="products__item-price">2 500 ₽</div>
                            </div>
                            <div class="products__item-basket"><img src="/local/templates/new_ru/img/basket.svg" alt="basket">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>