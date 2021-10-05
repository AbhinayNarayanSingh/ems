<?php

include "./wp-admin.php";

signup()

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Employee Management System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./CSS/reset.css">
    <link rel="stylesheet" href="./CSS/utility.css">
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>

    <div class="login flexCC">
        <h1 style="padding-bottom: 0;">Employee Management System (EMS)</h1>
        <p style="padding-bottom: 2rem;">Please fill this form to create an account</p>
        <div class="flexC loginDiv">
            <form action="" class="flexCC" method="POST">


                <label for="">Username</label>
                <input type="text" name="userName" id="" required>

                <label for="">Password</label>
                <input type="password" name="password" id="" required>
                <label for="">Confirm Password</label>
                <input type="text" id="" required>

                <button type="submit" name="Register">Register</button>
                <p>Already Registered? <a href="./index.php" style="color: red; font-weight: 500; ">SignIn Now</a></p>

            </form>
        </div>


    </div>

</body>

</html>