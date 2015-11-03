<?php

/**
 * Class Product
 * Простой пример супер класса Продукты
 */
abstract class ButikProduct
{
    protected $cost;
    protected $title;

    abstract function getCost();

    public function setCost($cost){
        $this->cost = $cost;
    }

    public function setTitle($title){
        $this->title = $title;
    }
}