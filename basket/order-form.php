<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?>

<div class="conriner_order">
    <div class="back">
        <div class="arrow_back">←</div>
        <div class="arrow_title">Корзина</div>
    </div>
    <div class="order_row">
        <div class="form_block">
            <div class="personal_title">Личные данные</div>
            <div class="personal_block">
                <input type="text" class="input_form" placeholder="Имя">
                <input type="text" class="input_form" placeholder="Фамилия">
                <input type="phone" class="input_form" placeholder="Телефон">
                <input type="email" class="input_form"  placeholder="Email">
            </div>
            <div class="personal_title">Способ доставки</div>
            <div class="deliver_way">
                <div class="radio_block">
                    <input id="russian" type="radio" class="radio" value="russian" name="deliver">
                    <label for="russian">Почта России</label>
                    <div class="small">200 руб., от 9 до 20 дней</div>
                </div>
                <div class="radio_block">
                    <input id="sdec" type="radio" class="radio" value="sdec" name="deliver">
                    <label for="sdec">Самовывоз СДЭК</label>
                    <div class="small">500 руб., от 15 до 35 дней</div>
                </div>
                <div class="radio_block">
                    <input id="sdek" type="radio" class="radio" value="sdek" name="deliver">
                    <label for="sdek">Курьерская служба СДЭК</label>
                    <div class="small">500 руб., от 15 до 35 дней</div>
                </div>
            </div>
            <div class="personal_title">Адрес доставки</div>
            <div class="address_block">
                <input type="text" class="input_form" placeholder="Страна">
                <input type="text" class="input_form" placeholder="Город*">
                <input type="text" class="input_form" placeholder="Индекс*">
                <input type="text" class="input_form"  placeholder="Улица*">
                <input type="text" class="input_form" placeholder="Дом/корпус*">
                <input type="text" class="input_form"  placeholder="Квартира/офис*">
                <textarea class="text_mess" name="" id="" placeholder="Комментарий к заказу"></textarea>
            </div>
        </div>
        <div class="pay_block">
            <div class="pay_title">Способы оплаты</div>
            <select name="" id="" class="pay">
                <option value="">Картой онлайн</option>
                <option value="">Test</option>
                <option value="">Test</option>
            </select>
            <div class="count_block">
                <div class="count_name">Количество товаров</div>
                <div class="count_num">23</div>
            </div>
            <div class="count_block">
                <div class="count_name">Промокод: GO2022</div>
                <div class="count_num">- 500 ₽</div>
            </div>
            <div class="count_block">
                <div class="total_name">Итого</div>
                <div class="total_num">24 060 ₽</div>
            </div>
            <button class="order_btn">Перейти к оплате</button>
            <span class="filter_checkbox">
                <input type="checkbox" class="input_checkbox" value="" name="" id="agree">
                <label for="agree">Я согласен на обработку данных</label>
            </span>
        </div>
    </div>
</div>

<style>
.conriner_order {
    width: 95%;
    padding: 90px 20px 20px 20px;
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

.order_row {
    display: flex;
    justify-content: space-between;
}

.form_block {
    width: 55%;
    background-color: #141414;
    padding: 30px;
}

.personal_title {
    font-size: 1.2em;
    font-weight: 500;
    padding-bottom: 15px;
    padding-top: 15px;
}

.personal_block {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    margin: auto;
    justify-content: space-between;
}

input.input_form {
    width: 46%;
    margin: 6px 0;
    padding: 15px 10px;
    background-color: #232323;
    border: #232323;
}

.deliver_way {
    display: flex;
    justify-content: space-between;
}

.radio_block label {
    font-size: 1em;
    font-weight: 600;
}

.pay_block {
    width: 27%;
    background-color: #232323;
    padding: 30px 50px;
    height: 330px;
}

.small {
    font-size: 0.8em;
    color: #ACACAC;
}

textarea.text_mess {
    margin: 10px 0;
    width: 98%;
    height: 90px;
    padding: 15px 10px;
    border: #232323;
    background-color: #232323;
}

.pay_title {
    font-size: 1.5em;
    font-weight: 600;
    margin-bottom: 15px;
}

select.pay {
    width: 100%;
    background-color: #141414;
    border: #141414;
    color: #fff;
    padding: 15px;
}

.count_block {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
}

button.order_btn {
    width: 100%;
    color: #010101;
    font-weight: 500;
    margin: 10px 0;
    padding: 12px;
    font-size: 0.9em;
}

.pay_block .filter_checkbox input[type="checkbox"]:checked + label:before, .filter_checkbox input[type="checkbox"]:not(:checked) + label:before {
    background-color: #232323;
}

  
.radio {
position: absolute;
z-index: -1;
opacity: 0;
}

.radio+label {
display: inline-flex;
align-items: center;
user-select: none;
}

.radio+label::before {
content: '';
display: inline-block;
width: 1em;
height: 1em;
flex-shrink: 0;
flex-grow: 0;
border: 1px solid #adb5bd;
border-radius: 50%;
margin-right: 0.5em;
background-repeat: no-repeat;
background-position: center center;
background-size: 50% 50%;
}

.radio:not(:disabled):not(:checked)+label:hover::before {
border-color: #b3d7ff;
}

.radio:not(:disabled):active+label::before {
background-color: #b3d7ff;
border-color: #b3d7ff;
}

.radio:focus:not(:checked)+label::before {
border-color: #80bdff;
}

.radio:checked+label::before {
border-color: #ffffff;
background-color: #141414;
background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-2 -2 4 4'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
}

.radio:disabled+label::before {
background-color: #e9ecef;
}


@media (max-width: 960px) {
    .order_row {
        display: block;
    }
    .form_block {
        width: 93%;
        margin-bottom: 35px;
    }
    .pay_block {
        width: 89%;
    }
}

@media (max-width: 800px) {
    .pay_block {
        width: 88%;
    }
}

@media (max-width: 500px) {
    input.input_form {
        width: 100%;
    }
    .address_block {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }
    .deliver_way {
        display: block;
    }
    .small {
        font-size: 0.8em;
        color: #ACACAC;
        width: 100px;
        padding-left: 27px;
        margin-bottom: 20px;
    }
    .form_block {
        width: 85%;
    }
    .pay_block {
        width: 75%;
    }
}

</style>






<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
