<?php

require_once 'Product.php';

class BananaProduct extends Product
{
	function getProduct()
	{
		return 'I am banana!';
	}
}