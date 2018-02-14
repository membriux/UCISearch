


<?php

    // Database connection
    $mysql = new mysqli('localhost', 'memo', 'memo', 'friends');

    $get_friend                 = "SELECT * FROM friend_contact";
    $get_friends_result   =  mysqli_query($mysql, $get_friend);

 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>List of Friends</title>
        <link rel="stylesheet" type="text/css" href="friends.css">
    </head>
    <body>

        <h1 style="text-align: center"> Friends List</h1>
        <div class="friend_box">
        <?php
            function show_friends_list($get_friends_result) {
                if (mysqli_num_rows($get_friends_result) > 0) {
                    while ($friend = mysqli_fetch_array($get_friends_result)) {
                        echo "<p>Name: {$friend['Name']}, Email: {$friend['Email']}, Phone: {$friend['Phone']} </p>";
                    }
                }
                else {
                    echo "<h3> No friends. You are a loner. </h3>";
                }
            }
            show_friends_list($get_friends_result);
             ?>
         </div>

    </body>
