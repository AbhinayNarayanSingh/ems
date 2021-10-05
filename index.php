<?php

define('MyConst', TRUE);


include "./wp-admin.php";
signin()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn - Employee Management System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./CSS/reset.css">
    <link rel="stylesheet" href="./CSS/utility.css">
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>

    <div class="login flexCC">
        <h1>Employee Management System (EMS)</h1>
        <div class="flexC loginDiv">
            <form action="" class="flexCC" method="POST">

                <label for="">Username</label>
                <input type="text" name="userName" id="" required>

                <label for="">Password</label>
                <input type="password" name="pwd" id="" required>

                <button type="submit" name="submit">Login</button>
                <p>Don't have account? <a href="./registration.php" style="color: red; font-weight: 500; ">Signup Now</a></p>
            </form>
        </div>



    </div>

</body>

</html>