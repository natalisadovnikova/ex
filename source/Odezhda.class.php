<?php

/**
 * Class Odezhda
 * Простой пример класса Продуктов:Одежда
 */
class Odezhda extends ButikProduct{

    public function getTitle(){
        $result = sprintf('Odezhda: %s', $this->title);
        return $result;
    }

    function getCost()
    {
        return $this->cost;
    }
}