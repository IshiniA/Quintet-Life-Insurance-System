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

// Delete inq
if (isset($_POST['del'])) {
    $userId = $_POST['del'];
    $query = "DELETE FROM contactus WHERE UserID = '$userId'";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Quintet LIS</title>

        <!--To add CSS file-->
        <link rel="stylesheet" href="css/adminstyle.css">

        <!--To add Icons to the footer-->
        <script src="https://kit.fontawesome.com/8d1ac6ad03.js" crossorigin="anonymous"></script>
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
        <br>
        <div class="Line">
            <!--Just to Take A empty NavBar-->
        </div>

        <br>
    <h2>Inquiries</h2>

    <?php
    $query = "SELECT * FROM contactus";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table class="user-table" id="admintables">
            <tr>
                <th>Inquiry ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            $inqId = $row['UserID'];
            $name = $row['Full_Name'];
            $email = $row['email'];
            $msg = $row['Message'];
            

            echo '<tr>';
            echo '<td>' . $inqId . '</td>';
            echo '<td>' . $name . '</td>';
            echo '<td>' . $email . '</td>';
            echo '<td>' . $msg . '</td>';
            echo '<td>
                <form method="post" action="adminPan2.php">
                    <button type="submit" name="reply" class="repdel"><a href="https://mail.google.com/">Reply</a></button>
                </form>
                <br>
                <form method="post" action="adminPan2.php">
                    <input type="hidden" name="del" value="' . $inqId . '">
                    <button type="submit" name="delete" class="repdel">Delete</button>
                </form>
            </td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No users found.';
    }
    $conn->close();
    ?>
</body>
</html>
