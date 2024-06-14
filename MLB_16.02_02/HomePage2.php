<!--Home Page After Login-->
<!--Coded by IT22603586 Aponso G.I.A-->
<?php
require 'config.php';
session_start();
$UserID = $_SESSION['user_id'];

$query = "SELECT * FROM userdetails WHERE User_ID = '$UserID'";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_assoc($result);  
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Quintet LIS</title>

        <!--To add CSS file-->
        <link rel="stylesheet" href="css/homePagestyles.css">

        <!--To add Icons-->
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
                            echo '<img src="uploaded_img/' . $fetch['image'] . '" alt="Profile Image" width="20%" height="20%">';
                        ?>

                        <a href="UserProfile.php"><input type="button" value="<?php echo $fetch['User_Name'];?>" id="ViewPro"></a>
                        <a href="Logout.php"><input type="button" value="LogOut" name="logout" id="logout"></a>
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

        <!--Cover long Image-->
        <div class="slideshow-container">
            <img src="Images/IWTpic1.jpg" width="100%" class="SlideImage">
        </div>

        <!--Contain BEGINS-->
        <div id="heading1inBody">
            <center>
            <h1 id="OurServices">Our Services</h1>
            </center>
        </div>

        <div class="overSerCont">
            <table style="width:100%">
                <tr>
                    <td width="20%">
                        <img src="Images/IWTpic2.jpg" alt="Purchase a Policy" width="250px" height="250px">
                        <br>
                    </td>
                    <td width="30%">
                        <h3>Purchase a Policy</h3>
                        <p>Experience a hassle-free policy purchase process with Quintet Life Insurance. Our user-friendly platform allows you to 
                            explore and select the perfect coverage options tailored to your needs.</p>

                        <a href="PPhomePage.php"><input type="button" value="More" id="More"></a>
                    </td>
                    <td width="20%">
                        <img src="Images/IWTpic3.jpg" alt="Make Payment" width="250px" height="250px">
                    </td>
                    <td width="30%">
                        <h3>Make Payment</h3>
                        <p>Conveniently manage your premium payments with Quintet Life Insurance. Our secure online payment system offers 
                            multiple options, including credit/debit cards and online banking, for easy and timely payments.</p>

                        <a href="enter login details"><input type="button" value="More" id="More"></a>
                    </td>
                </tr>

                <tr>
                    <td width="20%">
                        <img src="Images/IWTpic4.jpg" alt="Make a Claim" width="250px" height="250px">
                    </td>
                    <td width="30%">
                        <h3>Make a Claim</h3>
                        <p>During challenging times, rely on Quintet Life Insurance for a smooth and efficient claims process. 
                            Our dedicated claims team provides guidance and support to ensure your claim is processed promptly and with care.</p>

                        <a href="makeClaim.php"><input type="button" value="More" id="More"></a>
                    </td>
                    <td width="20%">
                        <img src="Images/IWTpic5.jpg" alt="Renew Policy" width="250px" height="250px">
                    </td>
                    <td width="30%">
                        <h3>Renew Policy</h3>
                        <p>Never worry about policy expiration with Quintet Life Insurance. Our timely reminders and simple 
                            renewal process make it easy to keep your coverage active and uninterrupted.</p>

                        <a href="renewpolicy.php"><input type="button" value="More" id="More"></a>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <h3 id="WeAre">We Are...</h3>

                        <br>

                        <p>At Quintet Life Insurance, we are a team committed to providing 
                            exceptional life insurance solutions in Sri Lanka. With experience in the industry, 
                            we bring expertise and reliability to every policy we offer. Our goal is to protect and secure 
                            the financial future of our valued customers, ensuring peace of mind for themselves and their 
                            loved ones. As a trusted insurance provider, we prioritize transparency, customer satisfaction, 
                            and the highest standards of service. Choose Quintet Life Insurance and let us be your partner 
                            in safeguarding your future.</p>
                        <br>

                        <a href="AboutUs.html"><input type="button" value="Read More" id="ReadMore"></a>

                    </td>

                    <td colspan="2">
                        <img src="Images/IWTpic6.jpg" alt="ReadMore" width="500px" height="200px" id="readMoreImg">
                    </td>
                </tr>
            </table>

            <br><br>

        </div>
        <!--Contain ENDS-->
        
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


    </body>
</html>