<?php

/**
 * Class Checkout
 * Корзина
 * Простой пример реализации шаблона Composite
 * (в функцие getCost. Со всеми продуктами мы можем рабатать, вызывая одноименную функцию.)
 */
class Checkout
{
    private $_products = array();

    public function addProduct(ButikProduct $p)
    {
        array_push($this->_products, $p);
    }

    public function removeProduct(ButikProduct $p)
    {
        $this->_products = array_udiff($this->_products, array($p), function ($a, $b) {
            return $a === $b ? 0 : 1;
        });
    }

    public function getCost()
    {
        $result = 0;
        foreach ($this->_products as $p) {
            $result += $p->getCost();
        }
        return $result;
    }

    /**
     * @param Delivery $delivery Выбранный способ доставки
     */
    public function getFinalCost(Delivery $delivery)
    {

        $result = $this->getCost() + $delivery->getDeliveryCost();
        return $result;
    }
}