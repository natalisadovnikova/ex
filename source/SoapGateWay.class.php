<?php
/**
 * SoapGateWay.class.php
 */
class SoapGateWay {
    public function getProductList($messagesData){
        $rawPost  = "Input:\r\n";
        $rawPost .= file_get_contents('php://input');
        $rawPost .= "\r\n---\r\nmessageData:\r\n";
        $rawPost .= serialize($messagesData);
        file_put_contents("log.txt",$rawPost);
        return array("status" => "true");
    }
}