<?php

namespace Pyz\Yves\PersonalizedProduct\Controller;

use Pyz\Client\PersonalizedProduct\PersonalizedProductClientInterface;
use Spryker\Yves\Kernel\Controller\AbstractController;

/**
 * @method PersonalizedProductClientInterface getClient()
 */
class IndexController extends AbstractController
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function indexAction(int $limit)
    {
        $searchResults = $this->getClient()->getPersonalizedProducts($limit);

        return $this->view(
            $searchResults,
            [],
            '@PersonalizedProduct/views/index/index.twig'
        );
    }
}
