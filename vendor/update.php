<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */



$id = $_POST['id'];
$title = $_POST['title'];
$tel = $_POST['tel'];
$say = $_POST['say'];
$satis = $_POST['satis'];
$materyal = $_POST['materyal'];
$iscilik = $_POST['iscilik'];
$diger = $_POST['diger'];
$total = $_POST['total'];
$sub = $_POST['sub'];


/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `price` SET `title` = '$title', `tel` = '$tel',`say` = '$say',`satis` = '$satis',`materyal` = '$materyal', `iscilik` = '$iscilik', `diger` = '$diger', `total` = '$total', `sub` = '$sub' WHERE `price`.`id` = '$id'");





/*
 * Переадресация на главную страницу
 */

header('Location: /');

