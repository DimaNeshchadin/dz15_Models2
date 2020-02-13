<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

$categories = \App\Model\Category::withTrashed()->get();

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="2">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>create</td>
        <td>update</td>
        <td>delete</td>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category->id ?></td>
            <td><?= $category->name ?></td>
            <td><?= $category->created_at ?></td>
            <td><?= $category->updated_at ?></td>
            <td><? if (!$category->deleted_at == NULL) {
                    echo "1" . "<br>";
                } ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
