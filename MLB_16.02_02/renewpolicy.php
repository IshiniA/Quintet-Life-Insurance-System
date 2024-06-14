<!--Renew Policy page-->
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
        <title>Quintet-Renew Policy</title>

        <!--To add CSS file-->
        <link rel="stylesheet" href="css/homePagestyles.css">
		<link rel="stylesheet" href="css/RenewP.css">

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
    
                <li><a href="HomePage2.php"><b>Home</b></a></li>
                <li><a href="AboutUs.html"><b>About Us</b></a></li>
                <li><a href="ContactUs.php"><b>Contact Us</b></a></li>
                <li><a href="#"><b>Purchase a Policy</b></a></li>
                <li><a href="#"><b>Make Payment</b></a></li>
                <li><a href="#"><b>Make a Claim</b></a></li>
                <li><a href="Renew Policy.html"><b>Renew Policy</b></a></li>
    
            </ul>

        </div>

        <!--Navigation Bar ENDS-->

        <!--Renew Policy Application Form starts-->
      
        <img src="Images/renew1.jpg" alt="logo" width="620" height="762" id="renew1">
        
        <label for="Read">Already Submitted the Form: </label>
        <a href="readrenewpolicy.php"><input type="button" name="readdata" value="View Form"></a>

		<fieldset id="fields">
            <center>
			<h1> Renew Policy Application Form </h1>
          
            <form class="form" action="SubmitRenewPolicyForm.php" method="POST">
    
              <fieldset>
                <legend>Policy Holder Details</legend>
                <table class="tables">
                        <tr><td><label for="fullname">Full Name: </label></td>
                        <td><input type="text" placeholder="Full Name" name="pFullname" required></td>

                        <td><label for="Initials">Name with Initials: </label></td>
                        <td><input type="text" placeholder="Name with Initials" name="pinitials" required></td></tr>

                        <tr><td><label for="date">Date of Birth: </label></td>
                        <td><input type="date" name="date" required></td>

                        <td><label for="phoneNumber">Mobile Number: </label></td>
                        <td><input type="textbox" placeholder="0XXXXXXXXX" name="phoneNumber" required></td></tr>
                        
                        <tr><td><label for="address">Address: </label></td>
                        <td><input type="txt" placeholder="No. Street Name, City" name="address" required></td>

                        <td><label for="email">Email: </label></td>
                        <td><input type="txt" placeholder="someone@gmail.com" name="email" required></td></tr>

                        <tr><td><label for="gender">Gender: </label></td>
                        <td><label for="Male">Male: </label><input type="radio" id="Male" name="gender" value="male" >
                        <label for="Female">Female: <input type="radio" id="Female" name="gender" value="Female"></label>
                        <label for="Other">Other: <input type="radio" id="Other" name="gender" value="Other"></label></td>

                        <td><label for="nic">NIC: </label></td>
                        <td><input type="txt" placeholder="XXXXXXXXXv / XXXXXXXXXX" name="nic"></td></tr>
                </table>
       
              </fieldset>
                   
                    
                <fieldset>
                    <legend>Policy Details</legend>
                    <table class="tables">
                        <tr><td><label for="policynumber">Policy Number: </label></td>
                            <td><input type="textbox" placeholder="0XXXXXXXXXX" name="policynumber"></td>

                            <td><Label for="policytype">Policy Type:  </Label></td>
                            <td><input type="text" placeholder="Policy Type" name="policytype"></td></tr>
                        
                            <tr><td><label for="policydate">Policy Date: </label></td>
                            <td><input type="date" name="policydate" required></td>

                            <td><label for="renewaldate">Renewal Date: </label></td>
                            <td><input type="date" name="renewaldate" required></td></tr>
                        </table>
                </fieldset>
                <fieldset>
                    <legend>Beneficiary Details</legend>
                    <table class="tables">
                            <tr><td><label for="benfullname">Full Name: </label></td>
                            <td><input type="text" placeholder="Full Name" name="benfullname" required></td>

                            <td><label for="benInitials">Name with Initials: </label></td>
                            <td><input type="text" placeholder="Name with Initials" name="benInitials" required></td></tr>

                            <tr><td><label for="dob">Date of Birth: </label></td>
                            <td><input type="date" name="bendob" required></td>

                            <td><label for="benphoneNumber">Mobile Number: </label></td>
                            <td><input type="textbox" placeholder="0XXXXXXXXX" name="benphoneNumber" required></td></tr>
                            
                            <tr><td><label for="beneficiary address">Address: </label></td>
                            <td><input type="txt" placeholder="No. Street Name, City" name="benaddress" required></td>

                            <td><label for="beneficiary email">Emai: </label></td>
                            <td><input type="txt" placeholder="someone@gmail.com" name="benemail" required></td></tr>

                            <tr><td><label for="gender">Gender: </label></td>
                            <td><label for="eMale">Male: </label><input type="radio" id="eMale" name="rgender" value="eMale" >
                            <label for="eFemale">Female: <input type="radio" id="eFemale" name="rgender" value="eFemale"></label>
                            <label for="eOther">Other: <input type="radio" id="eOther" name="rgender" value="eOther"></label></td>

                            <td><label for="beneficiary nic">NIC: </label></td>
                            <td><input type="txt" placeholder="XXXXXXXXXv / XXXXXXXXXX" name="bennic"></td>

                            <tr><td><label for="relationship">Relationship: </label></td>
                            <td><input type="txt" placeholder="Son/Daughter etc." name="relationship"></td></tr>
                        </table>
                </fieldset>
                <fieldset>
                    <legend>Additional Requirements</legend>
                    <table class="tables">
                            <tr><td>
                                <label for="requirements">Extend Period: </label>

                                <select id="options" name="polexreq" required>
                                    <datalist>
                                    <option value="Select Requirements">Select Requirements</option>
                                    <option value="Extend Policy Term for 2 years">Extend Policy Term for 2 years</option>
                                    <option value="Extend Policy Term for 5 years">Extend Policy Term for 5 years</option>
                                    <option value="Extend Policy Term for 8 years">Extend Policy Term for 8 years</option>
                                    <option value="Extend Policy Term for 10 years">Extend Policy Term for 10 years</option>
                                    
                                    </datalist>
                                </select>
                            
                                <label for="requirements">Payment Frequency: </label>

                                <select id="requirements" name="prepay" required>
                                    <datalist>
                                        <option value="Select Requirements">Select Requirements</option>
                                        <option value="Annually">Annually</option>
                                        <option value="Semi-Annually">Semi-Annually</option>
                                        <option value="Quarterly">Quarterly</option>
                                        <option value="Monthly">Monthly</option>
                                    </datalist>
                           
                                </select>
                            </td></tr>                       
                        </table>
                </fieldset>
                <br>
                <fieldset id="set">
                        <table class="field">
                                <td class="date"><label for="date" >Date: </label>
                                <input type="text" placeholder="YYYY/MM/DD" name="ddate" required></td></tr>
                        </table>
                </fieldset>

                <input type="submit" value="Submit" class="submit" name="submit">
                <input type="reset" value="Clear All" class="clear" name="Clear All">
                
                
            </form>
        </center>
		</fieldset>
        <br><br><br><br>
   
            <!--Renew Policy Application Form ends-->

            <!--Footer BEGINS-->

            <footer>
                <table width="100%">
                    <tr class="footTable">
                        <th width="20%">Services</th>
                        <th width="20%">Explore</th>
                        <th width="20%">Need Any<br>Support?</th>
                        <th width="20%"></th>
                        <th width="20%">Follow Us On</th>
                    </tr>
            
                    <tr class="footTable">
                        <td>
                            <ul>
                                <li><a href="#">Purchase Policy</a></li>
                                <li><a href="#">Make Payment</a></li>
                                <li><a href="#">Make Payment</a></li>
                                <li><a href="#">Make Claim</a></li>
                                <li><a href="">Renew Policy</a></li>
                            </ul>
                        </td>
            
                        <td>
                            <a href="AboutUs.html">About Us</a>
                        </td>
                        <td>
                            <i class="fas fa-phone"></i> +94771231231<br><br>
                            <i class="fas fa-envelope"></i> quintetlifeinsurance@info.lk <br><br>
                            <i class="fas fa-fax"></i> +94112123123 <br><br>
                        </td>
                        <td>
                            <i class="fas fa-map-marker-alt"></i> No.456,<br>Royal Road,<br>Colombo,<br>Sri Lanka
                        </td>
                        <td>
                            <a href="#"><i class="fab fa-facebook-square" style="font-size:30px;"></i></a>
                            <a href="#"><i class="fab fa-twitter-square" style="font-size:30px;"></i></a>
                            <a href="#"><i class="fab fa-instagram-square" style="font-size:30px;"></i></a>
                            <a href="#"><i class="fab fa-linkedin" style="font-size:30px;"></i></a> 
                            <br><br><br><br>
                            <div id="Cpyright"><i class="far fa-copy"></i>2023 All Rights Reserved</div>
                        </td>
                    </tr>
                </table>
            </footer>
            
            <!--Footer ENDS-->

            

        

        <!--THE JAVA SCRIPT FILE OF THE PAGE-->
        <script src="./js/homePageJS.js"></script>

    </body>