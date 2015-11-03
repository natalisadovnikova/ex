<?php

/**
 * Class Aksessuary
 * Простой пример класса Продуктов: Аксессуары
 */
class Aksessuary extends ButikProduct
{
    /**
     * @return mixed
     * Стоимость аксессуаров умножается на коэффищиент
     */
    public function getCost()
    {
        $result = $this->cost * 1.5;
        return $result;

    }
}