<?php
class validate
{
	public $errors = array();
	public $postCodeChecker = false;

	//Validate if min and max size of string
	public function validateStr($postVal, $postName, $min = 5, $max = 500) 
	{
		if(strlen($postVal) < intval($min)) 
		{
			$this->setError($postName, "**");
		} 
		else if(strlen($postVal) > intval($max)) 
		{
			$this->setError($postName, ucfirst($postName)." must be less than {$max} characters long.");
		}
	}
	
	//Sanitize
	public function cleanInput($input)
	{
	  $search = array(
		'@<script[^>]*?>.*?</script>@si',   // Strip out javascript
		'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
		'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
		'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
	  );

		$output = preg_replace($search, '', $input);
		return $output;
	}


	//Check if valid credit card number
	public function check_cc($cc, $extra_check = false)
	{
		$leBool;
		$cards = array(
			"visa" => "(4\d{12}(?:\d{3})?)",
			"amex" => "(3[47]\d{13})",
			"jcb" => "(35[2-8][89]\d\d\d{10})",
			"maestro" => "((?:5020|5038|6304|6579|6761)\d{12}(?:\d\d)?)",
			"solo" => "((?:6334|6767)\d{12}(?:\d\d)?\d?)",
			"mastercard" => "(5[1-5]\d{14})",
			"switch" => "(?:(?:(?:4903|4905|4911|4936|6333|6759)\d{12})|(?:(?:564182|633110)\d{10})(\d\d)?\d?)",
		);
		$names = array("Visa", "American Express", "JCB", "Maestro", "Solo", "Mastercard", "Switch");
		$matches = array();
		$pattern = "#^(?:".implode("|", $cards).")$#";
		$result = preg_match($pattern, str_replace(" ", "", $cc), $matches);
		if(($extra_check) && ($result > 0))
		{
			$leBool = true;
		}
		else
		{
			$this->setError($cc, "Credit Card is invalid");
			$leBool = false;
		}
		return $leBool;
	}
	
	
	//Validate names to only contain Strings / and '
	public function ValidateNames($postVal, $postName)
	{
		if(strlen($postVal) <= 0)
		{
			$this->setError($postName, "**");
		}
		else if(!preg_match("/^[a-zA-Z\'\-]+$/", $postVal))
		{
			$this->setError($postName, ucfirst($postName)." must not contain special characters.");
		}
	}
	
	//check if checkbox is ticked
	public function validateCheckbox($postVal, $postName)
	{
		if(!isset($postVal))
		{
			$this->setError($postName, "At least one check box must be ticked");
		}	
	}

	//Validate that It's a valid email format.
	public function validateEmail($postVal, $postName) 
	{
		if(strlen($postVal) <= 0) 
		{
			$this->setError($postName, "**");
		}
		else if (filter_var($postVal,FILTER_VALIDATE_EMAIL) === false)
		{
			$this->setError($postName, "Please enter a Valid Email Address");
		}
	}

	//Set Error
	private function setError($element, $message) 
	{
		$this->errors[$element] = $message;
	}
	
	//Get Error
	public function getError($elementName) 
	{
		if($this->errors[$elementName])
		{
			return $this->errors[$elementName];
		}
		else
		{
			return false;
		}
	}

	//Display List of Errors
	public function displayErrors() 
	{
		$errorsList = "<ul class=\"errors\">\n";
		foreach($this->errors as $value)
		{
			$errorsList .= "<li>". $value . "</li>\n";
		}
		$errorsList .= "</ul>\n";
		return $errorsList;
	}

	//Return bool if has errors
	public function hasErrors() 
	{
		if(count($this->errors) > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	//Return number of errors
	public function errorNumMessage()
	{
		if(count($this->errors) > 1) 
		{
			$message = "There were " . count($this->errors) . " errors sending your message!\n";
		} 
		else
		{
			$message = "Your order has been successfully placed!";
		}
		return $message;
	}
}
?>