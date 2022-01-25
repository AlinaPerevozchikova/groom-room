<?
require_once ('connect.php');

function addApplication($conn, $name, $category) {
  $date = date('Y-m-d');
  $sql = "INSERT INTO `applications` (`id`, `nickname`, `do`, `posle`, `label`, `category`, `status`) VALUES (NULL, '$nickname', 'before', 'after', '$date', '$category', 'Подготовка')";
  if ($conn->query($sql) === TRUE) {
    return "Заявка создана";
  } else {
    return 'Ошибка';
  }
}

function receivingApplications($conn) {
  $app =  mysqli_query($conn, "SELECT * FROM `applications`");
  $mass = [];
  while ($var = mysqli_fetch_assoc($app)) {
    array_push($mass, [$var['id'], $var['nickname'], $var['do'], $var['posle'], $var['label'], $var['category'], $var['status']]);
  }
  for ($i=0; $i < count($mass); $i++) {
    for ($j=0; $j < count($mass[$i]); $j++) { 
      echo $mass[$i][$j]. " ";
    }
    echo '<br>';
  }
}


function receivingApplicationsId($conn, $id) {
  for ($idx=0; $idx < count($id); $idx++) { 
    $app =  mysqli_query($cr, "SELECT * FROM `applications` Where `id` = '$id[$idx]'");
    $mass = [];
    while ($val = mysqli_fetch_assoc($app)) {
      array_push($mass, [$var['id'], $var['nickname'], $var['do'], $var['posle'], $var['label'], $var['category'], $var['status']]);
    }
    for ($i=0; $i < count($mass); $i++) {
      for ($j=0; $j < count($mass[$i]); $j++) { 
        echo $mass[$i][$j]. " ";
      }
      echo '<br>';
    }
  }
}

function removeApplication($conn, $name) {
  $sql = "DELETE FROM `applications` WHERE `applications`.`nickname` = '$nickname'";
  if ($conn->query($sql) === TRUE) {
    echo "Заявка удалена";
  } else {
    echo "Ошибка " . $sql . "<br>" . $conn->error;
  }
}

function changeApplication($conn, $name, $status) {
  $sql = "UPDATE `applications` SET `status` = '$status' WHERE `nickname` = '$nickname'";
  if ($conn->query($sql) === TRUE) {
    echo "Статус изменен";
  } else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
  }
}
?>