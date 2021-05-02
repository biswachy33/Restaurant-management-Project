 
<HTML>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

  $("#T").click(function(){
    $("#contents").load("table1.php");
  });

  $("#active").click(function(){
    $("#contents").load("table_.php");
  });
    $("#Bt").click(function(){
    $("#contents").load("table1_1.php");
  });

});

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
    <div class="col-4"><h3>Commerce Food court</h3></div>
     <div class="col-4"><h3>Employee Dashboard</h3></div>
    <div class="col-2"><a href="logout.php">Log Out <?php session_start(); echo $_SESSION['email'];?></a></div>
      </div>
       
   
    <div class="row" style="margin:25px;height:90%;">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <div class="col-4" style="background-color:#ffffff; padding:40px; border-color:#230237; margin:20px;"></div>
            <ul class="list-group">
            <div class="list-group-item list-group-item-info"><a id="newCat"  href="http://studentvalleyrestaurant.epizy.com/seeOrderedPlaced.php"> see order placed</a></div>
            <div class="list-group-item list-group-item-info"><a id="T" href="#"> Table</a></div>
            <div class="list-group-item list-group-item-info"><a id="active"  href="#"> Active Employee</a></div>
            <div class="list-group-item list-group-item-info"><a id="Bt"  href="#">Booked Tables</a></div>
            </div>
             
            <div class="col-8 shadow p-3 mb-5 bg-white rounded">
            <div class="col-8" id="contents" style="background-color:#ffffff; padding:40px; border-color:#230237; margin:20px;">

          
            </div>
            </div>

            
             
    </div>
      </div>
   
       
</div>
</BODY>
</HTML>
