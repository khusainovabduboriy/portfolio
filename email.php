<?

$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$email = $_POST['user_email'];
$com = $_POST['user_com'];

$token = "1627619015:AAF1S8iRemWeZdO0CO4qxkZ7zgJ7eL4hTIs";
$chat_id = "-580183338";

$arr = array(
'Name:' => $name,
'Surname:' => $surname,
'Email:' => $email,
'Comment:' => $com


);

foreach($arr as $key => $value){
    $text.= "<b>" .$key. "</b>"  .$value. "%0A";
}


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");

//https://api.telegram.org/bot1627619015:AAF1S8iRemWeZdO0CO4qxkZ7zgJ7eL4hTIs/getUpdates

header( "location: index.html");

 ?>