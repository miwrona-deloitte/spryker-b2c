<?php

declare(strict_types=1);

namespace Pyz\Zed\Customer\Business;

use Pyz\Zed\Customer\Business\Installer\CustomerInstaller;
use Pyz\Zed\Customer\Business\Installer\CustomerInstallerInterface;
use Spryker\Zed\Customer\Business\CustomerBusinessFactory as SprykerCustomerBusinessFactory;

/**
 * @method \Spryker\Zed\Customer\Persistence\CustomerEntityManagerInterface getFacade()
 * @method \Pyz\Zed\Customer\CustomerConfig getConfig()
 */
class CustomerBusinessFactory extends SprykerCustomerBusinessFactory
{
    /**
     * @return \Pyz\Zed\Customer\Business\Installer\CustomerInstallerInterface
     */
    public function createCustomerInstaller(): CustomerInstallerInterface
    {
        return new CustomerInstaller(
            $this->createCustomer(),
            $this->getConfig()
        );
    }
}
