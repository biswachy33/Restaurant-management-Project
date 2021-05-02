
<HTML>
<head>
<br>
<br><p>
<u><b>List of Booked tables</u></b>
<?php
   include ('connection.php');
   $namet=$_GET['namet'];
   $statust=$_GET['statust'];
   $sql="SELECT * FROM place WHERE namet like'%$namet%' and statust='Busy' ";

   $result = $conn->query($sql);
  

   
   while($row = $result->fetch_assoc()) {
   ?>
   
   
    
    <form action="stable1_1.php" method="GET" >
    <td><?php echo $row['namet']?></td> 
    <td><input type="hidden" name="idt" value="<?php echo $row['idt'] ?>">
    <td><input type="submit" name="" value="Mark Available"></td>
    </select>
     </td>
     

    
    </form>
   </tr>  
   <p>
   
</form>
   <?php
   }?>
   

            
             
            </div>
             
    </div>
      </div>
  </div>
</div>


   
</table>
</form>

</center>
</body>
</html>