<?php

/** 
 * 水果工厂类
 */

require_once 'Creator.php';

class FruitCreator extends Creator
{
	public function getFruit($product)
	{
		return $product->getProduct();
	}
}