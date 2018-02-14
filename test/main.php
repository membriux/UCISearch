
<?php
$_REGISTER_MESSAGE = "";

// Database
$mysqli = new mysqli('localhost', 'memo', 'memo', 'STUDENT_SAMPLE');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // When user clicks on submit
    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $phone =  $mysqli->real_escape_string($_POST['phone']);

    $_SESSION['name'] = $name;

    $sql = "INSERT INTO table_sample (Name,Email, Phone) " // Inserts data to database
    . "VALUES ('$name', '$email', '$phone')";

    // if the query is succesful, redirect to main.php page, done!
    if ($mysqli->query($sql) === true) {
      $_REGISTER_MESSAGE = "Registration Successful! Added $name to the database!";
    }
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Login</title>
  </head>
  <body>

    <h1>User Registration</h1>
    <form action='' method='post'>


      <input type="text" placeholder="Name" name="name" required /><br />
      <input type="text" placeholder="Email" name="email"  /><br />
      <input type="text" placeholder="Phone" name="phone"  required /><br />
      <input type="submit" value="Register me to the awesomeness!" name="Register" class="register btn"/>
      <div class=""><? echo $_REGISTER_MESSAGE?></div>


    </form>


  </body>
</html>
