<?php

namespace Pyz\Yves\HelloSpryker\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Client\HelloSpryker\HelloSprykerClientInterface getClient()
 */
class IndexController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function indexAction(Request $request)
    {
        $data = ['reversedString' => 'Hello Spryker!'];
        
                return $this->view(
        $data,
                    [],
        '@HelloSpryker/views/index/index.twig'
                );
        }
}
