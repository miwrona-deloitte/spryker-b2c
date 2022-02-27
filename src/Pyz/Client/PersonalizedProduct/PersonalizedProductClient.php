<?php

namespace Pyz\Client\PersonalizedProduct;

use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\PersonalizedProduct\PersonalizedProductFactory getFactory()
 */
class PersonalizedProductClient extends AbstractClient implements PersonalizedProductClientInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function getPersonalizedProducts($limit)
    {
        /** @var \Spryker\Client\SearchExtension\Dependency\Plugin\QueryInterface $searchQuery */
        $searchQuery = $this
            ->getFactory()
            ->createPersonalizedProductsQueryPlugin($limit);

        $searchQueryFormatters = $this
            ->getFactory()
            ->getSearchQueryFormatters();

        $searchResult = $this->getFactory()
            ->getSearchClient()
            ->search(
                $searchQuery,
                $searchQueryFormatters
            );

        return $searchResult;
    }
}
