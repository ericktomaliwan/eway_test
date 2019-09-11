<?php
require_once('EwayPaymentLive.php');
include ("validate.class.php");

if (isset($_POST['btnProcess']))
{
	try	
	{
		$required = array('txtCCName', 'txtCVN', 'txtAmount','ddlExpiryMonth', 'ddlExpiryYear');
		$txtFirstName = $_POST['first_name'];
		$txtLastName = $_POST['last_name'];
		$txtEmail = $_POST['webtolead_email1'];
		$txtAddress .= $_POST['txtAddress'];
		$txtPostcode .= $_POST['primary_address_postalcode'] ;
		$txtTxnNumber = $_POST['txtTxnNumber'];
		$txtInvDesc = $_POST['txtInvDesc'];
		$txtInvRef = $_POST['txtInvRef'];
		$txtOption1 = $_POST['txtOption1'];
		$txtOption2 = $_POST['txtOption2'];
		$txtOption3 = $_POST['txtOption3'];
		$txtCCNumber = $_POST['txtCCNumber'];
		$ddlExpiryMonth = $_POST['ddlExpiryMonth'];
		$ddlExpiryYear = $_POST['ddlExpiryYear'];
		$txtCCName = $_POST['txtCCName'];
		$txtCVN = $_POST['txtCVN'];
		$txtAmount = $_POST['txtAmount'];
		
		$error = false;
		foreach($required as $field){
			if (empty($_POST[$field])){
				$error = true;
			}
		}
		//Check if all required fields have input  
		if ($error) 
		{
			$CreditError = "All fields are required.";
			header ("Location: http://DEFAULT.com.au/staging2/index.php?product=generic&MainError=".$CreditError."&first_name=".$txtFirstName."&last_name=".$txtLastName."&webtolead_email1=".$txtEmail."&txtAddress=".$txtAddress);
		} 
		else 
		{
			$v = new validate();
			$v->ValidateNames($txtCCName,'txtCCName');
			$txtCCName = $v->cleanInput($txtCCName);
			//$txtCCNumber = $v->cleanInput($txtCCNumber);
			$txtPostcode = $v->cleanInput($txtPostcode);
			$ddlExpiryMonth = $v->cleanInput($ddlExpiryMonth);
			$ddlExpiryYear = $v->cleanInput($ddlExpiryYear);
			$txtCCName = $v->cleanInput($txtCCName);
			$txtCVN = $v->cleanInput($txtCVN);
			
			$isValid = $v->check_cc($txtCCNumber, true);
			
			if($isValid)
			{
				switch($txtAmount)
				{
					case "Sample Data 1 - $89.99":
						$txtAmount = "1000";
						break;
				}
				   
				// Set the payment details
				$eway = new EwayPaymentLive($eWAY_CustomerID, $eWAY_PaymentMethod, $eWAY_UseLive);

				$eway->setTransactionData("TotalAmount", $txtAmount); //mandatory field
				$eway->setTransactionData("CustomerFirstName", $txtFirstName);
				$eway->setTransactionData("CustomerLastName", $txtLastName);
				$eway->setTransactionData("CustomerEmail", $txtEmail);
				$eway->setTransactionData("CustomerAddress", $txtAddress);
				$eway->setTransactionData("CustomerPostcode", $txtPostcode);
				$eway->setTransactionData("CustomerInvoiceDescription", $txtInvDesc);
				$eway->setTransactionData("CustomerInvoiceRef", $txtInvRef);
				$eway->setTransactionData("CardHoldersName", $txtCCName); //mandatory field
				$eway->setTransactionData("CardNumber", $txtCCNumber); //mandatory field
				$eway->setTransactionData("CardExpiryMonth", $ddlExpiryMonth); //mandatory field
				$eway->setTransactionData("CardExpiryYear", $ddlExpiryYear); //mandatory field
				$eway->setTransactionData("CVN", $txtCVN); //mandatory field
				$eway->setTransactionData("TrxnNumber", "");
				$eway->setTransactionData("Option1", $txtOption1);
				$eway->setTransactionData("Option2", $txtOption2);
				$eway->setTransactionData("Option3", $txtOption3);
				
				$eway->setCurlPreferences(CURLOPT_SSL_VERIFYPEER, 0); // Require for Windows hosting

				// Send the transaction
				$ewayResponseFields = $eway->doPayment();
				if(strtolower($ewayResponseFields["EWAYTRXNSTATUS"])=="false")
				{
					/*print "Transaction Error: " . $ewayResponseFields["EWAYTRXNERROR"] . "<br>\n";
					foreach($ewayResponseFields as $key => $value)
					print "\n<br>\$ewayResponseFields[\"$key\"] = $value";*/
					$CreditError = "There's an error in one of the fields.";
					header ("Location: http://DEFAULT.com.au/staging2/index.php?product=generic&MainError=".$CreditError."&first_name=".$txtFirstName."&last_name=".$txtLastName."&webtolead_email1=".$txtEmail."&txtAddress=".$txtAddress);
				}
				else if(strtolower($ewayResponseFields["EWAYTRXNSTATUS"])=="true")
				{
					// payment succesfully sent to gateway
					// Payment succeeded get values returned
					$lblResult = " Result: " . $ewayResponseFields["EWAYCUSTOMERADDRESS"] . "<br>";
					$lblResult = " Result: " . $ewayResponseFields["EWAYCUSTOMERFIRSTNAME"] . "<br>";
					$lblResult = " Result: " . $ewayResponseFields["EWAYCUSTOMERLASTNAME"] . "<br>";
					$lblResult = " Result: " . $ewayResponseFields["EWAYTRXNSTATUS"] . "<br>";
					$lblResult .= " AuthCode: " . $ewayResponseFields["EWAYAUTHCODE"] . "<br>";
					$lblResult .= " Error: " . $ewayResponseFields["EWAYTRXNERROR"] . "<br>";
					$lblResult .= " eWAYInvoiceRef: " . $ewayResponseFields["EWAYTRXNREFERENCE"] . "<br>";
					$lblResult .= " Amount: " . $ewayResponseFields["EWAYRETURNAMOUNT"] . "<br>";
					$lblResult .= " Txn Number: " . $ewayResponseFields["EWAYTRXNNUMBER"] . "<br>";
					$lblResult .= " Option1: " . $ewayResponseFields["EWAYOPTION1"] . "<br>";
					$lblResult .= " Option2: " . $ewayResponseFields["EWAYOPTION2"] . "<br>";
					$lblResult .= " Option3: " . $ewayResponseFields["EWAYOPTION3"] . "<br>";
					header("Location: http://www.DEFAULT.com.au/products/training/registration/thanks/");
				}
				else
				{
					// invalid response recieved from server.
					$CreditError =  "Error: An invalid response was recieved from the payment gateway.";
					header ("Location: http://DEFAULT.com.au/staging2/index.php?product=generic&MainError=".$CreditError."&first_name=".$txtFirstName."&last_name=".$txtLastName."&webtolead_email1=".$txtEmail."&txtAddress=".$txtAddress);
				}
			}//End for Credit card
			else
			{
				$CreditError = "Credit Card Invalid.";
				header ("Location: http://DEFAULT.com.au/staging2/index.php?product=generic&MainError=".$CreditError."&first_name=".$txtFirstName."&last_name=".$txtLastName."&webtolead_email1=".$txtEmail."&txtAddress=".$txtAddress);
			}
		}//End Else for error
	}
	catch(Exception $e)	
	{
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
}
else
{
	 header("Location: http://www.DEFAULT.com.au");
}
?>
