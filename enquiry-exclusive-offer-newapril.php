<?php
	
	if($_POST['email']!='') {

	$choiceval = $_POST['exclusive'];

	$message .= 'Email : '. $_POST['email'] ."\n <br>";
	$message .= 'Name : '. $_POST['firstname'].' '.$_POST['lastname']  ."\n <br>";
	$message .= 'Country : '. $_POST['country'] ."\n <br>";
	$message .= 'Exclusive Offer : '. $_POST['exclusive'] ."\n <br>";
	//$headers = 'From: '. $_POST['field-1427865032'] . "\r\n" .
	//Bcc: abubakar@karmagroup.com\r\n
	$headers = "From: noreply@karmagroup.com \r\n" .
							    'Reply-To: '. $_POST['email'] . "\r\n" .
							    'X-Mailer: PHP/' . phpversion();

	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$headers .= "Bcc: abubakar@karmagroup.com\r\n";
	
				     
	if ($choiceval == 'Happy Boosters - Yoga In Bali'){
		$to = 'spasupervisor@karmajimbaran.com';
		$subject = 'Exclusive Offer Request - '. $_POST['exclusive'];
		$sendmail = mail($to, $subject, $message, $headers);
		if ($sendmail) {
			//echo "mailsent";
		}
		else {
			//echo "mailnotset";
		}
	}
	else if ($choiceval == 'Complimentary Massage with Every Oxygen Facial'){
		$to = 'spasupervisor@karmajimbaran.com';
		$subject = 'Exclusive Offer  - '. $_POST['exclusive'];
		$sendmail = mail($to, $subject, $message, $headers);
		if ($sendmail) {
			//echo "mailsent";
		}
		else{
			//echo "mailnotset";
		}
	}

} 
?>
