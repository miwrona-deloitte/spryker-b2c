<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Pyz\Zed\HelloSpryker\Business\Reverser\StringReverser;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class HelloSprykerBusinessFactory extends AbstractBusinessFactory
{
	/**
	 * @return StringReverser
	 */
	public function createStringReverser(): StringReverser
	{
		return new StringReverser();
	}
}
