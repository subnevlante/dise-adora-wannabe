<?php
$name = $_POST['fullname'];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$header = "from: " . $mail . "\r\n";
$header = "X-Mailer: PHP/" . phpversion() . "\r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$para = "danielarave1995@hotmail.com";
$asunto = "asunto del mensaje";

mail($para, $asunto, utf8_decode($message));

header("location:mensaje.html")
?>