<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<form action="<?=POST_FORM_ACTION_URI?>" method="post" class="contact-form">
<?=bitrix_sessid_post()?>

    <div class="contact-form__row"><input type="text" name="user_name" placeholder="Name*" id="name" required minlength="1"></div>
    <div class="contact-form__row"><input type="email" name="user_email" placeholder="Email*" id="email" required pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" title="The domain portion of the email address is invalid (the portion after the @)"></div>
    <div class="contact-form__row"><input type="text" name="subject" placeholder="Subject*" id="subject" required minlength="1"></div>
    <div class="contact-form__row contact-form__row_textarea"><textarea type="text" name="MESSAGE" placeholder="Message*" id="message" required minlength="1"></textarea></div>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
    <div class="contact-form__error"><?if(!empty($arResult["ERROR_MESSAGE"]))
                  {
                  	foreach($arResult["ERROR_MESSAGE"] as $v)
                  		ShowError($v);
                  }   ?>
    </div>
    <div class="contact_form__button"><button value="" class="b-button button_primary_color_red" type="submit">send message</button></div>
</form>
