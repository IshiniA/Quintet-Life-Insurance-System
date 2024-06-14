<!--Coded by IT22603586 Aponso G.I.A-->
<?php
//linking the configuration file
require 'config.php';

$UN = $_POST["Uname"];
$Email = $_POST["email"];
$FN = $_POST["Fname"];
$LN = $_POST["Lname"];
$DOB = $_POST["Dob"];
$Gend = $_POST["gender"];
$MS = $_POST["ms"];
$ADD = $_POST["address"];
$PN = $_POST["phone-number"];
$PW = $_POST["psw"];
$ST = 'Active';
$img = 'userP.png';


//CREATE
$sql = "INSERT INTO userdetails(User_ID, User_Name, Email, First_Name, Last_Name, DOB, Gender, Marital_Status, Address, Phone_No, Status, Password, image)
        VALUES('', '$UN', '$Email', '$FN', '$LN', '$DOB', '$Gend', '$MS', '$ADD', '$PN', '$ST', '$PW', '$img')";


if ($conn->query($sql))
{
    echo "Inserted successfully";
    header("Location: LoginPage.html");
}

else
{
    echo "Error: ".$conn->error;
}

$conn->close();
?>