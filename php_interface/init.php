<?php

use \Bitrix\Main\EventManager;


//пользовательский тип поля "Адреса и документы" для карточки crm
require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/crm_user_type_adresses.php");
 

// $eventManager = \Bitrix\Main\EventManager::getInstance(); 
// $eventManager->addEventHandler("main","OnEpilog","dumpViews");

// function dumpViews() {
//     global $APPLICATION;
//     d($APPLICATION->__view);
    
// }

// // 