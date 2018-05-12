

<?php
require_once 'includes/autoload.php';

use classes\business\UserManager;
use classes\entity\User;


    $formerror="";
    
    
    if(isset($_POST["submitted"])){
        
            $UM=new UserManager();
            $existuser=$UM->unsubscribe($_GET["email"]);
            $formerror="unsubscribe successfully.";                               
        }
   

?>

<div class="container-fluid"
			 style="min-height: 100%;
                    min-height: 100vh;
                    background: linear-gradient(#58ba52, #2f8f83);
                    color:white;
                    padding:30px 30px 55px 30px;"> 
                    

            
            <div class="col-lg-4 col-md-4 col-sm-10 col-xs-10"  style="padding-top:50px"> 
            <form name="deleteUser" method="post" style="background-color:white; padding: 20px; border-radius: 10px; text-align:center;">
                <img src="/m5Project/public/img/abc_job_logo.png">
                <br><br>
                <h2 style="color:grey;">Are you sure you want to unsubscribe?<br></h2>
                <h3><?=$formerror?><br></h3>
                           
                <br>
              <button name="submitted" value="submit" type="submit" class="btn btn-primary" style="height:50px; width:100%;background-color: #2f8f83;
        color:white;border-radius: 25px;">Confirm</button>
        
            		
            </form>
            </div>


            