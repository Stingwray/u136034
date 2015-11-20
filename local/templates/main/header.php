<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?IncludeTemplateLangFile(__FILE__);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>

    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."http://fonts.googleapis.com/css?family=Terminal+Dosis:400,700,800,600,500,300,200",true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/reset.css",true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css",true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/default.css",true);?>
    <!--[if lte IE 7]>
     <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/ie7.css",true);?>
    <![endif]-->

    <!--jquery library-->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/jquery-1.7.1.min.js", true);?>
    <!--/jquery library-->

    <!--jquery easing-->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/jquery.easing.1.3.js", true);?>
    <!--/jquery easing-->

    <!--nivo slider plugin for jquery-->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/nivo-slider/jquery.nivo.slider.js", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/scripts/nivo-slider/nivo-slider.css",true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/scripts/nivo-slider/themes/default/default.css",true);?>
    <!--/ nivo slider plugin for jquery-->

    <!--superfish dropdown-->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/scripts/superfish/css/superfish.css",true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/superfish/js/superfish.js", true);?>
     <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/superfish/js/hoverIntent.js", true);?>
     <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/superfish/js/jquery.bgiframe.min.js", true);?>
     <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/superfish/js/supersubs.js", true);?>
    <!--/superfish dropdown-->

    <!--auto complete-->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/autocomplete/jquery.autocomplete.min.js", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/scripts/autocomplete/jquery.autocomplete.css",true);?>
    <!--/auto complete-->

    <!--misc. scripts-->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/scripts.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/jquery-backgroundpos/jquery.backgroundpos.pack.js", true);?>
    <!--/misc. scripts-->

    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/demo/colorpicker/js/colorpicker.js", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/scripts/demo/colorpicker/css/colorpicker.css",true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/scripts/demo/demo.js", true);?>

</head>

<!--body-->
<body>
<?$APPLICATION->ShowPanel();?>


<div id="body-wrapper">

    <!--header container-->
    <div id="header-contanier">

        <!--header wrapper-->
        <div id="header" class="center-clear">

            <!--logo-->
            <div id="logo">
                <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                        )
                    );?>
                    <?if(!CSite::InDir('/')):?></a><?endif;?>
            </div>
            <!-- /logo-->



            <!--header place holder-->
            <div class="header-place-holder"></div>

            <!--social tabs-->
            <ul id="social_tabs">
                <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social_icons/t.png" width="30" height="27" alt="" /></a></li>
                <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social_icons/f.png" width="30" height="27" alt="" /></a></li>
                <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social_icons/v.png" width="30" height="27" alt="" /></a></li>
            </ul>
            <!-- /social tabs-->
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?><br>

            <!--search box-->
            <div id="search_box">
                <form method="post" name="form_search" id="form_search" class="form_search" action="<?=SITE_TEMPLATE_PATH;?>/all_elements.html">
                    <input type="text" name="txt_search" id="txt_search" class="txt_search" value="search" />
                    <input type="submit" name="btn_search" id="btn_search" class="btn_search" value="" />
                </form>
            </div>
            <!-- /search box-->

        </div>

    </div>
    <!-- /header wrapper-->

    <div class="clear20"></div>
    <!--content container-->
    <div id="content_container" class="center-clear">

        <!--carousel-->
        <div id="carousel_container">

            <?$APPLICATION->IncludeComponent("bitrix:photo.section", "slider", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "photos",	// Тип инфоблока
		"IBLOCK_ID" => "15",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем фотографии
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки фотографий в разделе
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "Название",
			2 => "Сортировка",
			3 => "Картинка для анонса",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "URL",
			1 => "",
		),
		"PAGE_ELEMENT_COUNT" => "20",	// Количество элементов на странице
		"LINE_ELEMENT_COUNT" => "4",	// Количество фотографий, выводимых в одной строке таблицы
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Фотографии",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	),
	false
);?>
           <!--nivo slider
            <div class="theme-default">
                <div class="ribbon"></div>
                <div id="slider3" class="nivoSlider">
                    <a href="<?=SITE_TEMPLATE_PATH;?>/all_elements.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/temp/slider0.jpg" width="970" height="360" alt="" title="#slider3-caption-0"/></a>
                    <a href="<?=SITE_TEMPLATE_PATH;?>/about.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/temp/slider1.jpg" width="970" height="360" alt=""/></a>
                    <a href="<?=SITE_TEMPLATE_PATH;?>/portfolio_4column_gallery.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/temp/slider2.jpg" width="970" height="360" alt="" title="#slider3-caption-1"/></a>
                    <a href="<?=SITE_TEMPLATE_PATH;?>/blog.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/temp/slider3.jpg" width="970" height="360" alt="" /></a>
                </div>
            </div>
            -->
        </div>
        <div id="slider3-caption-0" class="nivo-html-caption"><?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/text_for_slide0.php"
                )
            );?></div>
        <div id="slider3-caption-1" class="nivo-html-caption"><?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/text_for_slide2.php"
                )
            );?></div>
        <!-- /carousel -->

        <div class="clear40"></div>

        <!— start main content —>
        <div class="main-content pt-alt">
            <div class="containit">
