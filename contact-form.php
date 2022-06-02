<?php>
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "belloabdulrahman13@gmail.com";
    $headers = 'From '.$emailFrom;
    $txt = 'You have received an e-mail from '.$name.'.\n\n'.$message;

    mail($mailTo, $subject, $txt, $headers);
    header('Location: contact.html?mailsend')
}