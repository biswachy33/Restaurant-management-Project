 
<?php   
 session_start();  
  $nam= $_SESSION['email'];
 $connect = mysqli_connect("sql308.epizy.com", "epiz_27873369", "hElJ1U0t6Exnf", "epiz_27873369_RMS");  

 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="costumerDashboard.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="costumerDashboard.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 
<HTML>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <title> Add to Cart</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<style>
a:hover {
  background-color: yellow;
}
</style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<BODY>
<div class="container"  style="background-color:#E6D3F2;">
      <div class="row" style="height: 5%; background-color:#D193F7; padding:40px;">
    <div class="col-12"></div>
     
      </div>
      <div class="row" style="height: 5%;background-color:#480673; color:#ffffff;">
    <div class="col-5"><h1>Commerce Food Court</h1></div>
    <div class="col-4"><h2>Costumer Dashboard</h2></div>
      <div class="col-2"><h3><a href="logout.php">Log Out <?php session_start(); echo $_SESSION['email'];?></a></h3></div>
      </div>
       
   

   <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Choose your items from the menu</h3><br />  
                <?php  
                $query = "SELECT * FROM menu_new ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  





                     <form method="post" action="costumerDashboard.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                        
                             <?php    
                           echo '<img src="../VCodeFolder/images\\'.$row["id"].'.jpg" height="180px" width="170px">';
                            ?>
                            
                               <br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * (1.082* $values["item_price"]), 2); ?></td>  
                               <td><a href="costumerDashboard.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php 
                                    
                                    $total = $total + ($values["item_quantity"] * (1.082 * $values["item_price"]));  
                               }  

                          

                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td> 
                                 <form action="costumerDashboard.php" method="post">
                                 <td align="right"><input type="submit" name ="placeOrder" value="placeOrder"/>
   
                                </form> 
                               <td></td>  
                          </tr>  
                        
                          <?php  
                          }  
                           


         if(isset($_POST['placeOrder'])){
                    //echo("You clicked button one!");
                //and then execute a sql query here
                $mysql_query1 = "SELECT * FROM Signup";
                $result=mysqli_query($connect,$mysql_query1);
                while ($row=mysqli_fetch_array($result))
        {
  
             if ($nam == $row['email'] ) 
             {
             $CostumerID = $row['id'];}
        }
                

                    
                     $mysql_query="Insert into oders_tbl (UserName, costumerId, AmtPaid) values ('$nam','$CostumerID', '$total')";
                           if (mysqli_query($connect,$mysql_query)==TRUE)
                                    {
                                     echo '<script> alert("Order Placed Successful. You Can click checkout Now.");</script>';
                                     header('refresh:0;url=checkOut.php');
                                                }
                                        else
                                        {
                                                echo '<script> alert("Please try again");</script>';
                                                    header('refresh:0;url=costumerDashboard.php');
                                                }
                                         }
                                     else {
                                    echo"Error";
                                              }


                          ?>  
                     </table>  
                </div>  
           </div>  
           <br /> 

  <center>
                          
                          <a href="http://studentvalleyrestaurant.epizy.com/checkOut.php">
                          <img border="0" alt="checkOut" src="img/checkout.jpg" width="150" height="100">
                            </a>
                          </center>

   

</BODY>
</HTML>
