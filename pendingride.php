<?php
include("admin.php");

include("main.php");

?>

<div class="container">

<table id="ridetable" cellspacing="10">
<tr>
		<th>
			Ride Id
		</th>

		<th>
			Ride Date
		</th>

		<th>
			Pickup Point
		</th>

		<th>
			Drop Point
		</th>


		<th>
			Cab Type
		</th>


		<th>
			Total Distance
		</th>


		<th>
			Total Cost
		</th>
		
		
		 <th>
			Luggage
		</th>

		<th>
			Customer Name
		</th>

		<th>
			Action
		</th>
</tr>

<?php

$obj = new connection();

$sql = $obj->pendingride();

$result = $sql;

if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
?>
		
		<tr>
			<td>
				<?php echo $row['ride_id']; ?>
			</td>
			
			<td >
				<?php echo $row['ride_date']; ?>
			</td>

			<td >
				<?php echo $row['pickup_point']; ?>
			</td>

			<td >
				<?php echo $row['drop_point'];?>
			</td>

			<td >
				<?php echo $row['cab_type'];?>
			</td>

			<td>
				<?php echo $row['total_distance'];?>
			</td>

			<td>
				<?php echo $row['total_cost'];?>
			</td>

			<td class="rideop">
				<?php echo $row['luggage'];?>
			</td>

			<td>
				<?php echo $row['customer_user_name'];?>
			</td>

			<td>
				<a href="cride.php?id=<?php echo $row['ride_id'];?>">Allow</a> 
				<a href="#?id=<?php echo $row['ride_id'];?>">Deny</a>
			</td>

			<td>
				<input type="hidden" name="userid" value="<?php echo $row['user_id']; ?>">
			</td>
<?php
	}
} 
	else 
	{
?>
		<td id="output-error">
			<?php echo "No User is available"; ?>
		</td>
	</tr>
</table>
<?php
	}
?>