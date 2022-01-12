<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <table>
        <tr>
            <td><input type="text" name="name" placeholder="Điền tên vào đây"></td>
            <td><input type="number" name="age" placeholder="Điền tuổi vào đây"></td>
            <td><button>Add</button></td>
        </tr>
    </table>
</form>

</body>
</html>
<?php
include_once 'data.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    saveData($name,$age);
    header("location:hienthi.php");
}?>
