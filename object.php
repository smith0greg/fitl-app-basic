<?php

$id = $_REQUEST['id'];

// set empty variables
$incaDAZ = '';
$incaCity = '';
$incaCircRep = '';
$incaCircRepWorkPhoneNumberAreaCode = '';
$incaCircRepWorkPhoneNumber3OfficeCode = '';
$incaCircRepWorkPhoneNumber4StationCode = '';
$incaCircRepMobilePhoneNumberAreaCode = '';
$incaCircRepMobilePhoneNumber3OfficeCode = '';
$incaCircRepMobilePhoneNumber4StationCode = '';
$streetno = '';
$streetName = '';
$streetType = '';
$city = '';
$provState = '';
$country = '';
$zipPostalCodeFSA = '';
$zipPostalCodeLDU = '';
$customerPrimaryHomeOwnerSurName = '';
$customerPrimaryHomeOwnerHomeNumberAreaCode = '';
$customerPrimaryHomeOwnerHomeNumber3OfficeCode = '';
$customerPrimaryHomeOwnerHomeNumber4StationCode = '';
$customerPrimaryHomeOwnerFirstName = '';
$customerPrimaryHomeOwnerEmailAddress = '';
$customerPrimaryHomeOwnerGender = '';
$customerPrimaryHomeOwnerBirth4DigitYear = '';
$customerPrimaryHomeOwnerBirthMonth = '';
$customerPrimaryHomeOwnerBirthDayOfMonth = '';
$customerPrimaryHomeOwnerMobilePhoneNumberAreaCode = '';
$customerPrimaryHomeOwnerMobilePhoneNumber3OfficeCode = '';
$customerPrimaryHomeOwnerMobilePhoneNumber4StationCode = '';
$customerSomeoneWantsPaperRoute = '';
$customerSomeoneWantsTruckRoute = '';
$customerDoesACarrierLiveHere = '';
$customerChildChildFirstName = '';
$customerChildChildLastName = '';
$customerSomeoneWantsPaperRouteHasMobileData = '';
$customerDeliveryDateLastDelivered4DigitYear = '';
$customerDeliveryDateLastDeliveredMonthNumber = '';
$customerDeliveryDateLastDeliveredDayOfMonth = '';
$customerDeliveryDateLastDelivered4DigitYear = '';
$customerDeliveryDateLastDeliveredMonthNumber  = '';
$customerDeliveryDateLastDeliveredDayOfMonth = '';
$customerDeliveryTimeLastDelivered24Hour = '';
$customerDeliveryTimeLastDeliveredMinute = '';
$customerCollectionDateLastAttempt4DigitYear = '';
$customerCollectionDateLastAttemptMonthNumber = '';
$customerCollectionDateLastAttemptDayOfMonth = '';
$customerCollectionDateLastAttempt24Hour = '';
$customerCollectionDateLastAttemptMinute = 	'';	
$customerCollectionDateLastSuccesfulCollection4DigitYear = '';
$customerCollectionDateLastSuccesfulCollectionMonthNumber = '';
$customerCollectionDateLastSuccesfulCollectionDayOfMonth = '';
$customerCollectionDateLastAttempt24Hour = '';
$customerCollectionDateLastAttemptMinute = 	'';	
$customerCollectionPaymentStatusCode = '';
$customerCollectionPaymentStatusCodeDescr = '';
$customerCollectionAnswersDoorCode: '';
$customerCollectionAnswersDoorCode: '';
$customerAddressDeliveryStatusCode = '';
$customerAddressDeliveryStatusDescr = ''; 
$customerNotes: = '';
$customerResidenceTypeCode = '';
$customerResidenceTypeCodeDescr = '';
$customerPreferredDeliveryLocationCode =  '';
$customerPreferredDeliveryLocationCodeDescr = '';
$customerAddressGeocodedLatitude = '';
$customerAddressGeocodedLongitude =  '';
$customerAddressRegionProvidedLatitude = '';
$customerAddressRegionProvidedLongitude =  '';
$customerDeliveryLocationLatitude = '';
$customerDeliveryLocationLongitude =  '';
$customerDeliveryLocationWhat3WordsWord1 = '';
$customerDeliveryLocationWhat3WordsWord2 ='';
$customerDeliveryLocationWhat3WordsWord3 ='';
$myCurrentLatitude = '';
$myCurrentLongitude =  '';
$myCurrentLocationWhat3WordsWord1 = '';
$myCurrentLocationWhat3WordsWord2 = '';
$myCurrentLocationWhat3WordsWord3 = '';
$customerAddressStreetViewImageURL = '' ;
$customerDeliveryLocationStreetViewFOVZoom = ''
$customerDeliveryLocationStreetViewImageURL = '' ;
$myDistanceToDeliveryLocation = '';
$myDistanceToDeliveryLocationUnits = '';
$compassArrowImage = '' ;
$alert = '';
// Calculated variables
$title = '';
$zipPostalCode = '';
$customerHomeNumber = '';
$custmerMobilePhoneNumber = '';
$customerBirthDate = ''
$customerAge = '';
$customerDeliveryDateLastDelivered = '';

// set the object variables based on the id value from the URL
if ($id= = 1) {
// 'INCA database information'
$incaDAZ = 'AA';
$incaCity = 'Ajax';
$incaCircRep = 'Ajax Rep';
$incaCircRepWorkPhoneNumberAreaCode = '999';
$incaCircRepWorkPhoneNumber3OfficeCode = '888';
$incaCircRepWorkPhoneNumber4StationCode = '7777';
$incaCircRepMobilePhoneNumberAreaCode = '777';
$incaCircRepMobilePhoneNumber3OfficeCode = '888';
$incaCircRepMobilePhoneNumber4StationCode = '9999';
$streetno = '123';
$streetName = 'MyStreet';
$streetType = 'Rd';
$city = 'MyCity';
$provState = 'MyStateProvince';
$country = 'MyCountry';
$zipPostalCodeFSA = 'H0H';
$zipPostalCodeLDU = '0H0';
$customerPrimaryHomeOwnerSurName = 'Smith';
$customerPrimaryHomeOwnerHomeNumberAreaCode = '123';
$customerPrimaryHomeOwnerHomeNumber3OfficeCode = '456';
$customerPrimaryHomeOwnerHomeNumber4StationCode = '7890';
$customerPrimaryHomeOwnerFirstName = 'John';
$customerPrimaryHomeOwnerEmailAddress = 'johnsmith@domain.com';
$customerPrimaryHomeOwnerGender = 'Male';
$customerPrimaryHomeOwnerBirth4DigitYear = '1950';
$customerPrimaryHomeOwnerBirthMonth = '12';
$customerPrimaryHomeOwnerBirthDayOfMonth = '31';
$customerPrimaryHomeOwnerMobilePhoneNumberAreaCode = '123';
$customerPrimaryHomeOwnerMobilePhoneNumber3OfficeCode = '456';
$customerPrimaryHomeOwnerMobilePhoneNumber4StationCode = '7890';
$customerSomeoneWantsPaperRoute = 'yes';
$customerSomeoneWantsTruckRoute = 'no';
$customerDoesACarrierLiveHere = 'No';
$customerChildChildFirstName = 'Jane'
$customerChildChildLastName = 'Doe';
$customerSomeoneWantsPaperRouteHasMobileData = 'yes';
$title = '123  Rd., MyCity, MyStateProvince, MyCountry, MyZipPostalCode';
$zipPostalCode = 'H0H 0H0';
$customerHomeNumber = '123-456-7890';
$custmerMobilePhoneNumber = '012-345-6789';
$customerBirthDate = '12-31-1950'
$customerAge = '67';
$customerDeliveryDateLastDelivered = '01-11-2018';
$customerDeliveryDateLastDelivered4DigitYear = '2018';
$customerDeliveryDateLastDeliveredMonthNumber = '01';
$customerDeliveryDateLastDeliveredDayOfMonth = '01';
$customerDeliveryDateLastDelivered4DigitYear = '2018';
$customerDeliveryDateLastDeliveredMonthNumber  = '01';
$customerDeliveryDateLastDeliveredDayOfMonth = '01';
$customerDeliveryTimeLastDelivered24Hour = '16';
$customerDeliveryTimeLastDeliveredMinute = '43';
// customer Collection Last Attempt Date and Time'
$customerCollectionDateLastAttempt4DigitYear = '2017';
$customerCollectionDateLastAttemptMonthNumber = '12';
$customerCollectionDateLastAttemptDayOfMonth = '29';
$customerCollectionDateLastAttempt24Hour = '17';
$customerCollectionDateLastAttemptMinute = 	'33';	
// customer Collection Last Successful Collection Date and Time'
$customerCollectionDateLastSuccesfulCollection4DigitYear = '2018';
$customerCollectionDateLastSuccesfulCollectionMonthNumber = '01';
$customerCollectionDateLastSuccesfulCollectionDayOfMonth = '05';
$customerCollectionDateLastAttempt24Hour = '18';
$customerCollectionDateLastAttemptMinute = 	'45';	
$customerCollectionPaymentStatusCode = 'U';
$customerCollectionPaymentStatusCodeDescr = 'Customer Usually Pays';
$customerCollectionAnswersDoorCode: 'A';
$customerCollectionAnswersDoorCode: 'Always - If They Are Home; Even if they don\'t have money';
$customerAddressDeliveryStatusCode = 'D';
$customerAddressDeliveryStatusDescr = 'Receives paper'; 
$customerNotes: = 'Has an uncaged bird';
$customerResidenceTypeCode = 'H';
$customerResidenceTypeCodeDescr = 'House';
$customerPreferredDeliveryLocationCode =  'S';
$customerPreferredDeliveryLocationCodeDescr = 'On Front Door Step (somwehat sheltered)';
// customer Location Latitude / Longitude
$customerAddressGeocodedLatitude = '43.879902';
$customerAddressGeocodedLongitude =  '-78.940392';
// from Region/City Database
$customerAddressRegionProvidedLatitude = '43.879902';
$customerAddressRegionProvidedLongitude =  '-78.940392';
$customerDeliveryLocationLatitude = '43.879902';
$customerDeliveryLocationLongitude =  '-78.940392';
$customerDeliveryLocationWhat3WordsWord1 = 'touches';
$customerDeliveryLocationWhat3WordsWord2 ='flukes';
$customerDeliveryLocationWhat3WordsWord3 ='already';
// current location
$myCurrentLatitude = '43.883260';
$myCurrentLongitude =  '-78.943240';
$myCurrentLocationWhat3WordsWord1 = 'horn';
$myCurrentLocationWhat3WordsWord2 = 'alleges';
$myCurrentLocationWhat3WordsWord3 = 'identity';
// customer delivery location image zoom 0-120; append &fov=60'
$customerAddressStreetViewImageURL = 'https://maps.googleapis.com/maps/api/streetview?size=400x400&location=43.879902,-78.940392' ;
$customerDeliveryLocationStreetViewFOVZoom = '60'
$customerDeliveryLocationStreetViewImageURL = 'https://maps.googleapis.com/maps/api/streetview?size=600x300&location=43.879902,-78.940392&heading=151.78&pitch=-0.76&fov=60' ;
$myDistanceToDeliveryLocation = '500';
$myDistanceToDeliveryLocationUnits = 'm';
$compassArrowImage = 'compass.jpg' ;
$alert = '(This is a message)';

}
elseif ($id == 2) {

	// 'INCA database information'
	$incaDAZ = 'AA';
	$incaCity = 'Ajax';
	$incaCircRep = 'Ajax Rep';
	$incaCircRepWorkPhoneNumberAreaCode = '999';
	$incaCircRepWorkPhoneNumber3OfficeCode = '888';
	$incaCircRepWorkPhoneNumber4StationCode = '7777';
	$incaCircRepMobilePhoneNumberAreaCode = '777';
	$incaCircRepMobilePhoneNumber3OfficeCode = '888';
	$incaCircRepMobilePhoneNumber4StationCode = '9999';
	$streetno = '123';
	$streetName = 'MyStreet';
	$streetType = 'Rd';
	$city = 'MyCity';
	$provState = 'MyStateProvince';
	$country = 'MyCountry';
	$zipPostalCodeFSA = 'H0H';
	$zipPostalCodeLDU = '0H0';
	$customerPrimaryHomeOwnerSurName = 'Smith';
	$customerPrimaryHomeOwnerHomeNumberAreaCode = '123';
	$customerPrimaryHomeOwnerHomeNumber3OfficeCode = '456';
	$customerPrimaryHomeOwnerHomeNumber4StationCode = '7890';
$customerPrimaryHomeOwnerFirstName = 'John';
$customerPrimaryHomeOwnerEmailAddress = 'johnsmith@domain.com';
$customerPrimaryHomeOwnerGender = 'Male';
$customerPrimaryHomeOwnerBirth4DigitYear = '1950';
$customerPrimaryHomeOwnerBirthMonth = '12';
$customerPrimaryHomeOwnerBirthDayOfMonth = '31';
$customerPrimaryHomeOwnerMobilePhoneNumberAreaCode = '123';
$customerPrimaryHomeOwnerMobilePhoneNumber3OfficeCode = '456';
$customerPrimaryHomeOwnerMobilePhoneNumber4StationCode = '7890';
$customerSomeoneWantsPaperRoute = 'yes';
$customerSomeoneWantsTruckRoute = 'no';
$customerDoesACarrierLiveHere = 'No';
$customerChildChildFirstName = 'Jane'
$customerChildChildLastName = 'Doe';
$customerSomeoneWantsPaperRouteHasMobileData = 'yes';
$title = '123  Rd., MyCity, MyStateProvince, MyCountry, MyZipPostalCode';
$zipPostalCode = 'H0H 0H0';
$customerHomeNumber = '123-456-7890';
$custmerMobilePhoneNumber = '012-345-6789';
$customerBirthDate = '12-31-1950'
$customerAge = '67';
$customerDeliveryDateLastDelivered = '01-11-2018';
$customerDeliveryDateLastDelivered4DigitYear = '2018';
$customerDeliveryDateLastDeliveredMonthNumber = '01';
$customerDeliveryDateLastDeliveredDayOfMonth = '01';
$customerDeliveryDateLastDelivered4DigitYear = '2018';
$customerDeliveryDateLastDeliveredMonthNumber  = '01';
$customerDeliveryDateLastDeliveredDayOfMonth = '01';
$customerDeliveryTimeLastDelivered24Hour = '16';
$customerDeliveryTimeLastDeliveredMinute = '43';
// customer Collection Last Attempt Date and Time'
$customerCollectionDateLastAttempt4DigitYear = '2017';
$customerCollectionDateLastAttemptMonthNumber = '12';
$customerCollectionDateLastAttemptDayOfMonth = '29';
$customerCollectionDateLastAttempt24Hour = '17';
$customerCollectionDateLastAttemptMinute = 	'33';	
// customer Collection Last Successful Collection Date and Time'
$customerCollectionDateLastSuccesfulCollection4DigitYear = '2018';
$customerCollectionDateLastSuccesfulCollectionMonthNumber = '01';
$customerCollectionDateLastSuccesfulCollectionDayOfMonth = '05';
$customerCollectionDateLastAttempt24Hour = '18';
$customerCollectionDateLastAttemptMinute = 	'45';	
$customerCollectionPaymentStatusCode = 'U';
$customerCollectionPaymentStatusCodeDescr = 'Customer Usually Pays';
$customerCollectionAnswersDoorCode: 'A';
$customerCollectionAnswersDoorCode: 'Always - If They Are Home; Even if they don\'t have money';
$customerAddressDeliveryStatusCode = 'D';
$customerAddressDeliveryStatusDescr = 'Receives paper'; 
$customerNotes: = 'Has an uncaged bird';
$customerResidenceTypeCode = 'H';
$customerResidenceTypeCodeDescr = 'House';
$customerPreferredDeliveryLocationCode =  'S';
$customerPreferredDeliveryLocationCodeDescr = 'On Front Door Step (somwehat sheltered)';
// customer Location Latitude / Longitude
$customerAddressGeocodedLatitude = '43.879902';
$customerAddressGeocodedLongitude =  '-78.940392';
// from Region/City Database
$customerAddressRegionProvidedLatitude = '43.879902';
$customerAddressRegionProvidedLongitude =  '-78.940392';
$customerDeliveryLocationLatitude = '43.879902';
$customerDeliveryLocationLongitude =  '-78.940392';
$customerDeliveryLocationWhat3WordsWord1 = 'touches';
$customerDeliveryLocationWhat3WordsWord2 ='flukes';
$customerDeliveryLocationWhat3WordsWord3 ='already';
// current location
$myCurrentLatitude = '43.883260';
$myCurrentLongitude =  '-78.943240';
$myCurrentLocationWhat3WordsWord1 = 'horn';
$myCurrentLocationWhat3WordsWord2 = 'alleges';
$myCurrentLocationWhat3WordsWord3 = 'identity';
// customer delivery location image zoom 0-120; append &fov=60'
$customerAddressStreetViewImageURL = 'https://maps.googleapis.com/maps/api/streetview?size=400x400&location=43.879902,-78.940392' ;
$customerDeliveryLocationStreetViewFOVZoom = '60'
$customerDeliveryLocationStreetViewImageURL = 'https://maps.googleapis.com/maps/api/streetview?size=600x300&location=43.879902,-78.940392&heading=151.78&pitch=-0.76&fov=60' ;
$myDistanceToDeliveryLocation = '500';
$myDistanceToDeliveryLocationUnits = 'm';
$compassArrowImage = 'compass.jpg' ;
$alert = '(This is a message)';

}


?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<h1></h1>
		<p>
		Customer Surname: <?php echo $REPLACEME; ?>
		Customer Home Nunber: <?php echo $REPLACEME; ?>
		<p>
		Customer 1 First Name: <?php echo $REPLACEME; ?>
		Customer 1 Email Address: <?php echo $REPLACEME; ?>
		Customer 1 Cell Number: <?php echo $REPLACEME; ?>
		Customer Age / Birth Date: <?php echo $REPLACEME; ?>
		<p>
		Anyone interested in delivering the newspaper: <?php echo $REPLACEME; ?>
		Anyone interested in a 'truck route', dropping of papers to carriers: <?php echo $REPLACEME; ?>
		<p>
		Child 1 First Name: <?php echo $REPLACEME; ?>
		Child 1 Last Name: <?php echo $REPLACEME; ?>
		Child 1 Age Range: <?php echo $REPLACEME; ?>
		Does child have access to a mobile device with a data plan? <?php echo $REPLACEME; ?>
		<p>
		Date Last Delivered: <?php echo $REPLACEME; ?>
		Time Last Delivered: <?php echo $REPLACEME; ?>
		Date Last Collection Attempt: <?php echo $REPLACEME; ?>
		Time Last Collection Attempt: <?php echo $REPLACEME; ?>
		Date Last Successful Collection: <?php echo $REPLACEME; ?>
		Time Last Successful Collection: <?php echo $REPLACEME; ?>
		<p>
		Status: <?php echo $REPLACEME; ?>
		Payment: <?php echo $REPLACEME; ?>
		Comes To Door: <?php echo $REPLACEME; ?>
		Notes: <?php echo $REPLACEME; ?>
		Residence Type: <?php echo $REPLACEME; ?>
		Put Paper: <?php echo $REPLACEME; ?>
		<p>
		Geocoded Address Latitude: <?php echo $REPLACEME; ?>
		Geocoded Address Longitude: <?php echo $REPLACEME; ?>
		Region Provided Latitude: <?php echo $REPLACEME; ?>
		Region Provided Longitude: <?php echo $REPLACEME; ?>
		Delivery Location Latitude: <?php echo $REPLACEME; ?>
		Delivery Location Longitude: <?php echo $REPLACEME; ?>
		What 3 Words Delivery Location: <?php echo $REPLACEME; ?>.<?php echo $REPLACEME; ?>.<?php echo $REPLACEME; ?>
		<p>
		Current Location Latitude: <?php echo $REPLACEME; ?>
		Current Location Longitude: <?php echo $REPLACEME; ?>
		What 3 Words Current Location: <?php echo $REPLACEME; ?>.<?php echo $REPLACEME; ?>.<?php echo $REPLACEME; ?>
		<p>
		Distance To Delivery Location: <?php echo $REPLACEME; ?>
		Direction To Delivery Location: <?php echo $REPLACEME; ?>
		<p>
		Compass Arrow image: <?php echo $REPLACEME; ?>
		<p>
		Google StreetView Image Address Location: <?php echo $REPLACEME; ?>
		</p>
		Google StreetView Image Delivery Location: <?php echo $REPLACEME; ?>
		</p>
		<pre>
			alert: <?php echo $REPLACEME; ?>
		</pre>
	</body>
</html>