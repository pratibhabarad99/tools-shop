<?php
	include "header.php";
	include "title.php";
?>
<?php
	$cn=mysqli_connect("localhost","root","");
	mysqli_select_db($cn,"admindb");
if(isset($_POST['submit']))
{
	$cn=mysqli_connect("localhost","root","");
	mysqli_select_db($cn,"admindb");
	
    $email= mysqli_real_escape_string($cn,$_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
        $message =  "Invalid email address please type a valid email!!";
    }
    else
    {
        $query = "SELECT * FROM sign_up where u_email='".$email."'";
        $result = mysqli_query($cn,$query);
        $Results = mysqli_fetch_array($result);
		
        if(count($Results)>=1)
        {
			require 'PHPMailer-master/PHPMailerAutoload.php';

			$mail = new PHPMailer;

			//$mail->SMTPDebug = 3;                               // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'toolsshop@gmail.com';                 // SMTP username
			$mail->Password = 'tools';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('toolsshop@gmail.com', 'tools');
			$mail->addAddress($email, 'User');     // Add a recipient
			$mail->addAddress($email);               // Name is optional
			$mail->addReplyTo('toolsshop@gmail.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Forget Password';
			$mail->Body    = 'Hi, <br/> <br/>Your Customer ID is '.$Results['cust_id'].' <br>Your UserName In renters is '.$Results['u_name'].' Your Password is: '.$Results['pass'].' <br>We are glade to help you. <br/> <br/>--<br>Renters<br>.';
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send()) {
				?>
				<script>alert("Msg Not Send");</script>
				<?php echo 'Mailer Error: ' . $mail->ErrorInfo;
			}
			else
			{
			?>
				<script>
				alert("Mail Sent Successfully!! Please Check Your Email To Get Reset Password Link And Follow Setps Given There. Thank You!!");
				window.location="signin.php";
				</script>
			<?php
			}
		}
        else
        {
            $message = "Account not found please signup now!!";
			header('Location: signin.php');
        }
		
    }
}
?>


<html>
<head>
<title>Forgot Password?</title>
</head>
<body>
    <form method="POST" action="#">
    <div>  
	 <center>
			<p style="color:white; font-size:30px;">Please enter your email to find your account.</p>
			<input type="text" placeholder="E-mail" name="email" size="35"><br/><br/>
			<input type="submit" value="Submit" name="submit" width="15%" height="10%" />
  </center>
  </form>
  </div>  
</body>
</html>
