<?php

namespace Pyz\Zed\Application\Communication\Controller;

use Symfony\Component\HttpFoundation\Response;

use Spryker\Zed\Application\Communication\Controller\IndexController as SprykerIndexController;

class IndexController extends SprykerIndexController
{
    /**
     * @return string
     */
    public function indexAction()
    {
        return new Response('Hello DE Store!');
    }
}
