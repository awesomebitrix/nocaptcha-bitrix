<?

CModule::IncludeModule("mailru.nocaptcha");

if (isset($arParams["ID"]) && $arParams["ID"] != "")
{
    $arResult["ID"] = $arParams["ID"];
    CNocaptcha::GetInstance()->AddContainerId($arResult["ID"]);
}
else
{
    $arResult["ID"] = CNocaptcha::GetInstance()->GenerateContainerId();
}
$this->IncludeComponentTemplate();
?>
