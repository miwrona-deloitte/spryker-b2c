<?php

namespace Pyz\Zed\Customer\Communication\Plugin\Installer;

use Spryker\Zed\Installer\Dependency\Plugin\InstallerPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Pyz\Zed\Customer\Business\CustomerFacade getFacade()
 */
class CustomerInstallerPlugin extends AbstractPlugin implements InstallerPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return void
     */
    public function install(): void
    {
        $this->getFacade()->installCustomer();
    }
}
