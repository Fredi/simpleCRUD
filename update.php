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
$user = Users::find_by_id(1);

if ($user === false)
	echo "<h4>Record not found!</h4>";
else
{
	$user->name = "test";

	$user->update();

	echo "<h4>User updated!</h4>";

	echo "<pre>";
	print_r($user->toArray());
	echo "</pre>";
}
	
mysql_close();
?>
