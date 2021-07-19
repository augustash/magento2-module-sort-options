<?php

/**
 * Sort Options Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2021 August Ash (https://www.augustash.com)
 */

declare(strict_types=1);
namespace Augustash\SortOptions\Plugin\Catalog;

use Magento\Catalog\Model\Config as Subject;

/**
 * Define additional sort options class.
 */
class ModelConfigPlugin
{
    /**
     * Adds fields to sort options array.
     *
     * @param \Magento\Catalog\Model\Config $subject
     * @param array $result
     * @return array
     */
    public function afterGetAttributeUsedForSortByArray(Subject $subject, array $result): array
    {
        $result['created_at'] = __('New Arrivals');
        return $result;
    }
}
