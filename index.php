<?php
/**
 * Created by PhpStorm.
 * User: Елена
 * Date: 03.05.2018
 * Time: 14:26
 */

require ("config.php");

$sql = "select * from books";
$res = mysqli_query($connect, $sql);


while($data=mysqli_fetch_assoc($res)){
    
}
?>

<html>
<head>
    <title>Address Book</title>
    <meta charset="utf8">
    <html lang="ru">

    <style>
        table {
            width: 70%;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid #C2C2FF;
            padding: 3px 7px 2px 7px;
        }
        th {
            text-align: left;
            padding: 5px;
            background-color: #9999FF;
            color: #fff;
        }
        tr:hover { background-color: #E0E0FF; }
        td:hover { background-color: #FFFFE0; }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <td><h4>Название</h4></td>
        <td><h4>Автор</h4></td>
        <td><h4>Год выпуска</h4></td>
        <td><h4>Жанр</h4></td>
        <td><h4>ISBN</h4></td>
    </tr>
    </thead>


    <tbody>
    <?php foreach ($res as $item => $value) { ?>
        <tr>
            <td><?php echo $value["name"]?></td>
            <td><?php echo $value["author"]?></td>
            <td><?php echo $value["year"]?></td>
            <td><?php echo $value["genre"]?></td>
            <td><?php echo $value["isbn"]?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>
</body>
</html>