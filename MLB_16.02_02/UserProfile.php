<!--User Profile Page-->
<!--Coded by IT22603586 Aponso G.I.A-->
<?php
require 'config.php';
session_start();
$UserID = $_SESSION['user_id'];

// DELETE
if (isset($_POST['Delete'])) {
    $sql = "DELETE FROM userdetails WHERE User_ID = '$UserID'";

    if ($conn->query($sql)) {
        echo "Deleted successfully";
        header("Location: HomePage1.html");
    } else {
        echo "Error: " . $conn->error;
    }
}

//Update
if (isset($_POST['Update'])) {  

    // Image update
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/' . $image;

    if (!empty($image_tmp)) {
        if (move_uploaded_file($image_tmp, $image_folder)) {
            $update_image_sql = "UPDATE userdetails SET image = '$image' WHERE User_ID = '$UserID'";
            if (!$conn->query($update_image_sql)) {
                echo "Error updating image: " . $conn->error;
            }
        } else {
            echo "Error uploading image.";
        }
    }

    // Password update
    $oldPW = $_POST["oldPW"];
    $newPW = $_POST["newPW"];
    $conPW = $_POST["conPW"];

    $sqlq = "SELECT * FROM userdetails WHERE User_ID = '$UserID'";
    $result = $conn->query($sqlq);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        
        $currentPassword = $row['Password'];

        if ($oldPW === $currentPassword){
            if ($newPW === $conPW) {
                $update_pw_sql = "UPDATE userdetails SET Password = '$conPW' WHERE User_ID = '$UserID'";
                $result = $conn->query($update_pw_sql);
                
            } else {
                echo '<script>
                        alert("New password and confirm password do not match!");
                    </script>';
            }
        } 
        else {
            echo '<script>
                    alert("Incorrect old password!");
                </script>';
        }
    }

    //other details update

    $UpdateUname = $_POST["upUname"];
    $UpdateEmail = $_POST["upEmail"];
    $UpdateFname = $_POST["upFname"];
    $UpdateLname = $_POST["upLname"];
    $UpdateDOB = $_POST["upDOB"];
    $UpdateGender = $_POST["upGend"];
    $UpdateMS = $_POST["upMS"];
    $UpdateAddress = $_POST["upAddress"];
    $UpdatePhnNo = $_POST["upPN"];

    $sql = "UPDATE userdetails 
            SET User_Name = '$UpdateUname', Email = '$UpdateEmail', First_Name = '$UpdateFname', Last_Name = '$UpdateLname', DOB = '$UpdateDOB', 
                Gender = '$UpdateGender', Marital_Status = '$UpdateMS', Address = '$UpdateAddress', Phone_No = '$UpdatePhnNo' 
            WHERE User_ID = '$UserID'";

    if ($conn->query($sql)) {
        echo "Inserted successfully";
        header("Location: LoginPage.html");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

$conn->close();

}
?>


<!--User Profile-->
<!DOCTYPE html>
<html>
    <head>
        <title>Quintet LIS</title>

        <!--To add CSS file-->
        <link rel="stylesheet" href="css/UserProfile.css">

        <!--To add Icons-->
        <script src="https://kit.fontawesome.com/8d1ac6ad03.js" crossorigin="anonymous"></script>

    </head>

    <body>

        <!--Header section-->
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
                    <div class="AlreadyAcc">
                        <a href="Logout.php"><input type="button" value="LogOut" name="logout" id="logout"></a>
                        <a href="HomePage2.php"><input type="button" value="Back" name="back" id="back"></a>
                    </div>
                </td>
            </tr>
        </table>

        <div class="Line">
            <!--Just to Take A empty NavBar-->
        </div>

        <br>
        <!--Content of Page-->

        <h2>Edit Profile</h2>
 
        <br><br>

        <!--READ-->
        <?php
            $select = "SELECT * FROM userdetails WHERE User_ID = '$UserID'";
            $res = $conn->query($select);
            if ($res->num_rows > 0) {
                $fetch = mysqli_fetch_assoc($res);
            }
        ?>

        <h1><?php echo $fetch['User_Name']; ?></h1>

        <fieldset>
        <form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">

            <label><b>Profile Image</b></label><br>
            <?php
                   echo '<img src="uploaded_img/' . $fetch['image'] . '" alt="Profile Image" width="10%" height="10%">';
            ?>
            <input type="file" name="image" accept="image/*"><br><br>

            <label><b>User Name</b></label>
            <input type="text" name="upUname" id="un" value="<?php echo $fetch['User_Name']; ?>">

            <label><b>Email</b></label>
            <input type="text" name="upEmail" id="email" pattern="[^\s@]+@[^\s@]+\.[^\s@]+" value="<?php echo $fetch['Email']; ?>">

            <label><b>First Name</b></label><br>
            <input type="text" name="upFname" value="<?php echo $fetch['First_Name']; ?>">
            <br><br>

            <label><b>Last Name</b></label><br>
            <input type="text" name="upLname" value="<?php echo $fetch['Last_Name']; ?>">
            <br><br>

            <label><b>Date of Birth</b></label><br>
            <input type="text" name="upDOB" value="<?php echo $fetch['DOB']; ?>">
            <br><br>

            <label><b>Gender</b></label><br>
            <input type="radio" name="upGend" value="Male" <?php if ($fetch['Gender'] == 'Male') echo 'checked'; ?>>Male
            <input type="radio" name="upGend" value="Female" <?php if ($fetch['Gender'] == 'Female') echo 'checked'; ?>>Female


            <br><br>

            <label><b>Marital Status</b></label><br>
            <select name="upMS" id="ms" >
                <option value="<?php echo $fetch['Marital_Status']; ?>"><?php echo $fetch['Marital_Status']; ?></option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
                <option value="Divorced">Divorced</option>
            </select>
            <br><br>

            <label><b>Address</b></label><br>
            <textarea name="upAddress" id="address" rows="4" cols="50"><?php echo $fetch['Address']; ?></textarea>
            <br><br>

            <label><b>Phone Number</b></label><br>
            <input type="tel" name="upPN" id="pn" value="<?php echo $fetch['Phone_No']; ?>">
            <br><br>
        
            <label><b>Existing Password</b></label><br>
            <input type="password" name="oldPW" class="pw" placeholder="Enter your previous password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
            <label><b>New Password</b></label><br>
            <input type="password" name="newPW" class="pw" id ="psw" placeholder="Enter new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
            <label><b>Confirm Password</b></label><br>
            <input type="password" name="conPW" class="pw" id ="cpsw" placeholder="Confirm new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>

            <input type="radio" name="pwview" id="view" value="view" onclick="viewPassword();">
            <label for="viewe"><i class="fa-sharp fa-solid fa-eye"></i></label>
            <input type="radio" name="pwview" id="view" value="hide" onclick="hidePassword();">
            <label for="hide"><i class="fa-solid fa-eye-slash"></i></label>

            <br><br>
            <input type="submit" value="Update Profile" name="Update" id="Upd" onclick="return confirmUpdate();">

            <input type="submit" value="Delete Profile" name="Delete" id="Del" onclick="return confirmDelete();">
        
        </form>
        </fieldset>

            <br><br>

            <hr>

        <!--Footer BEGINS-->
           <footer>
                <table width="100%">
                    <tr class="footTable">
                        <th width="20%">Services</th>
                        <th width="20%">Explore</th>
                        <th width="20%">Need Any<br>Support?</th>
                        <th width="20%"> </th>
                        <th width="20%">Follow Us On</th>
                    </tr>

                    <tr class="footTable">
                        <td>
                            <ul>
                                <li><a href="PPhomePage.php">Purchase Policy</a></li>
                                <li><a href="enter login details.php">Make Payment</a></li>
                                <li><a href="makeClaim.php">Make Claim</a></li>
                                <li><a href="renewpolicy.php">Renew Policy</a></li>
                            </ul>
                        </td>

                        <td>
                            <a href="AboutUs.html">About Us</a>
                        </td>
                        <td>
                            <i class="fa-solid fa-phone"></i> +94771231231<br><br>
                            <i class="fa-solid fa-envelope"></i> quintetlifeinsurance@info.lk <br><br>
                            <i class="fa-solid fa-fax"></i> +94112123123 <br><br>
                        </td>
                        <td>
                            <i class="fa-solid fa-location-dot"></i> No.456,<br>Royal Road,<br>Colombo,<br>Sri Lanka
                        </td>
                        <td>
                            <a href="#"><i class="fa-brands fa-square-facebook" style="font-size:30px;"></i></a>
                            <a href="#"><i class="fa-brands fa-square-twitter" style="font-size:30px;"></i></a>
                            <a href="#"><i class="fa-brands fa-square-instagram" style="font-size:30px;"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin" style="font-size:30px;"></i></a> 
                            <br><br><br><br>
                            <div id="Cpyright"><i class="fa-regular fa-copyright"></i>2023 All Rights Reserved</div>
                        </td>
                    </tr>
                </table>
            </footer>
        <!--Footer ENDS-->


        <!--THE JAVA SCRIPT FILE OF THE PAGE--> 
        <script src="./js/userProfile.js"></script>

    </body>

</html>