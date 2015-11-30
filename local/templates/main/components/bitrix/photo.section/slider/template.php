<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<!--nivo slider-->
<div class="theme-default">
	<div class="ribbon"></div>
	<div id="slider3" class="nivoSlider">
				<?foreach($arResult["ROWS"][0] as $key => $arItem):?>
					<a href="<?=$arItem["LINK"];?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" width="970" height="360"  alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>"></a>
				<?endforeach;?>
	</div>
</div>
<!--/nivo slider-->
