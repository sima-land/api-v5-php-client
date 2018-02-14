<?php

namespace SimaLand\API\Parser;

/**
 * Интерфейс для сохранений данных.
 */
interface StorageInterface
{
    /**
     * Сохранить строку сущности.
     *
     * @param array $item
     */
    public function save(array $item);
}
