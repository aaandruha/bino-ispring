<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="b-footer__social">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="b-footer__item"><a href="<?echo $arItem["PROPERTY_LINK_VALUE"]?>" class="social-link"><i class="<?echo $arItem["PROPERTY_CODE_AWF_VALUE"]?>"></i></a></div>
<?endforeach;?>
</div>

                
