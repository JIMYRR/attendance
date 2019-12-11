<?php
/**
 * Created by PhpStorm.
 * User: SiD
 * Date: 16/09/2019
 * Time: 23:24
 */

session_start();

/*-------------------------------------------------------------Just change the folder name Of your PRoject------------------------------------*/
//define("SITE_URL","locahost/webjolfunction");
//define("ADMIN_URL","locahost/webjolfunction");
//define("LIVE_URL","locahost/webjolfunction");
/*--------------------------------------------------------------Just change the folder name Of your PRoject------------------------------------*/
define("DS",DIRECTORY_SEPARATOR);
define("PATH_ROOT",dirname(__FILE__));
define("PATH_LIB",PATH_ROOT.DS."wjlibrary".DS);
define("PATH_IMAGES",PATH_ROOT.DS.'images'.DS);
define("PATH_UPLOAD",PATH_ROOT.DS."uploads".DS);
define("URL_ADMIN_SOFTWARE_MODULE",PATH_ROOT.DS."modules".DS);
define("URL_ADMIN_SOFTWARE_WITHOUT_MODULE",PATH_ROOT.DS);
//define("URL_IMG",URL_ROOT."images/");
//define("URL_CSS",URL_ROOT."css/");
//define("URL_JS",URL_ROOT."js/");
define("SELF",basename($_SERVER['PHP_SELF']));

require_once(PATH_LIB."../class.MysqliDb.php");
require_once(PATH_LIB."../class.dbObject.php");
$db = new MysqliDb (Array (
                'host' => 'localhost',
                'username' => 'root',
                'password' => '',
                'db'=> 'attendance',
                'port' => 3306,
                'prefix' => '',
                'charset' => 'utf8'));

require_once __DIR__ . '/Cookie.php';
use WebJol\Cookie\Cookie;

date_default_timezone_set('Asia/Kolkata');
//require_once(PATH_LIB."validations.php");
//$db=new MySqlDb($host,$user,$pass,$dbName);

//require_once(PATH_LIB."functions.php");
setlocale(LC_MONETARY, 'en_IN');


header('Content-Type:text/html; charset=UTF-8');
