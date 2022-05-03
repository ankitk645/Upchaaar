		<?php
		$name=$_POST['Name'];
		$email=$_POST['Email'];
		$number=$_POST['Telephone'];
		$msg=$_POST['Message'];
		$sbjct=$_POST['Subject'];
					   
        $to = "shrvs95@gmail.com";
        $subject = $sbjct;
        $txt = "Name:".$name."\n"."Number:".$number."\n".$msg . "\n";
        $headers = "From: ".$email . "\r\n";
                           
        mail($to,$subject,$txt,$headers);
				
		header("Location:mail.php");
?> 