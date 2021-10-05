<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "ems";


$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection un-successful with " . $database);
}

function signup()
{
    if (isset($_POST["Register"])) {

        //to fetch user input & prevent from mysqli injection  

        $userName = mysqli_real_escape_string($GLOBALS['conn'], $_POST["userName"]);
        $password = mysqli_real_escape_string($GLOBALS['conn'], $_POST["password"]);


        $query = "INSERT INTO `login`(`userName`, `pwd`) VALUES ('$userName','$password')";
        $query = mysqli_query($GLOBALS['conn'], $query);

        if ($query) {
            echo "<script type='text/javascript'> 
            alert('Registration successful.') 
            </script>";
        }
    }
}



function signin()
{

    if (isset($_POST["submit"])) {

        //to fetch user input & prevent from mysqli injection  

        $userName = mysqli_real_escape_string($GLOBALS['conn'], $_POST["userName"]);
        $pwd = mysqli_real_escape_string($GLOBALS['conn'], $_POST["pwd"]);

        $query = "SELECT * FROM login where userName = '$userName' and pwd = '$pwd'";
        $result = mysqli_query($GLOBALS["conn"], $query);

        // $row = mysqli_fetch_assoc($result);

        $result = mysqli_num_rows($result);

        if (!$result) {
            // die("Error : query_login <br>" . mysqli_error($GLOBALS['conn']));
            echo "<script type='text/javascript'> 
            alert('Invalid username or password') 
            </script>";
        }

        if ($result == 1) {

            session_start();

            // Store data in session variables
            $_SESSION["loggedin"] = true;

            // Redirect user to welcome page
            header("location: ./pages/record.php");
        }
    }
}
function sessionCheck()
{
    // Initialize the session
    session_start();
    // Check if the user is logged in, if not then redirect him to login page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: ../index.php");
        exit;
    }
}


function addNew()
{

    if (isset($_POST["submit"])) {

        $empId = $_POST["empId"];
        $empName = $_POST["empName"];
        $designation = $_POST["designation"];
        $department = $_POST["department"];
        $contact = $_POST["contact"];
        $eMail = $_POST["eMail"];
        $currentAddress = $_POST["currentAddress"];
        $dateOfBirth = $_POST["dateOfBirth"];
        $gender = $_POST["gender"];
        $maritalStatus = $_POST["status"];
        $familyMember = $_POST["familyMember"];
        $permanentAddress = $_POST["permanentAddress"];
        $emContactPerson = $_POST["emContactPerson"];
        $emRelation = $_POST["emRelation"];
        $emContact = $_POST["emContact"];


        $query = "INSERT INTO archive ( empId, empName, designation, department, contact, eMail, currentAddress, dateOfBirth, gender, maritalStatus, familyMember, permanentAddress, emContactPerson, emRelation, emContact) VALUES ('$empId', '$empName', '$designation', '$department', '$contact', '$eMail', '$currentAddress', '$dateOfBirth', '$gender', '$maritalStatus', '$familyMember', '$permanentAddress','$emContactPerson', '$emRelation', '$emContactPerson')";

        $result = mysqli_query($GLOBALS['conn'], $query);

        if (!$result) {
            die('<br> Error: query_insert   ' . mysqli_error($GLOBALS['conn']));
        }
    }
}

function update()
{

    if (isset($_POST["submit"])) {
        $id = $_GET["id"];
        $designation = $_POST["designation"];
        $department = $_POST["department"];
        $contact = $_POST["contact"];
        $eMail = $_POST["eMail"];
        $currentAddress = $_POST["currentAddress"];
        $dateOfBirth = $_POST["dateOfBirth"];
        $gender = $_POST["gender"];
        $maritalStatus = $_POST["status"];
        $familyMember = $_POST["familyMember"];
        $permanentAddress = $_POST["permanentAddress"];
        $emContactPerson = $_POST["emContactPerson"];
        $emRelation = $_POST["emRelation"];
        $emContact = $_POST["emContact"];

        //UPDATE table_name SET field1 = new-value1, field2 = new-value2
        //[WHERE Clause]

        //php     $query = "UPDATE table_name SET field1 = '$new-value1', field2 = '$new-value2' WHERE id = '$id' ";

        $query = "UPDATE `archive` SET `designation`='$designation',`department`='$department',`contact`='$contact',`eMail`='$eMail',`currentAddress`='$currentAddress',`dateOfBirth`='$dateOfBirth',`gender`='$gender',`maritalStatus`='$maritalStatus',`familyMember`='$familyMember',`permanentAddress`='$permanentAddress',`emContactPerson`='$emContactPerson',`emRelation`='$emRelation',`emContact`='$emContact' WHERE id='$id'";

        $result = mysqli_query($GLOBALS['conn'], $query);

        //cross check
        if (!$result) {
            die('<br> Error: query_update Update un-successful <br> ' . mysqli_error($GLOBALS['conn']));
        } else {
            $ids = $_GET['id'];
            header("location: ./archive.php?id=$ids");
            echo '<br> Success: query_update  Update successful <br> ';
        }
    }
}

function delete()
{

    if (isset($_POST["delete"])) {
        $idd = $_GET["id"];

        // DELETE FROM table_name [WHERE Clause]

        $query = "DELETE FROM `archive` WHERE id = '$idd' ";
        $result = mysqli_query($GLOBALS['conn'], $query);

        //cross check
        if (!$result) {
            die('<br> Error: query_delete delete un-successful <br> ' . mysqli_error($GLOBALS['conn']));
        } else {
            echo $idd;

            header("location: ./pages/record.php");
        }
    }
}
delete();


function feedback()
{
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $rating = $_POST['rating'];

        $query = "INSERT INTO feedback( nameF, email, rating) VALUES ('$name', '$email', '$rating')";
        $query = mysqli_query($GLOBALS['conn'], $query);

        if (!$query) {
            die('<br> Error: query_insert   ' . mysqli_error($GLOBALS['conn']));
        }
    }
}

function logout()
{
    // Initialize the session
    session_start();

    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session.
    session_destroy();

    // Redirect to login page
    header("location: ../index.php");
    exit;
}
