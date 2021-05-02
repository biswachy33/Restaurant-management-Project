

 
<HTML>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

</script>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<BODY>

<div class="container"  style="background-color:#E6D3F2;"> 
      <div class="row" style="height: 5%; background-color:#D193F7; padding:40px;">
    <div class="col-12"></div>
     
      </div>

      <div class="row" style="height: 5%;background-color:#480673; color:#ffffff;">
    <div class="col-5"><h3>Commerce Food court</h3></div>
    <div class="col-4"><h4>                      </h4></div>
    <div class="col-3"><a href="logout.php">Log Out <?php session_start(); echo $_SESSION['email'];?></a></div>
      </div>
       
   
    <div class="row" style="margin:25px;height:90%;">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <div class="col-3" style="background-color:#ffffff; padding:40px; border-color:#230237; margin:20px;"></div>
            <ul class="list-group">
        
            </div>
             
            <div class="col-8 shadow p-3 mb-5 bg-white rounded">
            <div class="col-8" id="contents" style="background-color:#ffffff; padding:40px; border-color:#230237; margin:20px;">


  <?php
$conn = mysqli_connect("sql308.epizy.com", "epiz_27873369", "hElJ1U0t6Exnf","epiz_27873369_RMS"); //The Blank string is the password
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM oders_tbl";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["orderID"]. "     Costumer ID: " . $row["costumerId"]. "    User Name: " . $row["UserName"]. "      Amount: " . $row["AmtPaid"]. "<br>"; echo "<hr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

            
            </div>
            </div>
             
    </div>
      </div>
   
       
</div>

</BODY>
</HTML>

  
