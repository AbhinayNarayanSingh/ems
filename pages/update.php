<?php
include "../wp-admin.php";
sessionCheck();
update();
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


    <h1>EMPLOYEE RECORD UPDATE</h1>

    <main>
        <section class="heading update">
            <form class="archive" action="" method="post">

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
                            <p>EM0254</p>
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>FULL NAME:</h2>

                        </div>
                        <div class="tdetail">
                            <p><?php echo $row[2] ?></p>

                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>designation:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="designation" required value="<?php echo $row[3] ?>">
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>DEPARTMENT:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="department" required value="<?php echo $row[4] ?>">
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>contact:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="contact" required value="<?php echo $row[5] ?>">
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>e-mail:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="eMail" required value="<?php echo $row[6] ?>">
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>current address:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="currentAddress" required value="<?php echo $row[7] ?>">
                        </div>
                    </div>

                    <h3>EMPLOYEE PERSONAL INFORMATION</h3>
                    <div class="sec">
                        <div class="theading">
                            <h2>DATE OF BIRTH:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="dateOfBirth" value="<?php echo $row[8] ?>">
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>Gender:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="gender" value="<?php echo $row[9] ?>">
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <H2>Marital Status: </H2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="status" value="<?php echo $row[10] ?>">
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>FATHER / spouse NAME:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="familyMember" value="<?php echo $row[11] ?>">
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>permanent address:</h2>

                        </div>
                        <div class="tdetail">
                            <input type="text" name="permanentAddress" value="<?php echo $row[12] ?>">

                        </div>
                    </div>

                    <h3>EMERGENCY CONTACT DETAILS</h3>

                    <div class="sec">
                        <div class="theading">
                            <h2>FULL NAME:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="emContactPerson" value="<?php echo $row[13] ?>">
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>RELATION:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="emRelation" value="<?php echo $row[14] ?>">
                        </div>
                    </div>

                    <div class="sec">
                        <div class="theading">
                            <h2>HOME mob NO:</h2>
                        </div>
                        <div class="tdetail">
                            <input type="text" name="emContact" value="<?php echo $row[15] ?>">
                        </div>
                    </div>

                    <div class="action flexC">

                        <button type="submit" name="submit">Update</button>
                    </div>

                <?php

                }
                ?>





            </form>

            </div>
        </section>
    </main>


    <footer>

        <ul class="flexC nav">
            <li><a href="/../ems/pages/feedback.php">Feedback</a></li>
        </ul>
    </footer>

</body>


</html>