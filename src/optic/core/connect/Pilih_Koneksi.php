<?php
include('interface_factory.php');
include('DB_Oracle.php');
include('DB_Mysql.php');

class Pilih_Koneksi implements DB_Koneksi
{
  public function buat_koneksi($param)
  {
    if($param == "oracle")
    {
		//return new DB_Oracle();
		$db = new DB_Oracle('user','password','dboptic');
		//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    else if($param == "mysql")
    {
		//return new DB_Mysql();
		$db = new DB_Mysql('localhost','root','','dboptic');
		//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
	return $db;
  }
}
?>
