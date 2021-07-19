<?php

/**
 * Sort Options Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2021 August Ash (https://www.augustash.com)
 */

declare(strict_types=1);
namespace Augustash\SortOptions\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Category sort direction class.
 */
class ListDirection implements ArrayInterface
{
    /**
     * Retrieve option values array.
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        $options = [];
        $options[] = [
            'label' => __('Ascending'),
            'value' => 'asc'
        ];
        $options[] = [
            'label' => __('Descending'),
            'value' => 'desc'
        ];
        return $options;
    }
}
