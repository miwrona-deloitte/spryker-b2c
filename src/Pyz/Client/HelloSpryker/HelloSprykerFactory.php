<?php

namespace Pyz\Client\HelloSpryker;

use Spryker\Client\Kernel\AbstractFactory;
use Pyz\Client\HelloSpryker\Zed\HelloSprykerZedStub;

class HelloSprykerFactory extends AbstractFactory
{
    /**
     * @return \Pyz\Client\HelloSpryker\Zed\HelloSprykerZedStubInterface
     */
    public function createZedHelloSprykerStub()
    {
        return new HelloSprykerZedStub($this->getZedRequestClient());
    }

    /**
     * @return \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected function getZedRequestClient()
    {
        return $this->getProvidedDependency(HelloSprykerDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
