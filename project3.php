<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);

    $message = "Thank you, <strong>$name</strong>! Your details have been received.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Full Website</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f4f4f4;
}

header{
    background:#007BFF;
    color:white;
    padding:20px;
    text-align:center;
}

nav{
    background:#333;
    padding:10px;
    text-align:center;
}

nav a{
    color:white;
    text-decoration:none;
    margin:15px;
}

.container{
    width:80%;
    margin:30px auto;
}

.card{
    background:white;
    padding:20px;
    border-radius:8px;
    box-shadow:0 0 10px rgba(0,0,0,.2);
}

input{
    width:100%;
    padding:10px;
    margin:10px 0;
}

button{
    background:#007BFF;
    color:white;
    border:none;
    padding:10px 20px;
    cursor:pointer;
}

button:hover{
    background:#0056b3;
}

.success{
    margin-top:20px;
    background:#d4edda;
    color:#155724;
    padding:15px;
    border-radius:5px;
}

footer{
    margin-top:40px;
    background:#222;
    color:white;
    text-align:center;
    padding:20px;
}
</style>

</head>
<body>

<header>
<h1>My PHP Website</h1>
<p>Frontend + Backend in One File</p>
</header>

<nav>
<a href="#">Home</a>
<a href="#">About</a>
<a href="#">Services</a>
<a href="#">Contact</a>
</nav>

<div class="container">

<div class="card">
<h2>Contact Form</h2>

<form method="POST">

<input type="text" name="name" placeholder="Enter Name" required>

<input type="email" name="email" placeholder="Enter Email" required>

<input type="text" name="phone" placeholder="Enter Phone Number" required>

<button type="submit">Submit</button>

</form>

<?php
if($message!=""){
    echo "<div class='success'>$message</div>";

    echo "<h3>Submitted Data</h3>";
    echo "<p><b>Name:</b> $name</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Phone:</b> $phone</p>";
}
?>

</div>

</div>

<footer>
Copyright © 2026 My Website
</footer>

</body>
</html>