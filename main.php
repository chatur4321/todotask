<?php
// session_start();

//include("connection.php");

class connection
{
	public $dbhost;
	public $dbuser;
	public $dbpass;
	public $dbusername;
	public $name;
	public $conn;

	function __construct()
	{
		$this->conn = new mysqli('localhost', 'root', '', 'user');

		// Check connection
		if ($this->conn->connect_error) {

			die("Connection failed: " . $this->conn->connect_error);
		} else {
			//echo "Connected successfully";
		}
	}

	 function insert($username,$name, $mobile,  $passwordA)
	{
		$sql = mysqli_query($this->conn, "INSERT INTO userpannel (`user_name`,`name`,`dateofsignup`,`mobile`,`isblockboolean`,`password`,`is_admin`) VALUES('" . $username . "','" . $name . "',NOW(),'" . $mobile . "',0,'" . $passwordA . "',0)");

		return $sql;
	}

	// public function fetch($username, $passA)
	// {
	// 	$fsql = mysqli_query($this->conn, "SELECT * from userpannel WHERE `user_name` = '" . $username . "' and `password` = '" . $passA . "' ");

	// 	return	$fsql;
	// }


	   //To Display users in DB
       public function display()
        {
          $sql = mysqli_query($this->conn, "SELECT * from userpannel");
          return $sql;
        }

       public function fetch($username, $password)
	   {
		                    $sql = mysqli_query($this->conn, "SELECT * from  userpannel 
		                    WHERE `user_name` = '" .$username ."' and `password` = '" .$password. "' and `isblockboolean` = 1");
		                    return $sql; 
	   }


	//To accept the user request
	public function approve($id)
	{
		$sql = mysqli_query($this->conn, " UPDATE `userpannel` SET `isblockboolean`= 1 WHERE `user_id`= '".$id."'");
		return $sql; 
	}

	//To accept the user request
	public function reject($id)
	{
		$sql = mysqli_query($this->conn, " UPDATE `userpannel` SET `isblockboolean`= 0 WHERE `user_id`= '".$id."'");
		return $sql; 
	}


}


?>






















