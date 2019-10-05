<?php

require 'C:\xampp\htdocs\test\Zavrsni-projekat-master\phpmailer\PHPMailerAutoload.php';

$ime=$_POST['ime'];
$telefon=$_POST['telefon'];
$email=$_POST['email'];
$naslov=$_POST['naslov'];
$poruka=$_POST['poruka'];

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'TLS';
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "aleksandrastamenkovic1004@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "11alex1999";
//Set who the message is to be sent from
$mail->setFrom($email,$ime);
$mail->addAddress('aleksandrastamenkovic1004@gmail.com','Alex');


$mail->Subject = $naslov;
$mail->isHTML(true);
$mail->Body= $poruka."<br> Telefon: ".$telefon."<br> Ime: ".$ime." <br> Email: ".$email; 


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}

?>