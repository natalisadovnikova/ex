<?php
/**
 * myservice.wsdl.php
 */
header("Content-Type: text/xml; charset=utf-8");
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
?>
<definitions xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/"
             xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/"
             xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
             xmlns:mime="http://schemas.xmlsoap.org/wsdl/mime/"
             xmlns:tns="http://<?= $_SERVER['HTTP_HOST'] ?>/"
             xmlns:xs="http://www.w3.org/2001/XMLSchema"
             xmlns:soap12="http://schemas.xmlsoap.org/wsdl/soap12/"
             xmlns:http="http://schemas.xmlsoap.org/wsdl/http/"
             name="BWsdl"
             xmlns="http://schemas.xmlsoap.org/wsdl/">

    <types>
        <xs:schema xmlns:tns="http://schemas.xmlsoap.org/wsdl/"
                   xmlns:xs="http://www.w3.org/2001/XMLSchema"
                   elementFormDefault="qualified"
                   targetNamespace="http://<?= $_SERVER['HTTP_HOST'] ?>/">

            <!--<xs:complexType name="ProductType">-->
            <!--<xs:sequence>-->
            <!--<xs:element name="title" type="string" minOccurs="1" maxOccurs="1" />-->
            <!--<xs:element name="categoryId" type="decimal" minOccurs="1" maxOccurs="1" />-->
            <!--</xs:sequence>-->
            <!--</xs:complexType>-->


            <xs:element name="Request">
                <xs:complexType>
                    <xs:all>
                        <xs:element name="title" type="string" minOccurs="1" maxOccurs="1"/>
                        <xs:element name="categoryId" type="decimal" minOccurs="1" maxOccurs="1"/>
                    </xs:all>
                </xs:complexType>
            </xs:element>
            <xs:element name="Response">
                <xs:complexType>
                    <xs:sequence>
                        <xs:element name="status" type="boolean"/>
                    </xs:sequence>
                </xs:complexType>
            </xs:element>
        </xs:schema>
    </types>
    <message name="getProductListRequest">
        <part name="Request" element="tns:Request"/>
    </message>
    <message name="getProductListResponse">
        <part name="Response" element="tns:Response"/>
    </message>

    <portType name="BServicePortType">
        <operation name="getProductList">
            <input message="tns:getProductListRequest"/>
            <output message="tns:getProductListResponse"/>
        </operation>
    </portType>


    <binding name="BServiceBinding" type="tns:BServicePortType">
        <soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
        <operation name="getProductList">
            <soap:operation soapAction=""/>
            <input>
                <soap:body use="literal"/>
            </input>
            <output>
                <soap:body use="literal"/>
            </output>
        </operation>
    </binding>

    <service name="BService">
        <port name="BServicePort" binding="tns:BServiceBinding">
            <soap:address location="http://<?= $_SERVER['HTTP_HOST'] ?>/bservice.php"/>
        </port>
    </service>
</definitions>