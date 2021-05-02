
</body>
</html><?php
$name = $_POST['name'];
$email = $_POST['email'];
$password1 = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$password = sha1($password1);
$usertype = "admin";
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
        echo "<script>alert('admin has been added is successfully')</script>";
  
        echo "<script>location.href ='adminDashboard.php'</script>";

      
    

    } else
         {
            echo "<script>alert('passwords do not match!')</script>";
            echo "<script>location.href ='addAdmin.html'</script>";
        }

    } 
    
    else 
    {
    echo "<script>alert('You have to complete the add admin form!')</script>";
    echo "<script>location.href ='addAdmin.php'</script>";

    }

?>


