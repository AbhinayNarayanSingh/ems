<?php
include "../wp-admin.php";
?>

<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../index.php");
    exit;
}

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

    <h1>EMPLOYEE RECORD ARCHIVE</h1>

    <main>
        <section class="heading">
            <div class="archive">

                <h3>EMPLOYEE INFORMATION</h3>
                <?php

                $id = $_GET['id'];

                $query = "SELECT * FROM archive where id=$id";

                $result = mysqli_query($GLOBALS["conn"], $query);

                if (!$result) {
                    die('<br> Error: query_fetch  <br> ');
                }
                while ($row = mysqli_fetch_array($result)) {

                ?>
                    <div class="sec">
                        <div class="theading">
                            <h2>EMP ID:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row['empId']
                                ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>FULL NAME:</h2>

                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[2]
                                ?></p>

                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>designation:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[3] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>DEPARTMENT:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[4] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>contact:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[5] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>e-mail:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[6] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>current address:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[7] ?></p>
                        </div>
                    </div>

                    <h3>EMPLOYEE PERSONAL INFORMATION</h3>
                    <div class="sec">
                        <div class="theading">
                            <h2>DATE OF BIRTH:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[8] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>Gender:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[9] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <H2>Marital Status: </H2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[10] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>FATHER / spouse NAME:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[11] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>permanent address:</h2>

                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[12] ?></p>

                        </div>
                    </div>

                    <h3>EMERGENCY CONTACT DETAILS</h3>

                    <div class="sec">
                        <div class="theading">
                            <h2>FULL NAME:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[13] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>RELATION:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[14] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>Contact:</h2>
                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[15] ?></p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">

                        </div>
                        <div class="tdetail">

                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">

                        </div>
                        <div class="tdetail">

                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">

                        </div>
                        <div class="tdetail">

                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">

                        </div>
                        <div class="tdetail">

                        </div>
                    </div>

                <?php
                }
                ?>






            </div>

            </div>
        </section>
    </main>
    <div class="flexC archiveButton">
        <div class="action flexC">

            <button type="submit"><a href="./update.php?id=<?php echo $GLOBALS['id'] ?>">Update</a></button>

        </div>
        <div class="action flexC">

            <form action="../wp-admin.php?id=<?php echo $GLOBALS['id'] ?>" method="POST" style="padding: 0;">
                <button type="submit" name="delete">Delete</button>
            </form>
        </div>

    </div>
    </main>


</body>

</html>