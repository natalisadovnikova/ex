<?php

/**
 * Class Delivery
 * Простой пример Супер класса для работы с доставкой. Демонстрация Абстрактной фабрики
 */
abstract class Delivery
{
    const MOSCOW = 1;
    const MOSCOW_REGION = 2;
    const RUSSIA = 3;

    protected $deliveryType;

    abstract function getDeliveryTypes();
    abstract function getDeliveryCost($delivery_type = null);

    abstract function getDeliveryTitle();

    private function __construct($deliveryType)
    {
        //Тут проверим, есть ли переданный тип доставки в текущем регионе
        if(!is_null($deliveryType) && $this->checkDeliveryType($deliveryType))
        {
            $this->deliveryType = $deliveryType;
        }
    }


    /**
     * @param int $region
     * @param null $deliveryType
     * @return DeliveryMoscow|DeliveryMoscowRegion|DeliveryRussia
     */
    static public function getDelivery($region = self::RUSSIA, $deliveryType = null)
    {
        switch ($region) {
            case self::MOSCOW:
                return new DeliveryMoscow($deliveryType);
                break;
            case self::MOSCOW_REGION:
                return new DeliveryMoscowRegion($deliveryType);
                break;
            case self::RUSSIA:
            default:
                return new DeliveryRussia($deliveryType);
        }
    }

    /**
     * @param $deliveryType
     * Проверяет, удовлетворяет ли выбранный тип доставки нашему региону
     */
    protected function checkDeliveryType($deliveryType){
        if(!in_array($deliveryType, static::getDeliveryTypes())) {
            throw new Exception(sprintf('Для текущего региона не действует выбранный тип доставки: %s. ', DeliveryTypes::getTitle($deliveryType)));
        }

        return true;
    }
}