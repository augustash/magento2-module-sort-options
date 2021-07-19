<?php

/**
 * Sort Options Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2021 August Ash (https://www.augustash.com)
 */

declare(strict_types=1);
namespace Augustash\SortOptions\Setup\Patch\Data;

use Magento\Catalog\Api\ProductAttributeRepositoryInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
 * Set created attribute to searchable class.
 */
class SetCreatedAtToSearchable implements DataPatchInterface
{
    /**
     * @var \Magento\Catalog\Api\ProductAttributeRepositoryInterface
     */
    protected $attributeRepository;

    /**
     * @var \Magento\Framework\Setup\ModuleDataSetupInterface
     */
    protected $moduleDataSetup;

    /**
     * Constructor.
     *
     * Initialize class dependencies.
     *
     * @param \Magento\Catalog\Api\ProductAttributeRepositoryInterface $attributeRepository
     * @param \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        ProductAttributeRepositoryInterface $attributeRepository,
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->attributeRepository = $attributeRepository;
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $attribute = $this->attributeRepository->get('created_at');
        $attribute->setIsSearchable(true);
        $this->attributeRepository->save($attribute);
    }
}
