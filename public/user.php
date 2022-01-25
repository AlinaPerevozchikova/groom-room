<?
require_once ('connect.php');


function registration($conn, $login, $password) {
  $sql = "INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES ('NULL', '$login', '$password', 'guest')";
  if ($conn->query($sql) === TRUE) {
    return "Создан новай пользователь";
  } else {
    return 'Ошибка';
  }
}

function authorization($conn, $login, $password) {
  $users =  mysqli_query($conn, "SELECT * FROM `users`");
  $pas = [];
  while ($var = mysqli_fetch_assoc($users)) {
    array_push($pas, [$var['login'], $var['password']]);
  }
  $result = '';
  for ($i=0; $i < count($pas); $i++) {
    if ($login === $pas[$i][0] && $password === $pas[$i][1]) {
      $result = 'Вход выполнен успешно';
      break;
    }
  }
  if ($result === 'Вход выполнен успешно') {
    return "Авторизация выполнена успешно";
  } else {
    return 'Логин или пароль введены неверно';
  }
}
?>

