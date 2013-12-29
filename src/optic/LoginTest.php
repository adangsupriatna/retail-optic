<?php
/**
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
require_once "PHPUnit/Extensions/Database/TestCase.php";
//require 'core/connect/Pilih_Koneksi.php';
require 'core/classes/users.php';

class LoginTest extends \PHPUnit_Extensions_Database_TestCase
{
    /**
     * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    //private $koneksi;
    //private $db;
    private $user;
	private $pdo;

    public function getConnection()
    {
        $database = 'dboptic';
        $this->pdo = new PDO('mysql:host=localhost; dbname='.$database, 'root', '');
        return $this->createDefaultDBConnection($this->pdo, $database);
    }

    /*
	public function getSetUpOperation() {
        // whether you want cascading truncates
        // set false if unsure
        $cascadeTruncates = false;
 
        return new PHPUnit_Extensions_Database_Operation_Composite(array(
            new PHPUnit_Extensions_Database_Operation_MySQL55Truncate($cascadeTruncates),
            PHPUnit_Extensions_Database_Operation_Factory::INSERT()
        ));
    }
	*/
	 
    public function getDataSet()
    {
		return $this->createXMLDataSet("optic.xml");
    }

    public function testLogin()
    {
        $dataSet = $this->getConnection()->createDataSet();
        $this->user = new Users($this->pdo);
		$this->assertEquals(1, $this->user->login('admin', 'admin123'));//Cara membacanya : apakah 1 itu sesuai dengan hasil login username = '' dan password ='' yaitu id dari username tersebut?
    }
}
?>
