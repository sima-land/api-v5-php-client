<?php

namespace SimaLand\API\Entities;

use SimaLand\API\AbstractList;

/**
 * Тип значения атрибута товара.
 */
class ItemCategoryList extends AbstractList
{
    /**
     * @inheritdoc
     */
    public function getEntity()
    {
        return 'item-category';
    }
}
