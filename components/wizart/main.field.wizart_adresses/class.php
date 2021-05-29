<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Component\BaseUfComponent;


/**
 * Class BooleanUfComponent
 */
class BooleanUfComponent extends BaseUfComponent
{
	protected static function getUserTypeId(): string
	{
		return 'wizart_adresses';
	}
}