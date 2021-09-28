<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>title</th>
            <th>tel</th>
            <th>say</th>
            <th>satis</th>
            <th>materyal</th>
            <th>iscilik</th>
            <th>diger</th>
            <th>total</th>
            <th>sub</th>

        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $products = mysqli_query($connect, "SELECT * FROM `price`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[2] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[4] ?></td>
                        <td><?= $product[5] ?></td>
                        <td><?= $product[6] ?></td>
                          <td><?= $product[7] ?></td>
                          <td><?= $product[8] ?></td>
                          <td><?= $product[9] ?></td>
                          <td><?= $product[10] ?></td>
                        <td><a href="product.php?id=<?= $product[0] ?>">View</a></td>
                        <td><a href="update.php?id=<?= $product[0] ?>">Update</a></td>
                        <td><a style="color: red;" href="vendor/delete.php?id=<?= $product[0] ?>">Delete</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Add new product</h3>

    <form action="vendor/create.php" method="post" id="cart">
        <table name="cart">
            <tr class="line_items">

          <p>title</p>
        <input type="text" name="title">

         <p>tel</p>
        <input type="number" name="tel">

         <p>say</p>
        <input type="number" name="say" >

        <p>satis</p>
        <input type="number" name="satis">

        <p>materyal</p>
        <input type="number" name="materyal">

        <p>iscilik</p>  
        <input type="number" name="iscilik">

        <p>diger</p>  
        <input type="number" name="diger">


        <p>total</p>  
        <input type="number" name="total" jAutoCalc="{say} * {satis} -  {materyal} -  {iscilik} -  {diger} ">

            <p>sub</p>  
        <input type="number" name="sub" jAutoCalc="SUM({total})">

        <button type="submit">Add new product
    </form>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
    <script type="text/javascript">
        <!--
        $(function() {

            function autoCalcSetup() {
                $('form#cart').jAutoCalc('destroy');
                $('form#cart tr.line_items').jAutoCalc({keyEventsFire: true, decimalPlaces: 2, emptyAsZero: true});
                $('form#cart').jAutoCalc({decimalPlaces: 2});
            }
            autoCalcSetup();


        
 
            });

     
        //-->
    </script>

</body>
</html>

 
      
     
        
      
  