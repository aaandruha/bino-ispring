<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?> 

    <div class="main-page__line">
        <div class="services">
            <div class="services__container">
                <div class="services__description">
                    <div class="services__header">
                        <div class="title title_white title_right">Our services</div>
                    </div>
                    <div class="services__items">
                        <div class="service">
                            <div class="service__description title_right">
                                <div class="service__title subtitle subtitle_red">WEB DESIGN</div>
                                <p class="service__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
                            </div>
                            <div class="service__icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/services-web.png" alt="">
                            </div>
                        </div>
                        <div class="service">
                            <div class="service__description title_right">
                                <div class="service__title subtitle subtitle_red">PRINT DESIGN</div>
                                <p class="service__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
                            </div>
                            <div class="service__icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/services-print.png" alt="">
                            </div>
                        </div>
                        <div class="service">
                            <div class="service__description title_right">
                                <div class="service__title subtitle subtitle_red">PHOTOGRAPHY</div>
                                <p class="service__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
                            </div>
                            <div class="service__icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/services-photo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services__img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/services-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="main-page__line">
        <div class="contacts">
            <div class="contacts__container">
                <div class="contacts__header">
                    <div class="title title_center title_grey">keep in touch</div>
                    <div class="title-text title-text_grey">Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum quam nec. </div>
                    <div class="separator"><img src="<?=SITE_TEMPLATE_PATH?>/images/subline_grey.png" alt=""></div>
                </div>
                <div class="contacts__row">
                    <div class="contacts__info">
                        <div class="contacts__list">
                            <div class="contacts__item">
                                <div class="contacts__subtitle subtitle subtitle_red">OUR ADDRESS</div>
                                <div class="contacts__description">House #13, Streat road, <br>Sydney 2310 Australia</div>
                            </div>
                            <div class="contacts__item">
                                <div class="contacts__subtitle subtitle subtitle_red">CALL US</div>
                                <div class="contacts__description">+ 880 168 109 1425 <br>+ 0216809142</div>
                            </div>
                            <div class="contacts__item">
                                <div class="contacts__subtitle subtitle subtitle_red">EMAIL US</div>
                                <div class="contacts__description">contactus@email.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__form">
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<script type="text/javascript" src="/bitrix/js/main/ajax.js"></script>
<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "bino_feedback", Array(
	"AJAX_MODE" => "Y",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
		"OK_TEXT" => "Thank you. Your message send!",	// Сообщение, выводимое пользователю после отправки
		"EMAIL_TO" => "test@mail.ru",	// E-mail, на который будет отправлено письмо
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
			0 => "7",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="main-page__line">
        <div class="free-trial">
            <div class="free-trial__header">Let's Get Started Now. <b>It's FREE!</b></div>
            <div class="free-trial__description">30 day free trial. Free plan allows up to 2 projects. Pay if you need more. Cancel anytime. No catches.</div>
            <div class="free-trial__button"><button value="" class="b-button button_primary_color_red" js-send="">start free trial</button></div>
        </div>
    </div>
    <div class="main-page__footer">
        <div class="b-footer">
	<?$APPLICATION->IncludeComponent(
	"ispring:social", 
	".default", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "1",
		"USE_EXT" => "N",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "Social_link",
		"IBLOCK_ID" => "12",
		"NEWS_COUNT" => "8",
		"SORT_BY1" => "NAME",
		"SORT_ORDER1" => "DESC",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"PROPERTY_CODE" => array(
			0 => "CODE_AWF",
			1 => "LINK",
			2 => "",
			3 => "",
		),
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y"
	),
	false
);?>


            <div class="b-footer__copyright">
                Kazi Erfan © All Rights Reserved 
            </div>
        </div>
    </div>
    <div class="scroll-to-top" onclick="topFunction();"> 
        <a  js-scroll-to-top=""  title="Go to top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</body>
</html>