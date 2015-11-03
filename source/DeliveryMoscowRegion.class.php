<?php

/**
 * Class DeliveryMoscowRegion
 */
class DeliveryMoscowRegion extends Delivery
{

    public function getDeliveryTypes(){
        return array(DeliveryTypes::SAMOVIVOZ, DeliveryTypes::KURIER_MOSCOW_REGION, DeliveryTypes::PICKPOINT);
    }

    function getDeliveryCost($delivery_type = null)
    {

        // TODO: Implement getDeliveryCost() method.
    }

    function getDeliveryTitle()
    {
        // TODO: Implement getDeliveryTitle() method.
        return 'Доставка в Московскую область';
    }
}