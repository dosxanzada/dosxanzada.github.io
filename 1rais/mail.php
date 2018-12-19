<?php
function send_mail($from, $to, $subject, $body){
    $charset = 'utf-8';
    mb_language("ru");
    
    $headers = "MIME-Version: 1.0 \n";
    $headers .= "From: <".$from.">\n";
    $headers .= "Reply-to: <".$from."> \n";
    $headers .= "Content-Type: text/html: charset=$charset \n";
    
    $subject = '=?'.$sharset.'?B?'.base64_encode($subject).'?=';
    
    mail($to, $subject, $body, $headers);
}

$name = $_POST("name");
$phone = $_POST("phone");

if($name == "" && $phone == ""){
}
else{
    send_mail('rais.kz', 'dosxanzada@gmail.com');
    header("Location: index.php");
}
?>
