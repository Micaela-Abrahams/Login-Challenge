<?
session_start(); //Resume Session

// Check if the name, surname & email has been set:
// If it has been set, assign the Session variable to new variable names.
if (isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['email'])) {
    $name = $_SESSION['name'];
    $surname =  $_SESSION['surname'];
    $email = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login Page</title>
</head>

<body>
    <h2>Welcome <? echo $name . ' ' . $surname; ?>;</h2>
    <p>You have successfully logged in with email: <? echo $email; ?></p>

    <p>Please provide an alternative email address below:</p>

    <form action=" " method="post">
        <label for="email" value="email">Alternative email:</label>
        <input type="text" name="alternativeEmail" id="email" placeholder="Alternative email" required><br>

        <input type="submit" value="Submit">
    </form>

    <!-- Checks if the Submit button has been clicked -->
    <!-- If it has been clicked, the alternative email session variable will be declared -->
    <? if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $_SESSION['newEmail'] = $_POST['alternativeEmail'];

        // Handles redirection to userData.php page
        header('Location: ../php/userData.php'); //Redirects user to userData Page & sends user data to the next page.
        exit(); //Stops all code rendered on index.php after header
    } ?>
</body>

</html>