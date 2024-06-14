<!--Admin Home Page After Login-->
<!--Coded by IT22603586 Aponso G.I.A-->
<?php
require 'config.php';
session_start();
$UserID = $_SESSION['admin_id'];

$query = "SELECT * FROM admindetails WHERE Admin_ID = '$UserID'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $fetch = mysqli_fetch_assoc($result);
}
$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Quintet LIS</title>

        <!--To add CSS file-->
        <link rel="stylesheet" href="css/AdminHome.css">
    </head>

    <body>
        
        <!--Header section BEGINS-->
        <table width="100%">
            <tr>
                <td width="20%">
                    <img src="Images/logo.png" alt="logo" width="60%" height="60%" id="logo">
                </td>

                <td width="50%">
                    <div class="headTopic">
                        <h1 id="mainHeading">Quintet Life Insurance</h1>
                        <h3 id="slogan">&nbsp;&nbsp;Life is Precious. We are here to safeguard it!</h3>
                </td>

                <td width="20%">
                    <div class="LoginRegisterB">
                        <?php
                            echo '<img src="' . $fetch['Image'] . '" alt="Admin Image" width="20%" height="20%">';
                        ?>

                        <h1>Admin <?php echo $fetch['User_Name'];?></h1>
                        <br>
                        <a href="Logout.php"><input type="button" value="LogOut" name="logout" id="logout"></a>
                    </div>
                </td>
            </tr>
        </table>
        <!--Header section ENDS-->

        <div class="Line">
            <!--Just to Take A empty NavBar-->
        </div>

        <br>
        <center>
        <div id="MainBoxes">
            <a href="AdminPan.php"><input type="button" value="Users" class="adminsqr"></a>
      
            <a href="AdminPan2.php"><input type="button" value="Inquiries" class="adminsqr"></a>
        </div>
        </center>

    </body>
</html>