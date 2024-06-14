<?php
//linking the configuration file
require 'config.php';

session_start();
 $UserID = $_SESSION['user_id'];


$FullName = $_POST["pFullname"];
$NameWithInitials = $_POST["pinitials"];
$DoB = $_POST["date"];
$MobileNo = $_POST["phoneNumber"];
$Address = $_POST["address"];
$Email = $_POST["email"];
$Gender = $_POST["gender"];
$NIC = $_POST["nic"];
$PolicyNo = $_POST["policynumber"];
$PolicyType = $_POST["policytype"];
$PolicyDate = $_POST["policydate"];
$RenewalDate = $_POST["renewaldate"];
$BenFullName = $_POST["benfullname"];
$BenNameWI =$_POST["benInitials"];
$BenDoB = $_POST["bendob"];
$BenMobNo =$_POST["benphoneNumber"];
$BenAddress = $_POST["benaddress"];
$BenEmail = $_POST["benemail"];
$BenGender = $_POST["rgender"];
$BenNIC = $_POST["bennic"];
$Relationship = $_POST["relationship"];
$MedicalDoc = $_POST["meddoc"];
$PolicyExTP = $_POST["polexreq"];
$PrePayFre = $_POST["prepay"];
$Sign = $_POST["sign"];
$PRDate = $_POST["ddate"];
$UsID = $_SESSION['user_id'];




//CREATE
$sql = "INSERT INTO renewpolicy(pFullname,pinitials,date,phoneNumber,address,email,gender,nic,policynumber,policytype,policydate,renewaldate,benfullname,benInitials,BenDoB,benphoneNumber,Benaddress,Benemail,rgender,Bennic,relationship,meddoc,polexreq,prepay,sign,ddate,User_ID)
 VALUES('$FullName', '$NameWithInitials', '$DoB', '$MobileNo', '$Address', '$Email', '$Gender', '$NIC', '$PolicyNo', '$PolicyType', '$PolicyDate', '$RenewalDate', '$BenFullName', '$BenNameWI', '$BenDoB', '$BenMobNo', '$BenAddress', '$BenEmail', '$BenGender', '$BenNIC', '$Relationship', '$MedicalDoc', '$PolicyExTP', '$PrePayFre', '$Sign', '$PRDate', '$UsID')";


if ($conn->query($sql))
{
    echo "Inserted successfully";
    header("Location: LoginPage.html");
    exit();
}

else
{
    echo "Error: ".$conn->error;
}

$conn->close();

?>