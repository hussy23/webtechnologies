<!-
Code Initiator - Hussain Moulana
Begin Date - Sept 27 - 2021
>

<?php
class DBController {
	public $user = "b4c13a8a245498";
	public $password = "9fc27d6c";
	public $database = "heroku_10fad956fbf727b";
	public $host = "us-cdbr-east-06.cleardb.net";
	public $connection;
	
	function __construct() {
		$this->connection = $this->connectDB();
	}
	
	function connectDB() {
		$connection = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $connection;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->connection,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if (!empty($resultset)) {
            return $resultset;
        }
    }
	
	function numRows($query) {
		$result  = mysqli_query($this->connection,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>