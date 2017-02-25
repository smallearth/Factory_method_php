<?php
require_once 'Creator/FruitCreator.php';
require_once 'Product/AppleProduct.php';
require_once 'Product/BananaProduct.php';
		
class Client 
{
	private $_fruitCreator;

	public function getApple()
	{
		$this->_fruitCreator = new FruitCreator();
		$res = $this->_fruitCreator->doFactory(new AppleProduct());
		echo $res;
	}

	public function getBanana()
	{
		$this->_fruitCreator = new FruitCreator();
		$res = $this->_fruitCreator->doFactory(new BananaProduct());
		echo $res;
	}
}

$Client = new Client();
$Client->getApple();