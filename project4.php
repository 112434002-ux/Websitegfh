
<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $feedback = htmlspecialchars($_POST["feedback"]);

    $data = "Name: $name\n";
    $data .= "Email: $email\n";
    $data .= "Feedback: $feedback\n";
    $data .= "-------------------------\n";

    file_put_contents("messages.txt", $data, FILE_APPEND);

    $message = "Your message has been submitted successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML & PHP Website</title>
    <style>
        body{
            font-family:Arial,sans-serif;
            background:#f4f4f4;
            margin:0;
        }

        header{
            background:#007bff;
            color:white;
            padding:20px;
            text-align:center;
        }

        .container{
            width:400px;
            margin:40px auto;
            background:white;
            padding:20px;
            border-radius:8px;
            box-shadow:0 0 10px #ccc;
        }

        input, textarea{
            width:100%;
            padding:10px;
            margin:10px 0;
            box-sizing:border-box;
        }

        input[type=submit]{
            background:green;
            color:white;
            border:none;
            cursor:pointer;
        }

        input[type=submit]:hover{
            background:darkgreen;
        }

        .success{
            color:green;
            font-weight:bold;
            text-align:center;
        }
    </style>
</head>

<body>

<header>
    <h1>My HTML & PHP Website</h1>
</header>

<div class="container">

    <?php
    if($message!=""){
        echo "<p class='success'>$message</p>";
    }
    ?>

    <form method="post" action="">
        <input type="text" name="name" placeholder="Enter Name" required>

        <input type="email" name="email" placeholder="Enter Email" required>

        <textarea name="feedback" rows="5" placeholder="Enter Feedback" required></textarea>

        <input type="submit" value="Submit">
    </form>

</div>

</body>
</html>