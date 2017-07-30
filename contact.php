<?php $title="AMERICAN BODY ART - TATOUEUR PARIS";
$scripts=['/js/contact.js'];
require_once('templates/top.php');
?>
<h2 class="capturetext">CONTACTEZ NOUS</h2>
<form id="ajax-contact-form" method="post" action="contact.php">
            <div class="form-group">
                <label for="name">Votre Nom:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Votre Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="subject">Sujet:</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control ckeditor" id="message" name="message"></textarea>
            </div>
			<button type="submit" class="btn btn-default">Envoyer</button>
			<div>
			</br>
			</div>
</form>
<div id="form-messages"></div>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);
    $your_email = "albachka@gmail.com";
    $your_site_name = "AMERICAN BODY ART";
    $email_subject = "[{$your_site_name}] New Message by {$name}";
	$email_content = "Name: {$name}\n";
    $email_content .= "Email: {$email}\n";
    $email_content .= "Subject: {$subject}\n";
    $email_content .= "Message: {$message}\n";
	$email_headers = "From: {$name} <{$email}>";
	$send_email = mail($your_email, $email_subject, $email_content, $email_headers);
    if($send_email){
        http_response_code(200);
        echo "Thank You! Your message has been sent."; 
    } else {
        http_response_code(500);
        echo "Your message doesn't send. Please try again.";
    }
}/* else {
    // Send 403 response code
    http_response_code(403);
    echo "Submition problem. Please try again later";
}*/
 require_once('templates/bottom.php');?>
