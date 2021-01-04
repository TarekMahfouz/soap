<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoapController extends Controller
{
    public function sendSoap(Request $request)
    {
        //return $request->all();
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
}
