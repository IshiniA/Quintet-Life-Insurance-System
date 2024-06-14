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
        <link rel="stylesheet" href="css/paymentnethmi.css">

        <!--To add Icons to the footer-->
        <script src="https://kit.fontawesome.com/8d1ac6ad03.js" crossorigin="anonymous"></script>

    </head>

    <body id="body">
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
                   <?php
                            echo '<img src="uploaded_img/' . $fetch['image'] . '" alt="Profile Image" width="20%" height="20%">';
                    ?>
                    <input type="button" value="<?php echo $fetch['User_Name'];?>" id="ViewPro">

                </td>
            </tr>
        </table>

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
        <!--Image BEGINS-->
       
       <img  class="carephoto"src="http://localhost/website/Images/care.jpg">

        <!--Image ENDS-->
        <!--Containt BEGINS-->
        <!--PAYMENT DETAILS PAGE -->
         
        <h1 class="readdetails" id="readdetails">CUSTOMER PAYMNENT DETAILS </h1>

    <!--Php code begins.................................................................................-->      
        <?php

        
    //$query1 = "SELECT name FROM paymentdetails WHERE User_ID = '$UserID'";
    //$result1 = mysqli_query($conn, $query1);
    //$fetch1 = mysqli_fetch_assoc($result1);

          
        $policy=array("Descresing T.L.I"=>"4000.00","Convertible T.L.I"=>"3000.00","Renewable T.L.I"=>"3500.00" ,"whole life insurance"=>"3800.00","Universal life insurance"=>"4500.00","Indexed universal life insurance"=>"1500.00","Variable universal life insurance"=>"3500.00");  /*Policy array*/

        if(isset($_POST["psubmit"])) /*  display payment details*/
        {
            $query1 = "SELECT name FROM paymentdetails WHERE User_ID = '$UserID'";
            $result1 = mysqli_query($conn, $query1);
            $fetch1 = mysqli_fetch_assoc($result1);}
      ?>
           
        
          <div class="readdetails"><b>  <div  id="rd"> </br>Insurance Contributor :</div> </br> Quintent Life Insurance </br></br></br>
                   
                   <div  id="rd">    Customer name:<br /> </div><?php echo $_POST["pname"]; ?></br>
                   <div  id="rd">  Policy name   :</div> </br><?php echo $_POST["ppolicy"];?></br>
                   <div id="rd"> Monthly premium payment </div></br>   :<?php echo $policy[$_POST["ppolicy"]];?> </b>
                   </div>;
        
        <?php
        
        /*insert payment details in to database*/
         if(isset($_POST["psubmit"])){
               $NAME = $_POST["pname"];
              
               $POLICYNAME= $_POST["ppolicy"];
               $Uid=$_SESSION['user_id'];

               $sql= "INSERT INTO paymentdetails(id,name,policyname,User_ID)VALUES('','$NAME','$POLICYNAME',' $Uid')";
              
               if($conn->query($sql)){
                   echo "Inserted successfully";
                                    }
                  else{
                   echo "Error:". $conn->error;
                     }
 


           }
   $conn->close();

   /* update and delete buttons*/
     echo ' <button class="but"><a href="updatenew.php? updateid='.$ID.' ">UPDATE</a></button>
            <button class="but"><a href="delete.php? deleteid='.$ID.'">DELETE</a></button>
            ';

       ?>
 <!--Php code ends.................................................................................-->  
 <!-- confirm button-->
    
          <button class="but"><a href="Select payment method.html"><b>Confirm</b></a></button>
           

        <!--Containt ENDS-->

        <br><br>

        <!--Footer BEGINS-->

        <footer id="footer">
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

    
        