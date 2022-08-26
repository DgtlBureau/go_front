<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Go fight");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/go-fight/css/index.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/go-fight/js/index.js');
?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--    <script type="text/javascript" src="slick/slick.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"
            integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <section class="headerFight">
        <div class="container headerContent">
            <h1>GO fights держим удар</h1>
            <p class="headerParagraph">
                Несколько лет назад мы решили популяризировать любительский хоккей и
                создать престижный дивизион
            </p>
            <div class="headerButtonWrapper">
                <button id="anchor" class="defaultButton">Купить абонемент</button>
                <img class="arrowBlock" src="<?= SITE_TEMPLATE_PATH ?>/assets/go-fight/css/images/arrow.png"
                     alt="arrow"/>
            </div>

        </div>
        <div class="backgroundWrapper">
            <img class="headerBackground" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/background_1.jpg" alt="header image"/>
        </div>
    </section>

    <section class="hall">
        <div class="topBackgroundHall"></div>
        <div class="container flexColumn">
            <h2 class="title">Наш зал</h2>
            <div class="hallContent">
                <div class="previewHall">
                    <img class="mainImageHall" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/hall_1.jpg" alt="hall main image"/>
                    <div class="hallImageListWrapper">
                        <div class="hallImageList">
                            <img class="hallImageItem" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/hall_1.jpg" alt="hall image"
                                 data-slide-index="0"/>
                            <img class="hallImageItem" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/hall_1.jpg" alt="hall image"
                                 data-slide-index="1"/>
                            <img class="hallImageItem" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/hall_1.jpg" alt="hall image"
                                 data-slide-index="2"/>
                            <img class="hallImageItem" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/hall_1.jpg" alt="hall image"
                                 data-slide-index="3"/>
                            <img class="hallImageItem" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/hall_1.jpg" alt="hall image"
                                 data-slide-index="4"/>
                            <img class="hallImageItem" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/hall_1.jpg" alt="hall image"
                                 data-slide-index="5"/>
                        </div>
                    </div>
                </div>
                <div class="flexColumn hallContentInfo">
                    <h3 class="hallContentLabel">GO fights</h3>
                    <p class="hallContentInfoParagraph">
                        Несколько лет назад мы решили популяризировать любительский хоккей
                        и создать престижный дивизион с шикарным трофее
                    </p>
                    <div class="hallRowWrapper flexColumn">
                        <div class="hallRow">
                            <div class="flexColumn hallRowContent">
                                <h4>Адрес</h4>
                                <span>123290, г. Москва, 1-й Магистральный туп., д. 5А</span>
                            </div>
                            <div class="flexColumn">
                                <h4>Режим работы</h4>
                                <span>с 10:00 – 20:00</span>
                                <span>без перерывов</span>
                            </div>
                        </div>
                        <div class="hallRow">
                            <div class="flexColumn">
                                <h4>Контактны</h4>
                                <span>+7 (913) 616-18-16</span>
                                <span>+7 (913) 616-18-16</span>
                            </div>
                            <div class="flexColumn">
                                <h4>Социальные сети</h4>
                                <div class="socialNetworks">
                                    <div class="socialNetworksWrapper">
                                        <img class="instagram" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/instagram.svg"/>
                                    </div>
                                    <div class="socialNetworksWrapper">
                                        <img class="vk" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/vk.svg"/>
                                    </div>
                                    <div class="socialNetworksWrapper">
                                        <img class="tiktok" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/tiktok.svg"/>
                                    </div>
                                    <div class="socialNetworksWrapper">
                                        <img class="telegram" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/telegram.svg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trainers">
        <div class="container flexColumn">
            <div class="captionWrapperTrainers">
                <h2 class="title">Тренеры</h2>
                <img class="arrowBlock" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/arrow.png" alt="arrow"/>
            </div>

            <div class="trainersList">
                <div class="trainerCard" data-trainer-id="0">
                    <div class="trainerImageWrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/trainer_1.png" alt="trainer avatar"/>
                    </div>
                    <div class="trainerName">Сергей Калачев</div>
                </div>
                <div class="trainerCard" data-trainer-id="1">
                    <div class="trainerImageWrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/trainer_2.png" alt="trainer avatar"/>
                    </div>
                    <div class="trainerName">Сергей Калачев</div>
                </div>
                <div class="trainerCard" data-trainer-id="2">
                    <div class="trainerImageWrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/trainer_1.png" alt="trainer avatar"/>
                    </div>
                    <div class="trainerName">Сергей Калачев</div>
                </div>
                <div class="trainerCard" data-trainer-id="3">
                    <div class="trainerImageWrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/trainer_2.png" alt="trainer avatar"/>
                    </div>
                    <div class="trainerName">Сергей Калачев</div>
                </div>
                <div class="trainerCard" data-trainer-id="4">
                    <div class="trainerImageWrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/trainer_1.png" alt="trainer avatar"/>
                    </div>
                    <div class="trainerName">Сергей Калачев</div>
                </div>
                <div class="trainerCard" data-trainer-id="5">
                    <div class="trainerImageWrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/trainer_2.png" alt="trainer avatar"/>
                    </div>
                    <div class="trainerName">Сергей Калачев</div>
                </div>
            </div>
        </div>
    </section>

    <section id="subscription_Section" class="subscriptions">
        <div class="container flexColumn">
            <div class="captionWrapperSubscriptions">
                <h2 class="title">Абонементы</h2>
                <img class="arrowBlock" src="<?= SITE_TEMPLATE_PATH ?>/assets/go-fight/css/images/arrow.png" alt="arrow">
            </div>

            <div class="subscriptionsList">
                <div class="subscriptionsItem">
                    <h3>Безлимитный на <span>1 месяца</span></h3>
                    <h4>В абонемент входит:</h4>
                    <span class="subscriptionsItemInclude">Тренажерный зал</span>
                    <span class="subscriptionsItemInclude">Зал единоборств</span>
                    <span class="subscriptionsItemInclude">Групповые программы</span>
                    <span class="subscriptionsItemInclude">Питьевая вода</span>
                    <span class="subscriptionsItemInclude">1 персональная тренировка</span>
                    <span class="priceSubscription">5 500 ₽</span>
                    <button class="defaultButton subscriptionsButton">Купить абонемент</button>
                </div>

                <div class="subscriptionsItem">
                    <h3>Безлимитный на <span>3 месяца</span></h3>
                    <h4>В абонемент входит:</h4>
                    <span class="subscriptionsItemInclude">Тренажерный зал</span>
                    <span class="subscriptionsItemInclude">Зал единоборств</span>
                    <span class="subscriptionsItemInclude">Групповые программы</span>
                    <span class="subscriptionsItemInclude">Питьевая вода</span>
                    <span class="subscriptionsItemInclude">3 персональная тренировка</span>
                    <span class="priceSubscription">7 500 ₽</span>
                    <button class="defaultButton subscriptionsButton">Купить абонемент</button>
                </div>

                <div class="subscriptionsItem">
                    <h3>Безлимитный на <span>6 месяца</span></h3>
                    <h4>В абонемент входит:</h4>
                    <span class="subscriptionsItemInclude">Тренажерный зал</span>
                    <span class="subscriptionsItemInclude">Зал единоборств</span>
                    <span class="subscriptionsItemInclude">Групповые программы</span>
                    <span class="subscriptionsItemInclude">Питьевая вода</span>
                    <span class="subscriptionsItemInclude">6 персональная тренировка</span>
                    <span class="priceSubscription">9 500 ₽</span>
                    <button class="defaultButton subscriptionsButton">Купить абонемент</button>
                </div>
            </div>
        </div>
    </section>

    <section class="workout">
        <div class="container flexColumn">
            <div class="captionWrapperWorkout">
                <h2 class="title">Тренировки</h2>
                <img class="arrowBlock" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/arrow.png" alt="arrow"/>
            </div>

            <div class="workoutList">
                <div class="workoutItem">
                    <h3>
                        Абонемент на
                        <span>3 занятия</span>
                        с трениром
                    </h3>
                    <span class="workoutPrice">5 500 ₽</span>
                    <button class="defaultButton workoutButton">Купить абонемент</button>
                </div>

                <div class="workoutItem">
                    <h3>
                        Абонемент на
                        <span>6 занятия</span>
                        с трениром
                    </h3>
                    <span class="workoutPrice">6 500 ₽</span>
                    <button class="defaultButton workoutButton">Купить абонемент</button>
                </div>

                <div class="workoutItem">
                    <h3>
                        Абонемент на
                        <span>9 занятия</span>
                        с трениром
                    </h3>
                    <span class="workoutPrice">9 500 ₽</span>
                    <button class="defaultButton workoutButton">Купить абонемент</button>
                </div>
            </div>
    </section>

    <section class="feedback">
        <div class="backgroundWrapper">
            <img class="headerBackground" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/background_2.jpg" alt="header image"/>
        </div>
        <div class="container feedbackFormWrapper">
            <h2>Остались вопросы?</h2>
            <form class="feedbackForm">
                <h3>Напишите нам!</h3>
                <input class="feedbackFormInput" placeholder="Имя*"/>
                <input class="feedbackFormInput" placeholder="Фамилия*"/>
                <input class="feedbackFormInput" type="text" name="phone" id="phone1" placeholder="Телефон*"/>
                <input class="feedbackFormInput" placeholder="Email*"/>
                <textarea class="feedbackFormInput feedbackFormArea" placeholder="Комментарий"></textarea>
                <button class="defaultButton">Отправить</button>
            </form>
        </div>
    </section>

    <section class="footer"></section>

    <div id="trainerModal" class="modalWrapper">
        <div class="container">
            <div class="modalTrainerContainerWrapper">
                <img class="closeIcon" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
                <div class="modalTrainerContainer containerModal">
                    <div class="trainerAvatarWrapper">
                        <img class="modalTrainerAvatar" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/trainer_1.png" alt="traner avatar"/>
                    </div>
                    <div class="modalTrainerInfo">
                        <div class="modalTrainerInfoName">Сергей Калачев<span>(Тренер по боксу)</span></div>
                        <pre>
В 3,5 года родители отдали учиться кататься на коньках, в 4 года начал заниматься хоккеем.

Занимался в спортивных школах:
ДЮСШ «Пингвины» 2000-2006;
СДЮШОР «Русь» 2006-2008;
ХК «Буревестник» 2008-2010;
ДЮСШ 2 «Северная Звезда» 2010-2011;
ДЮСШ "Пингвины" 2011-2014;
ХК «Ледяные волки МАИ» 2013-2020.

В команде «GO» (ранее «Суханово Парк») с 2016 года.
Тренерскую карьеру начал с 2018 года.
            </pre>
                        <button id="signUpWorkout" class="defaultButton">Записаться на тренировку</button>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div id="workoutModal" class="modalWrapper">
        <div class="container ">
            <img class="closeIcon" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
            <div class="modalWorkoutContainer containerModal">
                <div class="container signUpWorkoutFormWrapper">
                    <form class="modalWorkoutForm">
                        <div class="modalWorkoutFormHeader">
                            <h3>Заполните данные</h3>
                            <img class="closeIconContainer" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
                        </div>
                        <input class="modalWorkoutFormInput" placeholder="Имя*"/>
                        <input class="modalWorkoutFormInput" placeholder="Фамилия*"/>
                        <input class="modalWorkoutFormInput" type="text" name="phone" id="phone2"
                               placeholder="Телефон*"/>
                        <input class="modalWorkoutFormInput" placeholder="Email*"/>
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
            <img class="closeIcon" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
            <div class="modalWorkoutConfirmContainer containerModal">
                <div class="headerModalWorkoutConfirm">
                    <h3>Заявка отправлена!</h3>
                    <img class="closeIconContainer" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
                </div>
                <p class="modalWorkoutConfirmText">Мы проверим плотное расписание тренера и свяжемся с вами
                    в ближайшее время
                </p>
            </div>
        </div>
    </div>

    <div id="selectSubscriptionModal" class="modalWrapper">
        <div class="container">
            <img class="closeIcon" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
            <div class="modalSelectSubscriptionContainer containerModal">
                <div class="modalSelectSubscriptionHeader">
                    <span>Вы выбрали</span>
                    <img class="closeIconContainer" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
                </div>
                <div class="modalSelectSubscriptionContent">
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/subscription_image_1.jpg" alt="subscription preview"/>
                    <span class="subscriptionModalDescription">Безлимитный абоенмент на 6 месяцев</span>
                    <span class="subscriptionModalPrice">9 590 ₽</span>
                </div>
                <div class="buttonSectionSubscriptionModal">
                    <button id="buttonSectionSubscriptionModalClose" class="alternativeButton">Выбрать другой</button>
                    <button id="buttonSectionSubscriptionModalBuy" class="defaultButton">Купить</button>
                </div>
            </div>
        </div>
    </div>

    <div id="successBuyModal" class="modalWrapper">
        <div class="container">
            <img class="closeIcon" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
            <div class="modalSuccessBuyContainer containerModal">
                <h3>Спaсибо за покупку!</h3>
                <span class="modalSuccessBuyNumber">Номер вашего заказа # 45566</span>
                <span class="modalSuccessBuyText">Все данные по абонементу мы отправили на почту jhfjb@gmail.com</span>
                <button id="buttonModalSuccessBuy" class="modalSuccessBuyButton">На главную</button>
            </div>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>