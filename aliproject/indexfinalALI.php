<?php
 
// declaring variabels, to and form nums =======
$strFromNumber = "+19783476171";
$strToNumber = "+15086672957";
$strMsg = "Ali's Test project "; 
$aryResponse = array();
 

    require_once ("inc/Services/Twilio.php");
 
    $AccountSid = "ACfa16448ddf07959415ea1ceebb8858dc";
    $AuthToken = "e5e2e79c6ef0e67f5f1d3307e80763bb";
 
    $objConnection = new Services_Twilio($AccountSid, $AuthToken);


    $bSuccess = $objConnection->account->sms_messages->create(
        
        $strFromNumber, 	// number we are sending From 
        $strToNumber,           // number we are sending To
        $strMsg			// sms body
    );

		
    $aryResponse["SentMsg"] = $strMsg;
    $aryResponse["Success"] = true;
    
    
    echo json_encode($aryResponse);
