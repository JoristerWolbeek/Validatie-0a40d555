<html>
<form method="get">

<input type="text" name="email" placeholder="Your Email"></input><br>
<input type="submit" name="submit" value="Submit"></input><br>
</form>
</html>
<?php


if($_GET["email"]){
    $email = $_GET["email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email is a valid email address");
      } else {
        echo("$email is not a valid email address");
      }
}
