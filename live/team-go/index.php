<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><div class="go-team">
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

<?
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
        <div class="go-news__content">
            <div class="championship-course">
                <div class="championship-course__top">
                    <div class="championship-course__title">Новости команды</div>
                    <div class="championship-course__select-block"><select class="championship-course__period">
                            <option>ВСЕ РУБРИКИ</option>
                            <option>ВСЕ РУБРИКИ</option>
                        </select></div>
                </div>
            </div>
            <div class="go-news__news-items">
                <div class="go-news__item" modal-index="1"><img src="/local/templates/new_ru/img/team-news-item1.png"
                                                                alt="team-news-item">
                    <p class="go-news__hush">#GO</p>
                    <p class="go-news__text">Гол команды Go ` 14<br><span>10 марта 2022</span></p>
                </div>
                <div class="go-news__item" modal-index="2"><img src="/local/templates/new_ru/img/team-news-item1.png"
                                                                alt="team-news-item">
                    <p class="go-news__hush">#GO</p>
                    <p class="go-news__text">Гол команды Go ` 14<br><span>10 марта 2022</span></p>
                </div>
                <div class="go-news__item" modal-index="3"><img src="/local/templates/new_ru/img/team-news-item1.png"
                                                                alt="team-news-item">
                    <p class="go-news__hush">#GO</p>
                    <p class="go-news__text">Гол команды Go ` 14<br><span>10 марта 2022</span></p>
                </div>
                <div class="go-news__item" modal-index="4"><img src="/local/templates/new_ru/img/team-news-item1.png"
                                                                alt="team-news-item">
                    <p class="go-news__hush">#GO</p>
                    <p class="go-news__text">Гол команды Go ` 14<br><span>10 марта 2022</span></p>
                </div>
                <div class="go-news__item" modal-index="5"><img src="/local/templates/new_ru/img/team-news-item1.png"
                                                                alt="team-news-item">
                    <p class="go-news__hush">#GO</p>
                    <p class="go-news__text">Гол команды Go ` 14<br><span>10 марта 2022</span></p>
                </div>
                <div class="go-news__item" modal-index="6"><img src="/local/templates/new_ru/img/team-news-item1.png"
                                                                alt="team-news-item">
                    <p class="go-news__hush">#GO</p>
                    <p class="go-news__text">Гол команды Go ` 14<br><span>10 марта 2022</span></p>
                </div>
                <div class="go-news__modal-window" id="modal1">
                    <div class="go-news__modal-close-block">
                        <div class="go-news__modal-close-button"><img src="/local/templates/new_ru/img/close.png" alt="close">
                        </div>
                    </div>
                    <div class="go-news__modal-block">
                        <div class="go-news__modal">
                            <div class="go-news__modal-banner"><button class="go-news__modal-banner-share">
                                    <div class="go-news__modal-banner-share-img"><img
                                                src="/local/templates/new_ru/img/share.png" alt="share"></div>
                                    <div class="go-news__modal-banner-share-links"><a
                                                class="go-news__modal-banner-share-link" href="">
                                            <div class="go-news__modal-banner-share-img"><img
                                                        src="/local/templates/new_ru/img/vk.png" alt="vk"></div>
                                        </a><a class="go-news__modal-banner-share-link" href="">
                                            <div class="go-news__modal-banner-share-img"><img
                                                        src="/local/templates/new_ru/img/tik-tok.png" alt="tik-tok"></div>
                                        </a><a class="go-news__modal-banner-share-link" href="">
                                            <div class="go-news__modal-banner-share-img"><img
                                                        src="/local/templates/new_ru/img/instagram.png" alt="instagram"></div>
                                        </a><a class="go-news__modal-banner-share-link" href="">
                                            <div class="go-news__modal-banner-share-img"><img
                                                        src="/local/templates/new_ru/img/telegram.png" alt="telegram"></div>
                                        </a></div>
                                </button>
                                <div class="go-news__modal-banner-txt-block">
                                    <div class="go-news__modal-banner-title">Победа в финале чемпионата</div>
                                    <div class="go-news__modal-banner-txt">
                                        <div class="go-news__modal-banner-date">10 марта 2022</div>
                                        <div class="go-news__modal-banner-hash">#GO</div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-news__modal-content">
                                <div class="go-news__modal-txt">Несколько лет назад мы решили популяризировать
                                    любительский хоккей и создать престижный дивизион с шикарным трофее</div>
                                <div class="go-news__modal-txt">Несколько лет назад мы решили популяризировать
                                    любительский хоккей и создать престижный дивизион с шикарным трофее</div>
                                <div class="go-news__modal-image-block">
                                    <div class="go-news__modal-image"><img src="/local/templates/new_ru/img/soc-item1.png"
                                                                           alt="team-news-item"></div>
                                    <div class="go-news__modal-image"><img src="/local/templates/new_ru/img/team-news-item1.png"
                                                                           alt="team-news-item"></div>
                                </div>
                                <div class="go-news__modal-txt">Несколько лет назад мы решили популяризировать
                                    любительский хоккей и создать престижный дивизион с шикарным трофее</div>
                                <div class="go-news__modal-txt">Несколько лет назад мы решили популяризировать
                                    любительский хоккей и создать престижный дивизион с шикарным трофее</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="go-news__modal-window" id="modal2">
                    <div class="go-news__modal-close-block">
                        <div class="go-news__modal-close-button"><img src="/local/templates/new_ru/img/close.png" alt="close">
                        </div>
                    </div>
                    <div class="go-news__modal-block">
                        <div class="go-news__modal">
                            <div class="go-news__modal-banner"><button class="go-news__modal-banner-share">
                                    <div class="go-news__modal-banner-share-img"><img
                                                src="/local/templates/new_ru/img/share.png" alt="share"></div>
                                    <div class="go-news__modal-banner-share-links"><a
                                                class="go-news__modal-banner-share-link" href="">
                                            <div class="go-news__modal-banner-share-img"><img
                                                        src="/local/templates/new_ru/img/vk.png" alt="vk"></div>
                                        </a><a class="go-news__modal-banner-share-link" href="">
                                            <div class="go-news__modal-banner-share-img"><img
                                                        src="/local/templates/new_ru/img/tik-tok.png" alt="tik-tok"></div>
                                        </a><a class="go-news__modal-banner-share-link" href="">
                                            <div class="go-news__modal-banner-share-img"><img
                                                        src="/local/templates/new_ru/img/instagram.png" alt="instagram"></div>
                                        </a><a class="go-news__modal-banner-share-link" href="">
                                            <div class="go-news__modal-banner-share-img"><img
                                                        src="/local/templates/new_ru/img/telegram.png" alt="telegram"></div>
                                        </a></div>
                                </button>
                                <div class="go-news__modal-banner-txt-block">
                                    <div class="go-news__modal-banner-title">Победа в финале чемпионата</div>
                                    <div class="go-news__modal-banner-txt">
                                        <div class="go-news__modal-banner-date">10 марта 2022</div>
                                        <div class="go-news__modal-banner-hash">#GO</div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-news__modal-content">
                                <div class="go-news__modal-txt">Несколько лет назад мы решили популяризировать
                                    любительский хоккей и создать престижный дивизион с шикарным трофее</div>
                                <div class="go-news__modal-txt">Несколько лет назад мы решили популяризировать
                                    любительский хоккей и создать престижный дивизион с шикарным трофее</div>
                                <div class="go-news__modal-image-block">
                                    <div class="go-news__modal-image"><img src="/local/templates/new_ru/img/soc-item1.png"
                                                                           alt="team-news-item"></div>
                                    <div class="go-news__modal-image"><img src="/local/templates/new_ru/img/team-news-item1.png"
                                                                           alt="team-news-item"></div>
                                </div>
                                <div class="go-news__modal-txt">Несколько лет назад мы решили популяризировать
                                    любительский хоккей и создать престижный дивизион с шикарным трофее</div>
                                <div class="go-news__modal-txt">Несколько лет назад мы решили популяризировать
                                    любительский хоккей и создать престижный дивизион с шикарным трофее</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="go-news__btn-block">
                    <div class="go-news__btn">Все новости</div>
                </div>
            </div>
            <div class="social-content-block">
                <div class="social-content-block__title-block">
                    <div class="social-content-block__title">Instagram</div><img src="/local/templates/new_ru/img/arrow.png"
                                                                                 alt="arrow">
                </div>
                <div class="social-content-block__content"><a class="social-content-block__item" href=""><img
                                src="/local/templates/new_ru/img/soc-item1.png" alt="soc-item"></a><a
                            class="social-content-block__item" href=""><img src="/local/templates/new_ru/img/soc-item1.png"
                                                                            alt="soc-item"></a><a class="social-content-block__item" href=""><img
                                src="/local/templates/new_ru/img/soc-item1.png" alt="soc-item"></a><a
                            class="social-content-block__item" href=""><img src="/local/templates/new_ru/img/soc-item1.png"
                                                                            alt="soc-item"></a></div>
            </div>
            <div class="social-content-block">
                <div class="social-content-block__title-block">
                    <div class="social-content-block__title">VK</div><img src="/local/templates/new_ru/img/arrow.png"
                                                                          alt="arrow">
                </div>
                <div class="social-content-block__content"><a class="social-content-block__item" href=""><img
                                src="/local/templates/new_ru/img/soc-item1.png" alt="soc-item"></a><a
                            class="social-content-block__item" href=""><img src="/local/templates/new_ru/img/soc-item1.png"
                                                                            alt="soc-item"></a><a class="social-content-block__item" href=""><img
                                src="/local/templates/new_ru/img/soc-item1.png" alt="soc-item"></a><a
                            class="social-content-block__item" href=""><img src="/local/templates/new_ru/img/soc-item1.png"
                                                                            alt="soc-item"></a></div>
            </div>
        </div>
 <?
        break;
    default:
?>
	<div class="go-team__line-up">
		 <?$APPLICATION->IncludeComponent(
			"bitrix:news",
			"trener_page",
			Array(
				"ADD_ELEMENT_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"BROWSER_TITLE" => "-",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"COMPONENT_TEMPLATE" => "trener_page",
				"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
				"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
				"DETAIL_DISPLAY_TOP_PAGER" => "N",
				"DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
				"DETAIL_PAGER_SHOW_ALL" => "Y",
				"DETAIL_PAGER_TEMPLATE" => "",
				"DETAIL_PAGER_TITLE" => "Страница",
				"DETAIL_PROPERTY_CODE" => array(0=>"CLUB",1=>"DATA",2=>"DOL",3=>"DOS",4=>"INST",5=>"OBR",6=>"SEAS",7=>"",),
				"DETAIL_SET_CANONICAL_URL" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
				"IBLOCK_ID" => "17",
				"IBLOCK_TYPE" => "team",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
				"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
				"LIST_FIELD_CODE" => array(0=>"NAME",1=>"",),
				"LIST_PROPERTY_CODE" => array(0=>"",1=>"",),
				"MESSAGE_404" => "",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"NEWS_COUNT" => "20",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PREVIEW_TRUNCATE_LEN" => "",
				"SEF_FOLDER" => "/teams/team-go/",
				"SEF_MODE" => "Y",
				"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"#ELEMENT_CODE#/",),
				"SET_LAST_MODIFIED" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "Y",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N",
				"USE_CATEGORIES" => "N",
				"USE_FILTER" => "N",
				"USE_PERMISSIONS" => "N",
				"USE_RATING" => "N",
				"USE_REVIEW" => "N",
				"USE_RSS" => "N",
				"USE_SEARCH" => "N",
				"USE_SHARE" => "N"
			)
		);?>

		<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"team_page", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "ASSIST",
			1 => "GOLE",
			2 => "DATE",
			3 => "DOS",
			4 => "GAME",
			5 => "INST",
			6 => "QUALIFICATION",
			7 => "NUMBER",
			8 => "POSITION",
			9 => "HEIGHT",
			10 => "KHVAT",
			11 => "SHTRAF",
			12 => "GALARY",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"IBLOCK_ID" => "18",
		"IBLOCK_TYPE" => "team",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "NUMBER",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "arrows",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/teams/team-go/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "team_page",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>

	</div>

<?
    break;
}
?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>