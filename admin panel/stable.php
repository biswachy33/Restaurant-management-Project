<?php
$idt=$_GET['idt'];
$link = mysqli_connect("sql308.epizy.com", "epiz_27873369", "hElJ1U0t6Exnf", "epiz_27873369_RMS");

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt update query execution
$sql = "UPDATE pay SET statust='Busy' WHERE idt='$idt'";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
    header("Refresh:0");
    
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
