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
 * To add a new user, just create a new instance of the class,
 * set it's fields and execute the "insert" function.
 */
$user = new Users();

$user->name     = "Fredi Machado";
$user->email    = "fredisoft@gmail.com";
$user->username = "machado";
$user->password = "mypassword";

$user->insert();

// After the insert you can retrieve the id
$id = $user->id;

echo "<h4>User created</h4>";

echo "<pre>";
print_r($user->toArray());
echo "</pre>";

mysql_close();
?>
