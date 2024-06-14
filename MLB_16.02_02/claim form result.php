

<!--Home Page After Login-->
<?php
    require 'config.php';
    session_start();
    $UserID = $_SESSION['user_id'];

    $query = "SELECT * FROM userdetails WHERE User_ID = '$UserID'";
    $result = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($result);

    $qry = "SELECT * FROM claimDetails WHERE User_ID = '$UserID'";
    $rslt = mysqli_query($conn, $qry);
    $std = mysqli_fetch_assoc($rslt);

    if (isset($_POST['update'])){
        $editButton=$_POST["feedback"];
        $updte="UPDATE claimDetails SET Customer_Feedback = '$editButton' where User_ID='$UserID'";

        if($conn->query($updte)){
            echo "Inserted Successfully";
        }else{
            echo "Error : ".$conn->error;
        }
    }

    if(isset($_POST['delete'])){
        $dltButton="DELETE FROM claimDetails where user_ID='$UserID'";

        if($conn->query($dltButton)){
            echo "Deleted Successfully";
        }else{
            echo "Error : ".$conn->error;
        }
    }
?>






<!DOCTYPE html>
<html>
    <head>
        <title>Quintet LIS</title>

        <!--To add CSS file-->
        <link rel="stylesheet" href="css/Make a claim Css.css">

        <!--To add Icons to the footer-->
        <script src="https://kit.fontawesome.com/8d1ac6ad03.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <!--Header section BEGINS-->
        <table width="100%">
            <tr>
                <td width="20%">
                    <img src="Images/logo.png" alt="logo" width="25%" height="25%" id="logo">
                </td>

                <td width="50%">
                    <div class="headTopic">
                        <h1 id="mainHeading">Quintet Life Insurance</h1>
                        <h3 id="slogan">&nbsp;&nbsp;Life is Precious. We are here to safeguard it!</h3>
                </td>
                <td width="20%">
                <div class="LoginRegisterB">
                    <?php
                            echo '<img src="uploaded_img/' . $fetch['image'] . '" alt="Profile Image" width="20%" height="20%">';
                    ?>
                    <input type="button" value="<?php echo $fetch['User_Name'];?>" id="ViewPro">
                        
                    </div>
                </td>


    
            </tr>
        </table>

        <!--Header section ENDS-->

        <!--Navigation Bar BEGINS-->

        <div class="navBar">
            <ul>
    
                <li><a href="HomePage2.php">Home</a></li>
                <li><a href="AboutUs.html">About Us</a></li>
                <li><a href="ContactUs.html">Contact Us</a></li>
                <li><a href="PPhomePage.php">Purchase a Policy</a></li>
                <li><a href="enter login details.php">Make Payment</a></li>
                <li><a href="makeClaim.php">Make a Claim</a></li>
                <li><a href="renewpolicy.php">Renew Policy</a></li>
    
            </ul>

        </div>

        <!--Navigation Bar ENDS-->
        <center>
      <!--Application form BEGIN-->
        <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset id="overviewfieldset">

            <p class="heading">Claim Application Form</p>

            <fieldset>
                <legend>Policy Holder Details</legend>
                    <table class="tables">
                        <tr><td><label for="fullname">Full Name:</label></td>
                            <td><label for="name with initials">Name with initials:</label></td></tr> 
                            <tr><td><input type="text" name="fullName" value="<?php echo $std['PolicyHolder_Fullname'];?>" readonly></td>
                            <td><input type="text" name="name" value="<?php echo $std['PolicyHolder_Name'];?>" readonly></td></tr>  
                            <tr><td><label for="DOB">Date of Birth:</label></td>
                            <td><label for="telNo">Mobile Number:</label></td></tr>
                            <tr><td><input type="date" name="pDOB" value="<?php echo $std['PolicyHolder_DOB'];?>" readonly></td>
                            <td><input type="textbox" name="pContactNo" value="<?php echo $std['PolicyHolder_Number'];?>" readonly></td></tr>
                            <tr><td><label for="Address">Address:</label></td>
                            <td><label for="email">Email:</label></td></tr>
                            <tr><td><textarea name="pAddress" rows="3" cols="50" ><?php echo $std['PolicyHolder_address'];?></textarea></td>
                            <td><input type="email" name="pEmail" value="<?php echo $std['PolicyHolder_Email'];?>" readonly></td></tr>

                            <tr><td id="option"><label for="gender">Gender:</label>
                            <input type="radio" name="pgender" id="Male" value="Male"  <?php if ($std['PolicyHolder_Gender']=='Male') echo 'checked';?> readonly>
                            <label for="Male">Male</label>
                            <input type="radio" name="pgender" id="Female" value="Female" <?php if ($std['PolicyHolder_Gender']=='Female') echo 'checked';?> readonly>
                            <label for="Female">Female</label>
                            <input type="radio" name="pgender" id="other" value="Other" <?php if ($std['PolicyHolder_Gender']=='other') echo 'checked';?>readonly>
                            <label for="other">Other</label></td>
                            <td><label for="NIC">NIC:</label></td></tr>
                            <tr><td></td><td><input type="textbox" name="pNIC" value="<?php echo $std['PolicyHolder_NIC'];?>" readonly></td></tr>
                            
                    </table>
            </fieldset>
                
            <fieldset>
                <legend>Policy Details</legend>
                <table class="tables">
                    <tr><td><label for="policyNo">Policy Number:</label></td>
                        <td><label for="policyType">Policy Type:</label></td></tr>
                        <tr><td><input type="textbox" name="policyNo" value="<?php echo $std['Policy_Number'];?>" readonly></td>
                        <td><input type="text" name="policyType" value="<?php echo $std['Policy_Type'];?>" readonly></td></tr>
                        <tr><td><label for="Policydate">Policy Date:</label></td></tr>
                        <tr><td><input type="date" name="policyDate" value="<?php echo $std['Policy_date'];?>" readonly></td></tr>
                </table> 
            </fieldset>
               
            <fieldset>
                <legend>Details of the death</legend>
                <table class="tables">
                    <tr><td><label for="DoD">Date of Death:</label></td>
                    <td><label for="cause"> cause of Death:</label></td></tr>
                    <tr><td><input type="date" name="DOD" max="2023-06-11" value="<?php echo $std['Date_death'];?>" readonly></td>
                    <td><textarea name="causeDeath" rows="3" cols="70" ><?php echo $std['Cause_death'];?>></textarea></td></tr>

                </table>
            </fieldset>    

            <fieldset>
                <legend>Beneficiary Details</legend>
                <table class="tables" >
                    <tr><td><label for="beneficary Full name">Full Name:</label></td>
                    <td><label for="beneficiary name with initials">Name with initials:</label></td></tr>
                    <tr><td><input type="text" name="bFullname" value="<?php echo $std['Benificiary_Fullname'];?>" readonly></td>
                    <td><input type="text" name="bName" value="<?php echo $std['Beneficiary_Name'];?>" readonly></td></tr>
                    <tr><td><label for="beneficary address">address:</label></td>
                    <td><label for="telNo">Mobile Number:</label></td></tr>
                    <tr><td><textarea name="bAddress" rows="3" cols="50"  ><?php echo $std['Beneficiary_Address'];?></textarea></td>
                    <td><input type="textbox" name="bContactNo" value="<?php echo $std['Beneficiary_Number'];?>" readonly></td></tr>

                    <tr><td id="option"><label for="Beneficiary gender">Gender:</label>
                    <input type="radio" name="bGender" id="Bmale" value="Male" <?php if ($std['PolicyHolder_Gender']=='Male') echo 'checked';?> readonly>
                    <label for="Bmale">Male</label>
                    <input type="radio" name="bGender" id="Bfemale" value="Female" <?php if ($std['PolicyHolder_Gender']=='Female') echo 'checked';?> readonly>
                    <label for="Bfemale">Female</label>
                    <input type="radio" name="bGender" id="Bother"value="Other" <?php if ($std['PolicyHolder_Gender']=='Other') echo 'checked';?> readonly>
                    <label for="Bother">Other</label></td></tr>
                    <tr><tr><td><label for="relationship to the deceased">Relationship to the Deceased:</label></td></tr>
                    <tr><td><select id="options" name="bRelationship" >
                        <datalist id="options">
                            <option value="<?php echo $std['Relationship_to_Deceased'];?>"><?php echo $std['Relationship_to_Deceased'];?>readonly></option>
                            <option value = "Joint life assured">Joimt life assured</option>
                            <option value="Husband/Wife/Civil partner">Husband/Wife/Civil Partner</option>
                            <option value="Child">Child</option>
                            <option value="Other">Other</option>
                        </datalist></td></tr>
                </table>
            </fieldset>

            <br>
            <fieldset id="comment">
            <table id="set">
            <tr><td> <label for="feedback">Is there anything else you want to tell us or think we need to know? (optional)</label></td></tr>
            <tr><td ><textarea name="feedback" rows="4" cols="70" > <?php echo $std['Customer_Feedback'];?></textarea></td></tr>
            
            <tr><td ><label  for="date of submission">Date of Submission:</label>
            <input  type="textbox" name="DOSubmission" value="<?php echo $std['Date_Submission'];?>" ></td></tr>
            </table>
            </fieldset>

            <input type ="submit" name="update" class="buttons" value="Edit">
            <input type="submit" name="delete" class="buttons" value="Delete">
           <a href="claim T&C.html"> <input type="button" name="next" class="buttons" value="Next"></a>

        </fieldset>
        </form>
      
    </center>
            <br><br>
            <!--Application form END-->
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
        <script src="./js/claim form result.js"></script>

    </body>