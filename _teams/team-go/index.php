<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Хоккейная команда Go");
?><?
$uri = $APPLICATION->GetCurUri();
switch($uri) {
    case '/teams/team-go/tournament':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GoTournament/main.3c3fd34d3a94dbd7106e.css");
        include 'tournament.php';
        break;
    case '/teams/team-go/tournament/playoff':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GoFinal/main.49254a378fa26c1d17c6.css");
        include 'playoff.php';
        break;
    case '/teams/team-go/news':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GohockeyTrainer/main.91bc24e41b6003253085.css");
 ?>
<div class="go-news">
	<div class="go-news__info">
		<div class="go-news__about">
			<div class="go-news__about-title">
				<p>
					 Хоккейная команда
				</p>
				<p>
					 Команда
				</p>
				<div class="go-news__team-name">
 <span data-text="GO" id="GO">GO</span>
				</div>
			</div>
			<div class="go-news__about-txt">
				<p>
					 Помогаем любителям спорта в России проявить свой потенциал по максимуму, а зрителям — увидеть действительно захватывающие спортивные мероприятия.&nbsp;&nbsp;
				</p>
				<p>
					 Мы делаем всё, чтобы любительский спорт нисколько не уступал профессиональному — как по уровню медийного интереса к соревнованиям, так и по сложности организации.
				</p>
 <br>
			</div>
			<div class="go-news__progress invisible">
				<div class="go-news__progress-stats">
					<div class="go-news__progress-victories">
						<div class="go-news__progress-title">
							 Побед
						</div>
 <span data-text="13" id="victories-count">13</span>
					</div>
					<div class="go-news__progress-points">
						<div class="go-news__progress-title">
							 Очков
						</div>
 <span data-text="7" id="points-count">7</span>
					</div>
					<div class="go-news__progress-place">
						<div class="go-news__progress-title">
							 Место
						</div>
 <span data-text="4" id="place">4</span>
					</div>
				</div>
			</div>
			<div class="results">
				<div class="results__title">
					 Достижения
				</div>
				<div class="results__block">
					<div class="results__image">
 <img alt="resultImage" src="/local/templates/new_ru/img/cup.png">
					</div>
					<div class="results__txt">
						<div class="results__competitions">
							 Чемпионат ЛЕТО-2021
						</div>
						<div class="results__place">
							 1 место
						</div>
					</div>
				</div>
				<div class="results__block">
					<div class="results__image">
 <img alt="resultImage" src="/local/templates/new_ru/img/cup.png">
					</div>
					<div class="results__txt">
						<div class="results__competitions">
							 Чемпионат ЛЕТО-2021
						</div>
						<div class="results__place">
							 1 место
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="go-news__progress">
			<div class="go-news__progress-background" id="team-background-logo">
			</div>
			<div class="go-news__progress-stats">
				<div class="go-news__progress-victories">
					<div class="go-news__progress-title">
						 Побед
					</div>
 <span data-text="13" id="victories-count">13</span>
				</div>
				<div class="go-news__progress-points">
					<div class="go-news__progress-title">
						 Очков
					</div>
 <span data-text="7" id="points-count">7</span>
				</div>
				<div class="go-news__progress-place">
					<div class="go-news__progress-title">
						 Место
					</div>
 <span data-text="4" id="place">4</span>
				</div>
			</div>
		</div>
	</div>
	<div class="go-news__info-nav">
		<div class="go-news__nav-item">
			<p>
				 Состав команды
			</p>
			<p>
				 Состав
			</p>
		</div>
		<div class="go-news__nav-item">
			 Турниры
		</div>
		<div class="go-news__nav-item">
			 Новости
		</div>
	</div>
	<div class="go-news__content">
		<div class="championship-course">
			<div class="championship-course__top">
				<div class="championship-course__title">
					 Новости команды
				</div>
				<div class="championship-course__select-block">
					<select class="championship-course__period">
						<option>ВСЕ РУБРИКИ</option>
						<option>ВСЕ РУБРИКИ</option>
					</select>
				</div>
			</div>
		</div>
		<div class="go-news__news-items">
			<div class="go-news__news-items-block">
				<div class="go-news__item" modal-index="1">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
					<p class="go-news__hush">
						 #GO
					</p>
					<p class="go-news__text">
						 Гол команды Go ` 14<br>
						 10 марта 2022
					</p>
				</div>
				<div class="go-news__item" modal-index="2">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
					<p class="go-news__hush">
						 #GO
					</p>
					<p class="go-news__text">
						 Гол команды Go ` 14<br>
						 10 марта 2022
					</p>
				</div>
				<div class="go-news__item" modal-index="3">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
					<p class="go-news__hush">
						 #GO
					</p>
					<p class="go-news__text">
						 Гол команды Go ` 14<br>
						 10 марта 2022
					</p>
				</div>
				<div class="go-news__item" modal-index="4">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
					<p class="go-news__hush">
						 #GO
					</p>
					<p class="go-news__text">
						 Гол команды Go ` 14<br>
						 10 марта 2022
					</p>
				</div>
				<div class="go-news__item" modal-index="5">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
					<p class="go-news__hush">
						 #GO
					</p>
					<p class="go-news__text">
						 Гол команды Go ` 14<br>
						 10 марта 2022
					</p>
				</div>
				<div class="go-news__item" modal-index="6">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
					<p class="go-news__hush">
						 #GO
					</p>
					<p class="go-news__text">
						 Гол команды Go ` 14<br>
						 10 марта 2022
					</p>
				</div>
				<div class="go-news__item" modal-index="4">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
					<p class="go-news__hush">
						 #GO
					</p>
					<p class="go-news__text">
						 Гол команды Go ` 14<br>
						 10 марта 2022
					</p>
				</div>
				<div class="go-news__item" modal-index="5">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
					<p class="go-news__hush">
						 #GO
					</p>
					<p class="go-news__text">
						 Гол команды Go ` 14<br>
						 10 марта 2022
					</p>
				</div>
				<div class="go-news__item" modal-index="6">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
					<p class="go-news__hush">
						 #GO
					</p>
					<p class="go-news__text">
						 Гол команды Go ` 14<br>
						 10 марта 2022
					</p>
				</div>
			</div>
			<div class="go-news__modal-window" id="modal1">
				<div class="go-news__modal-close-block">
					<div class="go-news__modal-close-button">
 <img alt="close" src="/local/templates/new_ru/img/close.png">
					</div>
				</div>
				<div class="go-news__modal-block">
					<div class="go-news__modal">
						<div class="go-news__modal-banner">
 <button class="go-news__modal-banner-share">
							<div class="go-news__modal-banner-share-img">
 <img alt="share" src="/local/templates/new_ru/img/share.png">
							</div>
							<div class="go-news__modal-banner-share-links">
 <a class="go-news__modal-banner-share-link" href="">
								<div class="go-news__modal-banner-share-img">
 <img alt="vk" src="assets/61d6798e3f98f945585b.png">
								</div>
 </a><a class="go-news__modal-banner-share-link" href="">
								<div class="go-news__modal-banner-share-img">
 <img alt="tik-tok" src="/local/templates/new_ru/img/tik-tok.png">
								</div>
 </a><a class="go-news__modal-banner-share-link" href="">
								<div class="go-news__modal-banner-share-img">
 <img alt="instagram" src="assets/a1398280bc6b8a6a991a.png">
								</div>
 </a><a class="go-news__modal-banner-share-link" href="">
								<div class="go-news__modal-banner-share-img">
 <img alt="telegram" src="/local/templates/new_ru/img/telegram.png">
								</div>
 </a>
							</div>
 </button>
							<div class="go-news__modal-banner-txt-block">
								<div class="go-news__modal-banner-title">
									 Победа в финале чемпионата
								</div>
								<div class="go-news__modal-banner-txt">
									<div class="go-news__modal-banner-date">
										 10 марта 2022
									</div>
									<div class="go-news__modal-banner-hash">
										 #GO
									</div>
								</div>
							</div>
						</div>
						<div class="go-news__modal-content">
							<div class="go-news__modal-txt">
								 Несколько лет назад мы решили популяризировать любительский хоккей и создать престижный дивизион с шикарным трофее и еще какой-то тут текст который по сути ничего не значит, но делает некий вид этому прекрасному блоку
							</div>
							<div class="go-news__modal-txt">
								 Несколько лет назад мы решили популяризировать любительский хоккей и создать престижный дивизион с шикарным трофее и еще какой-то тут текст который по сути ничего не значит, но делает некий вид этому прекрасному блоку
							</div>
							<div class="go-news__modal-image-block">
								<div class="go-news__modal-image">
 <img alt="team-news-item" src="/local/templates/new_ru/img/soc-item1.png">
								</div>
								<div class="go-news__modal-image">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
								</div>
							</div>
							<div class="go-news__modal-txt">
								 Несколько лет назад мы решили популяризировать любительский хоккей и создать престижный дивизион с шикарным трофее и еще какой-то тут текст который по сути ничего не значит, но делает некий вид этому прекрасному блоку
							</div>
							<div class="go-news__modal-txt">
								 Несколько лет назад мы решили популяризировать любительский хоккей и создать престижный дивизион с шикарным трофее и еще какой-то тут текст который по сути ничего не значит, но делает некий вид этому прекрасному блоку
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="go-news__modal-window" id="modal2">
				<div class="go-news__modal-close-block">
					<div class="go-news__modal-close-button">
 <img alt="close" src="/local/templates/new_ru/img/.png">
					</div>
				</div>
				<div class="go-news__modal-block">
					<div class="go-news__modal">
						<div class="go-news__modal-banner">
 <button class="go-news__modal-banner-share">
							<div class="go-news__modal-banner-share-img">
 <img alt="share" src="assets/b2df9ada219246d3bbee.png">
							</div>
							<div class="go-news__modal-banner-share-links">
 <a class="go-news__modal-banner-share-link" href="">
								<div class="go-news__modal-banner-share-img">
 <img alt="vk" src="/local/templates/new_ru/img/vk.png">
								</div>
 </a><a class="go-news__modal-banner-share-link" href="">
								<div class="go-news__modal-banner-share-img">
 <img alt="tik-tok" src="/local/templates/new_ru/img/tik-tok.png">
								</div>
 </a><a class="go-news__modal-banner-share-link" href="">
								<div class="go-news__modal-banner-share-img">
 <img alt="instagram" src="/local/templates/new_ru/img/instagram.png">
								</div>
 </a><a class="go-news__modal-banner-share-link" href="">
								<div class="go-news__modal-banner-share-img">
 <img alt="telegram" src="/local/templates/new_ru/img/telegram.png">
								</div>
 </a>
							</div>
 </button>
							<div class="go-news__modal-banner-txt-block">
								<div class="go-news__modal-banner-title">
									 Победа в финале чемпионата
								</div>
								<div class="go-news__modal-banner-txt">
									<div class="go-news__modal-banner-date">
										 10 марта 2022
									</div>
									<div class="go-news__modal-banner-hash">
										 #GO
									</div>
								</div>
							</div>
						</div>
						<div class="go-news__modal-content">
							<div class="go-news__modal-txt">
								 Несколько лет назад мы решили популяризировать любительский хоккей и создать престижный дивизион с шикарным трофее и еще какой-то тут текст который по сути ничего не значит, но делает некий вид этому прекрасному блоку
							</div>
							<div class="go-news__modal-txt">
								 Несколько лет назад мы решили популяризировать любительский хоккей и создать престижный дивизион с шикарным трофее и еще какой-то тут текст который по сути ничего не значит, но делает некий вид этому прекрасному блоку
							</div>
							<div class="go-news__modal-image-block">
								<div class="go-news__modal-image">
 <img alt="team-news-item" src="/local/templates/new_ru/img/soc-item1.png">
								</div>
								<div class="go-news__modal-image">
 <img alt="team-news-item" src="/local/templates/new_ru/img/team-news-item1.png">
								</div>
							</div>
							<div class="go-news__modal-txt">
								 Несколько лет назад мы решили популяризировать любительский хоккей и создать престижный дивизион с шикарным трофее и еще какой-то тут текст который по сути ничего не значит, но делает некий вид этому прекрасному блоку
							</div>
							<div class="go-news__modal-txt">
								 Несколько лет назад мы решили популяризировать любительский хоккей и создать престижный дивизион с шикарным трофее и еще какой-то тут текст который по сути ничего не значит, но делает некий вид этому прекрасному блоку
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="go-news__btn-block">
				<div class="go-news__btn">
					 Все новости
				</div>
			</div>
		</div>
		<div class="social-content-block">
			<div class="social-content-block__title-block">
				<div class="social-content-block__title">
					 Instagram
				</div>
 <img alt="arrow" src="assets/97a518195dd6805c5623.png">
			</div>
			<div class="social-content-block__content">
 <a class="social-content-block__item" href=""><img alt="soc-item" src="/local/templates/new_ru/img/soc-item1.png"></a><a class="social-content-block__item" href=""><img alt="soc-item" src="/local/templates/new_ru/img/soc-item1.png"></a><a class="social-content-block__item" href=""><img alt="soc-item" src="/local/templates/new_ru/img/soc-item1.png"></a><a class="social-content-block__item" href=""><img alt="soc-item" src="/local/templates/new_ru/img/soc-item1.png"></a>
			</div>
		</div>
		<div class="social-content-block">
			<div class="social-content-block__title-block">
				<div class="social-content-block__title">
					 VK
				</div>
 <img alt="arrow" src="assets/97a518195dd6805c5623.png">
			</div>
			<div class="social-content-block__content">
 <a class="social-content-block__item" href=""><img alt="soc-item" src="/local/templates/new_ru/img/soc-item1.png"></a><a class="social-content-block__item" href=""><img alt="soc-item" src="/local/templates/new_ru/img/soc-item1.png"></a><a class="social-content-block__item" href=""><img alt="soc-item" src="/local/templates/new_ru/img/soc-item1.png"></a><a class="social-content-block__item" href=""><img alt="soc-item" src="/local/templates/new_ru/img/soc-item1.png"></a>
			</div>
		</div>
	</div>
</div>
 <?
        break;
    default:
?>
<div class="go-team">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"team-go",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "team-go",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "team",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"LOGO",1=>"PLACE",2=>"GLASSES",3=>"WINS",4=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"menu_team",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(0=>"",),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?>
	<div class="go-team__line-up">
		<div class="go-team__staff-block">
			<div class="go-team__staff-title">
				 Тренерский штаб
			</div>
			<div class="go-team__staff">
				<div class="go-team__staff-person">
					<div class="go-team__coaching-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
					</div>
					<div class="go-team__coaching-staff-person-txt-block">
						 Сергей Калачев
					</div>
				</div>
				<div class="go-team__staff-person">
					<div class="go-team__coaching-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
					</div>
					<div class="go-team__coaching-staff-person-txt-block">
						 Сергей Калачев
					</div>
				</div>
			</div>
		</div>
		<div class="go-team__staff-block">
			<div class="go-team__staff-title">
				 Игроки
			</div>
			<div class="go-team__staff">
 <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a> <a href="" class="go-team__staff-person">
				<div class="go-team__players-staff-person-image">
 <img alt="goPerson" src="/local/templates/new_ru/img/goPerson.png">
				</div>
				<div class="go-team__players-staff-person-txt-block">
					<div class="go-team__playerstaff-person-name-block">
						<div class="go-team__players-staff-person-name">
							 Сергей
						</div>
						<div class="go-team__players-staff-person-name">
							 Калачев
						</div>
					</div>
					<div class="go-team__players-staff-person-number">
 <span data-text="13">13</span>
					</div>
				</div>
 </a>
			</div>
		</div>
	</div>
</div>
<?
    break;
}
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>