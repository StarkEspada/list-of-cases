<?php 
header('location: list.php');
/*header('Refresh: 1; url=http://localhost/spisoc_del/list.php/');*/
/*header('Refresh: 5; url=http://localhost/список дел/listOfСases.php/');*/
/*header('Refresh: 5; url=yandex.ru');*/
/*<meta http-equiv='refresh' content='0; url=http://localhost/список дел/listOfСases.php/' />*/

include "taskDB.php";

$id = $_POST["id"];

$findTaskQuery = "SELECT id FROM user WHERE id";
$deleteQuery = "DELETE FROM user WHERE id";

$findTaskQueryResult = mysqli_query($link, $findTaskQuery);
$resultFetch = mysqli_fetch_assoc($findTaskQueryResult);

if($resultFetch) {
	mysqli_query($link, $deleteQuery);
	echo "Запись удалена";
} else {
	echo "Ошибка, запись не найдена";
}


/*echo "window.location.replace('http://yandex.ru/')";*/

 ?>


