<?php

/**
 * Class DeliveryMoscow
 */
class DeliveryMoscow extends Delivery
{


    public function getDeliveryTypes(){
        return array(DeliveryTypes::SAMOVIVOZ, DeliveryTypes::KURIER_MOSCOW, DeliveryTypes::PICKPOINT);
    }

    function getDeliveryCost($delivery_type = null )
    {
        if(!is_null($delivery_type))
        {
            $this->checkDeliveryType($delivery_type);
        }
        else{
            $delivery_type = $this->deliveryType;
        }

        //TODO Тут в зависимости от способа доставки формируем стоимость. Пока просто отдадим что-нибудь
        return 150 * $delivery_type;
    }

    function getDeliveryTitle()
    {
        // TODO: Implement getDeliveryTitle() method.
        return sprintf('Доставка по Москве. Способ доставки: %s', $this->deliveryType? DeliveryTypes::getTitle($this->deliveryType):" еще не выбран");
    }
}