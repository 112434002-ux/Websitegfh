<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $status = $_POST["status"];

    if ($username == "admin" && $password == "1234" && $status == "YES") {
        $message = "Positive Response: Login Successful.";
    } else {
        $message = "Negative Response: Invalid Username, Password, or Status.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>

<h2>Login Form</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    Status:
    <select name="status">
        <option value="YES">YES</option>
        <option value="NO">NO</option>
    </select><br><br>

    <input type="submit" value="Submit">

</form>

<?php
if ($message != "") {
    echo "<h3>$message</h3>";
}
?>

</body>
</html>