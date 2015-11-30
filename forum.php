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
<?$APPLICATION->IncludeComponent(
    "bitrix:forum",
    "",
    Array(
        "COMPONENT_TEMPLATE" => ".default",
        "THEME" => "blue",
        "SHOW_TAGS" => "Y",
        "SEO_USER" => "",
        "SEO_USE_AN_EXTERNAL_SERVICE" => "N",
        "SHOW_FORUM_USERS" => "N",
        "SHOW_SUBSCRIBE_LINK" => "N",
        "SHOW_AUTH_FORM" => "Y",
        "SHOW_NAVIGATION" => "N",
        "SHOW_LEGEND" => "N",
        "SHOW_STATISTIC_BLOCK" => array(),
        "SHOW_FORUMS" => "N",
        "SHOW_FIRST_POST" => "N",
        "SHOW_AUTHOR_COLUMN" => "N",
        "TMPLT_SHOW_ADDITIONAL_MARKER" => "",
        "PATH_TO_SMILE" => "",
        "PAGE_NAVIGATION_TEMPLATE" => "",
        "PAGE_NAVIGATION_WINDOW" => "",
        "AJAX_POST" => "N",
        "WORD_WRAP_CUT" => "",
        "WORD_LENGTH" => "",
        "RESTART" => "N",
        "NO_WORD_LOGIC" => "N",
        "USE_LIGHT_VIEW" => "Y",
        "FID" => array(),
        "USER_PROPERTY" => array(),
        "USER_FIELDS" => array(),
        "HELP_CONTENT" => "",
        "RULES_CONTENT" => "",
        "SEF_MODE" => "N",
        "CHECK_CORRECT_TEMPLATES" => "N",
        "VARIABLE_ALIASES" => Array("FID"=>"FID","TID"=>"TID","MID"=>"MID","UID"=>"UID"),
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_TIME_USER_STAT" => "60",
        "CACHE_TIME_FOR_FORUM_STAT" => "3600",
        "FORUMS_PER_PAGE" => "10",
        "TOPICS_PER_PAGE" => "10",
        "MESSAGES_PER_PAGE" => "10",
        "PATH_TO_AUTH_FORM" => "",
        "TIME_INTERVAL_FOR_USER_STAT" => "",
        "DATE_FORMAT" => "",
        "DATE_TIME_FORMAT" => "",
        "USE_NAME_TEMPLATE" => "N",
        "NAME_TEMPLATE" => "",
        "IMAGE_SIZE" => "500",
        "ATTACH_MODE" => array("NAME"),
        "ATTACH_SIZE" => "",
        "EDITOR_CODE_DEFAULT" => "N",
        "SEND_MAIL" => "",
        "SEND_ICQ" => "",
        "SET_NAVIGATION" => "N",
        "SET_TITLE" => "Y",
        "SET_DESCRIPTION" => "N",
        "SET_PAGE_PROPERTY" => "N",
        "USE_RSS" => "Y",
        "SHOW_VOTE" => "N",
        "SHOW_RATING" => "",
        "RATING_ID" => array(),
        "RATING_TYPE" => ""
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
