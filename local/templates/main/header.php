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
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"COMPONENT_TEMPLATE" => "top_menu",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
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
            <!--nivo slider-->
            <div class="theme-default">
                <div class="ribbon"></div>
                <div id="slider3" class="nivoSlider">
                    <a href="<?=SITE_TEMPLATE_PATH;?>/all_elements.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/temp/slider0.jpg" width="970" height="360" alt="" title="#slider3-caption-0"/></a>
                    <a href="<?=SITE_TEMPLATE_PATH;?>/about.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/temp/slider1.jpg" width="970" height="360" alt=""/></a>
                    <a href="<?=SITE_TEMPLATE_PATH;?>/portfolio_4column_gallery.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/temp/slider2.jpg" width="970" height="360" alt="" title="#slider3-caption-1"/></a>
                    <a href="<?=SITE_TEMPLATE_PATH;?>/blog.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/temp/slider3.jpg" width="970" height="360" alt="" /></a>
                </div>
            </div>
            <!--/nivo slider-->
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
