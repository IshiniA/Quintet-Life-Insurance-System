<!--Coded by IT22603586 Aponso G.I.A-->
<?php
session_start();
// Linking the configuration file
require 'config.php';

if (isset($_POST["login"])) {
    $UN = $_POST["Uname"];
    $PW = $_POST["psw"];

    // READ
    $sql = "SELECT * FROM userdetails WHERE User_Name = '$UN' AND Password = '$PW'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        
        if ($row['Status'] == 'Deactivated') {
            echo "Your account is currently deactivated. Please contact the administrator.";
        } else {
            echo "Login successful";
            $_SESSION['user_id'] = $row['User_ID'];
            header('Location: HomePage2.php');
        }
    } else {
        echo "Invalid username or password";
    }
}
$conn->close();
?>
