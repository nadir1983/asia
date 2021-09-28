<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $product_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $product = mysqli_query($connect, "SELECT * FROM `price` WHERE `id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
</head>
<body>
    <h3>Update Product</h3>

    <form action="vendor/update.php" method="post">

        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <p>Müştərinin adı</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">

         <p>Müştərinin telefon nömrəsi</p>
        <input type="number" name="tel" value="<?= $product['tel'] ?>">

         <p>Məhsulun sayı və yaxud ölçüsü</p>
        <input type="number" name="say" value="<?= $product['say'] ?>">

        <p>Telefon</p>
        <input type="number" name="satis" value="<?= $product['satis'] ?>">

        <p>Tarix</p>
        <input type="number" name="iscilik" value="<?= $product['iscilik'] ?>">
        
        <p>Tarix</p>
        <input type="number" name="diger" value="<?= $product['diger'] ?>">
          <p>Tarix</p>
        <input type="number" name="total" value="<?= $product['total'] ?>">
          <p>Tarix</p>
        <input type="number" name="sub" value="<?= $product['sub'] ?>">
        
        
        <button type="submit">Update</button>
    </form>
</body>
</html>

 
  