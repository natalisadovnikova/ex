<?php
class DeliveryTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testDeliveryCost()
    {
        $delivery = Delivery::getDelivery( Delivery::MOSCOW, DeliveryTypes::KURIER_MOSCOW);

        // cost
        $cost = $delivery->getDeliveryCost();

        // Assert
        $this->assertEquals(150, $cost);
    }

    // ...
}