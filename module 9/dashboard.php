<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
    </head>
<body>
    

<?php

include_once('config.php');

$sql = 'SELECT * FROM users';

$getUsers = $connect ->prepare($sql);

$getUsers -> execute();

$users=$getUsers ->fetchAll();

?>

<br><br>
<table>
    <thead>
        <th>ID<th>
        <th>Name<th>
        <th>Surname<th>
        <th>Email<th>
    </thead>
    <tbody>
        <?php
            foreach($users as $users){
        ?>

        <tr>
            <td> <?= $users['id'] ?></td>
            <td> <?= $users['name'] ?></td>
            <td> <?= $users['surname'] ?></td>
            <td> <?= $users['email'] ?></td>
        </tr>
        <?php
            }
        ?>

    </tbody>
</table>
<a href = 'add.php'>Add User</a>
</html>