
<?php  

 

       include 'config.php'; 
      //  session_start();
      //  $UserID = $_SESSION['user_id'];
     
        $ID=$_GET['updateid'];
        
    if(isset($_POST['psubmit']))
    {
         
         $POLICYNAME= $_POST["ppolicy"];

        $sql="update paymentdetails set policyname='$POLICYNAME' WHERE  User_ID='$UserID'";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            echo "Updated successfull";
        }
        else 
        {
            die(mysqli_error($con));
        }
        

    }
    ?>

      <img class="familyphoto" src="http://localhost/website/Images/family.jpg">
      
        <div class="policyholder_details">

         <b>  <h1 id="topic">Update Policyholder Details</h1><br />

        <form id="policyform" method="post" action="Payment.php">

          <h3>  Enter Customer name: <input id="formtype1"  type="text" name="pname" maxlength="50" /><br /></br>
            
            Enter Policy Name: <select  name="ppolicy" id="formtype3" type="text" >  
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
           
            <input id="submit" type="submit" name="psubmit"  placeholder="Update"/> </b></h3>

        </form>

        </div>
       
 
  