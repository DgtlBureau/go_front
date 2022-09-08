<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Go fight");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/go-fight/css/index.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/go-fight/js/index.js');
?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!--    <script type="text/javascript" src="slick/slick.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"
            integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <section class="headerFight">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "banner_fight",
            array(
                "IBLOCK_ID" => \GoFamily\Helper\Iblock::getId('fight_banner'),
                "IBLOCK_TYPE" => "boxing",
                "PROPERTY_CODE" => ["VIDEO"],
            )
        ); ?>
    </section>
    <section class="hall">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "gym_fight",
            array(
                "ELEMENT_CODE" => "our_gym",
                "IBLOCK_ID" => \GoFamily\Helper\Iblock::getId('gym'),
                "IBLOCK_TYPE" => "boxing",
                "PROPERTY_CODE" => ['IMAGES', 'ADDRESS', 'CONTACTS', 'SCHEDULE', 'SOCIALS',]
            )
        ); ?>
    </section>
    <section class="trainers">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "gym_trainers",
            array(
                "IBLOCK_ID" => \GoFamily\Helper\Iblock::getId('trainers'),
                "IBLOCK_TYPE" => "boxing"
            )
        ); ?>
    </section>
    <section id="subscription_Section" class="subscriptions">
        <? $APPLICATION->IncludeComponent(
            "bitrix:catalog.section",
            "abonements",
            array(
                "IBLOCK_ID" => \GoFamily\Helper\Iblock::getId('abonements'),
                "IBLOCK_TYPE" => "shop",
                "PRICE_CODE" => ['BASE',],
                "PROPERTY_CODE" => ['OPTIONS',]
            )
        ); ?> </section> <!-- <section class="workout">
<div class="container flexColumn">
	<div class="captionWrapperWorkout">
		<h2 class="title">Тренировки</h2>
 <img alt="arrow" src="/local/templates/new_ru/assets/go-fight/css/images/arrow.png" class="arrowBlock">
	</div>
	<div class="workoutList">
		<div class="workoutItem">
			<h3>
			Абонемент на 3 занятия с трениром </h3>
 <span class="workoutPrice">5 500 ₽</span> <button class="defaultButton workoutButton">Купить абонемент</button>
		</div>
		<div class="workoutItem">
			<h3>
			Абонемент на 6 занятия с трениром </h3>
 <span class="workoutPrice">6 500 ₽</span> <button class="defaultButton workoutButton">Купить абонемент</button>
		</div>
		<div class="workoutItem">
			<h3>
			Абонемент на 9 занятия с трениром </h3>
 <span class="workoutPrice">9 500 ₽</span> <button class="defaultButton workoutButton">Купить абонемент</button>
		</div>
	</div>
</div>
</section>-->
<? $APPLICATION->IncludeComponent(
    "bitrix:form",
    "feedback_form",
    array()
); ?>
    <div id="workoutModal" class="modalWrapper">
        <div class="container">
            <img src="/local/templates/new_ru/assets/go-fight/css/images/close.svg" class="closeIcon">
            <div class="modalWorkoutContainer containerModal">
                <div class="container signUpWorkoutFormWrapper">
                    <form class="modalWorkoutForm">
                        <div class="modalWorkoutFormHeader">
                            <h3>Заполните данные</h3>
                            <img src="/local/templates/new_ru/assets/go-fight/css/images/close.svg"
                                 class="closeIconContainer">
                        </div>
                        <input class="modalWorkoutFormInput" placeholder="Имя*"> <input class="modalWorkoutFormInput"
                                                                                        placeholder="Фамилия*"> <input
                                class="modalWorkoutFormInput" type="text" name="phone" id="phone2"
                                placeholder="Телефон*"> <input class="modalWorkoutFormInput" placeholder="Email*">
                        <textarea class="modalWorkoutFormInput modalWorkoutFormArea"
                                  placeholder="Комментарий"></textarea>
                        <button id="confirmButtonWorkout" class="defaultButton">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="workoutConfirmModal" class="modalWrapper">
        <div class="container">
            <img src="/local/templates/new_ru/assets/go-fight/css/images/close.svg" class="closeIcon">
            <div class="modalWorkoutConfirmContainer containerModal">
                <div class="headerModalWorkoutConfirm">
                    <h3>Заявка отправлена!</h3>
                    <img src="/local/templates/new_ru/assets/go-fight/css/images/close.svg" class="closeIconContainer">
                </div>
                <p class="modalWorkoutConfirmText">
                    Мы проверим плотное расписание тренера и свяжемся с вами в ближайшее время
                </p>
            </div>
        </div>
    </div>
    <div id="successBuyModal" class="modalWrapper">
        <div class="container">
            <img src="/local/templates/new_ru/assets/go-fight/css/images/close.svg" class="closeIcon">
            <div class="modalSuccessBuyContainer containerModal">
                <h3>Спaсибо за покупку!</h3>
                <span class="modalSuccessBuyNumber">Номер вашего заказа # 45566</span> <span
                        class="modalSuccessBuyText">Все данные по абонементу мы отправили на почту <a
                            href="mailto:jhfjb@gmail.com">jhfjb@gmail.com</a></span>
                <button id="buttonModalSuccessBuy" class="modalSuccessBuyButton">На главную</button>
            </div>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>