<html>
<head>
<b><u> List of Active Employee</b></u><br><p>

   <?php
   include ('connection.php');
   $namet=$_GET['namet'];
   $statust=$_GET['statust'];
   $sql="SELECT * FROM pay WHERE namet like'%$namet%' and statust='Available' ";

   $result = $conn->query($sql);
  

   
   while($row = $result->fetch_assoc()) {
   ?>
   
   
    
    <form action="stable.php" method="GET" >
    <td><?php echo $row['namet']?></td> 
    <td><input type="hidden" name="idt" value="<?php echo $row['idt'] ?>">
    <td><input type="submit" name="" value="Give-Off"></td>
    </select>
     </td>
     

    
    </form>
   </tr>  
   <?php
   }?>


   
   
   
</table>
</form>
</center>
</body>
</html>