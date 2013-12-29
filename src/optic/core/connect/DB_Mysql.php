<?php
class DB_Mysql implements DB_Name
{
	public function __construct($host, $username, $password, $database) {   
		@$this->doConnect($host, $username, $password, $database);
	}
	
	public function doConnect() {
		try{
			return $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);
			if(!@$conn){
				throw new PDOException('Pesan Error : ' . mysql_error() . ' No Error: ' . mysql_errno());
			}elseif(!@mysql_select_db($database)){
				throw new PDOException('Pesan Error : ' . mysql_error() . ' No Error: ' . mysql_errno());     
			}
		}catch(PDOException $err){
			@$this->showMessage($err->getMessage());     
		}
	}
	
    public function nama_database()
    {
      return $database." Anda Memakai Database MySQL";
    }

	public function showMessage($message) {
	echo "<script type=\"text/javascript\">alert(\"$message\");</script>";
	}
}
?>
