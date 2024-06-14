<!--Home Page After Login-->
<?php
 include 'config.php';
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
        <link rel="stylesheet" href="css/paymentnethmi.css">

        <!--To add Icons to the footer-->
        <script src="https://kit.fontawesome.com/8d1ac6ad03.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <!--Header section BEGINS-->
        <section class="hed">
        <table width="100%">
            <tr>
                <td width="20%">
                    <img src="Images/complete%20logo.png" alt="logo" width="25%" height="25%" id="logo">
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
                        
          ����������</div>
                </td>
            </tr>
        </table>
        </section>

        <!--Header section ENDS-->
        <!--Navigation Bar BEGINS-->

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

        <!--Navigation Bar ENDS-->
        <!--Slide show BEGINS-->
           
          <img class="familyphoto" src="http://localhost/website/Images/family.jpg">

        <!--Slide show ENDS-->
        <!--Containt BEGINS-->
        <!--PAYMENT DETAILS FORM BEGINS -->

      

        <div class="policyholder_details">

         <b>  <h1 id="topic">Enter Policyholder Details</h1><br />

        <form id="policyform" method="post" action="Payment.php">

          <h3>  Enter Customer name: <input id="formtype1"  type="text" name="pname" maxlength="50" required/><br /></br>
            
            Enter Policy Name: <select  name="ppolicy" id="formtype3" type="text" required >  
                                       <option value=" policy"                          >Select policy                   </option>
                                       <option value="Descresing T.L.I"                 >Descresing T.L.I                </option>
                                       <option value="Convertible T.L.I"                >Convertible T.L.I               </option>
                                       <option value="Renewable T.L.I"                  >Renewable T.L.I                 </option>
                                       <option value="whole life insurance"             >whole life insurance            </option>
                                       <option value="Universal life insurance"         >Universal life insurance        </option>
                                       <option value="Indexed universal life insurance" >Indexed universal life insurance</option>
                                       <optio  value="Variable universal life insurance">Variable universal life insurance</option> 
                                       </select>
                                <br /></br>
           
            <input id="submit" type="submit" name="psubmit" /> </b></h3>

<!--<button class="but"><a href="payment comments.php">Comment</a></button>-->

        </form>

        </div>
         <?php 
            
        require 'config.php';

       ?>
        <!--PAYMENT DETAILS FORM END  -->
        <!--Footer BEGINS-->

        <footer class="fto">
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
                        <a href="#">About Us</a>
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