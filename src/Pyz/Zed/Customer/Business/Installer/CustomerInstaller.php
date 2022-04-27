<?php

declare(strict_types=1);

namespace Pyz\Zed\Customer\Business\Installer;

use Generated\Shared\Transfer\CustomerTransfer;
use Pyz\Zed\Customer\CustomerConfig;
use Spryker\Zed\Customer\Business\Customer\CustomerInterface;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

class CustomerInstaller implements CustomerInstallerInterface
{
    use TransactionTrait;

    /**
     * @var \Pyz\Zed\Customer\CustomerConfig
     */
    protected $customerConfig;
    /**
     * @var \Spryker\Zed\Customer\Business\Customer\CustomerInterface
     */
    protected $customerWriter;

    /**
     * CustomerInstaller constructor.
     *
     * @param \Spryker\Zed\Customer\Business\Customer\CustomerInterface $customerWriter
     * @param \Pyz\Zed\Customer\CustomerConfig $customerConfig
     */
    public function __construct(
        CustomerInterface $customerWriter,
        CustomerConfig $customerConfig
    ) {
        $this->customerConfig = $customerConfig;
        $this->customerWriter = $customerWriter;
    }

    /**
     * @return void
     */
    public function install(): void
    {
        $this->getTransactionHandler()->handleTransaction(function () {
            $this->executeInstallTransaction();
        });
    }

    /**
     * @return void
     */
    protected function executeInstallTransaction(): void
    {
        $customerInstallData = [
            [            
            'email' => 'john.doe@gmail.com',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'customer_reference' => 'DE--1'
            // 'company' => 'Evil Corp'
            ]
        ]; //prepare customer data
        foreach ($customerInstallData as $customerData) {
            $customerTransfer = new CustomerTransfer();
            $customerTransfer->fromArray($customerData);
            $this->customerWriter->add($customerTransfer);
        }
    }
}
