<?php
if (isset($_POST['send'])) {
	$to = 'amja.menard@gmail.com';
    $subject = 'Un nouveau message pour le gîte!';    

	$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
	$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	$message .= 'Comments: ' . $_POST['message'];

	$success = mail($to, $subject, $message);
}
?>


<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
<?php if (isset($success) && $success) { ?>
<h1>Thank You</h1>
Your message has been sent.
<?php } else { ?>
<h1>Oops!</h1>
Sorry, there was a problem sending your message.
<?php } ?>
 </body>
 </html>