<html>
<head>
<style>
div.a {
  text-align: right;
}

div.b {
  text-align: left;
}
</style>
<!-- Image Map Generated by http://www.image-map.net/ -->
<img src="img/Table.png" alt="Table Layout" style="width:50%" usemap="#image-map">

<div class="a">

<map name="image-map">
    <area target="_self" alt="A1" title="A1" href="http://studentvalleyrestaurant.epizy.com/stable_.php?idt=1" coords="129,179,291,36" shape="rect">
    <area target="_self" alt="A2" title="A2" href="http://studentvalleyrestaurant.epizy.com/stable_.php?idt=2" coords="344,35,479,183" shape="rect">
    <area target="_self" alt="A3" title="A3" href="http://studentvalleyrestaurant.epizy.com/stable_.php?idt=3" coords="524,33,697,176" shape="rect">
    <area target="_self" alt="B1" title="B1" href="http://studentvalleyrestaurant.epizy.com/stable_.php?idt=4" coords="134,400,274,549" shape="rect">
    <area target="_self" alt="B2" title="B2" href="http://studentvalleyrestaurant.epizy.com/stable_.php?idt=5" coords="334,399,484,543" shape="rect">
    <area target="_self" alt="B3" title="B3" href="http://studentvalleyrestaurant.epizy.com/stable_.php?idt=6" coords="540,397,692,543" shape="rect">
</map>
</div>
</head>
<body>
<div class="b">
<b>  <u> List of Available Table</b></u><br>
   <?php
   include ('connection.php');
   $namet=$_GET['namet'];
   $statust=$_GET['statust'];
   $sql="SELECT * FROM place WHERE namet like'%$namet%' and statust='Available' ";

   $result = $conn->query($sql);
  

   
   while($row = $result->fetch_assoc()) {
   ?>
   
   
    
    <form action="stable_.php" method="GET" >
    <td><?php echo $row['namet']?></td> 
    <td><input type="hidden" name="idt" value="<?php echo $row['idt'] ?>">
    <td><input type="submit" name="" value="Book"></td>
    </select>
     </td>

    </form>
   </tr> 
  
   <?php
   }?>
 </div> 
</table>
</form>
</body>
</html>