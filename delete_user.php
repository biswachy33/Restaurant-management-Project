
      <?php  
         if(isset($_POST['delete'])) {
            $dbhost = "sql308.epizy.com";
            $dbuser = "epiz_27873369";
            $dbpass = "hElJ1U0t6Exnf";
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $ID = $_POST['ID'];
            
            $sql1 = "DELETE FROM Signup WHERE ID = $ID" ;
            mysql_select_db("epiz_27873369_RMS");
            $returnval1 = mysql_query( $sql1, $conn );
            
            if(! $returnval1 ) {
               die('Could not delete data: ' . mysql_error());
            }
            

           echo "<script>alert('User has been deleted  successfully')</script>";
           echo "<script>location.href ='adminDashboard.php'</script>";
           
            mysql_close($conn); //closing the sql $conn
         }else {
            ?>
               <form action="http://studentvalleyrestaurant.epizy.com/adminDashboard.php">
                <input type="submit" value="Admin Home"></form></h1> </form>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center>
                <form method = "post" action = "all_users.php">
                  <table width = "200" border = "0" cellspacing = "2" 
                     cellpadding = "1">
                     
                     <tr>
                        <td width = "120">Contact ID</td>
                        <td><input name = "ID" type = "text" 
                           id = "ID"></td>
                     </tr>
                     
                     <tr>
                        <td width = "120"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "120"> </td>
                        <td>
                           <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
                        </td>
                     </tr>
                     
                  </table>
               </form></center>
            <?php
         }
      ?>
      
   </body>
</html>
