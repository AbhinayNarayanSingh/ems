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

    <div class="search" id="searchform">

        <form action="" class="search flexC" method="POST">
            <input type="text" name="keyword" id="" required placeholder="ID, Name, Designation, Department">
            <button type="submit" name="search">Search</button>
        </form>
    </div>

    <?php

    if (isset($_POST['search'])) {

        function Outprint()
        {
    ?>
            <div class="flexCC"><?php echo "<p>About " . $GLOBALS['result'] . " results found </p>" ?></div>


            <?php

            while ($row = mysqli_fetch_assoc($GLOBALS['querySearch'])) {

            ?>
                <main class="record flexW flexC">
                    <div class="card alignTC flexCC" onclick="location.href='/../ems/pages/archive.php?id=<?php echo $row['ID'] ?>'">
                        <div class="flexCC">

                            <span><?php echo $row['empId'] ?></span>
                            <h2><?php echo $row['empName'] ?></h2>
                        </div>
                        <p><?php echo $row['designation'] ?></p>
                        <h5><?php echo $row['department'] ?></h5>

                    </div>
                </main>

                <?php
            }
        }


        $search = $_POST['keyword'];

        //SELECT column1, column2, ... FROM table_name WHERE columnN LIKE pattern; 

        $query = "SELECT * FROM archive WHERE empName LIKE '%$search%'";

        $querySearch = mysqli_query($GLOBALS['conn'], $query);

        if (!$querySearch) {
            die("Error : query_search <br>" . mysqli_error($GLOBALS['conn']));
        }

        $result = mysqli_num_rows($querySearch);

        if ($result == 0) {
            $query = "SELECT * FROM archive WHERE empId LIKE '%$search%'";
            $querySearch = mysqli_query($GLOBALS['conn'], $query);
            $result = mysqli_num_rows($querySearch);

            if ($result == 0) {
                $query = "SELECT * FROM archive WHERE designation LIKE '%$search%'";
                $querySearch = mysqli_query($GLOBALS['conn'], $query);
                $result = mysqli_num_rows($querySearch);

                if ($result == 0) {
                    $query = "SELECT * FROM archive WHERE department LIKE '%$search%'";
                    $querySearch = mysqli_query($GLOBALS['conn'], $query);
                    $result = mysqli_num_rows($querySearch);

                    if ($result == 0) {

                ?>
                        <div class="flexCC"><?php echo "Not Found"; ?></div>


    <?php
                    } else {
                        Outprint();
                    }
                } else {
                    Outprint();
                }
            } else {
                Outprint();
            }
        } else {
            Outprint();
        }
    }
    ?>
    </main>
    <footer>

        <ul class="flexC nav">
            <li><a href="/../ems/pages/feedback.php">Feedback</a></li>
        </ul>
    </footer>

</body>


</html>