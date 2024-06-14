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

// Deactivate user
if (isset($_POST['deactivate'])) {
    $userId = $_POST['did'];
    $query = "UPDATE userdetails SET Status = 'Deactivated' WHERE User_ID = '$userId'";
    mysqli_query($conn, $query);
}

// Activate user
if (isset($_POST['activate'])) {
    $userId = $_POST['aid'];
    $query = "UPDATE userdetails SET Status = 'Active' WHERE User_ID = '$userId'";
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
    <h2>User Details</h2>

    <?php
    $query = "SELECT * FROM userdetails";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table class="user-table" id="admintables">
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>DoB</th>
                <th>Gender</th>
                <th>Marital Status</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Action</th>
            </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            $userId = $row['User_ID'];
            $name = $row['User_Name'];
            $email = $row['Email'];
            $fname = $row['First_Name'];
            $lname = $row['Last_Name'];
            $dob = $row['DOB'];
            $gender = $row['Gender'];
            $mstatus = $row['Marital_Status'];
            $address = $row['Address'];
            $phone = $row['Phone_No'];
            $status = $row['Status'];

            echo '<tr>';
            echo '<td>' . $userId . '</td>';
            echo '<td>' . $name . '</td>';
            echo '<td>' . $email . '</td>';
            echo '<td>' . $fname . '</td>';
            echo '<td>' . $lname . '</td>';
            echo '<td>' . $dob . '</td>';
            echo '<td>' . $gender . '</td>';
            echo '<td>' . $mstatus . '</td>';
            echo '<td>' . $address . '</td>';
            echo '<td>' . $phone . '</td>';
            echo '<td>' . $status . '</td>';
            echo '<td>
                <form method="post" action="adminPan.php">
                    <input type="hidden" name="did" value="' . $userId . '">
                    <button type="submit" name="deactivate" class="actdeact">Deactivate</button>
                </form>
                <br>
                <form method="post" action="adminPan.php">
                    <input type="hidden" name="aid" value="' . $userId . '">
                    <button type="submit" name="activate" class="actdeact">Activate</button>
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


