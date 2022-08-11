<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("GO");
?><section id="main">
<div id="myVideoDiv" class="overlay">
 <video autoplay="" muted="" width="100%" height="auto" loop="" id="myVideo"> <source src="<span id=" title="Код PHP: &lt;?=SITE_TEMPLATE_PATH?&gt;" class="bxhtmled-surrogate"><?=SITE_TEMPLATE_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/img/background_video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'&gt; <source src="<span id=" title="Код PHP: &lt;?=SITE_TEMPLATE_PATH?&gt;" class="bxhtmled-surrogate"><?=SITE_TEMPLATE_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/img/video_bg.ogv" type='video/ogg; codecs="theora, vorbis"'&gt; <source src="<span id=" title="Код PHP: &lt;?=SITE_TEMPLATE_PATH?&gt;" class="bxhtmled-surrogate"><?=SITE_TEMPLATE_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/img/video_bg.webm" type='video/webm; codecs="vp8, vorbis"'&gt; </video>
</div>
<div class="main_wrapper">
</div>
<div class="main_container_wrapper">
	<div class="main_container_wrapper_2">
		<div class="container">
			<div class="main-container">
				<h1 class="main-container__heading">
				<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH.'/includes/main/main_title.php'
	)
);?> </h1>
				<p class="main-container__parag">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH.'/includes/main/main_description.php'
	)
);?>
				</p>
			</div>
		</div>
	</div>
</div>
 </section> <section id="about">
<div class="container">
	<div class="about_pattern">
	</div>
	<div class="page-container">
		<div class="section">
			<div class="section__title-block">
				<div class="section__title">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH.'/includes/about/about_title.php'
	)
);?>
				</div>
				<div class="section__arrow">
					↙
				</div>
			</div>
			<div class="about-us__subtitle">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH.'/includes/main/main_description.php'
	)
);?>
			</div>
			<div class="about-us__content">
				<div class="about-us__swiper-block">
					<div class="about-us__switcher">
						<div class="about-us__switcher-previous">
							←
						</div>
						<div class="about-us__switcher-dots">
							<div class="about-us__switcher-dot about-us__switcher-dot--active">
							</div>
							<div class="about-us__switcher-dot">
							</div>
							<div class="about-us__switcher-dot">
							</div>
						</div>
						<div class="about-us__switcher-next">
							→
						</div>
					</div>
					<div class="about-us__swiper">
						 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"about",
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
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "about",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DATE_ACTIVE_FROM",4=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "999",
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
		"PROPERTY_CODE" => array(0=>"",1=>"PROP_0",2=>"PHOTO_TEAM",3=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
					</div>
				</div>
				<div class="about-us__info">
					<div class="about-us__info-item">
						<div class="about-us__info-item-txt-block">
							<span class="about-us__info-item-title" data-text="100">100</span>
							<div class="about-us__info-item-txt">
								Спортсменов
							</div>
						</div>
					</div>
					<div class="about-us__info-item">
						<div class="about-us__info-item-txt-block">
							<span class="about-us__info-item-title" data-text="20">20</span>
							<div class="about-us__info-item-txt">
								Проектов
							</div>
						</div>
					</div>
					<div class="about-us__info-item">
						<div class="about-us__info-item-txt-block">
							<span class="about-us__info-item-title" data-text="10">10</span>
							<div class="about-us__info-item-txt">
								Мероприятий
							</div>
						</div>
					</div>
					<div class="about-us__info-item about-us__info-item-social">
						<a class="about-us__info-social-block" href="" id="telegram-block">
						<div class="about-us__info-social-image">
							<img alt="telegram" src="/local/templates/new_ru/img/telegram.svg">
						</div>
 </a><a class="about-us__info-social-block" href="https://instagram.com/go.hockey" id="instagramm-block">
						<div class="about-us__info-social-image">
							<img alt="instagramm" src="/local/templates/new_ru/img/instagramm.svg">
						</div>
 </a><a class="about-us__info-social-block" href="http://www.tiktok.com/@g0hockey" id="tik-tok-block">
						<div class="about-us__info-social-image">
							<img alt="tik-tok" src="/local/templates/new_ru/img/tik-tok.svg">
						</div>
 </a><a class="about-us__info-social-block" href="https://vk.com/g0hockey" id="vk-block">
						<div class="about-us__info-social-image">
							<img alt="vk" src="/local/templates/new_ru/img/vk.svg">
						</div>
 </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!--
			<div class="page-container">

				<h2 class="section-title">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH.'/includes/about/about_title.php'
						)
					);?>
				</h2>
<p class="main-container__parag mobile_title">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH.'/includes/main/main_description.php'
								)
							);?>
						</p>
				<div class="about_container">
					<div class="about_left">
						<div class="swiper">
							<div class="swiper-wrapper about_swipe">
							  <?$APPLICATION->IncludeComponent(
								"bitrix:news.list", 
								"about", 
								array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "Y",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "0",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"COMPONENT_TEMPLATE" => "about",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array(
										0 => "NAME",
										1 => "PREVIEW_TEXT",
										2 => "PREVIEW_PICTURE",
										3 => "DATE_ACTIVE_FROM",
										4 => "",
									),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "1",
									"IBLOCK_TYPE" => "content",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
									"INCLUDE_SUBSECTIONS" => "Y",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "999",
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
									"PROPERTY_CODE" => array(
										0 => "",
										1 => "PROP_0",
										2 => "PHOTO_TEAM",
										3 => "",
									),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "Y",
									"SET_META_KEYWORDS" => "Y",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "SORT",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "ASC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N"
								),
								false
							);?>
							</div>
							<div class="swiper-nav">
								<div class="swiper-button-prev">
									←
								</div>
								<div class="swiper-pagination">
                                    <div class="swiper-pagination-item swiper-pagination-item-active"></div>
                                    <div class="swiper-pagination-item"></div>
                                    <div class="swiper-pagination-item"></div>
								</div>
								<div class="swiper-button-next">
									→
								</div>
							</div>
						</div>
					</div>
					<div class="about_right">
						<div class="about_right_top">
						  <div class="about_right_top_left">
							<h4 class="about_right_top_left_h4">
								<span class="about_number" data-text="100">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_TEMPLATE_PATH.'/includes/about/about_inc_1_1.php'
										)
									);?>
								</span>
							</h4>
							<p class="about_right_top_left_p">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_TEMPLATE_PATH.'/includes/about/about_inc_1_2.php'
									)
								);?>
							</p>
						</div>
						<div class="about_right_top_right">
							<h4 class="about_right_top_right_h4"> <span class="about_number" data-text="10"><?$APPLICATION->IncludeComponent(
											"bitrix:main.include",
											"",
											Array(
												"AREA_FILE_SHOW" => "file",
												"PATH" => SITE_TEMPLATE_PATH.'/includes/about/about_inc_3_1.php'
											)
										);?></span></h4>
							<p class="about_right_top_right_p"><?$APPLICATION->IncludeComponent(
											"bitrix:main.include",
											"",
											Array(
												"AREA_FILE_SHOW" => "file",
												"PATH" => SITE_TEMPLATE_PATH.'/includes/about/about_inc_3_2.php'
											)
										);?></p>
						</div>
						</div>
						<div class="about_right_bottom">
						<div class="about_right_bottom_left">
							<h4 class="about_right_bottom_left_h4"> 
								<span class="about_number" data-text="20">
									<?$APPLICATION->IncludeComponent(
											"bitrix:main.include",
											"",
											Array(
												"AREA_FILE_SHOW" => "file",
												"PATH" => SITE_TEMPLATE_PATH.'/includes/about/about_inc_2_1.php'
											)
										);?>
								</span>
							</h4>
							<p class="about_right_bottom_left_p">
										<?$APPLICATION->IncludeComponent(
											"bitrix:main.include",
											"",
											Array(
												"AREA_FILE_SHOW" => "file",
												"PATH" => SITE_TEMPLATE_PATH.'/includes/about/about_inc_2_2.php'
											)
										);?>
							</p>
						</div>
						<div class="about_right_bottom_right">
							<div class="about_right_bottom_right_social_item telergam">
							 	<a href="#">
									<i class="icons icons-telegram"></i>
								</a>
							</div>
							<div class="about_right_bottom_right_social_item instargam">
								<a href="#">
									<i class="icons icons-instagram"></i>
								</a>
							</div>
							<div class="about_right_bottom_right_social_item tik_tok">
							  	<a href="#">
									<i class="icons icons-tiktok"></i>
							  	</a>
							</div>
							<div class="about_right_bottom_right_social_item vk">
							  	<a href="#">
									<i class="icons icons-vk"></i>
							  	</a>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		    --->
</div>
 </section> <section id="team">
<div class="container">
	<div class="page-container">
		<div class="team_title_arrow">
			<div class="section__title">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH.'/includes/team/team_title.php'
	)
);?>
			</div>
			<div class="section__arrow">
				↙
			</div>
		</div>
		<div class="team">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"team",
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
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "team",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DATE_ACTIVE_FROM",4=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "team",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "999",
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
		"PROPERTY_CODE" => array(0=>"",1=>"PROP_0",2=>"PHOTO_TEAM",3=>"",4=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
		</div>
	</div>
</div>
 </section>
<?php
    $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/components/bitrix/news.list/match/main.8c702b025cae805b7f1c.css");
    $APPLICATION->AddHeadScript('/local/templates/new_ru/components/bitrix/news.list/match/index.js');

    ?> <section id="match">
<div class="container">
	<div class="block-with-matchs">
		<div class="block-with-matchs__title-block">
			<div class="block-with-matchs__title">
				Матчи
			</div>
		</div>
		<div class="block-with-matchs__swiper-block">
			<div class="block-with-matchs__swiper">
				<div class="match live">
					<div class="match__block" id="next-match__block">
						<div class="match__date-and-area">
							<div class="match__date">
								10 сентября, 18:00
							</div>
							<div class="match__area">
								Апиа арена
							</div>
						</div>
						<div class="match__versus">
							<div class="match__first-team">
								<div class="match__first-team-logo">
									<img alt="bull" src="/local/templates/new_ru/img/bull.png">
								</div>
								<div class="match__first-team-name" id="GO-first">
									GO
								</div>
							</div>
							<div class="match__score">
								<div class="match__first-team-score">
									5
								</div>
								<div class="match__score-between">
									:
								</div>
								<div class="match__second-team-score">
									0
								</div>
							</div>
							<div class="match__second-team">
								<div class="match__second-team-logo">
									<img alt="blackDragon" src="/local/templates/new_ru/img/blackDragon2.png">
								</div>
								<div class="match__second-team-name">
									Black<br>
									Dragon
								</div>
							</div>
						</div>
						<a class="match__button live" href="/live/">
						<div class="match__button-txt">
							Обзор матча
						</div>
						<div class="match__button-txt-arrow">
							→
						</div>
 </a>
					</div>
				</div>
				<div class="match">
					<div class="match__block" id="next-match__block">
						<div class="match__date-and-area">
							<div class="match__date">
								10 сентября, 18:00
							</div>
							<div class="match__area">
								Апиа арена
							</div>
						</div>
						<div class="match__versus">
							<div class="match__first-team">
								<div class="match__first-team-logo">
									<img alt="bull" src="/local/templates/new_ru/img/bull.png">
								</div>
								<div class="match__first-team-name" id="GO-first">
									GO
								</div>
							</div>
							<div class="match__score">
								<div class="match__first-team-score">
									-
								</div>
								<div class="match__score-between">
									:
								</div>
								<div class="match__second-team-score">
									-
								</div>
							</div>
							<div class="match__second-team">
								<div class="match__second-team-logo">
									<img alt="blackDragon" src="/local/templates/new_ru/img/blackDragon2.png">
								</div>
								<div class="match__second-team-name">
									Black<br>
									Dragon
								</div>
							</div>
						</div>
						<div class="match__button">
							<div class="match__button-txt">
								 Превью матча
							</div>
							<div class="match__button-txt-arrow">
								→
							</div>
						</div>
					</div>
				</div>
				<div class="match live">
					<div class="match__block" id="next-match__block">
						<div class="match__date-and-area">
							<div class="match__date">
								10 сентября, 18:00
							</div>
							<div class="match__area">
								Апиа арена
							</div>
						</div>
						<div class="match__versus">
							<div class="match__first-team">
								<div class="match__first-team-logo">
									<img alt="bull" src="/local/templates/new_ru/img/bull.png">
								</div>
								<div class="match__first-team-name" id="GO-first">
									GO
								</div>
							</div>
							<div class="match__score">
								<div class="match__first-team-score">
									5
								</div>
								<div class="match__score-between">
									:
								</div>
								<div class="match__second-team-score">
									0
								</div>
							</div>
							<div class="match__second-team">
								<div class="match__second-team-logo">
									<img alt="blackDragon" src="/local/templates/new_ru/img/blackDragon2.png">
								</div>
								<div class="match__second-team-name">
									Black<br>
									Dragon
								</div>
							</div>
						</div>
						<a class="match__button live" href="/live/">
						<div class="match__button-txt">
							Трансляция
						</div>
						<div class="match__translation">
							<img alt="translation" src="/local/templates/new_ru/img/translation.png">
						</div>
 </a>
					</div>
				</div>
				<div class="match">
					<div class="match__block" id="next-match__block">
						<div class="match__date-and-area">
							<div class="match__date">
								10 сентября, 18:00
							</div>
							<div class="match__area">
								Апиа арена
							</div>
						</div>
						<div class="match__versus">
							<div class="match__first-team">
								<div class="match__first-team-logo">
									<img alt="bull" src="/local/templates/new_ru/img/bull.png">
								</div>
								<div class="match__first-team-name" id="GO-first">
									GO
								</div>
							</div>
							<div class="match__score">
								<div class="match__first-team-score">
									-
								</div>
								<div class="match__score-between">
									:
								</div>
								<div class="match__second-team-score">
									-
								</div>
							</div>
							<div class="match__second-team">
								<div class="match__second-team-logo">
									<img alt="blackDragon" src="/local/templates/new_ru/img/blackDragon2.png">
								</div>
								<div class="match__second-team-name">
									Black<br>
									Dragon
								</div>
							</div>
						</div>
						<a class="match__button live" href="/live/">
						<div class="match__button-txt">
							Обзор матча
						</div>
						<div class="match__button-txt-arrow">
							→
						</div>
 </a>
					</div>
				</div>
				<div class="match">
					<div class="match__block" id="next-match__block">
						<div class="match__date-and-area">
							<div class="match__date">
								10 сентября, 18:00
							</div>
							<div class="match__area">
								Апиа арена
							</div>
						</div>
						<div class="match__versus">
							<div class="match__first-team">
								<div class="match__first-team-logo">
									<img alt="bull" src="/local/templates/new_ru/img/bull.png">
								</div>
								<div class="match__first-team-name" id="GO-first">
									GO
								</div>
							</div>
							<div class="match__score">
								<div class="match__first-team-score">
									-
								</div>
								<div class="match__score-between">
									:
								</div>
								<div class="match__second-team-score">
									-
								</div>
							</div>
							<div class="match__second-team">
								<div class="match__second-team-logo">
									<img alt="blackDragon" src="/local/templates/new_ru/img/blackDragon2.png">
								</div>
								<div class="match__second-team-name">
									Black<br>
									Dragon
								</div>
							</div>
						</div>
						<div class="match__button">
							<div class="match__button-txt">
								Превью матча
							</div>
							<div class="match__button-txt-arrow">
								→
							</div>
						</div>
					</div>
				</div>
				<div class="match live">
					<div class="match__block" id="next-match__block">
						<div class="match__date-and-area">
							<div class="match__date">
								10 сентября, 18:00
							</div>
							<div class="match__area">
								Апиа арена
							</div>
						</div>
						<div class="match__versus">
							<div class="match__first-team">
								<div class="match__first-team-logo">
									<img alt="bull" src="/local/templates/new_ru/img/bull.png">
								</div>
								<div class="match__first-team-name" id="GO-first">
									GO
								</div>
							</div>
							<div class="match__score">
								<div class="match__first-team-score">
									-
								</div>
								<div class="match__score-between">
									:
								</div>
								<div class="match__second-team-score">
									-
								</div>
							</div>
							<div class="match__second-team">
								<div class="match__second-team-logo">
									<img alt="blackDragon" src="/local/templates/new_ru/img/blackDragon2.png">
								</div>
								<div class="match__second-team-name">
									Black<br>
									Dragon
								</div>
							</div>
						</div>
						<a class="match__button live" href="/live/">
						<div class="match__button-txt">
							Трансляция
						</div>
						<div class="match__translation">
							<img alt="translation" src="/local/templates/new_ru/img/translation.png">
						</div>
 </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 </section> <section id="match" style="display:none;">
<div class="page-container">
	<h2 class="section-title">
	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH.'/includes/match/match_title.php'
	)
);?> </h2>
	<div class="match">
		<div class="go-final__swiper-block">
			<div class="go-final__swiper">
				 <!-- <div class="swiper-carousel__4item">
						<div class="swiper-wrapper"> --> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"match",
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
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "match",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DATE_ACTIVE_FROM",4=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "team",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "999",
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
		"PROPERTY_CODE" => array(0=>"",1=>"PROP_0",2=>"LOGO_1",3=>"LOGO_2",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
			</div>
			 <!-- <div class="swiper-nav match">
							<div class="swiper-button-next">
								→
							</div>
						</div>
					</div> -->
		</div>
	</div>
</div>
 </section> <section id="shop">
<div class="container">
	<div class="page-container">
		<div class="section__title-block">
			<div class="section__title">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH.'/includes/shop/shop_title.php'
	)
);?>
			</div>
			<div class="section__arrow">
				↙
			</div>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"shop",
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
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "shop",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DATE_ACTIVE_FROM",4=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1",
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
		"PROPERTY_CODE" => array(0=>"",1=>"PROP_0",2=>"FIRST_IMG",3=>"SECOND_IMG",4=>"THIRD_IMG",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
	</div>
</div>
 </section> <section id="news">
<div class="container">
	<h2 class="section-title news">
	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH.'/includes/news/news_title.php'
	)
);?> </h2>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news",
	Array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "news",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"DATE_CREATE",2=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
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
		"PROPERTY_CODE" => array(0=>"",1=>"PROP_0",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
	<div class="swiper-nav news">
		<div class="swiper-button-next">
			 →
		</div>
	</div>
</div>
 </section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>