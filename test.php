<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
	
	),
	false
);?><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>