<?php

//Добавление нового продукта


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
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `price` (`id`, `title`, `tel`, `say`, `satis`, `materyal`, `iscilik`, `diger`, `total`, `sub`) VALUES (NULL, '$title', '$tel', '$say', '$satis', '$materyal', '$iscilik', '$diger', '$total', '$sub')");

/*
 * Переадресация на главную страницу
 */

header('Location: /');
