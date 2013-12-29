<?php
class DB_Oracle implements DB_Name
{
	public function __construct($username, $password, $database) {   
		@$this->doConnect($username, $password, $database);
	}
	
	public function doConnect() {
		try{
			$conn = new PDO("OCI:dbname=$dbname;charset=UTF-8", $username, $password);
		}catch(PDOException $err){
			@$this->showMessage($err->getMessage());     
		}
	}
	
    public function nama_database()
    {
      return $database." Anda Memakai Database Oracle";
    }

	public function showMessage($message) {
	echo "<script type=\"text/javascript\">alert(\"$message\");</script>";
	}
}
?>
