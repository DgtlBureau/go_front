<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Хоккейная команда Gohockey");

$uri = $APPLICATION->GetCurUri();

switch($uri) {
    case '/teams/team-gohockey/tournament/':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GohockeyTournament/main.56697ed69c198dc4c5c9.css");
        $APPLICATION->AddHeadScript('/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GohockeyTournament/index.js');

        include 'tournament.php';
        break;
    case '/teams/team-gohockey/tournament/playoff/':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GohockeyFinal/main.e402885c257297da1e95.css");

        include 'playoff.php';
        break;
    case '/teams/team-gohockey/news/':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GohockeyNews/main.6155c9616f56a3510501.css");
        $APPLICATION->AddHeadScript('/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GohockeyNews/index.js');

        include 'news.php';
        break;
    case '/teams/team-gohockey/modals/':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/Modals/main.e402885c257297da1e95.css");
        $APPLICATION->AddHeadScript('/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/Modals/index.js');

        include 'modals.php';
        break;
    default:
        $APPLICATION->SetAdditionalCSS('/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GohockeyTeam/main.8426531cab26dcd75a0c.css');

        include 'go-team.php';
        break;
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>