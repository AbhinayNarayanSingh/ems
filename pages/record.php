<?php

include "../wp-admin.php";

sessionCheck();

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

    <main class="record flexW">


        <?php

        $query = "SELECT * FROM archive";
        $result = mysqli_query($GLOBALS["conn"], $query);

        if (!$result) {
            die('<br> Error: query_fetch  <br> ');
        }

        while ($row = mysqli_fetch_array($result)) {

        ?>

            <div class="card alignTC flexCC" onclick="location.href='./archive.php?id=<?php echo $row['ID'] ?>'">
                <div class="flexCC">
                    <span><?php echo $row['empId'] ?></span>
                    <h2><?php echo $row['empName'] ?></h2>
                </div>
                <p><?php echo $row['designation'] ?></p>

            </div>
        <?php

        }
        ?>


        <!-- 
    <div class="card alignTC flexCC">


        <div class="flexCC">
            <span>EM0255 </span>
            <h2>Abhinav Narayan Singh </h2>
        </div>
        <p>HR Executive</p>
    </div> -->


    </main>
    <footer>

        <ul class="flexC nav">
            <li><a href="/../ems/pages/feedback.php">Feedback</a></li>
        </ul>
    </footer>

</body>


</html>