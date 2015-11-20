<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>

<!-- three box footer-->
<div class="box-three-sub-wrapper transparent-background">
    <div class="box-three featured-box-sub nomargin">
        <div>
            <div>
                <!-- sub featured title -->
                <h3>ABOUT</h3>
                <div class="clear"></div>
                <!-- text-->
                            <span>
                                The INCORPORATE layout has been designed with responsive, future-proof websites in mind.
                            </span>
                            <span>
                                It supports all of the content you can dream up, including image galleries, advertisement units, all function HTML elements, and lots lots more!
							</span>
                            <span>
                                If you're looking for a template to start building your own next site with, this is a great place to start!
 	                        </span>
            </div>
        </div>
    </div>
    <div class="box-three featured-box-sub">
        <div>
            <div>
                <!-- sub featured title -->
                <h3>MOST VIEWED</h3>
                <div class="clearfix"></div>
                <!-- list with image -->
                <ul>
                    <li>

                        <span><a href="#">There are many variations of passages of Lorem Ipsum available.</a></span>

                    </li>
                    <li>

                        <span><a href="#">There are many variations of passages of Lorem Ipsum available.</a></span>

                    </li>
                    <li>

                        <span><a href="#">There are many variations of passages of Lorem Ipsum available.</a></span>

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
                <h3>CONTACT INFO</h3>
                <div class="clear"></div>
                <!-- text-->
                            <span>
                                <!--<p> for ie 7 fix. works well with others too-->
                                <span>
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
                                <span> <?$APPLICATION->IncludeComponent(
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
                                <span> <?$APPLICATION->IncludeComponent(
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
        <ul>
            <li><a href="#" class="active">HOME</a></li>
            <li><a href="#">FEATURES</a></li>
            <li><a href="#">PAGE</a></li>
            <li><a href="#">PORTFOLIO</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
        <div>Copyright <?echo date("Y");?></div>
    </div>
</div>
<!-- /footer-->

</div>
</body>
<!-- /body -->
</html>