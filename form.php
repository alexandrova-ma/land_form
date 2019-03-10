<html>
<head>
    <meta charset="utf-8">
    <style>
    body {
        margin: 0;
        padding: 0;
        background: linear-gradient(to bottom, #141720, white);
    }
    a {
        text-decoration: none;
        font-size: 40px;
        text-align: center;
        color: white;
    }
    a:hover {
        color: grey;
    }
    .container {
       text-align: center;
       width: 100%;
       color: white;
       margin-bottom: 50px;
       margin-top: 50px;
       font-size: 30px;
   }
    </style>
</head>
<body>
<div class="container">
    <a href="index.php"> Home </a>
</div>

<? include_once 'config.php';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sendTime = date('Y-m-d H:i:s');
$startTime = $_POST['start-time'];
$diff = strtotime($sendTime) - strtotime($startTime);

echo '<div class="container">';
if (strlen($name) <= 2 || preg_match('/[0-9]/u', $name)) {
    echo 'Invalid name<br/>';
    return;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo'Invalid e-mail';
    return;
}
echo 'Name: '.$name.'<br/>';
echo 'E-mail: '.$email.'<br/>';
echo 'Message: '.$message.'<br/>';
echo 'Form filling time: '.$diff.' second <br/>';
$body = 'Имя: '.$name."\n".'Почта: '.$email."\n".'Сообщение: '.$message."\n".'Время открытия формы: '.$startTime."\n"."Время отправки формы: ".$sendTime."\n"."Время заполнения формы: ".$diff.' секунд';

mail($to, $subject, $body, $from);


$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка' . mysqli_error($link));

$query_insert = 'INSERT INTO messages (name, email, message, startTime, sendTime, diff) 
VALUES ("' . $name . '", "' . $email . '", "' . $message . '", "' . $startTime . '", "' . $sendTime . '", "' . $diff . '")'; 
mysqli_query($link, $query_insert) or die('Ошибка' . mysqli_error($link)); 
/*
$query_select = 'SELECT * FROM messages'; 
$result = mysqli_query($link, $query_select) or die('Ошибка' . mysqli_error($link)); 
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {     
    echo $row["id"] . ' ' . $row["name"] . ' ' . $row["email"] . ' ' . $row["message"]. ' ' 
    . $row["startTime"]. ' '. $row["sendTime"]. ' '. $row["diff"]. ' '  
    . ' <br />'; 
} 
mysqli_free_result($result); 
*/    
mysqli_close($link);
echo '</div>'; 
?>
</body>
</html>

