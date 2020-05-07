<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("iblock");

$arFilter = Array(
 "IBLOCK_ID" => $arParams['IBLOCK_ID'], 
 "IBLOCK_TYPE" => $arParams['IBLOCK_TYPE'],
 "ACTIVE"=>"Y", 
 );
$arOrder = Array(
   $arParams['SORT_BY1'] => $arParams['SORT_ORDER1'], 
);
$res = CIBlockElement::GetList($arOrder, $arFilter, false, array("nPageSize" => $arParams['NEWS_COUNT']),  Array("ID", "NAME","PROPERTY_LINK", "PROPERTY_CODE_AWF"));

while($ar_fields = $res->fetch())
{
  $arItems[] = $ar_fields;
}
$arResult['ITEMS'] = $arItems;

$this->IncludeComponentTemplate($componentPage);
?>