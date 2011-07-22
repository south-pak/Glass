<?php 

if (isset($_POST['email']) ) {

$getEmail = $_POST['email'];
$getEmail = strip_tags($getEmail); }

if ($valid != true) {
$recipient = "customcaseguy@south-pak.com"; //recipient
$lastname = "$getEmail";

    $header .= "From: <$email>\r\n"; 
    $header .= "Content-Type: text/plain\r\n"; 
		mail($recipient, "Request to be subscriber", "$getID" . "\n email address: " . "$getEmail");

echo "<meta http-equiv=\"REFRESH\" content=\"0;url=http://south-pak.com\">";

}

?>