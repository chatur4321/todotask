<?php
include("admin.php");

include("main.php");

?>

<div class="container">
<div id="head">
	<h2>
		<div class="heading">
			Location
		</div>

		<div class="heading" style="margin-left: 20%;">
			Distance
		</div>

		<div class="heading" style="margin-left: 20%">
			Action
		</div>
		
	</h2>
	<hr/>
</div>

<?php

$obj = new connection();

$sql = $obj->dlocation();

$result = $sql;

if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
?>
		
		<div id="result">
			<div class="output">
				<?php echo $row['name']; ?>
			</div>
			
			<div class="output" style="margin-left: 20%;">
				<?php echo $row['distance']; ?>
			</div>

			<div class="output"style="margin-left: 20%;">
				<a href="deletelocation.php?id=<?php echo $row['id']; ?>" name="delete" class="delete">DELETE</a>
			</div>

			<div class="output"style="margin-left: 20%;">
				<input type="hidden" name="userid" value="<?php echo $row['id']; ?>">
			</div>
		</div>
		
<?php
	}
} 
	else 
	{
?>
		<div id="output-error">
			<?php echo "No Data is available"; ?>
		</div>
	</div>
<?php
	}
?>