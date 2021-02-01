<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoapController extends Controller
{
    public function sendSoap(Request $request)
    {
        return $request->all();
        $url = "https://www.gulfmedical.com/wp-content/themes/gulfmedical/registration-action.php";
        
        $xml_post_string = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:glob="http://sap.com/xi/SAPGlobal20/Global">
            <soapenv:Header/>
            <soapenv:Body>
            <glob:ContactBundleMaintainRequest_sync_V1>
                <Contact actionCode="01">
                    <LifeCycleStatusCode>2</LifeCycleStatusCode>
                    <FormOfAddressCode>'.$request->FormOfAddressCode.'</FormOfAddressCode>
                    <AcademicTitleCode>'.$request->AcademicTitleCode.'</AcademicTitleCode>
                    <GivenName>'.$request->GivenName.'</GivenName>
                    <MiddleName>'.$request->MiddleName.'</MiddleName>
                    <FamilyName>'.$request->FamilyName.'</FamilyName>
                    <BirthName>'.$request->BirthName.'</BirthName>
                    <NickName>'.$request->NickName.'</NickName>
                    <NameFormatCountryCode>'.$request->NameFormatCountryCode.'</NameFormatCountryCode>
                    <GenderCode>'.$request->GenderCode.'</GenderCode>
                    <BirthDate>'.$request->BirthDate.'</BirthDate>
                    <NonVerbalCommunicationLanguageCode>'.$request->NonVerbalCommunicationLanguageCode.'</NonVerbalCommunicationLanguageCode>
                    <ContactPermissionCode>'.$request->ContactPermissionCode.'</ContactPermissionCode>
                    <IsContactPersonForRelationship actionCode="01" workplaceTelephoneListCompleteTransmissionIndicator="'.$request->workplaceTelephoneListCompleteTransmissionIndicator.'">
                        <RelationshipBusinessPartnerInternalID>'.$request->RelationshipBusinessPartnerInternalID.'</RelationshipBusinessPartnerInternalID>
                        <MainBusinessPartnerIndicator>'.$request->MainBusinessPartnerIndicator.'</MainBusinessPartnerIndicator>
                        <WorkplaceEmailURI>'.$request->WorkplaceEmailURI.'</WorkplaceEmailURI>
                        <WorkplaceTelephone>
                            <FormattedNumberDescription>'.$request->get('t1-FormattedNumberDescription').'</FormattedNumberDescription>
                            <MobilePhoneNumberIndicator>'.$request->get('t1-MobilePhoneNumberIndicator').'</MobilePhoneNumberIndicator>
                        </WorkplaceTelephone>
                        <WorkplaceTelephone>
                            <FormattedNumberDescription>'.$request->get('t2-FormattedNumberDescription').'</FormattedNumberDescription>
                            <MobilePhoneNumberIndicator>'.$request->get('t2-MobilePhoneNumberIndicator').'</MobilePhoneNumberIndicator>
                        </WorkplaceTelephone>
                        <workplaceTelephoneListCompleteTransmissionIndicator>'.$request->workplaceTelephoneListCompleteTransmissionIndicator.'</workplaceTelephoneListCompleteTransmissionIndicator>
                    </IsContactPersonForRelationship>
                    <AddressInformation actionCode="04">
                        <Address telephoneListCompleteTransmissionIndicator="'.$request->telephoneListCompleteTransmissionIndicator.'">
                        <EmailURI>'.$request->EmailURI.'</EmailURI>
                        <PostalAddress>
                            <CountryCode>'.$request->CountryCode.'</CountryCode>
                            <CityName>'.$request->CityName.'</CityName>
                            <StreetPostalCode>'.$request->StreetPostalCode.'</StreetPostalCode>
                            <StreetName>'.$request->StreetName.'</StreetName>
                            <HouseID>'.$request->HouseID.'</HouseID>
                        </PostalAddress>
                        <Telephone>
                            <FormattedNumberDescription>'.$request->get('w1-FormattedNumberDescription').'</FormattedNumberDescription>
                            <MobilePhoneNumberIndicator>'.$request->get('w1-MobilePhoneNumberIndicator').'</MobilePhoneNumberIndicator>
                        </Telephone>
                            <Telephone>
                            <FormattedNumberDescription>'.$request->get('w2-FormattedNumberDescription').'</FormattedNumberDescription>
                            <MobilePhoneNumberIndicator>'.$request->get('w2-MobilePhoneNumberIndicator').'</MobilePhoneNumberIndicator>
                        </Telephone>
                        </Address>
                    </AddressInformation>
                </Contact>
            </glob:ContactBundleMaintainRequest_sync_V1>
            </soapenv:Body>
        </soapenv:Envelope>';

        $headers = array(
            "Content-type: text/xml;charset=\"utf-8\"",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: ".$url,
            "Content-length: ".strlen($xml_post_string),
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $response = curl_exec($ch); 
        curl_close($ch);
        
        return $response1 = str_replace("<soap:Body>","",$response);
        $response2 = str_replace("</soap:Body>","",$response1);
        

        return $parser = simplexml_load_string($response2);
    }

    public function createTicket(Request $request)
    {
        $username = 'Brandmark';
        $password = 'SA123456';

        $url = "https://www.gulfmedical.com/wp-content/themes/gulfmedical/action-with-contact.php";
        
        $xml_post_string = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:glob="http://sap.com/xi/SAPGlobal20/Global" xmlns:yq3="http://0008329808-one-off.sap.com/YQ3PXPIZY_" xmlns:a18="http://sap.com/xi/AP/CustomerExtension/BYD/A18GB">
            <soapenv:Header/>
            <soapenv:Body>
                <glob:ServiceRequestBundleMaintainRequest2_sync>
                    <ServiceRequest actionCode="01">
                            <ProcessingTypeCode>SRRQ</ProcessingTypeCode>		
                            <Name>Subject of the request</Name>
                        <BuyerParty contactPartyListCompleteTransmissionIndicator="true">
                            <BusinessPartnerInternalID>001000057</BusinessPartnerInternalID>
                            <MainContactParty>
                                <BusinessPartnerInternalID>1005222</BusinessPartnerInternalID>
                            </MainContactParty>
                        </BuyerParty>
                        <Text>
                            <TypeCode>10004</TypeCode>
                            <Content>Long problem explanation</Content>
                        </Text>
                        <yq3:isCreatedUsignWebForm>true</yq3:isCreatedUsignWebForm>
                        <a18:ManufacturerList>Manufacturer ID</a18:ManufacturerList>
                        <a18:GenericName>Generic Name 1</a18:GenericName>
                        <AttachmentFolder ActionCode="01">
                            <Document ActionCode="01">
                            <CategoryCode>3</CategoryCode>
                            <Name>link name</Name>
                            <AlternativeName>link title</AlternativeName>
                            <Description languageCode="EN">link comment</Description>
                            <ExternalLinkWebURI>http://anyURI</ExternalLinkWebURI>
                            </Document>
                        </AttachmentFolder> 		
                    </ServiceRequest>    
                </glob:ServiceRequestBundleMaintainRequest2_sync>
            </soapenv:Body>
        </soapenv:Envelope>';

        $headers = array(
            "Content-type: text/xml;charset=\"utf-8\"",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: ".$url,
            "Content-length: ".strlen($xml_post_string),
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, true);
        //curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password); // username and password - declared at the top of the doc
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $response = curl_exec($ch); 
        curl_close($ch);
        
        $response1 = str_replace("<soap:Body>","",$response);
        $response2 = str_replace("</soap:Body>","",$response1);
        

        return $parser = simplexml_load_string($response2);
    }


    public function test(Request $request)
    {
        /*
        $request->FormOfAddressCode
        $request->AcademicTitleCode
        $request->GivenName
        $request->MiddleName
        $request->FamilyName
        $request->BirthName
        $request->NickName
        $request->NameFormatCountryCode
        $request->GenderCode
        $request->BirthDate
        $request->NonVerbalCommunicationLanguageCode
        $request->ContactPermissionCode
        $request->workplaceTelephoneListCompleteTransmissionIndicator
        $request->RelationshipBusinessPartnerInternalID
        $request->MainBusinessPartnerIndicator
        $request->WorkplaceEmailURI
        $request->get('t1-FormattedNumberDescription')
        $request->get('t1-MobilePhoneNumberIndicator')
        $request->get('t2-FormattedNumberDescription')
        $request->get('t2-MobilePhoneNumberIndicator')
        $request->workplaceTelephoneListCompleteTransmissionIndicator
        $request->telephoneListCompleteTransmissionIndicator
        $request->EmailURI
        $request->CountryCode
        $request->CityName
        $request->StreetPostalCode
        $request->StreetName
        $request->HouseID
        $request->get('w1-FormattedNumberDescription')
        $request->get('w1-MobilePhoneNumberIndicator')
        $request->get('w2-FormattedNumberDescription')
        $request->get('w2-MobilePhoneNumberIndicator')
        */
        

        $internalID = $request->RelationshipBusinessPartnerInternalID;
        $givenName = $request->GivenName;
        $mobNumber=  $request->get('t1-FormattedNumberDescription');
        $emailAddress= $request->get('EmailURI');

        $uploads_dir = 'uploads/';
        
        $attachment = "";


        $name = $request->NickName;
        $BusinessPartnerInternalID = $request->RelationshipBusinessPartnerInternalID;
        
        $manufacturerList = 'Manufacturer ID';
        $ProcessingTypeCode = 'SRRQ';
        $GenericName = 'Generic Name 1';
        $Content = "Model #:".'2020'." SM: ".'123456789'." Dear  GMC, please provide support for the product.".'Content';
        $description = '';

        $host = "https://my331194.crm.ondemand.com/sap/bc/srt/scs/sap/manageservicerequestin1?sap-vhost=my331194.crm.ondemand.com";
        $username = "_THIS_C4C";
        $password = "sdfA*/548ADcf";
            


        $soapxml = "<soapenv:Envelope xmlns:soapenv='http://schemas.xmlsoap.org/soap/envelope/' xmlns:glob='http://sap.com/xi/SAPGlobal20/Global' xmlns:yq3='http://0008329808-one-off.sap.com/YQ3PXPIZY_' xmlns:a18='http://sap.com/xi/AP/CustomerExtension/BYD/A18GB'><soapenv:Header/><soapenv:Body><glob:ServiceRequestBundleMaintainRequest2_sync><ServiceRequest actionCode='01'><ProcessingTypeCode>";
        $soapxml .= $ProcessingTypeCode;
        $soapxml .= "</ProcessingTypeCode><Name>";
        $soapxml .= $name;
        $soapxml .= "</Name><BuyerParty contactPartyListCompleteTransmissionIndicator='true'><BusinessPartnerInternalID>";
        $soapxml .= $BusinessPartnerInternalID;
        $soapxml .= "</BusinessPartnerInternalID><MainContactParty><BusinessPartnerInternalID>";
        $soapxml .= $internalID;
        $soapxml .= "</BusinessPartnerInternalID></MainContactParty></BuyerParty><Text><TypeCode>";
        $soapxml .= "10004";
        $soapxml .= "</TypeCode><Content>";
        $soapxml .= $Content;
        $soapxml .= "</Content></Text><yq3:isCreatedUsignWebForm>true</yq3:isCreatedUsignWebForm>";

        $soapxml .="<yq3:RequesterTel>";
        $soapxml .= $mobNumber;
        $soapxml .="</yq3:RequesterTel>";

        $soapxml .="<yq3:RequesterName>";
        $soapxml .= $givenName;
        $soapxml .="</yq3:RequesterName>";

        $soapxml .="<yq3:RequesterMail>";
        $soapxml .= $emailAddress;
        $soapxml .="</yq3:RequesterMail>";

        $soapxml .= "<a18:ManufacturerList>";
        $soapxml .= $manufacturerList;
        $soapxml .= "</a18:ManufacturerList><a18:GenericName>";
        $soapxml .= $GenericName;
        $soapxml .= "</a18:GenericName><AttachmentFolder ActionCode='01'><Document ActionCode='01'><CategoryCode>3</CategoryCode><Name>link name</Name><AlternativeName>link title</AlternativeName><Description languageCode='EN'>";
        $soapxml .= $description;
        $soapxml .="</Description><ExternalLinkWebURI>";
        $soapxml .= $attachment;
        $soapxml .= "</ExternalLinkWebURI></Document></AttachmentFolder>		</ServiceRequest>    </glob:ServiceRequestBundleMaintainRequest2_sync></soapenv:Body></soapenv:Envelope>";

        // echo $soapxml;exit;

        // xml in word file
        //$soapxml = "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:glob=\"http://sap.com/xi/SAPGlobal20/Global\" xmlns:yq3=\"http://0008329808- one-off.sap.com/YQ3PXPIZY_\" xmlns:a18=\"http://sap.com/xi/AP/CustomerExtension/BYD/A18GB\"> <soapenv:Header/> <soapenv:Body> <glob:ServiceRequestBundleMaintainRequest2_sync> <ServiceRequest actionCode=\"01\"> <ProcessingTypeCode>SRRQ</ProcessingTypeCode> <Name>Subject of the request</Name> <BuyerParty contactPartyListCompleteTransmissionIndicator=\"true\"> <BusinessPartnerInternalID>001000057</BusinessPartnerInternalID> <MainContactParty> <BusinessPartnerInternalID>1005222</BusinessPartnerInternalID> </MainContactParty> </BuyerParty> <Text> <TypeCode>10004</TypeCode> <Content>Long problem explanation</Content> </Text> <yq3:isCreatedUsignWebForm>true</yq3:isCreatedUsignWebForm> <a18:ManufacturerList>Manufacturer ID</a18:ManufacturerList> <a18:GenericName>Generic Name 1</a18:GenericName> <AttachmentFolder ActionCode=\"01\"> <Document ActionCode=\"01\"> <CategoryCode>3</CategoryCode> <Name>link name</Name> <AlternativeName>link title</AlternativeName> <Description languageCode=\"EN\">link comment</Description> <ExternalLinkWebURI>http://anyURI</ExternalLinkWebURI> </Document> </AttachmentFolder> </ServiceRequest> </glob:ServiceRequestBundleMaintainRequest2_sync> </soapenv:Body> </soapenv:Envelope>";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $host);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $soapxml);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type: text/xml',
            'Content-length: ' . strlen($soapxml),
        ));
        $return = curl_exec($ch);
        curl_close($ch);
        $re1='()';	# Tag 1
        $re2='(\\d+)';	# Integer Number 1
        $re3='(<\\/id>)';	# Tag 2

        if ($c=preg_match_all ("/".$re1.$re2.$re3."/is", $return, $matches))
        {
            $id=$matches[2][0];
            $FlashMessage = 'Your ticket was submitted successfully, Ticket ID : '. $id;

        } else {
            $FlashMessage = 'an error has been occurred during submitting your ticket';
        }
        

        return $FlashMessage;
    }
}
