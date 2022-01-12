<?php
include_once "data.php";
$arr = loadData()

?>
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
<table>
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($arr as $key => $value): ?>
        <tr>
            <td><?php echo $key?></td>
            <td><?php echo $value->name?></td>
            <td><?php echo $value->age?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="index.php">Quay Lại Trang</a>

</body>
</html>