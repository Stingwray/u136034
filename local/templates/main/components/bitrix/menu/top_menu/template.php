<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<div class="menu">
	<!-- navigation start -->

		<?if (!empty($arResult)):?>
			<ul id="top_menu" class="sf-menu">
				<?foreach($arResult as $key => $arItem):?>


						<li>
						<a href="<?=$arItem["LINK"];?>"><?=$arItem["TEXT"];?></a>

					</li>
				<?endforeach;?>
			</ul>
		<?endif?>

</div>


