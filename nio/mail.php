$name = isset($_POST['name']) ? $_POST['name'] : '' ;
$phone = isset($_POST['phone']) ? $_POST['phone']: '';

if ($name && $phone){
 $to = 'Здесь адрес ' ;
 $message = 'test';
 $headers = 'Здесь доп. шапки' ;
 
 $isSend = mail($to, $message, $headers) ;
 
 if ($isSend){
     header('Location: www.example.com');
 } else {
     echo 'Error. Something went wrong!!!';
 }
}