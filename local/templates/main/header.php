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
<!--background changer-->
<div id="background_changer">
    <div class="alignleft_block backgrounds">
        <ul id="theme_roller_list">
            <li><a href="#">Color</a>
                <div>
                    <span id="color_picker" class="alignleft_block"></span>
                </div>
            </li>
            <li><a href="#">Pattern</a>
                <div id="background_patterns">
                    <a href="0"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_0.png" width="24" height="24" alt=""/></a>
                    <a href="1"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_1.png" width="24" height="24" alt=""/></a>
                    <a href="2"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_2.png" width="24" height="24" alt=""/></a>
                    <a href="3"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_3.png" width="24" height="24" alt=""/></a>
                    <a href="4"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_4.png" width="24" height="24" alt=""/></a>
                    <a href="5"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_5.png" width="24" height="24" alt=""/></a>
                    <a href="6"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_6.png" width="24" height="24" alt=""/></a>
                    <a href="7"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_7.png" width="24" height="24" alt=""/></a>
                    <a href="8"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_8.png" width="24" height="24" alt=""/></a>
                    <a href="9"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_9.png" width="24" height="24" alt=""/></a>
                    <a href="10"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_10.png" width="24" height="24" alt=""/></a>
                    <a href="11"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_11.png" width="24" height="24" alt=""/></a>
                    <a href="12"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_12.png" width="24" height="24" alt=""/></a>
                    <a href="13"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/page_tile_13.png" width="24" height="24" alt=""/></a>
                </div>
            </li>
            <li><a href="#">Background</a>
                <div id="background_images">
                    <a href="1"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/bg01.jpg" width="154" alt=""/></a>
                    <a href="2"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/bg02.jpg" width="154" alt=""/></a>
                    <a href="3"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/bg03.jpg" width="154" alt=""/></a>
                    <a href="4"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/bg04.jpg" width="154" alt=""/></a>
                    <a href="5"><img src="<?=SITE_TEMPLATE_PATH;?>/images/background/bg05.jpg" width="154" alt=""/></a>
                </div>
            </li>
        </ul>
    </div>
    <div class="alignleft_block open_close">
        <a href="#" class="arrow">OPEN</a>
    </div>
</div>
<!--/background changer-->
<!--sliding login panel-->
<div id="login_panel">
    <div id="content">
        <div>
            <div class="column column1">
                <!--help text, maybe-->
                <h3>And now some Lorem Ipsum to fill the content</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent scelerisque commodo massa. Ut volutpat. Maecenas luctus augue quis velit.
                </p>
                <p>
                    Ut volutpat. Maecenas luctus augue quis velit. Lorem ipsum dolor sit amet, adipiscing elit. Scelerisque commodo massa.
                </p>
                <p>
                    <a href="#" class="orange-only notextdecoration">Not a member yet? Sign Up</a>
                </p>
                <!--/help text, maybe-->
            </div>

            <div class="column column2">
                <!--user signin-->
                <h3>Member Login</h3>
                <form name="contact_form" id="contact_form" class="generic-form alignleft_block" action="<?=SITE_TEMPLATE_PATH;?>/contact.html">
                    <p>
                        <input type="text" name="txt_name" id="txt_name" class="validate[required] medium-login user margin-right-10" />
                        <input type="text" name="txt_email" id="txt_email" class="validate[required] medium-login password" />
                    </p>
                    <div class="clear10"></div>
                    <p>
                        <input type="checkbox" id="chk_rememberme" name="chk_rememberme" /><label for="chk_rememberme">Remember Me</label>
                        &nbsp;/&nbsp;
                        <a href="#" class="orange-only notextdecoration">Forgot Password?</a>
                    </p>

                    <div class="clear"></div>

                    <a href="#" class="button alignleft_block bold_only notextdecoration" id="btnLoginNow"><span>Login Now</span></a>

                </form>
                <!--/user login-->
            </div>
        </div>
    </div>
    <div id="signin_register">
        <ul>
            <li>Hello Guest!</li>
            <li><a href="#">&nbsp;</a></li>
        </ul>
    </div>
</div>
<!--/sliding login panel-->

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
                <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social_icons/o.png" width="30" height="27" alt="" /></a></li>
                <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social_icons/s.png" width="30" height="27" alt="" /></a></li>
                <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social_icons/v.png" width="30" height="27" alt="" /></a></li>
            </ul>
            <!-- /social tabs-->

            <!--menu-->
            <ul id="top_menu" class="sf-menu">
                <li><a href="index.html">HOME</a><span>Get Started</span></li>
                <li><a href="<?=SITE_TEMPLATE_PATH;?>/all_elements.html">FEATURES</a><span>Skins &amp; Font Stacks</span>
                    <!--first level dropdown menu-->
                    <ul>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/all_elements.html">Elements</a></li>
                    </ul>
                    <!--/first level dropdown menu-->
                </li>
                <li><a href="<?=SITE_TEMPLATE_PATH;?>/about.html">PAGES</a><span>Customized Pages</span>
                    <!--first level dropdown menu-->
                    <ul>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/about.html">Company Info</a></li>
                        <li><a href="#">Test Sub Menu</a>
                            <!--second level dropdown menu-->
                            <ul>
                                <li><a href="#">Menu Item #1</a></li>
                                <li><a href="#">Menu Item #2</a></li>
                            </ul>
                            <!--/second level dropdown menu-->
                        </li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/news.html">News &amp; Announcements</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/services.html">Services</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/ourteam.html">Our Team</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/ourpartners.html">Our Partners</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/testimonials.html">Testimonials</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/job.html">Job Opportunities</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/faq.html">FAQ</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/404.html">404 Page Not Found</a></li>
                    </ul>
                    <!--/first level dropdown menu-->
                </li>
                <li><a href="<?=SITE_TEMPLATE_PATH;?>/portfolio_1column.html">PORTFOLIO</a><span>View Our Works</span>
                    <!--first level dropdown menu-->
                    <ul>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/portfolio_4column_gallery_quicksand.php">4 Column Gallery (Quicksand Enabled)</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/portfolio_4column_gallery.html">4 Column Gallery</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/portfolio_3column_gallery.html">3 Column Gallery</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/portfolio_3column_portrait.html">3 Column Portraits</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/portfolio_2column_gallery.html">2 Column Gallery</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/portfolio_1column.html">1 Column Gallery</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/portfolio_1column_portrait.html">1 Column Portraits</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/project-details.html">Portfolio Details</a></li>
                    </ul>
                    <!--/first level dropdown menu-->
                </li>
                <li><a href="<?=SITE_TEMPLATE_PATH;?>/blog.html">BLOG</a><span>See Blog Posts</span>
                    <!--first level dropdown menu-->
                    <ul>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/blog.html">Posts</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/blog-post.html">Single Post</a></li>
                    </ul>
                    <!--/first level dropdown menu-->
                </li>
                <li><a href="<?=SITE_TEMPLATE_PATH;?>/contact.html">CONTACT</a><span>Say Hello!</span></li>
            </ul>
            <!-- /menu-->

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
        <div id="slider3-caption-0" class="nivo-html-caption"><h1>THIS IS THE TITLE</h1><p>You can add captions too</p></div>
        <div id="slider3-caption-1" class="nivo-html-caption"><h1>THIS IS THE TITLE</h1><p>You can add captions too</p></div>

        <!-- /carousel -->

        <div class="clear40"></div>

        <!— start main content —>
        <div class="main-content pt-alt">
            <div class="containit">
