<?
CModule::AddAutoloadClasses("mailru.nocaptcha", array("CNocaptcha" => "classes/general/nocaptcha.php"));
if (COption::GetOptionString("mailru.nocaptcha", "replace", "N") === "Y")
{
    require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/mailru.nocaptcha/classes/general/captcha.php");
}
?>
