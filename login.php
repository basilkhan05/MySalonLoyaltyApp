<?php

		session_start();

		if ($_GET["logout"]==1 AND $_SESSION['id']) {session_destroy();

			$message = "You have been logged out. Have a nice day! :)" ;

		}

	if ($_POST['submit']=='Get Points') {   // checks what happens when submit button is hit
		# code...

			if (!$_POST['email']) $error.="<br/>Please Enter your Email";

				else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br/>Please enter a valid email";

			

				#else{

				#if(strlen($_POST['password'])<5 OR strlen($_POST['password'])<7) $error.="<br/>Please enter a valid postalcode";
				#if (!preg_match('`[A-Z]`',$_POST['password'])) $error.="<br/>Please enter a Postal code with alpha numeric values. Eg. L5Z 1S3";
					# code...
				#}
				# code...

			if ($error) $error = "There were error(s) in your signup details:".$error;
				else{

					include("connection.php");

					if (mysqli_connect_error()) {

						die("Could not connect to database");
						# code...
					}

					$query = "SELECT * FROM `myclients` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."' ";



					 $result = mysqli_query($link, $query); #{

					 	#AND $results['timestamp']

					
						if ( $results = mysqli_fetch_array($result)) {


							 if ((strtotime("now")-strtotime($results['timestamp']))> (12*60*60)) { #Check to see if its been 24 hours yet
							 	$query = "UPDATE myclients SET `visitcounter` = visitcounter+1 WHERE email='".$_POST['email']."' LIMIT 1";
							mysqli_query($link, $query);
							$query = "UPDATE myclients SET `timestamp` = CURRENT_TIMESTAMP WHERE email='".$_POST['email']."' LIMIT 1";
							mysqli_query($link, $query);


							$visits=($results['visitcounter']+1)/10;
							$offers=(string)$visits;
							$visitsleft=9-($results['visitcounter']-$results['offercounter']*10);

							$message = "Welcome back. It is great to see you again. You have ".$visitsleft." visits left to go before you receive your gift. We hope to see you soon." ;


							if ((ctype_digit($offers))) {
								$query2 = "UPDATE myclients SET `offercounter` = '".$visits."' WHERE email='".$_POST['email']."' LIMIT 1";
								mysqli_query($link, $query2);
								$message = "Congratulations ".$results['Name'].". You have earned yourself $10 off on this visit. Thank you for being a loyal customer" ;
							}

							 
							 }else {
							 	$error = "We are sorry ".$results['Name'].". It has not been more than 12 hours since your last visit";
							 }

							


							
							} else {

								
										$error = "We could not find your email address. Please click Sign Up above and enter your details. Thank you. " ;

										
							}
						#
						#	echo "this user already exists";

						# else {

							#echo "SUCCESS!";
						#}

						
						# code...
					#}

					

				}
			}


	if ($_POST['submit']=='Sign Up') { 

		include("connection.php");

					if (mysqli_connect_error()) {

						die("Could not connect to database");
						# code...
					}

			if (!$_POST['name']) $error.="<br/>Please Enter your Name";


			if (!$_POST['email']) $error.="<br/>Please Enter your Email";

				else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br/>Please enter a valid email";

			if (!$_POST['postalcode']) $error.="<br/>Please Enter your postalcode";

				#else{

				#if(strlen($_POST['password'])<5 OR strlen($_POST['password'])<7) $error.="<br/>Please enter a valid postalcode";
				#if (!preg_match('`[A-Z]`',$_POST['password'])) $error.="<br/>Please enter a Postal code with alpha numeric values. Eg. L5Z 1S3";
					# code...
				#}
				# code...

			if ($error) $error = "There were error(s) in your signup details:".$error;
				else{

					include("connection.php");

					if (mysqli_connect_error()) {

						die("Could not connect to database");
						# code...
					}

					$query = "SELECT * FROM `myclients` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."' ";



					 $result = mysqli_query($link, $query); #{

					 	#AND $results['timestamp']

					
						if ( $results = mysqli_fetch_array($result)) {

							 	$error = "Looks like you have already signed up with us. Please enter your email below.";
							

							} else {

									$encodePlace=urlencode($_POST['postalcode']);

								$url = 'http://maps.googleapis.com/maps/api/geocode/json?address='.$encodePlace.'&sensor=false';
					                //Use Curl to send the request
					               

					                 $resp_json = file_get_contents($url);
					                $obj = json_decode($resp_json, true);
								$query = "INSERT INTO `myclients` (`name`,`email`, `postalcode`,`visitcounter`,`offercounter`,`latitude`,`longitude`) VALUES('".mysqli_real_escape_string($link, $_POST['name'])."','".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['postalcode'])."',1,0,'".$obj["results"][0]["geometry"]["location"]["lat"]."','".$obj["results"][0]["geometry"]["location"]["lng"]."')";
								
										mysqli_query($link, $query);

										#echo "You've been signed up!";
										$message = "Thanks for signing up for our loyalty program. We hope to see you soon" ;

											#header("Location:mainpage.php"); # has to be fore any HTML  - not to worry in this 			
							}
				}

	}





			

?>