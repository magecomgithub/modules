<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once('app/Mage.php');
Mage::app('admin');
Mage::getSingleton("core/session", array("name" => "adminhtml"));
Mage::register('isSecureArea',true);

Mage::setIsDeveloperMode(true);

$collection = Mage::getResourceModel('catalog/product_collection');

$collection->addAttributeToFilter(array(array('attribute'=>'name', 'like' => '%T-Shirt%')))->load();

foreach ($collection->getData() as $item) {
    echo $item['name'] . '<br>';
}