<!--Coded by IT22603586 Aponso G.I.A-->
<?php
session_start();
//linking the configuration file
require 'config.php';

if (isset($_POST['login'])) {
    $UN = $_POST["AUname"];
    $PW = $_POST["apsw"];

    //READ
    $sql = "SELECT * FROM admindetails WHERE User_Name = '$UN' AND Password = '$PW'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        echo "Login successful";
        $_SESSION["AUname"] = $UN;
        $_SESSION['admin_id'] = $row['Admin_ID'];
        header('Location: AdminHome.php');
    } else {
        echo "Invalid username or password";
    }
}
$conn->close();
?>