<!--Home Page After Login-->
<?php
    require 'config.php';
    session_start();
    $UserID = $_SESSION['user_id'];

    $query = "SELECT * FROM userdetails WHERE User_ID = '$UserID'";
    $result = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($result)
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
      <p allign="right"><label for="Read details">Already Submit a form</label>
         <a href="claim form result.php"><input type ="button" name="readData" class="buttons1" value="View Details"></a></p><br><br>

        <form class="form" method="POST" action="submittedclaim.php">
            <fieldset id="overviewfieldset">

            <p class="heading">Claim Application Form</p>


            <fieldset>
                <legend>Policy Holder Details</legend>
                    <table class="tables">
                        <tr><td><label for="fullname">Full Name:</label></td>
                            <td><label for="name with initials">Name with initials:</label></td></tr> 
                            <tr><td><input type="text" name="fullName" placeholder="Full name" required></td>
                            <td><input type="text" name="name" placeholder="Name with initials(Thilakarathna S.T.D)" required></td></tr>  
                            <tr><td><label for="DOB">Date of Birth:</label></td>
                            <td><label for="telNo">Mobile Number:</label></td></tr>
                            <tr><td><input type="date" name="pDOB" max="2023-06-11" required></td>
                            <td><input type="textbox" name="pContactNo" placeholder="0XXXXXXXXX" maxlength="10" required></td></tr>
                            <tr><td><label for="Address">Address:</label></td>
                            <td><label for="email">Email:</label></td></tr>
                            <tr><td><textarea name="pAddress" rows="3" cols="50" placeholder="No, Street Name,City" required></textarea></td>
                            <td><input type="email" name="pEmail" placeholder="someone@gmail.com"required></td></tr>

                            <tr><td id="option"><label for="gender">Gender:</label>
                            <input type="radio" name="pgender" id="Male" value="Male" required>
                            <label for="Male">Male</label>
                            <input type="radio" name="pgender" id="Female" value="Female" required>
                            <label for="Female">Female</label>
                            <input type="radio" name="pgender" id="other" value="Other" required>
                            <label for="other">Other</label></td>
                            <td><label for="NIC">NIC:</label></td></tr>
                            <tr><td></td><td><input type="textbox" name="pNIC" placeholder="XXXXXXXXXXv / XXXXXXXXXXXX" maxlength="12" required></td></tr>
                            
                    </table>
            </fieldset>
                
            <fieldset>
                <legend>Policy Details</legend>
                <table class="tables">
                    <tr><td><label for="policyNo">Policy Number:</label></td>
                        <td><label for="policyType">Policy Type:</label></td></tr>
                        <tr><td><input type="textbox" name="policyNo" placeholder="0XXXXXXXXX" required></td>
                        <td><input type="text" name="policyType" placeholder="Policy type" required></td></tr>
                        <tr><td><label for="Policydate">Policy Date:</label></td></tr>
                        <tr><td><input type="date" name="policyDate" max="2023-06-11" required></td></tr>
                </table> 
            </fieldset>
               
            <fieldset>
                <legend>Details of the death</legend>
                <table class="tables">
                    <tr><td><label for="DoD">Date of Death:</label></td>
                    <td><label for="cause"> cause of Death:</label></td></tr>
                    <tr><td><input type="date" name="DOD" max="2023-06-11" required></td>
                    <td><textarea name="causeDeath" rows="3" cols="70" placeholder="Cause of Death" required></textarea></td></tr>
                </table>
            </fieldset>    

            <fieldset>
                <legend>Beneficiary Details</legend>
                <table class="tables" >
                    <tr><td><label for="beneficary Full name">Full Name:</label></td>
                    <td><label for="beneficiary name with initials">Name with initials:</label></td></tr>
                    <tr><td><input type="text" name="bFullname" placeholder="Full Name" required></td>
                    <td><input type="text" name="bName" placeholder="Name with initials(Thilakarathna S.T.D)" required></td></tr>
                    <tr><td><label for="beneficary address">address:</label></td>
                    <td><label for="telNo">Mobile Number:</label></td></tr>
                    <tr><td><textarea name="bAddress" rows="3" cols="50" placeholder="No, Street Name,City" required></textarea></td>
                    <td><input type="textbox" name="bContactNo" placeholder="0XXXXXXXXX" maxlength="10" required></td></tr>

                    <tr><td id="option"><label for="Beneficiary gender">Gender:</label>
                    <input type="radio" name="bGender" id="Bmale" value="Male" required>
                    <label for="Bmale">Male</label>
                    <input type="radio" name="bGender" id="Bfemale" value="Female" required>
                    <label for="Bfemale">Female</label>
                    <input type="radio" name="bGender" id="Bother"value="Other" required>
                    <label for="Bother">Other</label></td>
                    <td><label for="NIC">NIC (Optional):</label></td></tr>
                    <td></td><td><input type="textbox" name="bNIC" placeholder="XXXXXXXXXXv/XXXXXXXXXXXX" maxlength="12"></td></tr>
                    <tr><tr><td><label for="relationship to the deceased">Relationship to the Deceased:</label></td></tr>
                    <tr><td><select id="options" name="bRelationship" placeholder="Please select..">
                        <datalist id="options">
                            <option value="please select">Please select..</option>
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
            <tr><td ><textarea name="feedback" rows="4" cols="70" ></textarea></td></tr>
            
            <tr><td ><label  for="date of submission">Date of Submission:</label>
            <input  type="textbox" name="DOSubmission" placeholder="yyyy/mm/dd" required></td></tr>
            </table>
            </fieldset>

            <input type ="submit" name="submit" class="buttons" value="Submit">
            <input type="reset" name="Reset" class="buttons" value="Clear All">
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
        <script src="./js/Make a claim js.js"></script>

    </body>