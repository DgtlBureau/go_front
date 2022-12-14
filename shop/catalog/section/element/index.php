<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог магазина");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/main.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/index.js');
?>


    <main class="shop">
        <div class="container">
            <div class="product-added__modal hide">
                <div class="product-added__content">
                    <div class="product-added__title-block">
                        <div class="product-added__title">Товар добавлен в корзину</div>
                        <div class="product-added__close-btn">x</div>
                    </div>
                    <div class="product-added__info">
                        <div class="product-added__image">
                            <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/swiper_image_02.png" alt="swiper_image_02">
                        </div>
                        <div class="product-added__txt">
                            <div class="product-added__name">Футболка с принтом</div>
                            <div class="product-added__article">Артикул: 5689865</div>
                            <div class="product-added__size">Размер: S</div>
                        </div>
                        <div class="product-added__price-block">
                            <div class="product-added__price">2 500 ₽</div>
                        </div>
                    </div>
                    <div class="product-added__btn-block">
                        <div class="product-added__btn">
                            <div class="product-added__btn-txt">Продолжить покупки</div>
                        </div>
                        <a class="product-added__btn" href="#">
                            <div class="product-added__btn-txt">Перейти в корзину</div>
                        </a>
                    </div>
                </div>
            </div>
            <a class="go-back-bnt" href="#">
                <div class="go-back-arrow">←</div>
                <div class="go-back-txt">В каталог</div>
            </a>

<!--            catalog.element-->
            <div class="shop__card-products card-products">
                <div class="sld-wrp">
                    <div class="slider-for">
                        <div class="card-products__gallery-image main_image">
                            <span class="custom_label_preview"></span>
                            <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/hockey.png" alt="hockey">
                        </div>
                        <div class="card-products__gallery-image">
                            <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/categories_image_03.png" alt="categories_image_03">
                        </div>
                        <div class="card-products__gallery-image">
                            <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/categories_image_02.png" alt="categories_image_02">
                        </div>
                        <div class="card-products__gallery-image">
                            <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/categories_image_01.png" alt="categories_image_01">
                        </div>
                    </div>
                    <div class="slider-nav">
                        <div class="card-products__gallery-image">
                            <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/hockey.png" alt="hockey">
                        </div>
                        <div class="card-products__gallery-image">
                            <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/categories_image_03.png" alt="categories_image_03">
                        </div>
                        <div class="card-products__gallery-image">
                            <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/categories_image_02.png" alt="categories_image_02">
                        </div>
                        <div class="card-products__gallery-image">
                            <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/categories_image_01.png" alt="categories_image_01">
                        </div>
                    </div>
                </div>
                <div class="card-products__info">
                    <div class="card-products__title-block">
                        <div class="card-products__title">Футболка с принтом</div>
                        <div class="card-products__vendor-code">Артикул: <span>5689865</span></div>
                        <div class="card-products__size-selection-block">
                            <div class="card-products__size-selection-title">Выберите размер</div>
                            <div class="card-products__size-selection">
                                <div class="card-products__size-selection-item">XS</div>
                                <div class="card-products__size-selection-item">S</div>
                                <div class="card-products__size-selection-item">M</div>
                                <div class="card-products__size-selection-item">L</div>
                                <div class="card-products__size-selection-item">XL</div>
                            </div>
                        </div>
                        <div class="card-products__size-selection-title"><span class="padding">Добавить печать</span>
                            <div class="card-products__payment-choose"><select>
                                    <option>Ваша подпись</option>
                                    <option>Ваша подпись</option>
                                    <option>Ваша подпись</option>
                                    <option>Ваша подпись</option>
                                </select></div>
                            <div class="card-products__inputs custom_label">
                                <div class="card-products__inputs-item surname">
                                    <input class="card-products__input surname_input" placeholder="Фамилия">
                                </div>
                                <div class="card-products__inputs-item number">
                                    <input class="card-products__input" placeholder="Номер">
                                </div>
                            </div>
                        </div>
                        <div class="card-products__price-and-buy-block">
                            <div class="card-products__price">2 500 ₽</div>
                            <div class="card-products__buy-block">
                                <div class="card-products__basket">
                                    <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/basket_black.svg" alt="basket_black">
                                </div>
                                <div class="card-products__buy">Купить</div>
                            </div>
                        </div>
                        <div class="card-products__description-block">
                            <div class="card-products__description">
                                <div class="card-products__description-title">Описание товара</div>
                                <div class="card-products__text">Несколько лет назад мы решили популяризировать
                                    любительский хоккей и создать престижный дивизион с шикарным</div>
                            </div>
                            <div class="card-products__compound">
                                <div class="card-products__compound-title">Состав</div>
                                <div class="card-products__compound-text">100% хлопок</div>
                            </div>
                            <div class="card-products__delivery">
                                <div class="card-products__delivery-icon">
                                    <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/delivery.svg" alt="delivery">
                                </div>
                                <div class="card-products__delivery-text">Доставка в пункты выдачи или курьером</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            С этим товаром покупают-->
            <div class="shop__recommended-products recommended-products">
                <div class="recommended-products__title">
                    С этим товаром покупают
                    <div class="recommended-products__section">
                        <div class="products__list">
                            <a class="products__item" href="#">
                                <div class="products__item-image scale">
                                    <div class="products__item-like">
                                        <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/like.svg" alt="like">
                                        <img class="like-active hide" src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/full_like.svg" alt="full_like">
                                    </div>
                                    <div class="products__item-sale">sale</div>
                                    <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/swiper_image_01.png" alt="swiper_image_01">
                                </div>
                                <div class="products__item-footer">
                                    <div class="products__item-txt">
                                        <div class="products__item-name">Футболка клуба GO!</div>
                                        <div class="products__item-price">2 500 ₽</div>
                                        <del class="products__item-old-price">2 500 ₽</del>
                                    </div>
                                    <div class="products__item-basket">
                                        <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/basket.svg" alt="basket">
                                    </div>
                                </div>
                            </a>
                            <a class="products__item" href="#">
                                <div class="products__item-image scale">
                                    <div class="products__item-like">
                                        <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/like.svg" alt="like">
                                        <img class="like-active hide" src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/full_like.svg" alt="full_like">
                                    </div>
                                    <div class="products__item-hit">ХИТ</div>
                                    <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/swiper_image_02.png" alt="swiper_image_02">
                                </div>
                                <div class="products__item-footer">
                                    <div class="products__item-txt">
                                        <div class="products__item-name">Футболка клуба GO!</div>
                                        <div class="products__item-price">2 500 ₽</div>
                                    </div>
                                    <div class="products__item-basket">
                                        <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/basket.svg" alt="basket">
                                    </div>
                                </div>
                            </a>
                            <a class="products__item" href="#">
                                <div class="products__item-image scale">
                                    <div class="products__item-like">
                                        <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/like.svg" alt="like">
                                        <img class="like-active hide" src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/full_like.svg" alt="full_like">
                                    </div>
                                    <div class="products__item-sale">sale</div>
                                    <div class="products__item-hit products__item-hit-twice">ХИТ</div>
                                    <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/swiper_image_03.png" alt="swiper_image_03">
                                </div>
                                <div class="products__item-footer">
                                    <div class="products__item-txt">
                                        <div class="products__item-name">Футболка клуба GO!</div>
                                        <div class="products__item-price">2 500 ₽</div>
                                    </div>
                                    <div class="products__item-basket">
                                        <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/basket.svg" alt="basket">
                                    </div>
                                </div>
                            </a>
                            <a class="products__item" href="#">
                                <div class="products__item-image scale">
                                    <div class="products__item-like">
                                        <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/like.svg" alt="like">
                                        <img class="like-active hide" src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/full_like.svg" alt="full_like">
                                    </div>
                                    <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/swiper_image_01.png" alt="swiper_image_01">
                                </div>
                                <div class="products__item-footer">
                                    <div class="products__item-txt">
                                        <div class="products__item-name">Футболка клуба GO!</div>
                                        <div class="products__item-price">2 500 ₽</div>
                                        <del class="products__item-old-price">2 500 ₽</del>
                                    </div>
                                    <div class="products__item-basket">
                                        <img src="<?=SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCard/assets'?>/basket.svg" alt="basket">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>