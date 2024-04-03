<?php 

if(isset($_POST['submit'])){
    $to = "roomboom@mail.ru";
    $from = "Inviroom";
    $name = $_POST['name'];
    $tel = $_POST['phone'];
    $mail = $_POST['mail'];
    $subject = "New request Inviroom";
    $subject2 = "Copy of your form submission";
    $message = $name . " хочет записаться" . "\n\n" . "Вот его телефон:" . $_POST['telephone']  . "\n\n" . "Позвоните ему, он ждет звонка.";
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	
    mail($to,$subject,$message,$headers);

}