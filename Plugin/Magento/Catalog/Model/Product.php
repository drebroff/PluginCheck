<?php


namespace Funami\PluginCheck\Plugin\Magento\Catalog\Model;

class Product
{

    public function afterGetPrice(
        \Magento\Catalog\Model\Product $subject,
        $result
    ) {
        //Your plugin code
        $a = 123;
        $result = $result . " Dallars";
        $result = "3";
        return $result;
    }
}
