<?php
//linking the configuration file
require 'config.php';

 session_start();
 $UserID = $_SESSION['user_id'];

$IN = $_POST["iname"];
$FN = $_POST["fname"];
$BD = $_POST["bday"];
$GN = $_POST["gen"];
$NT = $_POST["nation"];
$OC = $_POST["occ"];
$CN = $_POST["cNum"];
$AD = $_POST["add"];
$ML = $_POST["mail"];
$PT = $_POST["pType"];
$PN = $_POST["pName"];
$PTr = $_POST["pTerm"];
$MD = $_POST["medi"];
$Q1 = $_POST["que1"];
$Q2 = $_POST["que2"];
$BN = $_POST["Bname"];
$RL = $_POST["rel"];
$BCN = $_POST["BconNum"];
$BAD = $_POST["Badd"];
$BML = $_POST["Bmail"];
$Q3 = $_POST["que3"];
$DT = $_POST["date"];
$UI = $_SESSION['user_id'];

//CREATE
$sql = "INSERT INTO Purchase_policy(Purchase_policy_ID, Name_with_initials, Full_name, DOB, Gender, Natioanality, Occupation, Contact_number, Address, Email, Policy_type, Policy_name, Policy_term, Medical_conditions, Smoker, Policy_cancellations, Benificiary_FullName, Relationship, Benificiary_ContactNumber, Benificiary_Address, Benificiary_Email, CommentsAndQuestions, Submission_date, User_ID)
VALUES('', '$IN', '$FN', '$BD', '$GN', '$NT', '$OC', '$CN', '$AD', '$ML', '$PT', '$PN', '$PTr', '$MD', '$Q1', '$Q2', '$BN', '$RL', '$BCN', '$BAD', '$BML', '$Q3', '$DT', '$UI')";


if ($conn->query($sql))
{
    echo "Inserted successfully";
    header("Location: PPviewForm.php");
    exit();
}

else
{
    echo "Error: ".$conn->error;
}

$conn->close();



?>