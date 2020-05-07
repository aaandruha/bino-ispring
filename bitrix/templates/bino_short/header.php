<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Source+Sans+Pro:wght@300;400;700;900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead()?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body class="main-page">


<?$APPLICATION->ShowPanel();?>

    <div class="main-page__header">
        <div class="b-nav">
            <div class="b-nav__logo">
                <a href=""><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt=""></a>
            </div>
	<?$APPLICATION->IncludeComponent("bitrix:menu", "bino_menu", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	),
	false
);?>

        </div>
    </div>
    <div class="main-page__line">

        <div class="b-slider">
            <div class="slider__list">
                <ul class="b-slider-list">
                    <li class="b-slider-list__item">
                        <div class="b-slide">
                            <h2 class="b-slide__slogan">Our Clients Are Our First Priority</h2>
                            <h1 class="b-slide__header">WELCOME TO BINO</h1>
                            <div class="b-slide__subline"><img src="<?=SITE_TEMPLATE_PATH?>/images/subline.png" alt=""></div>
                            <p class="b-slide__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="b-slide__buttons">
                                <div class="b-buttons-list">
                                    <div class="b-button button_primary_color_red">
                                       get started now     
                                    </div>
                                    <div class="b-button button_secondary_color_transperent">
                                       learn now     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="b-slider__controls">
                <div class="b-slider__prev">&nbsp;</div>
                <div class="b-slider__next">&nbsp;</div>
            </div>
        </div>
        <div class="b-anchor">
            <div class="b-anchore__img"><img src="<?=SITE_TEMPLATE_PATH?>/images/anchore.png" alt=""></div>
        </div>
    </div>

