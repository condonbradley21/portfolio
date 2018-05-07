<?php

include('connect.php');


mysql_connect("localhost","condon","fierce69");
mysql_select_db("dpstele");

$sql = mysql_query("SELECT * FROM users ORDER BY id ASC");


$id = 'id';
$user_id = 'user_id';
$rows = mysql_fetch_assoc($sql);
$user_id = $_POST['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dept = $_POST['dept'];
$id = $_POST['id'];


$query_params = array(
  ":user_id" => $user_id,
  ":first_name" => $first_name,
  ":last_name" => $last_name,
  ":dept" => $dept,
  ":id" => $id
  );

$query = "
    SELECT *
    FROM users
";


 try
{
  $stmt = $db->prepare($query);
  $result = $stmt->execute($query_params);
}
catch(PDOException $ex)
{die("Failed to run query: " . $ex->getMessage());}




?>

