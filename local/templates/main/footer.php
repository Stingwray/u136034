<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?IncludeTemplateLangFile(__FILE__);?>

<!-- three box footer-->
<div class="box-three-sub-wrapper transparent-background">
    <div class="box-three featured-box-sub nomargin">
        <div>
            <div>
                <!-- sub featured title -->
                <h3>О НАС:</h3>
                <div class="clear"></div>
                <!-- text-->
                            <span>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/about.php"
                                        )
                                    );?>
                                </span>
            </div>
        </div>
    </div>
    <div class="box-three featured-box-sub">
        <div>
            <div>
                <!-- sub featured title -->
                <h3>ПОПУЛЯРНОЕ СЕЙЧАС:</h3>
                <div class="clearfix"></div>
                <!-- list with image -->
                <ul>
                    <li>

                        <span>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/1_popular_link.php"
                                        )
                                    );?>
                                </span>

                    </li>
                    <li>

                          <span>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/2_popular_link.php"
                                        )
                                    );?>
                                </span>

                    </li>
                    <li>

                         <span>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/3_popular_link.php"
                                        )
                                    );?>
                                </span>

                    </li>
                </ul>
                <!-- /list with image -->
            </div>
        </div>
    </div>
    <div class="box-three featured-box-sub">
        <div>
            <div>
                <!-- sub featured title -->
                <h3>КОНТАКТЫ:</h3>
                <div class="clear"></div>
                <!-- text-->
                            <span>
                                <!--<p> for ie 7 fix. works well with others too-->
                                <span><?=GetMessage("PHONE");?>:
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"
                                        )
                                    );?>
                                </span>
                                <span> <?=GetMessage("FAX");?>:
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/fax.php"
                                        )
                                    );?></span>
                                <span><?=GetMessage("EMAIL");?>:
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/email.php"
                                        )
                                    );?></span>
                            </span>
            </div>
        </div>
    </div>
</div>
<!-- /three box footer-->
</div>
<!-- /content container-->

<div class="clear20"></div>

<!--footer-->
<div id="footer_container">
    <div id="footer" class="center-clear">
        <div>Copyright <?echo date("Y");?></div>
    </div>
</div>
<!-- /footer-->

</div>
</body>
<!-- /body -->
</html>