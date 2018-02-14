

<?php
    $_SUCCESS_MESSAGE = "";

    $mysql = new mysqli('localhost', 'memo', 'memo', 'friends');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // When user clicks on button

        $friend_name       = $mysql->real_escape_string($_POST['name']);
        $email                    = $mysql->real_escape_string($_POST['email']);
        $phone                  = $mysql->real_escape_string($_POST['phone']);

        // Insert friend information to database
        $sql_add = "INSERT INTO friend_contact (Name,Email,Phone) "
        . "VALUES ('$friend_name', '$email', '$phone')";

        // If the query is succesful, send a message to user
        if($mysql->query($sql_add) === true) {
            $_SUCCESS_MESSAGE = "Friend $friend_name was added to database!";
        }
    }

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Friends</title>
    </head>
    <body>

        <h1 style="text-align: center">Friends</h1>

        <form action="" method="post">
            <p>Name:</p>
            <input type="text" name="name" placeholder="Friend's Name" required>
            <p>Email:</p>
            <input type="text" name="email" placeholder="Email">
            <p>Phone</p>
            <input type="text" name="phone" placeholder="Phone" required>
            <br><br>
            <input type="submit" name="add" value="Add Contact">
            <div class=""> <? echo $_SUCCESS_MESSAGE ?> </div>
            <div class="">
                <? echo "Howdy"?>
            </div>
        </form>


    </body>
</html>
