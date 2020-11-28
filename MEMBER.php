<?php
include("admin.php");

include("main.php");
?>


<div style="width: 85%;margin-left: 14.6%;margin-top: 0%;">
<h2>
<div style="background-color: yellow ; width:25%; float: left;text-align: center;padding: 5px;">
User_Name
</div>

<div style="background-color: lightgreen; width:19%; float: left;text-align: center;padding: 5px;">
Mobile
</div>

<div style="background-color: orange;width:25%;float:left; text-align: center;padding: 5px;">
Date of SignUp
</div>

<div style="background-color: grey;text-align: center;padding: 5px;">
Action
</div>
</h2>
</div>

<?php

$obj = new connection();

$sql = $obj->display();

$result = $sql;

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
?>
<div style="width: 80%;margin-left: 14.6%;">
<div style=" width:30%; float: left;text-align: center;padding: 10px;">
<?php echo $row['user_name']; ?>
</div>

<div style=" width:15%; float: left;text-align: center;padding: 10px;">
<?php echo $row['mobile']; ?>
</div>

<div style=" width:30%; float: left;text-align: center;padding: 10px;">
<?php echo $row['dateofsignup']; ?>
</div>

<div style="float: left;padding: 10px;">
<input type="button" name="Update" value="Update">
<input type="button" name="Delete" value="Delete">
</div>
</div>
<!-- echo " - Name: " . $row["user_name"]. " " . $row["dateofsignup"]. "<br>"; -->
<?php
}
} else {
echo "0 results";
}

?>