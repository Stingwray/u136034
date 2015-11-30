<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetPageProperty("title", htmlspecialcharsbx(COption::GetOptionString("main", "site_name", "Bitrix24")));
?>
<?
$pathToUser = COption::GetOptionString("main", "TOOLTIP_PATH_TO_USER", false, SITE_ID);
$pathToUser = ($pathToUser ? $pathToUser : SITE_DIR."company/personal/user/#user_id#/");

$pathToLogEntry = COption::GetOptionString("socialnetwork", "log_entry_page", false, SITE_ID);
$pathToLogEntry = ($pathToLogEntry ? $pathToLogEntry : SITE_DIR."company/personal/log/#log_id#/");

$pathToMessagesChat = COption::GetOptionString("main", "TOOLTIP_PATH_TO_MESSAGES_CHAT", false, SITE_ID);
$pathToMessagesChat = ($pathToMessagesChat ? $pathToMessagesChat : SITE_DIR."company/personal/messages/chat/#user_id#/");

$pathToVideoCall = COption::GetOptionString("main", "TOOLTIP_PATH_TO_VIDEO_CALL", false, SITE_ID);
$pathToVideoCall = ($pathToVideoCall ? $pathToVideoCall : SITE_DIR."company/personal/video/#user_id#/");

$pathToUserBlogPost = COption::GetOptionString("socialnetwork", "userblogpost_page", false, SITE_ID);
$pathToUserBlogPost = ($pathToUserBlogPost ? $pathToUserBlogPost : SITE_DIR."company/personal/user/#user_id#/blog/#post_id#/");

$pathToSmile = COption::GetOptionString("socialnetwork", "smile_page", false, SITE_ID);
$pathToSmile = ($pathToSmile ? $pathToSmile : "/bitrix/images/socialnetwork/smile/");

$folderUsers = COption::GetOptionString("socialnetwork", "user_page", false, SITE_ID);
$folderUsers = ($folderUsers ? $folderUsers : SITE_DIR."company/personal/");

$folderWorkgroups = COption::GetOptionString("socialnetwork", "workgroups_page", false, SITE_ID);
$folderWorkgroups = ($folderWorkgroups ? $folderWorkgroups : SITE_DIR."workgroups/");
?>

<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", "template2", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"COLUMNS_LIST" => array(	// Выводимые колонки
			0 => "NAME",
			1 => "DISCOUNT",
			2 => "WEIGHT",
			3 => "DELETE",
			4 => "DELAY",
			5 => "TYPE",
			6 => "PRICE",
			7 => "QUANTITY",
			8 => "SUM",
			9 => "PROPERTY_MANUFACTURER",
			10 => "PROPERTY_BRAND",
			11 => "PROPERTY_COLOR",
		),
		"PATH_TO_ORDER" => "/personal/order.php",	// Страница оформления заказа
		"HIDE_COUPON" => "Y",	// Спрятать поле ввода купона
		"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",	// Рассчитывать скидку для каждой позиции (на все количество товара)
		"USE_PREPAYMENT" => "N",	// Использовать предавторизацию для оформления заказа (PayPal Express Checkout)
		"QUANTITY_FLOAT" => "N",	// Использовать дробное значение количества
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"ACTION_VARIABLE" => "action",	// Название переменной действия
		"OFFERS_PROPS" => "",	// Свойства, влияющие на пересчет корзины
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>