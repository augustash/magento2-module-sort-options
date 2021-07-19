<?php

/**
 * Sort Options Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2021 August Ash (https://www.augustash.com)
 */

declare(strict_types=1);
namespace Augustash\SortOptions\Plugin\Elasticsearch\Adapter;

use Magento\Elasticsearch\Elasticsearch5\Model\Adapter\FieldMapper\ProductFieldMapperProxy;
use Magento\Elasticsearch\Model\Adapter\FieldMapper\FieldMapperResolver;
use Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldProvider\FieldType\ConverterInterface;

/**
 * Alter `created_at` declaration for Elasticsearch class.
 */
class ProductFieldMapperPlugin
{
    /**
     * Sets `created_at` to type "keyword" to enable sorting.
     *
     * @param ProductFieldMapperProxy|FieldMapperResolver $subject
     * @param array $allAttributes
     * @return array
     */
    public function afterGetAllAttributesTypes($subject, array $allAttributes)
    {
        $allAttributes['created_at']['type'] = ConverterInterface::INTERNAL_DATA_TYPE_KEYWORD;
        return $allAttributes;
    }
}
