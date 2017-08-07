<?php

error_reporting(E_ALL|E_STRICT);
date_default_timezone_set('Europe/London');
set_include_path('.'.PATH_SEPARATOR . './library'
    .PATH_SEPARATOR.'./application/models/'
    .PATH_SEPARATOR.get_include_path());

include "Zend/Loader.php";
Zend_Loader::loadClass('Zend_Controller_Front');

// setup controller
$frontController = Zend_Controller_Front::getInstance();
$frontController->throwExceptions(true);
$frontController->setControllerDirectory('./application/controllers');

// run!
$frontController->dispatch();