<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?if (!empty($arResult)):?>
	<ul id="social_tabs">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<li> <a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"];?>">  <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>"  width="26" height="27" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>" > </a></li>
		<?endforeach;?>
	</ul>

<?endif?>
