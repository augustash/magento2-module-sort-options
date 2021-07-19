<?php

/**
 * Sort Options Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2021 August Ash (https://www.augustash.com)
 */

declare(strict_types=1);
namespace Augustash\SortOptions\Plugin\Catalog\Category;

use Magento\Catalog\Model\Category\Attribute\Source\Sortby as Subject;

/**
 * Define additional sort options class.
 */
class AttributeSourceSortByPlugin
{
    /**
     * Adds fields to sort options array.
     *
     * @param \Magento\Catalog\Model\Category\Attribute\Source\Sortby $subject
     * @param array $result
     * @return array
     */
    public function afterGetAllOptions(Subject $subject, array $result): array
    {
        $result[] = [
            'label' => __('New Arrivals'),
            'value' => 'created_at',
        ];
        return $result;
    }
}
