<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Хоккейная команда Go");
?>


<?
$uri = $APPLICATION->GetCurUri();
switch($uri) {
    case '/teams/team-go/tournament/':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GoTournament/main.3c3fd34d3a94dbd7106e.css");
        include 'tournament.php';
        break;
    case '/teams/team-go/tournament/playoff/':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GoFinal/main.49254a378fa26c1d17c6.css");
        include 'playoff.php';
        break;
    case '/teams/team-go/news/':
        //$APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GohockeyTrainer/main.91bc24e41b6003253085.css");
        include 'news.php';
        break;
    case '/teams/team-go/':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GoTeam/main.fed913c3a45df08a4da9.css");
        include 'go-team.php';
    break;
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>