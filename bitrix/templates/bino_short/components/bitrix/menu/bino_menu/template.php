<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
            <div class="b-nav__menu">
                <div class="b-menu">
                    <div class="b-menu__humburger">
                        <input class="b-menu__btn" type="checkbox" id="menu-btn" />
                        <label class="b-menu__icon" for="menu-btn"><span class="b-menu__navicon"></span></label>
                    <ul class="b-menu__list">

<?foreach($arResult as $arItem):?>

	<?if ($arItem["PERMISSION"] > "D"):?>
		<li class="b-menu__item"><a href="<?=$arItem["LINK"]?>" class="b-menu__link <?if ($arItem["SELECTED"]):?>b-menu__link_active<?endif?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>

<?endforeach?>
                    </ul>
                </div>
            </div>
            </div>


<?endif?>
