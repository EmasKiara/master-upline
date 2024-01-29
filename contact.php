<?php
	require_once "PHPMailer/PHPMailerAutoload.php";
	$actions=$_POST['action'];
	$json = new stdClass();

	function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
       	$mail->IsSMTP();
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;   
        $mail->Username = 'wolfyfoxbankai@gmail.com';
	    $mail->Password = 'uvwpxpbdktbbtevj';
        
        $mail->IsHTML(true);
        $mail->From="wolfyfoxbankai@gmail.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error = true;
            return $error; 
        }
        else 
        {
            $error = false;  
            return $error;
        }
    }

    if($actions == "sendEmailMessage"){	
		// $fullName = $_POST['fullName'];
		// $email = $_POST['email'];
		// $phoneNumber = $_POST['phoneNumber'];
		// $subject = $_POST['subject'];
		// $helpMessage = $_POST['helpMessage'];
 		
	 //    $to="tanliyang2321@gmail.com";
	 //    $from="wolfyfoxbankai@gmail.com";
	 //    $name="Master Upline Holdings Sdn Bhd";
	 //    $subj='Customer Request';
	 //    $msg='<html>
		// 	<html>
		// 		<head>
		// 			<meta charset="utf-8">
		// 			<meta name="viewport" content="width=device-width, initial-scale=1">
		// 			<title></title>
		// 		</head>
		// 		<style type="text/css">
		// 		.form-style-3{
		// 			max-width: 450px;
		// 			font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		// 		}
		// 		.form-style-3 label{
		// 			display:block;
		// 			margin-bottom: 10px;
		// 		}
		// 		.form-style-3 label > span{
		// 			float: left;
		// 			width: 100px;
		// 			color: #F072A9;
		// 			font-weight: bold;
		// 			font-size: 13px;
		// 			text-shadow: 1px 1px 1px #fff;
		// 		}
		// 		.form-style-3 fieldset{
		// 			border-radius: 10px;
		// 			-webkit-border-radius: 10px;
		// 			-moz-border-radius: 10px;
		// 			margin: 0px 0px 10px 0px;
		// 			border: 1px solid #FFD2D2;
		// 			padding: 20px;
		// 			background: #cff4ff;
		// 			box-shadow: inset 0px 0px 15px #FFE5E5;
		// 			-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
		// 			-webkit-box-shadow: inset 0px 0px 15px #ff0000;
		// 		}
		// 		.form-style-3 fieldset legend{
		// 			color: #000000;
		// 			border-top: 1px solid #FFD2D2;
		// 			border-left: 1px solid #FFD2D2;
		// 			border-right: 1px solid #FFD2D2;
		// 			border-radius: 5px 5px 0px 0px;
		// 			-webkit-border-radius: 5px 5px 0px 0px;
		// 			-moz-border-radius: 5px 5px 0px 0px;
		// 			background: #FFF4F4;
		// 			padding: 0px 8px 3px 8px;
		// 			box-shadow: -0px -1px 2px #F1F1F1;
		// 			-moz-box-shadow:-0px -1px 2px #F1F1F1;
		// 			-webkit-box-shadow:-0px -1px 2px #F1F1F1;
		// 			font-weight: normal;
		// 			font-size: 12px;
		// 		}
		// 		.form-style-3 textarea{
		// 			width:250px;
		// 			height:100px;
		// 		}
		// 		.form-style-3 input[type=text],
		// 		.form-style-3 input[type=date],
		// 		.form-style-3 input[type=datetime],
		// 		.form-style-3 input[type=number],
		// 		.form-style-3 input[type=search],
		// 		.form-style-3 input[type=time],
		// 		.form-style-3 input[type=url],
		// 		.form-style-3 input[type=email],
		// 		.form-style-3 select, 
		// 		.form-style-3 textarea{
		// 			border-radius: 3px;
		// 			-webkit-border-radius: 3px;
		// 			-moz-border-radius: 3px;
		// 			border: 1px solid #FFC2DC;
		// 			outline: none;
		// 			color: #F072A9;
		// 			padding: 5px 8px 5px 8px;
		// 			box-shadow: inset 1px 1px 4px #FFD5E7;
		// 			-moz-box-shadow: inset 1px 1px 4px #FFD5E7;
		// 			-webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
		// 			background: #FFEFF6;
		// 			width:50%;
		// 		}
		// 		.form-style-3  input[type=submit],
		// 		.form-style-3  input[type=button]{
		// 			background: #EB3B88;
		// 			border: 1px solid #C94A81;
		// 			padding: 5px 15px 5px 15px;
		// 			color: #FFCBE2;
		// 			box-shadow: inset -1px -1px 3px #FF62A7;
		// 			-moz-box-shadow: inset -1px -1px 3px #FF62A7;
		// 			-webkit-box-shadow: inset -1px -1px 3px #FF62A7;
		// 			border-radius: 3px;
		// 			border-radius: 3px;
		// 			-webkit-border-radius: 3px;
		// 			-moz-border-radius: 3px;	
		// 			font-weight: bold;
		// 		}
		// 		.required{
		// 			color:red;
		// 			font-weight:normal;
		// 		}
		// 		</style>
		// 		<body>
		// 			<div class="form-style-3">
		// 				<form>
		// 					<fieldset><legend>Customer Request</legend>
		// 					<label for="field1"><span>Full Name: </span>'.$fullName.'</label><br>
		// 					<label for="field2"><span>Email: </span>'.$email.'</label><br>
		// 					<label for="field3"><span>Phone Number: </span>'.$phoneNumber.'</label><br>
		// 					<label for="field4"><span>Subject: </span>'.$subject.'</label>
		// 					</fieldset>

		// 					<fieldset><legend>Message</legend>
		// 					<label for="field6"><span>Message</span>'.$helpMessage.'</label>
							
		// 					</fieldset>
		// 				</form>
		// 			</div>
		// 		</body>
		// 		</html>';
		// $error=smtpmailer($to,$from, $name ,$subj, $msg);
			
		// if ($error) {
		// 	//Fail to send email
		// 	$json->error = true;
		// 	$json->message = "Fail to send email";
		// 	echo json_encode($json);
		// } else{
			
		// 	$json->error = false;
		// 	$json->message = "Send email successfully";
		// 	echo json_encode($json);
		// }
		$json->message = "gukfehdf";
		echo json_encode($json);
		
	}

?>