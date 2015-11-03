<?php

/**
 * Class DeliveryRussia
 */
class DeliveryRussia extends Delivery
{

    public function getDeliveryTypes(){
        return array(DeliveryTypes::EMS, DeliveryTypes::DPD, DeliveryTypes::PICKPOINT);
    }

    function getDeliveryCost($delivery_type = null )
    {

        // TODO: Implement getDeliveryCost() method.
    }

    function getDeliveryTitle()
    {
        // TODO: Implement getDeliveryTitle() method.
        return 'Доставка в регионы';
    }
}