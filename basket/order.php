<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?>
    <div class="conriner_basket">
        <div class="back">
            <div class="arrow_back">←</div>
            <div class="arrow_title">Корзина</div>
        </div>
        <div class="basket_row">
            <div class="basket_product">
                <div class="basket_item">
                    <div class="basket_img">
                        <img src="/upload/iblock/deb/tqfsusnplr3eyzhahz5yqwar54h09n2f.png" alt="">
                    </div>
                    <div class="basket_param">
                        <div class="name">Футболка с принтом</div>
                        <div class="article">Артикул: 5689865</div>
                        <div class="size">Размер: S</div>
                    </div>
                    <div class="product_count">
                        <div class="plus">+</div>
                        <div class="num_value">13</div>
                        <div class="minus">-</div>
                    </div>
                    <div class="basket_price">
                        24 560 ₽
                    </div>
                    <div class="exit_button">
                        x
                    </div>
                </div>
                <div class="basket_item">
                    <div class="basket_img">
                        <img src="/upload/iblock/deb/tqfsusnplr3eyzhahz5yqwar54h09n2f.png" alt="">
                    </div>
                    <div class="basket_param">
                        <div class="name">Футболка с принтом</div>
                        <div class="article">Артикул: 5689865</div>
                        <div class="size">Размер: S</div>
                    </div>
                    <div class="product_count">
                        <div class="plus">+</div>
                        <div class="num_value">13</div>
                        <div class="minus">-</div>
                    </div>
                    <div class="basket_price">
                        24 560 ₽
                    </div>
                    <div class="exit_button">
                        x
                    </div>
                </div>
            </div>
            <div class="basket_info">
                <div class="info_name">Информация о заказе</div>
                <div class="count_block">
                    <div class="count_name">Сумма заказа</div>
                    <div class="info_num">24 560 ₽</div>
                </div>
                <div class="count_block">
                    <div class="count_name">Количество товаров</div>
                    <div class="info_num">23</div>
                </div>
                <input type="text" class="promo" placeholder="Промокод">
                <div class="count_block">
                    <div class="total_name">Итого</div>
                    <div class="total_num">24 060 ₽</div>
                </div>
                <button class="order_btn">Оформить заказ</button>
            </div>
        </div>
    </div>

<style>
.conriner_basket {
    width: 95%;
    padding: 100px 35px 30px;
    margin-left: auto;
    margin-right: auto;
}

.back {
    display: flex;
}

.arrow_back {
    padding-top: 3px;
}

.arrow_title {
    font-weight: 700;
    font-size: 42px;
    line-height: 52px;
    letter-spacing: 0.02em;
    margin-bottom: 30px;
}

.basket_row {
    display: flex;
}

.basket_product {
    width: 70%;
}

.basket_item {
    display: flex;
    justify-content: space-between;
    padding: 20px 25px 20px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.4);
}

.basket_img {
    width: 15%;
    height: 110px;
}

.basket_img img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.basket_param {
    width: 30%;
}

.name {
    font-size: 1.3em;
    padding-bottom: 3px;
}

.article {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9em;
}

.size {
    font-size: 1.3em;
    padding-top: 12px;
}

.product_count {
    display: flex;
    height: 37px;
    width: 20%;
}

.plus {
    padding: 0px 8px 5px;
    font-size: 2em;
    display: flex;
    height: 28px;
    border: 1px solid #232323;
    align-items: center;
}

.num_value {
    width: 70px;
    display: flex;
    align-items: center;
    font-size: 1.2em;
    justify-content: center;
}

.minus {
    padding: 0px 10px 10px;
    font-size: 2em;
    display: flex;
    height: 23px;
    border: 1px solid #232323;
    align-items: center;
}

.basket_price {
    width: 20%;
    font-weight: 700;
    text-align: center;
    font-size: 1.1em;
    padding-top: 4px;
}

.exit_button {
    width: 5%;
    text-align: right;
    padding-top: 3px;
}

.basket_info {
    width: 26%;
    background-color: #232323;
    padding: 20px 40px 50px;
    height: 277px;
    margin-left: 15px;
}

.info_name {
    font-size: 1.5em;
    font-weight: 600;
}

.count_block {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
}

input.promo {
    width: 94%;
    padding: 15px 10px;
    margin: 10px 0;
    background-color: #000;
    border: #000;
}

button.order_btn {
    width: 100%;
    color: #010101;
    font-weight: 500;
    margin: 10px 0;
    padding: 12px;
    font-size: 0.9em;
}

.total_name {
    font-size: 1.1em;
    font-weight: 600;
}

.total_num {
    font-size: 1.3em;
    font-weight: 600;
}

@media (max-width: 1215px) {
    .basket_info {
        padding: 20px 40px 80px;
    }
}

@media (max-width: 800px) {
    .basket_row {
        display: block;
    }
    .basket_product {
        width: 100%;
    }
    .basket_info {
        width: 89%;
        margin-left: 0;
    }
}

@media (max-width: 550px) {
    .conriner_basket {
        padding: 100px 20px 30px;
    }
    .basket_item {
        flex-wrap: wrap;
    }
    .basket_img {
        width: 30%;
        height: 135px;
    }
    .basket_param {
        width: 51%;
    }
    .product_count {
        height: 37px;
        width: 30%;
        margin-top: 30px;
    }
    .basket_price {
        width: 30%;
        margin-top: 33px;
        text-align: center;
    }
    .exit_button {
        width: 8%;
        text-align: center;
        height: 28px;
        padding-top: 3px;
        margin-top: 32px;
    }
    .basket_info {
        width: 84%;
    }
}

@media (max-width: 550px) {
    .basket_img {
        width: 36%;
        height: 135px;
    }
    .basket_param {
        width: 60%;
    }
    .basket_item {
        padding: 20px 15px 20px 0;
        flex-wrap: wrap;
    }
    .product_count {
        height: 37px;
        width: 36%;
        margin-top: 30px;
    }
    .basket_price {
        width: 45%;
        margin-top: 33px;
        text-align: start;
    }
    .exit_button {
        width: 8%;
        text-align: center;
        height: 28px;
        padding-top: 3px;
        margin-top: 32px;
    }
    .conriner_basket {
        width: 95%;
        padding: 100px 10px 30px;
    }
    .basket_info {
        width: 84%;
        margin-left: 0;
        padding: 20px 33px 80px;
    }
}

</style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>