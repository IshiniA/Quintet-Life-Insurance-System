<!--Coded by IT22603586 Aponso G.I.A-->
<?php
//linking the configuration file
require 'config.php';

$FN = $_POST["FullName"];
$Email = $_POST["Email"];
$MSG = $_POST["message"];


//CREATE
$sql = "INSERT INTO contactus(UserID, Full_Name, email, Message)VALUES('', '$FN', '$Email', '$MSG')";

if ($conn->query($sql))
{
    echo "Inserted successfully";
    header("Location: HomePage1.html");
}

else
{
    echo "Error: ".$conn->error;
}

$conn->close();
?>