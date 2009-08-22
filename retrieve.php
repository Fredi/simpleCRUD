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
 * Tries to retrieve a user
 */
$user = Users::find_by_id(1);

if ($user === false)
	echo "<h4>Record not found!</h4>";
else
{
	echo "<h4>Retrieved one user</h4>";
	echo "<pre>";
	print_r($user->toArray());
	echo "</pre>";
}

/**
 * Retrieves all users
 */
$users = Users::find_all(); // Returns an array of "Users" objects

echo "<h4>Retrieved all users</h4>";

foreach ($users as $user)
{
	echo "<pre>";
	print_r($user->toArray());
	echo "</pre>";
}

mysql_close();
?>
