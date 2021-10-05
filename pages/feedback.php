<?php
include "../wp-admin.php";

feedback()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/utility.css">
    <link rel="stylesheet" href="../CSS/style.css">

</head>

<body>

    <nav>

        <ul class="flexC nav">
            <li><a href="./record.php">Home</a></li>
            <li><a href="./addnew.php">Add New</a></li>
            <li><a href="./search.php">Search</a></li>
            <li><a href="./logout.php">Logout</a></li>
        </ul>
    </nav>

    <main class="feedbackBody flexW flexCC">
        <h1>Your feedback</h1>
        <p>We would like your feedback to improve our website</p>

        <div class="feedback flexCC">
            <form action="" class="flexCC" method="POST">
                <input type="text" placeholder="Name" name="name" required>
                <input type="text" placeholder="E-mail" name="email" required>

                <p>What is your opinion of this website?</p>

                <div class="rating flexC">
                    <input name="rating" type="radio" id="rating1" value="1">
                    <label for="rating1">🤮</label>
                    <input name="rating" type="radio" id="rating2" value="2">
                    <label for="rating2">🥴</label>
                    <input name="rating" type="radio" id="rating3" value="3">
                    <label for="rating3">🤨</label>
                    <input name="rating" type="radio" id="rating4" value="4">
                    <label for="rating4">😀</label>
                    <input name="rating" type="radio" id="rating5" value="5">
                    <label for="rating5">🤯</label>
                </div>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>