<?php

abstract class Creator {

	protected abstract function getFruit($product);

	public function doFactory($product)
	{	
		return $this->getFruit($product);
	}
}




