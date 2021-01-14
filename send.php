<?php

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'email/Exception.php';
require 'email/PHPMailer.php';
require 'email/SMTP.php';

// Collec Users Data
if ($_POST["destinationDay"] == 0) {
    $_POST["destinationDay"] = $_POST["originDay"];
}
if ($_POST["destinationMonth"] == 0) {
    $_POST["destinationMonth"] = $_POST["originMonth"];
}
if ($_POST["destinationYear"] == 0) {
    $_POST["destinationYear"] = $_POST["originYear"];
}

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = 0;

//Set the hostname of the mail server
$mail->Host = 'ssl://smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'useremail@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'password';

//Set who the message is to be sent from
$mail->setFrom($_POST['email'], utf8_decode($_POST["firstName"].' '.$_POST["lastName"]));

//Set recipient to receive the email
$mail->addAddress('useremail@gmail.com', 'Simon Caldeira Tours');     // Add a recipient

//Set the subject line
$mail->Subject = 'Reserva';

//Main body of the email
$mail->Body    = '
    Cliente: '.$_POST["firstName"].' '.$_POST["lastName"].'<br>
    Email: '.$_POST["email"].'<br>
    Telefone: '.$_POST["phone"].'<br>
    <br>
    Passageiros: '.$_POST["passengers"].'<br>
    Bagagem: '.$_POST["baggage"].'<br>
    <br>
    Origem: <br>
        Dia '.$_POST["originDay"].' de '.$_POST["originMonth"].' de '.$_POST["originYear"].'<br>
        Recolha em '.$_POST["origin"].'<br>
    <br>
    Destino: <br>
        Dia '.$_POST["destinationDay"].' de '.$_POST["destinationMonth"].' de '.$_POST["destinationYear"].'<br>
        Entrega em '.$_POST["destination"].'<br>
    <br>
';

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
    
    echo '<script type="text/javascript">
        window.location = "https://simontours.pt/"
        </script>';
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}

?>