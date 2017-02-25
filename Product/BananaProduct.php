<?php

/**
 * 香蕉产品类
 */

require_once 'Product.php';

class BananaProduct extends Product
{
	function getProduct()
	{
		return 'I am banana!';
	}
}