<?php
namespace Bitrix\Main\UserField\Types;
defined('B_PROLOG_INCLUDED') || die;

use Bitrix\Main\Page\Asset;
use CUserTypeManager;
use Bitrix\Main\EventManager;
use Bitrix\Main\Type;
$asset = Asset::getInstance();



$eventManager = EventManager::getInstance();


class DemoType extends BaseType
{
  const USER_TYPE_ID = 'wizart_adresses';
	const RENDER_COMPONENT = 'wizart:main.field.wizart_adresses';


	public static function GetUserTypeDescription (): array
	{
		return array(
      'USER_TYPE_ID' => static::USER_TYPE_ID,
      'CLASS_NAME' => __CLASS__,
      'DESCRIPTION' => 'демо',
      'BASE_TYPE' => \CUserTypeManager::BASE_TYPE_STRING,
			'USE_FIELD_COMPONENT' => true,
			
      // 'EDIT_CALLBACK' => array(
      //   __CLASS__,
      //   'renderEdit'
      // ),
      // 'VIEW_CALLBACK' => array(
      //   __CLASS__,
      //   'renderView'
      // ),
      // "GetPublicViewHTML"	=>array(__CLASS__,"GetPublicView"),
      // "GetPublicEditHTML"	=>array(__CLASS__,"GetPublicEdit"),
    );
	}

  public static function getDBColumnType (): string
  {

        return "text";

  }

  // public static function renderView ($arUserField, $arAdditionalParameters = array()): string
  // {
  //    return '<pre>'.print_r($arUserField, 1).'</pre>';
  // }

  // public static function renderEdit ($arUserField, $arAdditionalParameters = array()): string
  // {
  //   return '<b>'.print_r($arUserField, 1).'</b>';
  // }

	public static function prepareSettings(array $userField): array
	{
		

		$def = (int)$userField['SETTINGS']['DEFAULT_VALUE'];
		if($def !== 1)
		{
			$def = 0;
		}


		return [
			'DEFAULT_VALUE' => $def,
		];
	}
}
$eventManager->registerEventHandlerCompatible('main', 'OnUserTypeBuildList', 'main',
			'\Bitrix\Main\UserField\Types\DemoType', 'getUserTypeDescription');



