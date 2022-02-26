<?php

namespace Pyz\Client\HelloSpryker;

use Spryker\Client\Kernel\AbstractClient;
use Generated\Shared\Transfer\HelloSprykerTransfer;

class HelloSprykerClient extends AbstractClient implements HelloSprykerClientInterface
{
    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer|\Spryker\Shared\Kernel\Transfer\TransferInterface
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        /** @var HelloSprykerFactory $factory */
        $factory = $this->getFactory();

        return $factory
            ->createZedHelloSprykerStub()
            ->reverseString($helloSprykerTransfer);
    }
}
