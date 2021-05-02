

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password1 = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$password = sha1($password1);
$usertype = "user";
$phone_number = $_POST['phone_number'];

if ($name && $email && $password && $repeat_password && $usertype && $phone_number) {
    if ($password1 == $repeat_password) {


    $con = mysql_connect("sql308.epizy.com","epiz_27873369","hElJ1U0t6Exnf");

    if (!$con)

    {

    die('Could not connect: ' . mysql_error());

    }

        mysql_select_db("epiz_27873369_RMS", $con);



        $mysql_query="INSERT INTO Signup(name, email, password, usertype, phone_number)
        VALUES
        ('$name','$email','$password','$usertype','$phone_number')";
            if (!mysql_query($mysql_query,$con))

            {

            die('Error: ' . mysql_error());

            }
        echo "<script>alert('Signup is completed')</script>";
  
        echo "<script>location.href ='login.html'</script>";

      
    

    } else
         {
            echo "<script>alert('Your password do not match!')</script>";
            echo "<script>location.href ='login.html'</script>";
        }

    } 
    
    else 
    {
    echo "<script>alert('You have to complete the signup form!')</script>";
    echo "<script>location.href ='login.html'</script>";

    }

?>
