<?php

//conniction to database
$connection = mysqli_connect("localhost", "root", "", "kimia");

//insert to database
if (isset($_POST['but'])) {

    $task = $_POST['task'];
    $decription = $_POST['decription'];

    $insert = "INSERT INTO `user`(`id`, `task`, `description`) VALUES (NULL,'$task','$decription')";
    $do = mysqli_query($connection, $insert);
}

//select all database
$select = "SELECT * FROM `user` ";
$ss = mysqli_query($connection, $select);
while ($row =  mysqli_fetch_assoc($ss)) {
    $data[] = $row;
}

?>
s


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <style>
        body {
            background-color: gray;
        }
    </style>
    <center>Todo List
        <form method="POST">
            Task
            <br>
            <input type="text" name="task">
            </br>
            Decription
            <br>
            <textarea name="decription">
</textarea>
            </br>

            <button class="btn btn-primary" name="but">Add</button>

        </form>
        <br>
    </center>
    <table border="1" class="table table-bordered table-dark">
        <tr>
            <th>ID</th>
            <th>Task</th>
            <th>Decription</th>
            <th>Option</th>

        </tr>
        <?php foreach ($data as $user) : ?>
            <tr>
                <td> <?= $user['id']; ?> </td>
                <td> <?= $user['task']; ?> </td>
                <td> <?= $user['description']; ?> </td>
                <td> <a href="delete.php?id=<?= $user['id']; ?>" class="button">Delete</a></td>

            </tr>
        <?php endforeach; ?>


    </table>

</body>

</html>