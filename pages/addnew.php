<?php
include "../wp-admin.php";

addNew();

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


    <h1>NEW EMPLOYEE RECORD</h1>

    <main>
        <section class="heading update">
            <form class="archive" action="" method="POST">

                <h3>EMPLOYEE INFORMATION</h3>

                <div class="sec">
                    <div class="theading">
                        <h2>EMP ID:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="empId" required>
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>FULL NAME:</h2>

                    </div>
                    <div class="tdetail">
                        <input type="text" name="empName" required>

                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>designation:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="designation" required>
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>DEPARTMENT:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="department" required>
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>contact:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="contact" required>
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>e-mail:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="eMail" required>
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>current address:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="currentAddress" required>
                    </div>
                </div>

                <h3>EMPLOYEE PERSONAL INFORMATION</h3>
                <div class="sec">
                    <div class="theading">
                        <h2>DATE OF BIRTH:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="dateOfBirth" placeholder="YYYY / MM / DD">
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>Gender:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="gender">
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <H2>Marital Status: </H2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="status">
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>FATHER / spouse NAME:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="familyMember">
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>permanent address:</h2>

                    </div>
                    <div class="tdetail">
                        <input type="text" name="permanentAddress">

                    </div>
                </div>

                <h3>EMERGENCY CONTACT DETAILS</h3>

                <div class="sec">
                    <div class="theading">
                        <h2>FULL NAME:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="emContactPerson">
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>RELATION:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="emRelation">
                    </div>
                </div>

                <div class="sec">
                    <div class="theading">
                        <h2>HOME mob NO:</h2>
                    </div>
                    <div class="tdetail">
                        <input type="text" name="emContact">
                    </div>
                </div>

                <div class="action flexC">

                    <button type="submit" name="submit">Submit</button>
                </div>

            </form>

            </div>
        </section>
    </main>




</body>


</html>