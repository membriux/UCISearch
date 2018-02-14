
<?php
    if (isset($_GET['eventid'])) {
        $mysqli          = new mysqli('localhost', 'memo', 'memo', 'USER'); // Connect to host
        $event_id      = mysqli_real_escape_string($mysqli,  $_GET['eventid']);
        $sql                = "SELECT * FROM event WHERE id='$event_id'";
        $result           = mysqli_query($mysqli, $sql) or die("Bad Query: $sql");
        $row               = mysqli_fetch_array($result);
    }

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Example</title>
    </head>
    <body>

        <div class="intro-lead-in">Welcome to <? echo $row['event_title']?> </div>
        <div class="intro-heading text-uppercase"> <? echo $row['event_date']?></div>
        <h2 class="section-heading text-uppercase">Sign in to <? echo $row['event_title']?></h2>
        <p><? echo $row['event_question']?></p>

    </body>
</html>
