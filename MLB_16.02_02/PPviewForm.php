<!--View submitted data of Form-->

<?php
    require 'config.php';
    session_start();
    $UserID = $_SESSION['user_id'];

    $query = "SELECT * FROM Purchase_policy WHERE User_ID = '$UserID'";
    $result = mysqli_query($conn, $query);
    $abc = mysqli_fetch_assoc($result);

    if (isset($_POST['commentdel'])) {
        $variable = "DELETE FROM Purchase_policy WHERE User_ID = '$UserID'";
    
        if ($conn->query($variable)) {
            echo "Deleted successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    
    if (isset($_POST['commentedit'])){
        $variableupdate = $_POST["que3"];
        $upq = "UPDATE Purchase_policy SET CommentsAndQuestions = '$variableupdate' WHERE User_ID = '$UserID'";
    
        if ($conn->query($upq)) {
            echo "Inserted successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Quintet LIS</title>

        <!--Add css file-->
        <link rel="stylesheet" href="css/HeaderAndFooterStyles.css">
        <link rel="stylesheet" href="css/PPaplicationForm.css">

        <!--Add icons to the Footer-->
        <script src="https://kit.fontawesome.com/8d1ac6ad03.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <!--Begins of Header Section-->
        <table width="100%">
            <tr>
                <td width="20%">
                    <img src="Images/complete logo.png" alt="logo" width="300" id="logo">
                </td>

                <td width="50%">
                    <div class="headTopic">
                        <h1 id="mainHeading">Quintet Life Insurance</h1>
                        <h3 id="slogan">Life is Precious. We are here to safeguard it!</h3>
                </td>

                <td width="20%">
                    <div class="LoginRegisterB">
                        <img src="images/profile.png" width="60" class="proimg">
                        <!--This might change with the Backend(DOUBT CODE)-->
                        <select id="LogInOut">
                            <option id="UserName">UserName</option>
                            <option>LogOut</option>
                        </select>
                    </div>
                </td>
            </tr>
        </table>

        <!--Ends of Header Section-->

        <!--Begins of Navigation Bar-->

        <div class="nav_panel">
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
        <!--Ends of Navigation Bar-->

         <!--Form Begin-->

         <img src="images/wallpaperflare.com_wallpaper (1).jpg" clss="bimg"  width="250%" style=" filter: blur(8px); -webkit-filter: blur(8px);">
            <div class="box">
                <h2 align="center">Reviwe My Purchase Policy Application Form</h2><br>
                    <h3>Policyholder Personal Information</h3>

                    <div>

                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <label for="iname">Name with Initials : </label>
                            <input type="text" name="iname"id="Iname" value="<?php echo $abc['Name_with_initials']; ?>" style=" border: none; width: 585px;" >
                            <br><br>
                            <label for="fname">Full Name : </label>
                            <input type="text" name="fname"id="fnmae"  value="<?php echo $abc['Full_name']; ?>" style=" border: none;width: 640px;">
                            <br><br>
                            <label for="bday">Date of Birth : </label>
                            <input type="date" id="bday" name="bday" value="<?php echo $abc['DOB']; ?>" style=" border: none;" >
                            <br><br>
                            <label for="gender">Choose Your Gender : </label>
                                <label for="male">Male</label>
                                <input type="radio" name="gen" id="male" value="male"checked style=" border: none;">
                                <label for="female">Female</label>
                                <input type="radio" name="gen" id="female" value="female" style=" border: none;">
                            <br><br>
                            <label for="nation">Nationality : </label>
                                <select name="nation"id="nationality" style=" border: none;">
                                    <option value="<?php echo $abc['Natioanality']; ?>"><?php echo $abc['Natioanality']; ?> </option>
                                    
                                </select>
                            <br><br>
                            <label for="occupation"> Occupation : </label>
                            <input type="text" name="occ"id="occupation" value="<?php echo $abc['Occupation']; ?>" style=" border: none; width: 630px;">
                            <br><br>
                            <label for="contact number">Contact Number : </label>
                            <input type="tel" name="cNum" id="contact number" value="<?php echo $abc['Contact_number']; ?>" style=" border: none;">
                            <br><br>
                            <label for="address">Permenant Address : </label>
                            <input type="text" name="add" id="address" value="<?php echo $abc['Address']; ?>"  style=" border: none; width:575px;">
                            <br><br>
                            <label for="email">E-mail : </label>
                            <input type="email" name="mail" id="=email" value="<?php echo $abc['Email']; ?>" style=" border: none;">
                            <br><br><br>
                        
                            <h3>Policy Details</h3>
                            
                                <label for="policy type">Type of the Polcy : </label>
                                <select name="pType" id="policy type" style=" border: none;">
                                    <option value="<?php echo $abc['Policy_type']; ?>" >Term Life Insurance</option>
                                    
                                </select>
                                <br><br>
                                <label for="policy name">Name of the Policy : </label>
                                <select name="pName" id="policy name" style=" border: none;">
                                    <option value="<?php echo $abc['Policy_name']; ?>"> Decreasing Term Life Insurance</option>
                                    
                                </select>
                                <br><br>
                                
                                <label for="policy term">Desired Policy Term : </label>
                                <select name="pTerm" id="policy term" style=" border: none;">
                                    <option value="<?php echo $abc['Policy_term']; ?>">10 years</option>
                                    
                                </select> 
                                <br><br><br>

                            <h3>Health Informations</h3>
                            
                                <label for="medical details">Have you ever been diagnosed with any serious medical conditions?(If yes, Please provide details) : </label><br>
                                    <label for="yes">Yes</label>
                                    <input type="radio" name="medi" id="medical details" value="Yes" <?php if ($abc['Medical_conditions'] == 'Yes') echo 'checked';?> style=" border: none;">
                                    <label for="no">No</label>
                                    <input type="radio" name="medi" id="medical details" value="No"  <?php if ($abc['Medical_conditions'] == 'No') echo 'checked';?> style=" border: none;"><br>
                                    <input type="text"  id="description" style=" border: none; width: 580px;">
                                <br><br>

                                <label for="question">Are you smoker?</label>
                                    <label for="yes">Yes</label>
                                    <input type="radio" name="que1" id="que1" value="yes" <?php if ($abc['Smoker'] == 'yes') echo 'checked';?> style=" border: none;">
                                    <label for="no">No</label>
                                    <input type="radio" name="que1" id="que1" value="no" <?php if ($abc['Smoker'] == 'no') echo 'checked';?> style=" border: none;">
                                <br><br>

                                <label for="question">Have you ever been decline for life insurance or had a policy canceled or postponed?</label>
                                    <label for="yes">Yes</label>
                                    <input type="radio" name="que2" id="que2" value="yes" <?php if ($abc['Policy_cancellations'] == 'yes') echo 'checked';?> style=" border: none;">
                                    <label for="no">No</label>
                                    <input type="radio" name="que2" id="que2" value="no" <?php if ($abc['Policy_cancellations'] == 'no') echo 'checked';?> style=" border: none;">
                                <br><br><br>
                            
                            <h3>Benificiary Informations</h3>
                            
                                <label>Full Name : </label>
                                <input type="text" name="Bname" id="name" value="<?php echo $abc['Benificiary_FullName']; ?>"style=" border: none; width: 650px;">
                                <br><br>
                                <label>Relationship : </label>
                                <input type="text" name="rel" id="relation"  value="<?php echo $abc['Relationship']; ?>" style=" border: none; width: 635px;">
                                <br><br>
                                <label>Contact Number : </label>
                                <input type="tel" name="BconNum" id="phone" value="<?php echo $abc['Benificiary_ContactNumber']; ?>" style="border: none;" >
                                <br><br>
                                <label>Address : </label>
                                <input type="text" name="Badd" id="address" value="<?php echo $abc['Benificiary_Address']; ?>" style=" border: none; width: 660px;">
                                <br><br>
                                <label>E-mail : </label>
                                <input type="email" name="Bmail" id="email" value="<?php echo $abc['Benificiary_Email']; ?>" style=" border: none;">
                                <br><br>

                                <label>Do you have any additional comments or questions?</label>
                                <input type="text" name="que3" id="que3" value="<?php echo $abc['CommentsAndQuestions']; ?>" style=" border: none; width: 350px;">
                                <br><br>
                                
                                <input type="submit" name="commentedit" value="Edit Comment" style="width:150px;">
                                <br><br>

                              <hr>

                            <h3>Declaration</h3>

                                <p>
                                    I declare that the information provided in this application is true, complete and accurate to the best of my knowledge. Iunderstand that any misrepresentation may result in denial of a claim or cancellation of the policy.
                                    <br><br>
                                    I have read and understood the policy terms, including coverage, exclusions and premium payments. I agree to abide by thesee terms.
                                    <br><br>
                                    I have not withheld any information that would affect the acceptance or assessment of this application. I will promptly inform the insurance company of any changes that may affect the policy.
                                    <br><br>
                                    I authorize the insurance campany to collect, use, store and disclose my personal information in accordance with applicable privacy laws.
                                    <br><br>
                                    I understand that the policy will only be affective upon receipt of the initial premium payment and subsequent approval of this application.
                                    <br><br>
                                </p>
                                <br><br>
                    
                                <label>Date : </label>
                                <input type="date" name="date" id="date" value="<?php echo $abc['Submission_date']; ?>" style=" border: none;">
                                <br><br>
                                
                                <center>
                                <input type="submit" name="commentdel" value="Delete">
                                </canter>
                                
                        </form>
                    </div>
                    </div>

        <!--Ends of Form-->            


        <!--Begins of Footer-->

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
                        <ul class="services">
                                <li><a href="PPhomePage.php">Purchase Policy</a></li>
                                <li><a href="enter login details.php">Make Payment</a></li>
                                <li><a href="makeClaim.php">Make Claim</a></li>
                                <li><a href="renewpolicy.php">Renew Policy</a></li>
                        </ul>
                    </td>

                    <td>
                        <a href="#" class="explore">About Us</a>
                    </td>
                    <td>
                        <i class="fa-solid fa-phone"></i> +94771231231<br><br>
                        <i class="fa-solid fa-envelope"></i> quintetlifeinsurance@info.lk <br><br>
                        <i class="fa-solid fa-fax"></i> +94112123123 <br><br>
                        <i class="fa-solid fa-location-dot"></i> No.456, Royal Road, Colombo,<br>&nbsp;&nbsp;&nbsp; Sri Lanka
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        <a href="#"><i class="fa-brands fa-square-facebook" style="font-size:30px;"></i></a>
                        <a href="#"><i class="fa-brands fa-square-twitter" style="font-size:30px;"></i></a>
                        <a href="#"><i class="fa-brands fa-square-instagram" style="font-size:30px;"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin" style="font-size:30px;"></i></a> 
                        <br><br><br><br>
                        <div id="Cpyright" style="font-size: 10px; position: relative; top:50px;"><i>2023 All Rights Reserved</i></div>
                    </td>
                </tr>


            </table>

        </footer>

        <!--Ends of Footer-->

    </body>

</html>