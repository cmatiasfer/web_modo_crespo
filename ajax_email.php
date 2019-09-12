<?php

// error_reporting(0);
// *** LOCALES *** 
	setlocale(LC_TIME, "es_AR.UTF-8");
	date_default_timezone_set('America/Argentina/Buenos_Aires');

// Replace this with your own email address
if($_POST) {
   $name = trim(stripslashes(utf8_decode($_POST['Name'])));
   $email = trim(stripslashes($_POST['Email']));
   $phone = trim(stripslashes($_POST['Phone']));
   $contact_message = trim(stripslashes(utf8_decode($_POST['Msg'])));
   $subject = utf8_decode('[Modo Crespo] Consulta Web');
   //$siteOwnersEmail = 'tomy@lucadamo.com.ar';
   $siteOwnersEmail = 'mati@remolino.org';
   // $siteOwnersEmailCopy = 'info@royalpark.com.ar';
   
   // Set Message
   $message = "";
   $message .= "Nombre: " . $name . "<br />";
   $message .= "Email: " . $email . "<br />";
   $message .= "Tel&eacute;fono: " . $phone . "<br />";
   $message .= "Mensaje: <br />";
   $message .= $contact_message;
   // $message .= "<br /> ----- <br /> Email enviado desde www.modo-crespo.com.ar <br />";
   $message .= "Enviado el: ". date("d/m/Y H:i")."<br />";
   
   //Guardo la info en csv
   $campos = array($name,$email,$contact_message,date("d/m/Y H:i"));
   $file = 'leads/leads.csv';
   $handle = fopen($file, "a");
   fputcsv($handle, $campos);
   fclose($handle);
   
   // Set From: header
   $from =  $name . " <" . $email . ">";
   
   // Email Headers
   $headers = "From: " . $from . "\r\n";
   // $headers .= "Cc: ". $siteOwnersEmailCopy . "\r\n";
   $headers .= "Reply-To: ". $email . "\r\n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   $mail = mail($siteOwnersEmail, $subject, $message, $headers);

   if ($mail) {
   		$ret['status'] = "OK";
   		$ret['msg'] = "¡¡GRACIAS POR SU CONSULTA!!";// "Gracias por contactarnos. Le estaremos respondiendo en breve."
   }else { 
   		$ret['status'] = "ERROR";
   		$ret['msg'] = "Ha ocurrido un error. Favor intente más tarde.";
   }
   echo json_encode($ret);
}
?>