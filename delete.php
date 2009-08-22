<?php
/**
 * Mysql Connection
 */
$conn = mysql_connect('localhost', 'root', '');
$db   = mysql_select_db('db');

/**
 * simpleCRUD class
 */
require("simplecrud.class.php");

/**
 * Table "users"
 */
class Users extends simpleCRUD
{
	protected $__table = "users";
}

/**
 * To edit a user, just find it, change fields and execute the
 * "update" function.
 */
$user = Users::find_by_id(2);

if ($user === false)
	echo "<h4>Record not found!</h4>";
else
{
	$r = $user->delete();
	if ($r)
		echo "<h4>Record deleted!</h4>";
	else
		echo "<h4>Unable to delete record</h4>";
}
	
mysql_close();
?>
