
<? include_once 'config_ajax.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$sendTime = date('Y-m-d H:i:s');
$startTime = $_POST['start-time'];
$diff = strtotime($sendTime) - strtotime($startTime);
$errors = array ();
$body = 'Имя: '.$name."\n".'Почта: '.$email."\n".'Телефон: '.$phone."\n".'Сообщение: '.$message."\n".'Время открытия формы: '.$startTime."\n"."Время отправки формы: ".$sendTime."\n"."Время заполнения формы: ".$diff.' секунд';

if ( empty($name)) {
    $errors['name'] = "Вы не заполнили имя";
}
if ( empty($email)) {
    $errors['email'] = "Вы не заполнили имя";
}
if ( empty($phone)) {
    $errors['phone'] = "Вы не заполнили имя";
}
if (strlen($name) <= 2 || preg_match('/[0-9]/u', $name)){
    $errors['name'] = "Неправильно введено имя";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Неправильно введен email";
}
if (!preg_match("/^\+?[78][-\(]?\d{3}\)?-?\d{3}-?\d{2}-?\d{2}$/", $phone)) {
    $errors['phone'] = "Неправильно введен телефон";
  }
if (empty($errors)) {
    /*$dsn = "mysql:host=$host;dbname=$db_name;";
    $pdo = new PDO($dsn, $username, $password, $opt);
    $stmt_insert = $pdo->prepare('INSERT INTO messages (name, email, phone, message,  startTime, sendTime, diff) VALUES  (?, ?, ?, ?, ?, ?, ?)');
    $stmt_insert->execute(array($name, $email,  $phone,  $message,  $startTime, $sendTime, $diff));
    mail($to, $subject, $body, $from);*/
    echo json_encode(array('result' => 'success'));
} 
else {
    echo json_encode(array('result' => 'error', 'errorField' => $errors));
}
?>

