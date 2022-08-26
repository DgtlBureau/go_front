<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог магазина");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopOrder/main.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopOrder/index.js');
?><main class="shop">
<div class="container">
	<a class="go-back-bnt" href="#">
	<div class="go-back-arrow">
		←
	</div>
	<div class="go-back-txt">
		Оформление заказа
	</div>
 </a>
	<div class="order">
		<form class="order__info">
			<div class="order__title">
				Личные данные
			</div>
			<div class="order__inputs person_data">
				<div class="order__inputs-item">
 <input class="order__input required" placeholder="Имя*">
					<div class="error-txt hide" id="name-error">
						Введите имя
					</div>
				</div>
				<div class="order__inputs-item">
 <input class="order__input required" placeholder="Телефон*">
					<div class="error-txt hide" id="phone-error">
						Введите телефон
					</div>
				</div>
				<div class="order__inputs-item">
 <input class="order__input required" placeholder="Фамилия*">
					<div class="error-txt hide" id="family-error">
						Введите фамилию
					</div>
				</div>
				<div class="order__inputs-item">
 <input class="order__input required" placeholder="Email*">
					<div class="error-txt hide" id="email-error">
						Введите email
					</div>
				</div>
			</div>
			<div class="order__title">
				Способ доставки
			</div>
			<div class="order__radio">
				<div class="order__radio-item">
 <input class="delivery radio-btn" type="radio" name="radio" value="pochta" id="pochta" checked="checked"> <label for="pochta"></label>
					<div class="order__radio-txt">
						<div class="order__radio-name">
							Почта России
						</div>
						<div class="order__radio-price">
							200 руб., от 9 до 20 дней
						</div>
					</div>
				</div>
				<div class="order__radio-item">
 <input class="delivery radio-btn" type="radio" name="radio" value="sdek" id="sdek"> <label for="sdek"></label>
					<div class="order__radio-txt">
						<div class="order__radio-name">
							СДЭК
						</div>
						<div class="order__radio-price">
							500 руб., от 15 до 35 дней
						</div>
					</div>
				</div>
				<div class="order__radio-item">
 <input class="delivery radio-btn" type="radio" name="radio" value="sdek-courier" id="sdek-courier"> <label for="sdek-courier"></label>
					<div class="order__radio-txt">
						<div class="order__radio-name">
							СДЭК курьер
						</div>
						<div class="order__radio-price">
							500 руб., от 15 до 35 дней
						</div>
					</div>
				</div>
			</div>
			<div class="order__title">
				Адрес доставки
			</div>
			<div class="order__inputs address_data">
				<div class="address_data_form">
					<div class="order__inputs-item input">
 <input class="order__input required_address" placeholder="Страна*">
						<div class="error-txt hide" id="counry-error">
							Введите имя
						</div>
					</div>
					<div class="order__inputs-item input">
 <input class="order__input required_address" placeholder="Город*">
						<div class="error-txt hide" id="city-error">
							Введите телефон
						</div>
					</div>
					<div class="order__inputs-item input">
 <input class="order__input required_address" placeholder="Индекс*">
						<div class="error-txt hide" id="index-error">
							Введите фамилию
						</div>
					</div>
					<div class="order__inputs-item input">
 <input class="order__input required_address" placeholder="Улица*">
						<div class="error-txt hide" id="street-error">
							Введите email
						</div>
					</div>
					<div class="order__inputs-item input">
 <input class="order__input required_address" placeholder="Дом/корпус*">
						<div class="error-txt hide" id="house-error">
							Введите фамилию
						</div>
					</div>
					<div class="order__inputs-item input">
 <input class="order__input required_address" placeholder="Квартира/офис*">
						<div class="error-txt hide" id="flat-error">
							Введите email
						</div>
					</div>
					<div class="order__inputs-item order__inputs-comment textarea">
 <textarea class="order__input order__input-comment" type="text" placeholder="Комментарий к заказу"> </textarea>
					</div>
				</div>
				<div class="sdek_map hide">
				</div>
			</div>
		</form>
		<div class="order__payment">
			<div class="order__payment-title">
				Способы оплаты
			</div>
			<div class="order__payment-choose">
				<select>
					<option>💳 Картой онлайн</option>
					<option>💳 Картой при получении</option>
				</select>
			</div>
			<div class="order__payment-price">
				<div class="order__payment-txt">
					Сумма заказа
				</div>
				<div class="order__payment-txt">
					24 560 ₽
				</div>
			</div>
			<div class="order__payment-price">
				<div class="order__payment-txt">
					Количество товаров
				</div>
				<div class="order__payment-txt">
					23
				</div>
			</div>
			<div class="order__payment-price paymant-summ">
				<div class="order__payment-txt">
					Итого
				</div>
				<div class="order__payment-txt">
					24 060 ₽
				</div>
			</div>
 <a class="order__payment-btn" href="#">
			<div class="order__payment-btn-txt">
				Перейти к оплате
			</div>
 </a>
			<div class="data-processing-block">
 <input class="data-processing" type="checkbox" id="data-processing">
				<div class="data-processing-txt">
					Я даю согласие на обработку персональных данных
				</div>
			</div>
		</div>
	</div>
</div>
 </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>