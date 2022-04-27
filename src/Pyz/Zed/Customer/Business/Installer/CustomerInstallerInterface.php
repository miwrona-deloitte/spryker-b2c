<?php

declare(strict_types=1);

namespace Pyz\Zed\Customer\Business\Installer;

interface CustomerInstallerInterface
{
    /**
     * @return void
     */
    public function install(): void;
}
