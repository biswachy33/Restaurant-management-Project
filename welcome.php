<?php
$con=mysqli_connect("sql308.epizy.com","epiz_27873369","hElJ1U0t6Exnf","epiz_27873369_RMS");
$email=$_POST["email"];
$password1=$_POST["password"];
$password=sha1($password1);
$usertype=$_POST["usertype"];
$qry="select * from  Signup where email ='$email'  and usertype='$usertype'";
$result=mysqli_query($con,$qry);



        while ($row=mysqli_fetch_array($result))
        {
  
             if ($password==$row['password'] ) 
             {
             echo '<script> alert("Login Successful");</script>';
             session_start();
             $_SESSION['email']=$email;
             if ($usertype=='admin')
                 { header('refresh:0;url=adminDashboard.php');}
             elseif
                ($usertype=='employee')
                 { header('refresh:0;url=employeeDashboard.php');}
             else
                 { header('refresh:0;url=costumerDashboard.php'); }
             }
            

        
    

    else

    {
        echo '<script> alert("Incorrect UserName/User Type/Password");</script>';
        header('refresh:0;url=login.html');
    }
}
     
?>