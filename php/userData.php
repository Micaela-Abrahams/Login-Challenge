<?
session_start(); //Resume Session

// Checks is name,surname,email & alternative emails are set.
// If the are all set, the following session variables will be declared.
if (isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['email']) && isset($_SESSION['newEmail'])) {
    $name = $_SESSION['name'];
    $surname =  $_SESSION['surname'];
    $email = $_SESSION['email'];
    $newEmail =  $_SESSION['newEmail'];
}

// Handles Logout
// Checks if the logout button has been clicked, if it has been clicked, the session will be destroyed & user will be redirected back to the Sign in page (index.php)
if (isset($_POST['logout'])) {
    session_destroy(); //Destroy the session
    header('Location: ../php/index.php'); //Redirects user to Sign In Page (index.php).
    exit(); //Stops all code rendered on index.php after header
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userData.css">
    <title>Display All User Data:</title>
</head>

<body>
    <h3>User Details:</h3>
    <p>Name: <? echo $name; ?></p>
    <p>Surname: <? echo $surname; ?></p>
    <p>Main Email: <? echo $email; ?></p>
    <p>Alternative Email: <? echo $newEmail; ?></p>

    <form action="" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>

</body>



</html>