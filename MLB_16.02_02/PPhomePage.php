<!--Purchase a Policy Home Page-->

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

        <!--Add css file-->
        <link rel="stylesheet" href="css/HeaderAndFooterStyles.css">
        <link rel="stylesheet" href="css/PPhomepage.css">

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
                    </div>
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

        <!--Slides Begins-->

        <div class="image-slides" style="max-width:500px">
            <img class="mySlides" src="images/checklist-buying-health-insurance.jpg" style="width:250%">
            <img class="mySlides" src="images/Family-pic-for-life-insurance-blog.jpg" style="width:250%">
            <img class="mySlides" src="images/featured_image_health_Money_Geek_1ffb3f77b2.webp" style="width:250%">
            <img class="mySlides" src="images/Insurance-Higher-Rates-hd-wallpaper-hdwallwide.com_.jpg" style="width:250%">
            <img class="mySlides" src="images/istockphoto-1204150667-612x612.jpg" style="width:250%">
          </div>

          <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 4000); // Change image every 2 seconds
            }
            </script><br><br>

            <!--Slides Ends-->

            <!--Content Begins-->

            <img src="images/tli.png" class="tli" width="300px">
            <img src="images/pli.png" class="pli" width="300px">

                <a href="TLI.html" style="text-decoration: none;"><button class="button1"><span></span>More Information</button></a>
                <a href="PLI.html" style="text-decoration: none;"><button class="button2"><span></span>More Information</button></a>
           

        
       <a href="PPapplicationForm.php" style="text-decoration: none;"><div><button class="button3"><span></span>Application Form</button></div></a>
       <br>
        
       <a href="PPviewForm.php" style="text-decoration: none;"><div><button class="button3"><span></span>Review Application Form</button></div></a>

       <!--Content Ends-->
        
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