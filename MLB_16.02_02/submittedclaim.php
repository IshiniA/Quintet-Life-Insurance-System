<?php
//linking the configuration file
require 'config.php';

session_start();
 $UserID = $_SESSION['user_id'];

$PFN = $_POST["fullName"];
$PN=$_POST["name"];
$PDOB=$_POST["pDOB"];
$PPN=$_POST["pContactNo"];
$PA= $_POST["pAddress"];
$PE=$_POST["pEmail"];
$PG=$_POST["pgender"];
$PNIC=$_POST["pNIC"];

$PoNo =$_POST["policyNo"];
$PoTy = $_POST["policyType"];
$PoD=$_POST["policyDate"];

$DDOD=$_POST["DOD"];
$DCOD=$_POST["causeDeath"];


$BFN=$_POST["bFullname"];
$BN=$_POST["bName"];
$BA=$_POST["bAddress"];
$BPN=$_POST["bContactNo"];
$BG=$_POST["bGender"];
$BRelat=$_POST["bRelationship"];

$DOS= $_POST["DOSubmission"];


$Fdbk=$_POST["feedback"];

$UsrID=$_SESSION['user_id'];

//CREATE
$sql="INSERT INTO claimDetails(Claim_ID,PolicyHolder_Fullname,PolicyHolder_Name,PolicyHolder_DOB,PolicyHolder_Number,PolicyHolder_address,PolicyHolder_Email,PolicyHolder_Gender,PolicyHolder_NIC,Policy_Number,Policy_Type,Policy_date,
Date_death,Cause_death,Benificiary_Fullname,Beneficiary_Name,Beneficiary_Address,Beneficiary_Number,Beneficiary_Gender,Relationship_to_Deceased,Date_Submission,Customer_Feedback,User_ID) 
VALUES ('','$PFN','$PN','$PDOB','$PPN','$PA','$PE','$PG','$PNIC','$PoNo','$PoTy','$PoD','$DDOD','$DCOD','$BFN','$BN','$BA','$BPN','$BG','$BRelat','$DOS','$Fdbk','$UsrID')";

if ($conn->query($sql))
{
    echo "Inserted successfully";
    header("Location: claim form result.php");
    exit();
}

else
{
    echo "Error: ".$conn->error;
}

$conn->close();

?>