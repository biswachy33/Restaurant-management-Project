<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Query All Contacts from Database</title>
</head>



<style>
table, th, td {
  border: 1px solid black;
}
</style>



<body style="background-color:aqua;">
<h1>
 <form action="http://studentvalleyrestaurant.epizy.com/adminDashboard.php">
    <input type="submit" value="Admin Home"></form></h1>

<?php

@ $db = mysql_pconnect("sql308.epizy.com","epiz_27873369","hElJ1U0t6Exnf");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}

mysql_select_db("epiz_27873369_RMS");

$query = "select * from Signup";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);



//$result = mysqli_query($conn,"SELECT * FROM my_contact_list");

echo "<p><strong>Number of users information found: ".$num_results."</strong></p>";
echo "<hr>";?>

<table style="width:100%">

	<tr>
    <th>ID</th>
	<th>FullName</th>
	<th>Username/Email </th>
	<th>Password</th>
	<th>User Type</th>
    <th>Phone number</th>
	
	</tr>

	<?php
	$i=0;
	while($i < $num_results) {
        $row1 = mysql_fetch_array($result);
           
	?>

	<tr>
    <td><?php echo $row1["id"]; ?></td>
	<td><?php echo $row1["name"]; ?></td>
	<td><?php echo $row1["email"]; ?></td>
	<td><?php echo $row1["password"]; ?></td>
	<td><?php echo $row1["usertype"]; ?></td>
	<td><?php echo $row1["phone_number"]; ?></td>

	<td><?php echo '<a href = "http://studentvalleyrestaurant.epizy.com/delete_user.php/">Delete</a>';      ?> </td>

	</tr>

	<?php
	$i++;
	}
	?>
</table>


</body>
</html>




