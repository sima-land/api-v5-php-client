<?php

namespace SimaLand\API\Entities;

use SimaLand\API\AbstractList;

/**
 * Связь атрибута с товаром.
 */
class UnitList extends AbstractList
{
    /**
     * @inheritdoc
     */
    public function getEntity()
    {
        return 'unit';
    }
}
