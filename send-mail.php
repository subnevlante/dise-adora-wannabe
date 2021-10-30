<?php
//vars
 $mail="danielarave1995@hotmail.com";
  $fullname = $_POST["Nombre"];
  $email = $_POST["email"];
  $phone = $_POST["Telefono"];
  $message = $_POST["mensaje"];
  $thank="mensaje.html";
  $message = "
  Nombre:".$fullname."
  email:".$email."
  Telefono:".$phone."
  mensaje:".$message."";
  if (mail ($mail,"contacto",$message)) Header ("location: $thank" );
  ?>
