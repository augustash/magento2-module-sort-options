<?php

/**
 * Sort Options Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2021 August Ash (https://www.augustash.com)
 */

declare(strict_types=1);
namespace Augustash\SortOptions\Api;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Service interface responsible for exposing configuration options.
 * @api
 */
interface ConfigInterface
{
    /**
     * Configuration constants.
     */
    const XML_PATH_SORT_DIRECTION = 'catalog/frontend/default_sort_dir';

    /**
     * Retrieves the module's sort direction.
     *
     * @param string $scope
     * @param int|string|\Magento\Store\Model\Store $scopeCode
     * @return null|string
     */
    public function getDefaultSortDirection(
        $scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT,
        $scopeCode = null
    ): ?string;
}
