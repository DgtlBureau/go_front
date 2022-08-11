<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/SHOP/shop-main/shop-main.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/SHOP/shop-main/shop-main.js');
?>


    <div class="favorites-and-basket">
        <a class="favorites-image hide" href="#">
            <img class="favorites-icon" alt="black_heart"/>
        </a>
        <a class="basket-image hide" href="#">
            <img class="basket-icon" alt="black_heart"/>
            <img class="basket-ellipse" alt="black_ellipse"/>
            <div class="basket-ellipse__txt">0</div>
        </a>
    </div>
    <div class="shop__banner-swiper-block">
        <div class="shop__switcher">
            <div class="shop__switcher-dots">
                <div class="shop__switcher-dot shop__switcher-dot--active"></div>
                <div class="shop__switcher-dot"></div>
                <div class="shop__switcher-dot"></div>
            </div>
        </div>
        <div class="shop__banner-swiper">
            <div class="shop__banner-item">
                <div class="shop__banner-title-block">
                    <div class="shop__banner-title">Новая<br>коллекция GO</div>
                    <div class="shop__banner-arrow">↙</div>
                </div>
            </div>
            <div class="shop__banner-item">
                <div class="shop__banner-title-block">
                    <div class="shop__banner-title">Новая<br>коллекция GO</div>
                    <div class="shop__banner-arrow">↙</div>
                </div>
            </div>
            <div class="shop__banner-item">
                <div class="shop__banner-title-block">
                    <div class="shop__banner-title">Новая<br>коллекция GO</div>
                    <div class="shop__banner-arrow">↙</div>
                </div>
            </div>
        </div>
    </div>
    <main class="shop">
        <div class="shop__nav">
            <div class="shop__nav-list shop__nav-list-top"><a class="shop__nav-item" href="">одежда</a><a
                        class="shop__nav-item" href="">джерси</a><a class="shop__nav-item" href="">Аксессуары</a></div>
            <div class="shop__nav-list shop__nav-list-bottom"><a class="shop__nav-item" href="">сувениры</a><a
                        class="shop__nav-item" href="">новинки</a></div>
        </div>
        <div class="shop__gender-select gender-select"><a class="gender-select__item" href="#">
                <div class="gender-select__image scale"><img src="/local/templates/new_ru/img/gender_select_image_man.png" alt="man"></div>
                <div class="gender-select__text">Мужчины</div>
                <div class="gender-select__bg-opaciti"></div>
            </a><a class="gender-select__item" href="#">
                <div class="gender-select__image scale"><img src="/local/templates/new_ru/img/gender_select_image_man.png"
                                                             alt="gender_select_image_wuman"></div>
                <div class="gender-select__text">Женщины</div>
                <div class="gender-select__bg-opaciti"></div>
            </a><a class="gender-select__item" href="#">
                <div class="gender-select__image scale"><img src="/local/templates/new_ru/img/gender_select_image_children.png"
                                                             alt="gender_select_image_children"></div>
                <div class="gender-select__text">Дети</div>
                <div class="gender-select__bg-opaciti"></div>
            </a></div>
        <div class="shop__new-product">
            <div class="shop__title-block">
                <div class="shop__title">Новинки</div>
                <div class="shop__title-arrow">↙</div>
            </div>
            <div class="shop__swiper-block">
                <div class="shop__swiper">
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div>
                            <div class="shop__swiper-item-sale">sale</div><img src="/local/templates/new_ru/img/swiper_image_01.png"
                                                                               alt="swiper_image_01">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div><del
                                        class="shop__swiper-item-old-price">2 500 ₽</del>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div>
                            <div class="shop__swiper-item-hit">ХИТ</div><img src="/local/templates/new_ru/img/swiper_image_02.png"
                                                                             alt="swiper_image_02">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div>
                            <div class="shop__swiper-item-sale">sale</div>
                            <div class="shop__swiper-item-hit shop__swiper-item-hit-twice">ХИТ</div><img
                                    src="/local/templates/new_ru/img/swiper_image_03.png" alt="swiper_image_03">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_01.png" alt="swiper_image_01">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_02.png" alt="swiper_image_02">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_03.png" alt="swiper_image_03">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop__categories categories">
            <div class="shop__title-block">
                <div class="shop__title">Категории</div>
                <div class="shop__title-arrow">↙</div>
            </div>
            <div class="categories__list"><a class="categories__item" href="#">
                    <div class="categories__item-image scale"><img src="/local/templates/new_ru/img/categories_image_01.png" alt="categories_image_01">
                    </div>
                    <div class="categories__item-footer">
                        <div class="categories__item-name">сувениры</div>
                        <div class="categories__item-arrow">→</div>
                    </div>
                </a><a class="categories__item" href="#">
                    <div class="categories__item-image scale"><img src="/local/templates/new_ru/img/categories_image_02.png"
                                                                   alt="categories_image_02"></div>
                    <div class="categories__item-footer">
                        <div class="categories__item-name">аксессуары</div>
                        <div class="categories__item-arrow">→</div>
                    </div>
                </a></div>
            <div class="shop__swiper-block">
                <div class="shop__swiper">
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div>
                            <div class="shop__swiper-item-sale">sale</div><img src="/local/templates/new_ru/img/swiper_image_01.png"
                                                                               alt="swiper_image_01">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div><del
                                        class="shop__swiper-item-old-price">2 500 ₽</del>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div>
                            <div class="shop__swiper-item-hit">ХИТ</div><img src="/local/templates/new_ru/img/swiper_image_02.png"
                                                                             alt="swiper_image_02">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div>
                            <div class="shop__swiper-item-sale">sale</div>
                            <div class="shop__swiper-item-hit shop__swiper-item-hit-twice">ХИТ</div><img
                                    src="/local/templates/new_ru/img/swiper_image_03.png" alt="swiper_image_03">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_01.png" alt="swiper_image_01">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_02.png" alt="swiper_image_02">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_03.png" alt="swiper_image_03">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="categories__list"><a class="categories__item" href="#">
                    <div class="categories__item-image scale"><img src="/local/templates/new_ru/img/categories_image_03.png"
                                                                   alt="categories_image_03"></div>
                    <div class="categories__item-footer">
                        <div class="categories__item-name">сувениры</div>
                        <div class="categories__item-arrow">→</div>
                    </div>
                </a><a class="categories__item" href="#">
                    <div class="categories__item-image scale"><img src="/local/templates/new_ru/img/categories_image_04.png"
                                                                   alt="categories_image_04"></div>
                    <div class="categories__item-footer">
                        <div class="categories__item-name">аксессуары</div>
                        <div class="categories__item-arrow">→</div>
                    </div>
                </a></div>
            <div class="shop__swiper-block">
                <div class="shop__swiper">
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div>
                            <div class="shop__swiper-item-sale">sale</div><img src="/local/templates/new_ru/img/swiper_image_01.png"
                                                                               alt="swiper_image_01">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div><del
                                        class="shop__swiper-item-old-price">2 500 ₽</del>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div>
                            <div class="shop__swiper-item-hit">ХИТ</div><img src="/local/templates/new_ru/img/swiper_image_02.png"
                                                                             alt="swiper_image_02">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div>
                            <div class="shop__swiper-item-sale">sale</div>
                            <div class="shop__swiper-item-hit shop__swiper-item-hit-twice">ХИТ</div><img
                                    src="/local/templates/new_ru/img/swiper_image_03.png" alt="swiper_image_03">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_01.png" alt="swiper_image_01">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_02.png" alt="swiper_image_02">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                    <div class="shop__swiper-item">
                        <div class="shop__swiper-item-image scale">
                            <div class="shop__swiper-item-like"><img src="/local/templates/new_ru/img/like.svg" alt="like">
                            </div><img src="/local/templates/new_ru/img/swiper_image_03.png" alt="swiper_image_03">
                        </div>
                        <div class="shop__swiper-item-footer">
                            <div class="shop__swiper-item-txt">
                                <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                <div class="shop__swiper-item-price">2 500 ₽</div>
                            </div>
                            <a href="#" class="shop__swiper-item-basket"><img src="/local/templates/new_ru/img/basket.svg"
                                                                              alt="basket"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>