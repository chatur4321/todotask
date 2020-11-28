<?php
include("admin.php");

include("main.php");

?>

<div class="container">

<!-- 	<div id="search">
		<select id="pickup_point" name="pickup_point">
            <option selected hidden disabled>Search Data</option>
            <option>By Date</option>
            <option>Select PickUp Point</option>
            <option>Select PickUp Point</option>  
        </select>
	</div> -->


<div id="head">
	<h2>
		<div class="heading">
			User Id
		</div>

		<div class="heading">
			User Name
		</div>

		<div class="heading">
			Mobile
		</div>

		<div class="heading">
			Date of SignUp
		</div>

		<div class="heading">
			Action
		</div>
	</h2>
	<hr/>
</div>

<?php

$obj = new connection();

$sql = $obj->pendingrequest();

$result = $sql;

if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
?>
		
		<div id="result">
			<div class="output">
				<?php echo $row['user_id']; ?>
			</div>
			
			<div class="output">
				<?php echo $row['user_name']; ?>
			</div>

			<div class="output">
				<?php echo $row['mobile']; ?>
			</div>

			<div  class="output">
				<?php echo $row['dateofsignup'];?>
			</div>

			<div class="output">
				<a href="approved.php?id=<?php echo $row['user_id'];?>" class="update">ACCEPT</a> 
				<a href="reject.php?id=<?php echo $row['user_id'];?>" class="delete">REJECT</a>
			</div>

			<div class="output">
				<input type="hidden" value="<?php echo $row['user_id']; ?>">
			</div>
		</div>
<?php
	}
} 
	else 
	{
?>
		<div id="output-error">
			<?php echo "No User is available"; ?>
		</div>
	</div>
<?php
	}
?>