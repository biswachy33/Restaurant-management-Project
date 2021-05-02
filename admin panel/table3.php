<html>
<head>

<b><u>When you see your name you can clockin</b></u><p>
<center>
   <?php
   include ('connection.php');
   $namet=$_GET['namet'];
   $statust=$_GET['statust'];
   $sql="SELECT * FROM pay WHERE namet like'%$namet%' and statust='Busy' ";

   $result = $conn->query($sql);
  

   
   while($row = $result->fetch_assoc()) {
   ?>
   
   
    
    <form action="stable1.php" method="GET" >
    <td><?php echo $row['namet']?></td> 
    <td><input type="hidden" name="idt" value="<?php echo $row['idt'] ?>">
    <td><input type="submit" name="" value="clockin"></td>
    </select>
     </td>
     

    
    </form>
   </tr>  
   <?php
   }?>

   
</form>
   
   
</table>
</form>
</center>
</body>
</html>