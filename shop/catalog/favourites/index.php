<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopFavorite/main.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopFavorite/index.js');
?>

    <main class="shop">
        <div class="container"><a class="go-back-bnt" href="#">
                <div class="go-back-arrow">←</div>
                <div class="go-back-txt">Избранное</div>
            </a>
            <div class="products__list">
                <a class="products__item" href="#">
                    <div class="products__item-image scale">
                        <div class="products__item-like">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                            <img class="like-active" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
                        </div>
                        <div class="products__item-sale">sale</div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_01.png" alt="swiper_image_01">
                    </div>
                    <div class="products__item-footer">
                        <div class="products__item-txt">
                            <div class="products__item-name">Футболка клуба GO!</div>
                            <div class="products__item-price">2 500 ₽</div>
                            <del class="products__item-old-price">2 500 ₽</del>
                        </div>
                        <div class="products__item-basket">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                        </div>
                    </div>
                </a>
                <a class="products__item" href="#">
                    <div class="products__item-image scale">
                        <div class="products__item-like">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                            <img class="like-active" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
                        </div>
                        <div class="products__item-hit">ХИТ</div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_02.png" alt="swiper_image_02">
                    </div>
                    <div class="products__item-footer">
                        <div class="products__item-txt">
                            <div class="products__item-name">Футболка клуба GO!</div>
                            <div class="products__item-price">2 500 ₽</div>
                        </div>
                        <div class="products__item-basket">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                        </div>
                    </div>
                </a>
                <a class="products__item" href="#">
                    <div class="products__item-image scale">
                        <div class="products__item-like">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                            <img class="like-active" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
                        </div>
                        <div class="products__item-sale">sale</div>
                        <div class="products__item-hit products__item-hit-twice">ХИТ</div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_03.png" alt="swiper_image_03">
                    </div>
                    <div class="products__item-footer">
                        <div class="products__item-txt">
                            <div class="products__item-name">Футболка клуба GO!</div>
                            <div class="products__item-price">2 500 ₽</div>
                        </div>
                        <div class="products__item-basket">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                        </div>
                    </div>
                </a>
                <a class="products__item" href="#">
                    <div class="products__item-image scale">
                        <div class="products__item-like">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                            <img class="like-active" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
                        </div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_01.png" alt="swiper_image_01">
                    </div>
                    <div class="products__item-footer">
                        <div class="products__item-txt">
                            <div class="products__item-name">Футболка клуба GO!</div>
                            <div class="products__item-price">2 500 ₽</div>
                            <del class="products__item-old-price">2 500 ₽</del>
                        </div>
                        <div class="products__item-basket">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                        </div>
                    </div>
                </a>
                <a class="products__item" href="#">
                    <div class="products__item-image scale">
                        <div class="products__item-like">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                            <img class="like-active" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
                        </div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_02.png" alt="swiper_image_02">
                    </div>
                    <div class="products__item-footer">
                        <div class="products__item-txt">
                            <div class="products__item-name">Футболка клуба GO!</div>
                            <div class="products__item-price">2 500 ₽</div>
                        </div>
                        <div class="products__item-basket">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                        </div>
                    </div>
                </a>
                <a class="products__item" href="#">
                    <div class="products__item-image scale">
                        <div class="products__item-like">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                            <img class="like-active" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
                        </div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_03.png" alt="swiper_image_03">
                    </div>
                    <div class="products__item-footer">
                        <div class="products__item-txt">
                            <div class="products__item-name">Футболка клуба GO!</div>
                            <div class="products__item-price">2 500 ₽</div>
                        </div>
                        <div class="products__item-basket">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                        </div>
                    </div>
                </a>
                <a class="products__item" href="#">
                    <div class="products__item-image scale">
                        <div class="products__item-like">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                            <img class="like-active" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
                        </div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_01.png" alt="swiper_image_01">
                    </div>
                    <div class="products__item-footer">
                        <div class="products__item-txt">
                            <div class="products__item-name">Футболка клуба GO!</div>
                            <div class="products__item-price">2 500 ₽</div>
                            <del class="products__item-old-price">2 500 ₽</del>
                        </div>
                        <div class="products__item-basket">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                        </div>
                    </div>
                </a>
                <a class="products__item" href="#">
                    <div class="products__item-image scale">
                        <div class="products__item-like">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                            <img class="like-active" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
                        </div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_02.png" alt="swiper_image_02">
                    </div>
                    <div class="products__item-footer">
                        <div class="products__item-txt">
                            <div class="products__item-name">Футболка клуба GO!</div>
                            <div class="products__item-price">2 500 ₽</div>
                        </div>
                        <div class="products__item-basket">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                        </div>
                    </div>
                </a>
                <a class="products__item" href="#">
                    <div class="products__item-image scale">
                        <div class="products__item-like">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                            <img class="like-active" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
                        </div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_03.png" alt="swiper_image_03">
                    </div>
                    <div class="products__item-footer">
                        <div class="products__item-txt">
                            <div class="products__item-name">Футболка клуба GO!</div>
                            <div class="products__item-price">2 500 ₽</div>
                        </div>
                        <div class="products__item-basket">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>