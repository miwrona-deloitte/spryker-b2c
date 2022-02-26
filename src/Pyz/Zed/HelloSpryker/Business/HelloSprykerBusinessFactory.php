<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Pyz\Zed\HelloSpryker\Business\Reader\StringReader;
use Pyz\Zed\HelloSpryker\Business\Reader\StringReaderInterface;
use Pyz\Zed\HelloSpryker\Business\Reverser\StringReverser;
use Pyz\Zed\HelloSpryker\Business\Writer\StringWriter;
use Pyz\Zed\HelloSpryker\Business\Writer\StringWriterInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerRepositoryInterface getRepository()
 */
class HelloSprykerBusinessFactory extends AbstractBusinessFactory
{
	/**
	 * @return StringReverser
	 */
	public function createStringReverser(): StringReverser
	{
		return new StringReverser();
	}

	/**
	 * @return \Pyz\Zed\HelloSpryker\Business\Reader\StringReaderInterface
	 */
	public function createStringReader(): StringReaderInterface
	{
		return new StringReader($this->getRepository());
	}

	/**
	 * @return \Pyz\Zed\HelloSpryker\Business\Writer\StringWriterInterface
	 */
	public function createStringWriter(): StringWriterInterface
	{
		return new StringWriter($this->getEntityManager());
	}
}
