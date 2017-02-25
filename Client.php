<?php
require_once 'Creator/FruitCreator.php';
require_once 'Product/AppleProduct.php';
require_once 'Product/BananaProduct.php';
	
/**
 * 客户
 */

class Client 
{
	private $_fruitCreator;

	public function getApple()
	{
		$this->_fruitCreator = new FruitCreator();
		$res = $this->_fruitCreator->doFactory(new AppleProduct());
		return $res;
	}

	public function getBanana()
	{
		$this->_fruitCreator = new FruitCreator();
		$res = $this->_fruitCreator->doFactory(new BananaProduct());
		return $res;
	}
}

$Client = new Client();

echo "\n";
echo "Jack: Hi give me an Apple!\n";
echo "\n";
echo "Product: " . $Client->getApple() . "\n";


echo "\n";
echo "Jack: Hi give me an Banana!\n";
echo "\n";
echo "Product: " . $Client->getApple() . "\n";
echo "\n";






