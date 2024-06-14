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

    <table width="100%">
        <tr>
            <td width="20%">
                <img src="http://localhost/website/Images/complete%20logo.png" alt="logo" width="25%" height="25%" id="logo">
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

    <div class="nav_panel">
        <ul>

            <li><a href="#"><b>Home</b></a></li>
            <li><a href="#"><b>About Us</b></a></li>
            <li><a href="#"><b>Contact Us</b></a></li>
            <li><a href="#"><b>Purchase a Policy</b></a></li>
            <li><a href="#"><b>Make Payment</b></a></li>
            <li><a href="#"><b>Make a Claim</b></a></li>
            <li><a href="#"><b>Renew Policy</b></a></li>

        </ul>

    </div>

    <!--Navigation Bar ENDS-->
    <!--Slide show BEGINS-->
    <!--Slide show ENDS-->
    <!--Containt BEGINS-->


    <h2 class="topic"> Enter  Payment Details </h2><br />



    <!--image pf credit card-->

    <div width="100px">
        <img src="">
    </div>



    <!--payment gateway table begins-->

    <form >
        <table class="table1">
            <tr>
                <th>Enter The Cardholder Name :</th>
                <th><input class="textbox" placeholder="Name on card" type="text" name="textbox" required /><br /></th>
            </tr>
            <tr>
                <th>Card Number               :</th>
                <th><input placeholder="*****************" type="text" name="textbox" maxlength="16" required /></th>
            </tr>
            <tr>
                <th>Expiry  </th>
                <th>CV code </th>

            </tr>
            <tr>
                <th><input placeholder=" MM/YY" type="date" name="mydate" required /></th>
                <th>
                    <input type="text" name="textbox" placeholder="CVC" maxlength="3" required />


                    <div class="container">
                        <span class="icon">*</span>
                        <div class="content_cvc">
                            3 Digit Number On The Card
                        </div>
                    </div>

                </th>

            </tr>
            <tr>
                <th><hr class="line" /></th>


            </tr>
            <tr>
                <th>Your Payment <br />Amount :</th>
                <th>Rs.4000.00</th>

            </tr>
        </table>
        <input type="submit" class="button2" id="confirm" name="submitbtn"><b>CONFIRM PAYMENT</b><br />
    </form>


    <!--payment gateway table ends-->



    <button class="button2"><a href="enter login details.php"><b>CANCEL</b></a></button>


    <!-- java code for payment successful alert-->

<script>
 function enableButton()
{
    var fill = document.getElementById("");
    var subbtn = document.getElementById("subbtn");

    if(accept.checked == true){
        subbtn.disabled = false;
    }

    else{
        subbtn.disabled = true;
    }
   
</script>
    <p class="note"><b>Note</b></p><p class="inthe"><b>in the next step you will be redirected to your bank's website to verify yourself</b></p>










    <!--Containt ENDS-->

    <br><br>

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
                        <li><a href="#">Purchase Policy</a></li>
                        <li><a href="#">Make Payment</a></li>
                        <li><a href="#">Make Payment</a></li>
                        <li><a href="#">Make Claim</a></li>
                        <li><a href="#">Renew Policy</a></li>
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
</html>