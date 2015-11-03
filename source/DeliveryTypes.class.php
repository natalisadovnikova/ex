<?php

/**
 * Class DeliveryTypes Тип доставки
 */
class DeliveryTypes{
    const KURIER_MOSCOW = 1;
    const KURIER_MOSCOW_REGION = 2;
    const SAMOVIVOZ = 3;
    const PICKPOINT = 4;
    const DPD = 5;
    const EMS = 6;

    static public function getTypes(){
        return
            array(
                self::KURIER_MOSCOW => 'Доставка курьером по москве',
                self::KURIER_MOSCOW_REGION => 'Доставка курьером по МО',
                self::SAMOVIVOZ => 'Самовывоз',
                self::PICKPOINT => 'PICKPOINT',
                self::DPD => 'DPD',
                self::EMS => 'EMS',
            );
    }


    static public function getTitle($key){
        $types = self::getTypes();
        if(!array_key_exists($key , $types))
        {
            throw new Exception('Такого типа доставки не соществует');
        }

        return $types[$key];
    }
}