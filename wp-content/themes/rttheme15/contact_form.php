<?php
$your_email=trim($_POST['your_email']);
$your_web_site_name=trim($_POST['your_web_site_name']);
?>

<?php 
//If the form is submitted
if(isset($_POST['name'])) {

		
		//Check to make sure that the name field is not empty
		if(trim($_POST['name']) === '') {
			$hasError = true;
		} else {
			$name = trim($_POST['name']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$hasError = true;
		} else if (!preg_match('^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$^', trim($_POST['email']))) {
			$hasError = true;
			$errorMessage = $_POST['text_4'];
		} else {
			$email = trim($_POST['email']);
		}
		$msg=$_POST['message'];
		
		
		// $email and $message are the data that is being
		// posted to this page from our html contact form
		//$email = $_REQUEST['email'] ;
		$message = "Name : ".$name."<br/>"."Email : ".$email."<br/>"."Message : ".$msg ;

		// When we unzipped PHPMailer, it unzipped to
		// public_html/PHPMailer_5.2.0
		require("mail/PHPMailerAutoload.php");

		$mail = new PHPMailer();

		// set mailer to use SMTP
		$mail->IsSMTP();

		// As this email.php script lives on the same server as our email server
		// we are setting the HOST to localhost
		$mail->Host = "box910.bluehost.com";  // specify main and backup server
		$mail->Port = 465;
		$mail->SMTPSecure = 'ssl';
//		$mail->SMTPDebug = 1;

		$mail->SMTPAuth = true;     // turn on SMTP authentication

		// When sending email using PHPMailer, you need to send from a valid email address
		// In this case, we setup a test email account with the following credentials:
		// email: send_from_PHPMailer@bradm.inmotiontesting.com
		// pass: password
		$mail->Username = "maroof@diaryrpata.com";  // SMTP username
		$mail->Password = "maroof007"; // SMTP password

		// $email is the user's email address the specified
		// on our contact us page. We set this variable at
		// the top of this page with:
		// $email = $_REQUEST['email'] ;
		$mail->SetFrom("contact@cotfield.com","Contact Form");
		//$mail->FromName = "Mystery";

		// below we want to set the email address we will be sending our email to.
		$mail->AddAddress("cotfield@cotfield.com", "Cotfield Enterprise Ltd.");

		// set word wrap to 50 characters
		$mail->WordWrap = 50;
		// set email format to HTML
		$mail->IsHTML(true);

		$mail->Subject = "You have received feedback from your website!";

		// $message is the user's message they typed in
		// on our contact us page. We set this variable at
		// the top of this page with:
		// $message = $_REQUEST['message'] ;
		$mail->Body    = $message;
		$mail->AltBody = $message;

		if(!$mail->Send())
		{
			   ?>
			   <div class="error_box">
				Message sending failed!
			   </div>
			   <?php
		}
		else
		{
			?>
			<div class="ok_box">
				Message sent successfully.
			</div>
			<?php
		}

		


		
}

?>