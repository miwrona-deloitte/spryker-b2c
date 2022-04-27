<?php

declare(strict_types=1);

namespace Pyz\Zed\Customer\Business;

use Spryker\Zed\Customer\Business\CustomerFacade as SprykerCustomerFacade;

/**
 * @method \Pyz\Zed\Customer\Business\CustomerBusinessFactory getFactory()
 */
class CustomerFacade extends SprykerCustomerFacade
{
    public function installCustomer(): void
    {
        $this->getFactory()
            ->createCustomerInstaller()
            ->install();
    }
}
