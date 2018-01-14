<?php

$id = $_REQUEST['id'];

// set empty variables
$object = array(
	'incaDAZ' => '',
	'incaCity' => '',
	'incaCircRep' => '',
	'incaCircRepWorkPhoneNumberAreaCode' => '',
	'incaCircRepWorkPhoneNumber3OfficeCode' => '',
	'incaCircRepWorkPhoneNumber4StationCode' => '',
	'incaCircRepMobilePhoneNumberAreaCode' => '',
	'incaCircRepMobilePhoneNumber3OfficeCode' => '',
	'incaCircRepMobilePhoneNumber4StationCode' => '',
	'streetno' => '',
	'streetName' => '',
	'streetType' => '',
	'streetDir' => '',
	'addressLine2' => '',
	'city' => '',
	'provState' => '',
	'country' => '',
	'zipPostalCodeFSA' => '',
	'zipPostalCodeLDU' => '',
	'customerPrimaryHomeOwnerSurName' => '',
	'customerPrimaryHomeOwnerHomeNumberAreaCode' => '',
	'customerPrimaryHomeOwnerHomeNumber3OfficeCode' => '',
	'customerPrimaryHomeOwnerHomeNumber4StationCode' => '',
	'customerPrimaryHomeOwnerFirstName' => '',
	'customerPrimaryHomeOwnerEmailAddress' => '',
	'customerPrimaryHomeOwnerGender' => '',
	'customerPrimaryHomeOwnerBirth4DigitYear' => '',
	'customerPrimaryHomeOwnerBirthMonth' => '',
	'customerPrimaryHomeOwnerBirthDayOfMonth' => '',
	'customerPrimaryHomeOwnerAge' => '',
	'customerPrimaryHomeOwnerMobilePhoneNumberAreaCode' => '',
	'customerPrimaryHomeOwnerMobilePhoneNumber3OfficeCode' => '',
	'customerPrimaryHomeOwnerMobilePhoneNumber4StationCode' => '',
	'customerSomeoneWantsPaperRoute' => '',
	'customerSomeoneWantsTruckRoute' => '',
	'customerDoesACarrierLiveHere' => '',
	'customerFamilyMemberFirstName' => '',
	'customerFamilyMemberLastName' => '',
	'customerFamilyMemberAgeRange' => '',
	'customerSomeoneWantsPaperRouteHasMobileData' => '',
	'customerDeliveryDateLastDelivered4DigitYear' => '',
	'customerDeliveryDateLastDeliveredMonthNumber' => '',
	'customerDeliveryDateLastDeliveredDayOfMonth' => '',
	'customerDeliveryTimeLastDelivered24Hour' => '',
	'customerDeliveryTimeLastDeliveredMinute' => '',
	'customerCollectionDateLastAttempt4DigitYear' => '',
	'customerCollectionDateLastAttemptMonthNumber' => '',
	'customerCollectionDateLastAttemptDayOfMonth' => '',
	'customerCollectionDateLastAttempt24Hour' => '',
	'customerCollectionDateLastAttemptMinute' => 	'',	
	'customerCollectionDateLastSuccesfulCollection4DigitYear' => '',
	'customerCollectionDateLastSuccesfulCollectionMonthNumber' => '',
	'customerCollectionDateLastSuccesfulCollectionDayOfMonth' => '',
	'customerCollectionDateLastAttempt24Hour' => '',
	'customerCollectionDateLastAttemptMinute' => 	'',	
	'customerCollectionPaymentStatusCode' => '',
	'customerCollectionPaymentStatusCodeDescr' => '',
	'customerCollectionAnswersDoorCode' => '',
	'customerCollectionAnswersDoorCodeDescr' => '',
	'customerAddressDeliveryStatusCode' => '',
	'customerAddressDeliveryStatusDescr' => '', 
	'customerNotes:' => '',
	'customerResidenceTypeCode' => '',
	'customerResidenceTypeCodeDescr' => '',
	'customerPreferredDeliveryLocationCode' =>  '',
	'customerPreferredDeliveryLocationCodeDescr' => '',
	'customerAddressGeocodedLatitude' => '',
	'customerAddressGeocodedLongitude' =>  '',
	'customerAddressRegionProvidedLatitude' => '',
	'customerAddressRegionProvidedLongitude' =>  '',
	'customerDeliveryLocationLatitude' => '',
	'customerDeliveryLocationLongitude' =>  '',
	'customerDeliveryLocationWhat3WordsWord1' => '',
	'customerDeliveryLocationWhat3WordsWord2' =>'',
	'customerDeliveryLocationWhat3WordsWord3' =>'',
	'myCurrentLatitude' => '',
	'myCurrentLongitude' =>  '',
	'myCurrentLocationWhat3WordsWord1' => '',
	'myCurrentLocationWhat3WordsWord2' => '',
	'myCurrentLocationWhat3WordsWord3' => '',
	'customerAddressStreetViewImageSRC' => '',
	'customerAddressStreetViewImageALT' => '',
	'customerDeliveryLocationStreetViewFOVZoom' => '',
	'customerDeliveryLocationStreetViewImageSRC' => '',
	'customerDeliveryLocationStreetViewImageALT' => '',
	'customerAddressStreetViewImageALT' => '',
	'myDistanceToDeliveryLocation' => '',
	'myDistanceToDeliveryLocationUnits' => '',
	'myCompassDirectionToDeliveryLocation' => '',
	'compassArrowImage' => '' ,
	'alert' => '',
);

// set the object variables based on the id value from the SRC
if ($id == 1) {
	$object = array(
		'incaDAZ' => 'AA',
		'incaCity' => 'Ajax',
		'incaCircRep' => 'Ajax Rep',
		'incaCircRepWorkPhoneNumberAreaCode' => '999',
		'incaCircRepWorkPhoneNumber3OfficeCode' => '888',
		'incaCircRepWorkPhoneNumber4StationCode' => '7777',
		'incaCircRepMobilePhoneNumberAreaCode' => '777',
		'incaCircRepMobilePhoneNumber3OfficeCode' => '888',
		'incaCircRepMobilePhoneNumber4StationCode' => '9999',
		'streetno' => '123',
		'streetName' => 'MyStreet',
		'streetType' => 'Rd',
		'streetDir' => '',
		'addressLine2' => '',
		'city' => 'MyCity',
		'provState' => 'MyStateProvince',
		'country' => 'MyCountry',
		'zipPostalCodeFSA' => 'H0H',
		'zipPostalCodeLDU' => '0H0',
		'customerPrimaryHomeOwnerSurName' => 'Smith',
		'customerPrimaryHomeOwnerHomeNumberAreaCode' => '123',
		'customerPrimaryHomeOwnerHomeNumber3OfficeCode' => '456',
		'customerPrimaryHomeOwnerHomeNumber4StationCode' => '7890',
		'customerPrimaryHomeOwnerFirstName' => 'John',
		'customerPrimaryHomeOwnerEmailAddress' => 'johnsmith@domain.com',
		'customerPrimaryHomeOwnerGender' => 'Male',
		'customerPrimaryHomeOwnerBirth4DigitYear' => '1950',
		'customerPrimaryHomeOwnerBirthMonth' => '12',
		'customerPrimaryHomeOwnerBirthDayOfMonth' => '31',
		'customerPrimaryHomeOwnerAge' => '67',
		'customerPrimaryHomeOwnerMobilePhoneNumberAreaCode' => '123',
		'customerPrimaryHomeOwnerMobilePhoneNumber3OfficeCode' => '456',
		'customerPrimaryHomeOwnerMobilePhoneNumber4StationCode' => '7890',
		'customerSomeoneWantsPaperRoute' => 'yes',
		'customerSomeoneWantsTruckRoute' => 'no',
		'customerDoesACarrierLiveHere' => 'No',
		'customerFamilyMemberFirstName' => 'Jane',
		'customerFamilyMemberLastName' => 'Doe',
		'customerFamilyMemberAgeRange' => '9-13',
		'customerSomeoneWantsPaperRouteHasMobileData' => 'yes',
		'title' => '123  Rd., MyCity, MyStateProvince, MyCountry, MyZipPostalCode',
		'zipPostalCode' => 'H0H 0H0',
		'customerHomeNumber' => '123-456-7890',
		'custmerMobilePhoneNumber' => '012-345-6789',
		'customerBirthDate' => '12-31-1950',
		'customerAge' => '67',
		'customerDeliveryDateLastDelivered' => '01-11-2018',
		'customerDeliveryDateLastDelivered4DigitYear' => '2018',
		'customerDeliveryDateLastDeliveredMonthNumber' => '01',
		'customerDeliveryDateLastDeliveredDayOfMonth' => '01',
		'customerDeliveryTimeLastDelivered24Hour' => '16',
		'customerDeliveryTimeLastDeliveredMinute' => '43',
		'customerCollectionDateLastAttempt4DigitYear' => '2017',
		'customerCollectionDateLastAttemptMonthNumber' => '12',
		'customerCollectionDateLastAttemptDayOfMonth' => '29',
		'customerCollectionDateLastAttempt24Hour' => '17',
		'customerCollectionDateLastAttemptMinute' => 	'33',	
		'customerCollectionDateLastSuccesfulCollection4DigitYear' => '2018',
		'customerCollectionDateLastSuccesfulCollectionMonthNumber' => '01',
		'customerCollectionDateLastSuccesfulCollectionDayOfMonth' => '05',
		'customerCollectionDateLastAttempt24Hour' => '18',
		'customerCollectionDateLastAttemptMinute' => 	'45',	
		'customerCollectionPaymentStatusCode' => 'U',
		'customerCollectionPaymentStatusCodeDescr' => 'Customer Usually Pays',
		'customerCollectionAnswersDoorCode' => 'A',
		'customerCollectionAnswersDoorCodeDescr' => 'Always - If They Are Home, Even if they don\'t have money',
		'customerAddressDeliveryStatusCode' => 'D',
		'customerAddressDeliveryStatusDescr' => 'Receives paper', 
		'customerNotes' => 'Has an uncaged bird',
		'customerResidenceTypeCode' => 'H',
		'customerResidenceTypeCodeDescr' => 'House',
		'customerPreferredDeliveryLocationCode' =>  'S',
		'customerPreferredDeliveryLocationCodeDescr' => 'On Front Door Step (somwehat sheltered)',
		'customerAddressGeocodedLatitude' => '43.879902',
		'customerAddressGeocodedLongitude' =>  '-78.940392',
		'customerAddressRegionProvidedLatitude' => '43.879902',
		'customerAddressRegionProvidedLongitude' =>  '-78.940392',
		'customerDeliveryLocationLatitude' => '43.879902',
		'customerDeliveryLocationLongitude' =>  '-78.940392',
		'customerDeliveryLocationWhat3WordsWord1' => 'touches',
		'customerDeliveryLocationWhat3WordsWord2' =>'flukes',
		'customerDeliveryLocationWhat3WordsWord3' =>'already',
		'myCurrentLatitude' => '43.883260',
		'myCurrentLongitude' =>  '-78.943240',
		'myCurrentLocationWhat3WordsWord1' => 'horn',
		'myCurrentLocationWhat3WordsWord2' => 'alleges',
		'myCurrentLocationWhat3WordsWord3' => 'identity',
		'customerAddressStreetViewImageSRC' => 'https://maps.googleapis.com/maps/api/streetview?size=400x400&location=40.720032,-73.988354&fov=90&heading=235&pitch=10' ,
		'customerAddressStreetViewImageALT' => 'Google Street View Image of Address',
		'customerDeliveryLocationStreetViewFOVZoom' => '60',
		'customerDeliveryLocationStreetViewImageSRC' => 'https://maps.googleapis.com/maps/api/streetview?size=600x300&location=eiffel%20tower,%20paris,%20france&heading=-45&pitch=42&fov=110',
		'customerDeliveryLocationStreetViewImageALT' => 'Google Street View Image of Delivery Location',
		'myDistanceToDeliveryLocation' => '500',
		'myDistanceToDeliveryLocationUnits' => 'm',
		'myCompassDirectionToDeliveryLocation' => 'NWW',
		'compassArrowImage' => 'images/compass_with_arrowhead_up-left_100x100.png',
		'alert' => '(This is a message)',
	);
}
elseif ($id == 2) {
	$object = array(
		'incaDAZ' => 'AA',
		'incaCity' => 'Ajax',
		'incaCircRep' => 'Ajax Rep',
		'incaCircRepWorkPhoneNumberAreaCode' => '999',
		'incaCircRepWorkPhoneNumber3OfficeCode' => '888',
		'incaCircRepWorkPhoneNumber4StationCode' => '7777',
		'incaCircRepMobilePhoneNumberAreaCode' => '777',
		'incaCircRepMobilePhoneNumber3OfficeCode' => '888',
		'incaCircRepMobilePhoneNumber4StationCode' => '9999',
		'streetno' => '123',
		'streetName' => 'MyStreet',
		'streetType' => 'Rd',
		'streetDir' => '',
		'addressLine2' => '',
		'city' => 'MyCity',
		'provState' => 'MyStateProvince',
		'country' => 'MyCountry',
		'zipPostalCodeFSA' => 'H0H',
		'zipPostalCodeLDU' => '0H0',
		'customerPrimaryHomeOwnerSurName' => 'Smith',
		'customerPrimaryHomeOwnerHomeNumberAreaCode' => '123',
		'customerPrimaryHomeOwnerHomeNumber3OfficeCode' => '456',
		'customerPrimaryHomeOwnerHomeNumber4StationCode' => '7890',
		'customerPrimaryHomeOwnerFirstName' => 'John',
		'customerPrimaryHomeOwnerEmailAddress' => 'johnsmith@domain.com',
		'customerPrimaryHomeOwnerGender' => 'Male',
		'customerPrimaryHomeOwnerBirth4DigitYear' => '1970',
		'customerPrimaryHomeOwnerBirthMonth' => '01',
		'customerPrimaryHomeOwnerBirthDayOfMonth' => '11',
		'customerPrimaryHomeOwnerAge' => '48',
		'customerPrimaryHomeOwnerMobilePhoneNumberAreaCode' => '123',
		'customerPrimaryHomeOwnerMobilePhoneNumber3OfficeCode' => '456',
		'customerPrimaryHomeOwnerMobilePhoneNumber4StationCode' => '7890',
		'customerSomeoneWantsPaperRoute' => 'yes',
		'customerSomeoneWantsTruckRoute' => 'no',
		'customerDoesACarrierLiveHere' => 'No',
		'customerFamilyMemberFirstName' => 'Jane',
		'customerFamilyMemberLastName' => 'Doe',
		'customerFamilyMemberAgeRange' => '13-18',
		'customerSomeoneWantsPaperRouteHasMobileData' => 'yes',
		'title' => '123  Rd., MyCity, MyStateProvince, MyCountry, MyZipPostalCode',
		'zipPostalCode' => 'H0H 0H0',
		'customerHomeNumber' => '123-456-7890',
		'custmerMobilePhoneNumber' => '012-345-6789',
		'customerBirthDate' => '12-31-1950',
		'customerAge' => '67',
		'customerDeliveryDateLastDelivered' => '01-11-2018',
		'customerDeliveryDateLastDelivered4DigitYear' => '2018',
		'customerDeliveryDateLastDeliveredMonthNumber' => '01',
		'customerDeliveryDateLastDeliveredDayOfMonth' => '01',
		'customerDeliveryDateLastDelivered4DigitYear' => '2018',
		'customerDeliveryDateLastDeliveredMonthNumber ' => '01',
		'customerDeliveryDateLastDeliveredDayOfMonth' => '01',
		'customerDeliveryTimeLastDelivered24Hour' => '16',
		'customerDeliveryTimeLastDeliveredMinute' => '43',
		'customerCollectionDateLastAttempt4DigitYear' => '2017',
		'customerCollectionDateLastAttemptMonthNumber' => '12',
		'customerCollectionDateLastAttemptDayOfMonth' => '29',
		'customerCollectionDateLastAttempt24Hour' => '17',
		'customerCollectionDateLastAttemptMinute' => 	'33',	
		'customerCollectionDateLastSuccesfulCollection4DigitYear' => '2018',
		'customerCollectionDateLastSuccesfulCollectionMonthNumber' => '01',
		'customerCollectionDateLastSuccesfulCollectionDayOfMonth' => '05',
		'customerCollectionDateLastAttempt24Hour' => '18',
		'customerCollectionDateLastAttemptMinute' => 	'45',	
		'customerCollectionPaymentStatusCode' => 'U',
		'customerCollectionPaymentStatusCodeDescr' => 'Customer Usually Pays',
		'customerCollectionAnswersDoorCode' => 'A',
		'customerCollectionAnswersDoorCodeDescr' => 'Always - If They Are Home, Even if they don\'t have money',
		'customerAddressDeliveryStatusCode' => 'D',
		'customerAddressDeliveryStatusDescr' => 'Receives paper', 
		'customerNotes' => 'Has an mean dog that bites',
		'customerResidenceTypeCode' => 'H',
		'customerResidenceTypeCodeDescr' => 'House',
		'customerPreferredDeliveryLocationCode' =>  'S',
		'customerPreferredDeliveryLocationCodeDescr' => 'On Front Door Step (somwehat sheltered)',
		'customerAddressGeocodedLatitude' => '43.879902',
		'customerAddressGeocodedLongitude' =>  '-78.940392',
		'customerAddressRegionProvidedLatitude' => '43.879902',
		'customerAddressRegionProvidedLongitude' =>  '-78.940392',
		'customerDeliveryLocationLatitude' => '43.879902',
		'customerDeliveryLocationLongitude' =>  '-78.940392',
		'customerDeliveryLocationWhat3WordsWord1' => 'touches',
		'customerDeliveryLocationWhat3WordsWord2' =>'flukes',
		'customerDeliveryLocationWhat3WordsWord3' =>'already',
		'myCurrentLatitude' => '43.883260',
		'myCurrentLongitude' =>  '-78.943240',
		'myCurrentLocationWhat3WordsWord1' => 'horn',
		'myCurrentLocationWhat3WordsWord2' => 'alleges',
		'myCurrentLocationWhat3WordsWord3' => 'identity',
		'customerAddressStreetViewImageSRC' => 'https://maps.googleapis.com/maps/api/streetview?size=600x300&location=46.414382,10.013988&heading=151.78&pitch=-0.76',
		'customerAddressStreetViewImageALT' => 'Google Street View Image of Address',
		'customerDeliveryLocationStreetViewFOVZoom' => '60',
		'customerDeliveryLocationStreetViewImageSRC' => 'https://maps.googleapis.com/maps/api/streetview?size=600x300&location=43.879902,-78.940392&heading=90',
		'customerDeliveryLocationStreetViewImageALT' => 'Google Street View Image of Delivery Location',
		'myDistanceToDeliveryLocation' => '750',
		'myDistanceToDeliveryLocationUnits' => 'm',
		'myCompassDirectionToDeliveryLocation' => 'SE',
		'compassArrowImage' => 'images/compass_with_arrowhead_up-left_100x100.png',
		'alert' => '(This is still a message)',
	);
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['title']; ?></title>
	</head>
	<body>
		<h1><?php echo $object['streetno']; ?> <?php echo $object['streetName']; ?> <?php echo $object['streetType']; ?> <?php echo $object['streetDir']; ?>, <?php echo $object['addressLine2']; ?>, <?php echo $object['city']; ?>, <?php echo $object['provState']; ?>, <?php echo $object['country']; ?>  <?php echo $object['zipPostalCodeFSA']; ?> <?php echo $object['zipPostalCodeLDU']; ?></h1>
		<p>
		INCA DAZ: <?php echo $object['incaDAZ']; ?><br>
		INCA Database: <?php echo $object['incaCity']; ?><br>
		INCA Circ. Rep.: <?php echo $object['incaCircRep']; ?><br>
		INCA Circ. Rep. Work Phone No.: <?php echo $object['incaCircRepWorkPhoneNumberAreaCode']; ?>-<?php echo $object['incaCircRepWorkPhoneNumber3OfficeCode']; ?>-<?php echo $object['incaCircRepWorkPhoneNumber4StationCode']; ?><br>
		INCA Circ. Rep. Mobile Phone No: <?php echo $object['incaCircRepMobilePhoneNumberAreaCode']; ?>-<?php echo $object['incaCircRepMobilePhoneNumber3OfficeCode']; ?>-<?php echo $object['incaCircRepMobilePhoneNumber4StationCode']; ?><br>
		<p>
		Customer Address 1: <?php echo $object['streetno']; ?> <?php echo $object['streetName']; ?> <?php echo $object['streetType']; ?> <?php echo $object['streetDir']; ?><br>
		Customer Address 2: <?php echo $object['addressLine2']; ?><br>
		Customer City: <?php echo $object['city']; ?><br>
		Customer State/Province: <?php echo $object['provState']; ?><br>
		Customer Zip/Postal Code: <?php echo $object['zipPostalCodeFSA']; ?> <?php echo $object['zipPostalCodeLDU']; ?><br>
		Customer Country:  <?php echo $object['country']; ?><br>
		<p>
		Customer Surname: <?php echo $object['customerPrimaryHomeOwnerSurName']; ?><br>
		Customer Home Number: <?php echo $object['customerPrimaryHomeOwnerHomeNumberAreaCode']; ?>-<?php echo $object['customerPrimaryHomeOwnerHomeNumber3OfficeCode']; ?>-<?php echo $object['customerPrimaryHomeOwnerHomeNumber4StationCode']; ?><br>
		<p>
		Customer 1 First Name: <?php echo $object['customerPrimaryHomeOwnerFirstName']; ?><br>
		Customer 1 Gender: <?php echo $object['customerPrimaryHomeOwnerGender']; ?><br>
		Customer 1 Email Address: <?php echo $object['customerPrimaryHomeOwnerEmailAddress']; ?><br>
		Customer 1 Mobile Number: <?php echo $object['customerPrimaryHomeOwnerMobilePhoneNumberAreaCode']; ?>-<?php echo $object['customerPrimaryHomeOwnerMobilePhoneNumber3OfficeCode']; ?>-<?php echo $object['customerPrimaryHomeOwnerMobilePhoneNumber4StationCode']; ?><br>
		Customer  Birth Date: <?php echo $object['customerPrimaryHomeOwnerBirth4DigitYear']; ?>-<?php echo $object['customerPrimaryHomeOwnerBirthMonth']; ?>-<?php echo $object['customerPrimaryHomeOwnerBirthDayOfMonth']; ?><br>
		Customer Age: <?php echo $object['customerAge']; ?><br>
		<p>
		Anyone interested in delivering the newspaper: <?php echo $object['customerSomeoneWantsPaperRoute']; ?><br>
		Anyone interested in a 'truck route', dropping of papers to carriers: <?php echo $object['customerSomeoneWantsTruckRoute']; ?><br>
		Does a Carrier live here?: <?php echo $object['customerDoesACarrierLiveHere']; ?><br>
		<p>
		Family Member 1 First Name: <?php echo $object['customerFamilyMemberFirstName']; ?><br>
		Family Member 1 Last Name: <?php echo $object['customerFamilyMemberLastName']; ?><br>
		Family Member 1 Age Range: <?php echo $object['customerFamilyMemberAgeRange']; ?><br>
		Does Family Member have access to a mobile device with a data plan? <?php echo $object['customerSomeoneWantsPaperRouteHasMobileData']; ?><br>
		<p>
		Date Last Delivered: <?php echo $object['customerDeliveryDateLastDelivered4DigitYear']; ?>-<?php echo $object['customerDeliveryDateLastDeliveredMonthNumber']; ?>-<?php echo $object['customerDeliveryDateLastDeliveredDayOfMonth']; ?><br>
		Time Last Delivered: <?php echo $object['customerDeliveryTimeLastDelivered24Hour']; ?>:<?php echo $object['customerDeliveryTimeLastDeliveredMinute']; ?><br>
		Date Last Collection Attempt: <?php echo $object['customerCollectionDateLastAttempt4DigitYear']; ?>-<?php echo $object['customerCollectionDateLastAttemptMonthNumber']; ?>-<?php echo $object['customerCollectionDateLastAttemptDayOfMonth']; ?><br>
		Time Last Collection Attempt: <?php echo $object['customerCollectionDateLastAttempt24Hour']; ?>:<?php echo $object['customerCollectionDateLastAttemptMinute']; ?><br>
		Date Last Successful Collection: <?php echo $object['customerCollectionDateLastSuccesfulCollection4DigitYear']; ?>-<?php echo $object['customerCollectionDateLastSuccesfulCollectionMonthNumber']; ?>-<?php echo $object['customerCollectionDateLastSuccesfulCollectionDayOfMonth']; ?><br>
		Time Last Successful Collection: <?php echo $object['customerCollectionDateLastAttempt24Hour']; ?>:<?php echo $object['customerCollectionDateLastAttemptMinute']; ?><br>
		<p>
		Payment Status Code: <?php echo $object['customerCollectionPaymentStatusCode']; ?><br>
		Payment Status Code Description: <?php echo $object['customerCollectionPaymentStatusCodeDescr']; ?><br>
		Comes To Door Code: <?php echo $object['customerCollectionAnswersDoorCode']; ?><br>
		Comes To Door Code Description: <?php echo $object['customerCollectionAnswersDoorCodeDescr']; ?><br>
		Delivery Status Code: <?php echo $object['customerAddressDeliveryStatusCode']; ?><br>
		Delivery Status Description: <?php echo $object['customerAddressDeliveryStatusDescr']; ?><br>
		<p>
		Notes: <?php echo $object['customerNotes']; ?><br>
		Residence Type Code: <?php echo $object['customerResidenceTypeCode']; ?><br>
		Residence Type Code Description: <?php echo $object['customerResidenceTypeCodeDescr']; ?><br>
		Delivery Location / Put Paper Code: <?php echo $object['customerPreferredDeliveryLocationCode']; ?><br>
		Delivery Location / Put Paper Description: <?php echo $object['customerPreferredDeliveryLocationCodeDescr']; ?><br>
		<p>
		Geocoded Address Latitude: <?php echo $object['customerAddressGeocodedLatitude']; ?><br>
		Geocoded Address Longitude: <?php echo $object['customerAddressGeocodedLongitude']; ?><br>
		Region Provided Latitude: <?php echo $object['customerAddressRegionProvidedLatitude']; ?><br>
		Region Provided Longitude: <?php echo $object['customerAddressRegionProvidedLongitude']; ?><br>
		<p>
		Delivery Location Latitude: <?php echo $object['customerDeliveryLocationLatitude']; ?><br>
		Delivery Location Longitude: <?php echo $object['customerDeliveryLocationLongitude']; ?><br>
		What 3 Words Delivery Location: <?php echo $object['customerDeliveryLocationWhat3WordsWord1']; ?>.<?php echo $object['customerDeliveryLocationWhat3WordsWord2']; ?>.<?php echo $object['customerDeliveryLocationWhat3WordsWord3']; ?><br>
		<p>
		Current Location Latitude: <?php echo $object['myCurrentLatitude']; ?><br>
		Current Location Longitude: <?php echo $object['myCurrentLongitude']; ?><br>
		What 3 Words Current Location: <?php echo $object['myCurrentLocationWhat3WordsWord1']; ?>.<?php echo $object['myCurrentLocationWhat3WordsWord2']; ?>.<?php echo $object['myCurrentLocationWhat3WordsWord3']; ?><br>
		<p>
		Distance To Delivery Location: <?php echo $object['myDistanceToDeliveryLocation']; ?> <?php echo $object['myDistanceToDeliveryLocationUnits']; ?><br>
		Compass Direction To Delivery Location: <?php echo $object['myCompassDirectionToDeliveryLocation']; ?><br>
		<p>
		Compass Arrow image: <br>
     	<img src="<?php echo $object['compassArrowImage']; ?>">
    	</p>
		<p>
		Google StreetView Image Address Location: <br>
     	<img src="<?php echo $object['customerAddressStreetViewImageSRC']; ?>" ALT="<?php echo $object['customerAddressStreetViewImageALT']; ?>">
		</p>
		Google StreetView Image Delivery Location: <br>
		<img src="<?php echo $object['customerDeliveryLocationStreetViewImageSRC']; ?>" ALT="<?php echo $object['customerDeliveryLocationStreetViewImageALT']; ?>">
		</p>
		<pre>
			alert: <?php echo $object['alert']; ?><br>
		</pre>
	</body>
</html>