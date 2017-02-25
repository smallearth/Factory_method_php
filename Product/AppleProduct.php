<?php
/**
 * 苹果产品类
 */

require_once 'Product.php';

class AppleProduct extends Product
{
	function getProduct()
	{
		return 'I am apple!';
	}
}