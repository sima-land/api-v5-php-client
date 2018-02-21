<?php

namespace SimaLand\API\Entities;

use SimaLand\API\AbstractList;

/**
 * Товары.
 */
class ItemList extends AbstractList
{
    /**
     * @inheritdoc
     */
    public function getEntity()
    {
        return 'item';
    }
}
