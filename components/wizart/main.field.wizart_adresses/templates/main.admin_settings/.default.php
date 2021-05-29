<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Text\HtmlFilter;

$name = $arResult['additionalParameters']['NAME'];
?>


<tr>
	<td>
		<span class="adm-detail-label-text"><?= Loc::getMessage('USER_TYPE_BOOL_DEFAULT_VALUE') ?>:</span>
	</td>
	<td>
		<select class="adm-detail-select" name="<?= $name ?>[DEFAULT_VALUE]">
			<option
				value="1"
				<?= ($arResult['defaultValue'] ? 'selected = "selected"' : '') ?>
			>
				<?= Loc::getMessage('MAIN_YES') ?>
			</option>
			<option
				value="0"
				<?= (!$arResult['defaultValue'] ? 'selected = "selected"' : '') ?>
			>
				<?= Loc::getMessage('MAIN_NO') ?>
			</option>
		</select>
	</td>
</tr>
