<?
session_start(); //Start Session
// If the submit button is clicked store the input variable in the below Session Variables
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_SESSION['name'] = $_POST['firstName'];
    $_SESSION['surname'] = $_POST['lastName'];
    $_SESSION['email'] = $_POST['email'];

    // Handles redirection to login.php page
    header('Location: ../php/login.php'); //Redirects user to Login Page & sends user data to the next page.
    exit(); //Stops all code rendered on index.php after header
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login Challenge:</title>
</head>

<body>
    <h1>Sign In:</h1>
    <!-- Leave action attribute empty, data is being redirected through the above header -->
    <form action=" " method="post">

        <label for="firstName" value="firstName">First Name:</label>
        <input type="text" name="firstName" placeholder="Name" required><br>

        <label for="lastName" value="lastName">Last Name:</label>
        <input type="text" name="lastName" placeholder="Surname" required><br>

        <label for="email" value="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="Email" required><br>

        <input type="submit" value="Login">

    </form>


</body>

</html>