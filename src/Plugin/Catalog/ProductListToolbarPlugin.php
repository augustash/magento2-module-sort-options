<?php

/**
 * Sort Options Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2021 August Ash (https://www.augustash.com)
 */

declare(strict_types=1);
namespace Augustash\SortOptions\Plugin\Catalog;

use Augustash\SortOptions\Api\ConfigInterface;
use Magento\Catalog\Block\Product\ProductList\Toolbar as Subject;
use Magento\Framework\Data\Collection;

/**
 * Define additional sort options class.
 */
class ProductListToolbarPlugin
{
    /**
     * @var \Augustash\SortOptions\Api\ConfigInterface
     */
    protected $config;

    /**
     * Constructor.
     *
     * Initialize class dependencies.
     *
     * @param \Augustash\SortOptions\Api\ConfigInterface $config
     */
    public function __construct(
        ConfigInterface $config
    ) {
        $this->config = $config;
    }

    /**
     * Sets sort options on collection.
     *
     * @param \Magento\Catalog\Block\Product\ProductList\Toolbar $subject
     * @param \Closure $proceed
     * @param \Magento\Framework\Data\Collection $collection
     * @return \Magento\Catalog\Block\Product\ProductList\Toolbar
     */
    public function aroundSetCollection(
        Subject $subject,
        \Closure $proceed,
        Collection $collection
    ): Subject {
        $defaultDirection = $this->config->getDefaultSortDirection();
        if ($defaultDirection) {
            $subject->setDefaultDirection($defaultDirection);
        }

        $result = $proceed($collection);

        return $result;
    }
}
