<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['tel'])){
 ?> <form action="send.php" method="post">
<input type="tel" name="tel" placeholder="+79998887766" required>
<button type="submit" value="Отправить">Заказать сейф</button>
</form> <?php
} else {
 //показываем форму
 $tel = $_POST['tel'];
 $tel = htmlspecialchars($tel);
 $tel = urldecode($tel);
 $tel = trim($tel);
 if (mail("etalon.safe@ya.ru", "Заявка с сайта", "ФИО:".$tel.". E-mail: ".$email ,"From: example2@mail.ru \r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
}
?>