
include_once 'db.class.php';
define('db_host','localhost');
define('db_name','store');
define('db_user','root');
define('db_pass','admin_password');

$db = new DB_class(db_host,db_name,db_user,db_pass);