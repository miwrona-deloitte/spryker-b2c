<?php

namespace Pyz\Zed\ApplicationAT\Communication\Controller;

use Spryker\Zed\Application\Communication\Controller\IndexController as SprykerIndexController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends SprykerIndexController
{
    /**
     * @return string
     */
    public function indexAction()
    {
        // return 'Hello AT Store!';        
        return new Response('Hello AT Store!');
    }
}
