

<?php

$_SUCCESS_MESSAGE = "";

// Database
$mysql = new mysqli('localhost', 'memo', 'memo', 'friends');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // If user clicks submit...

    $friend_name                = $mysql->real_escape_string($_POST['name']);
    $email                             = $mysql->real_escape_string($_POST['email']);
    $phone                           = $mysql->real_escape_string($_POST['phone']);
    

    // Insert data into database
    $sql_add = "INSERT INTO friend_contact (Name, Email, Phone) "
    ."VALUES ('$friend_name', '$email', '$phone')";

    // If query is succesful, send this message to the user
    if($mysql->query($sql_add) === true) {
        $_SUCCESS_MESSAGE = "Friend $friend_name was added to the database";
    }
}

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Friend's Conctact</title>
    </head>
    <body>
        <h1 style="text-align: center">Add Friends</h1>

        <form class="" action="" method="post">
            <p>Name:</p>
            <input type="text" name="name" placeholder="Friends's name" required>
            <p>Email:</p>
            <input type="text" name="email" placeholder="Friends's name">
            <p>Phone:</p>
            <input type="text" name="phone" placeholder="Friends's name" required>
            <br><br>
            <input type="submit" name="add" placeholder="Register this friend">
        </form>

        <div class=""> <?php echo $_SUCCESS_MESSAGE ?></div>



    </body>
</html>
