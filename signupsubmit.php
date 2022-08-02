<?php
	include('includes/config.php');
	include('includes/commonfun.php');
	include('class/clsDB.php');
	include('class/clsUsermaster.php');
	include('class/PasswordHash.php');
	include('class/clsSendEmails.php');
	include('class/class.phpmailer.php');
	
	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btnSubmit']))
	{
		$firstName = isset($_POST['txtName']) ? (($_POST['txtName'])) : "";
		$email = isset($_POST['txtEmail']) ? (($_POST['txtEmail'])) : "";
		$password  = isset($_POST['txtPassword']) ? (($_POST['txtPassword'])) : "";
		
		$objUsermaster = new clsUsermaster();
		$objUsermaster->firstName = $firstName;
		$objUsermaster->email = $email;
		$retuserMasterId=$objUsermaster->SaveUsermaster(0);	
		
		if($retuserMasterId > 0)
		{
			$dynamicPassword = $password; //GenerateRandomAlphaNumericNumber(6);
			$passwordHash = PasswordHash::hash($dynamicPassword);
			$objUsermaster->UpdateUserPassword($retuserMasterId,$passwordHash);
			
			//Send email
			//---------------------------
			// $objSendEmails = new clsSendEmails();		
			// $objSendEmails->SendCustomerLoginDetail($retuserMasterId,$dynamicPassword);
			// unset($objSendEmails);	
		}
		
		$messageText = 'Created';
		
		header('location:gameProfile.html?status='.$messageText);
		exit();
	}
	else
	{
		header('location:signup.html?status=error');
		exit();
	}
?>