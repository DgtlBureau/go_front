<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Хоккейная команда Gohockey");
?>


<? //надо добавить выборку по листу и сортировкой по ID
$res = CIBlockElement::GetByID(175);

if($ar_res = $res->GetNextElement()) {
    $ar_header_values = $ar_res->GetProperties();
    $ar_header_fields = $ar_res->GetFields(); 
} 
if(!empty($ar_header_values["MATCH"]["VALUE"])){
	$mres = CIBlockElement::GetByID($ar_header_values["MATCH"]["VALUE"]);
	if($ar_res = $mres->GetNextElement()) {
		$mach_header_values = $ar_res->GetProperties();
		$mach_header_fields = $ar_res->GetFields(); 
	}
}	                 
$uri = $APPLICATION->GetCurUri();
switch($uri) {
    case '/teams/team-gohockey/tournament/':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GoTournament/main.3c3fd34d3a94dbd7106e.css");
        include 'tournament.php';
        break;
    case '/teams/team-gohockey/tournament/playoff/':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GoFinal/main.49254a378fa26c1d17c6.css");
        include 'playoff.php';
        break;
    case '/teams/team-gohockey/news/':
        //$APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GohockeyTrainer/main.91bc24e41b6003253085.css");
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GoNews/main.91bc24e41b6003253085.css");
		include 'news.php';
        break;
    case '/teams/team-gohockey/':
        $APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/GoTeam/main.fed913c3a45df08a4da9.css");
        include 'go-team.php';
    break;
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>