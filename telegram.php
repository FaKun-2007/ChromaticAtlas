<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее  	
<div class="form-group">
      				<label for="">Імя</label>
      				<input type="text" class="form-control" id="" name="user_name" placeholder="Наприклад, Іван">
      			</div>
      		
      			<div class="form-group">
      				<label for="">Номер</label>
      				<input type="text" class="form-control" id="" name="user_phone" placeholder="Наприклад, 0974743503">
      			</div>
      		
      			<div class="form-group">
      				<label for="">Соц.мережа</label>
      				<input type="text" class="form-control" id="" name="user_email" placeholder="Інстаграм або Телеграм">
      			</div>
			<div class="form-group">
      				<label for="">Товар</label>
      				<input type="text" class="form-control" id="" name="user_picture" placeholder="Наприклад, Кошечки хорошие">
      			</div>*/

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$picture = $_POST['user_picture'];
$token = "";
$chat_id = "";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
