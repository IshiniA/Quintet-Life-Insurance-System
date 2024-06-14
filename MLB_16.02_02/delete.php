<?php

include 'config.php';
  session_start();
        $UserID = $_SESSION['user_id'];

    if(isset($_GET['deleteid']))
    {
        //$ID=$_GET['deleteid'];

        $sql="delete from paymentdetails where User_ID='$UserID'";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
          //  echo "Deleted successfull";
          header('location: enter login details.php');
        }
        else 
        {
            die(mysqli_error($conn));
        }
        
	



    }



?>