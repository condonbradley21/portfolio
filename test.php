<?php

$query = "
    SELECT *
    FROM dpstele
    WHERE id = :id
";



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
$row = $stmt->fetchall();

foreach ($row as $item){
$items .= '
	<div class="row rowsize">
		<div class="col-md-3 ccontainer"><img src="http://162.243.143.150/abpants/controller/server/php/files/thumbnail/'.$item['image01'].'" /></div>
		<div class="headline col-md-8">
			<span class="fontbold"><a href="http://162.243.143.150/abpants/view_profile.php?id='.$item['id'].'">Headline</a></span><br>
			<span>'.$item['user_id'].'</span>
		</div>
		<div class="description col-md-8"><br>
			<span class="fontbold">Description</span><br>
			<span>'.$item['dept'].'</span>
		</div>
		<div class="col-md-2"><br>
			<br>
			<br>
			<span class="fontbold">Price:</span><span>'.$item['price']. $item['username'].'</span>
		</div>
	</div>';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->
	<head>
		<?php include("javascriptcss.php");?>
	</head>
	<body class"body">
		<?php include("nav.php");?>
		<div class="container-fluid rowness ">
		<?php echo $items; ?>
		</div>
	</body>
</html>

<?php


    ini_set(‘display_errors’,1);
    error_reporting(E_ALL|E_STRICT);

    $con = mysql_connect("localhost","condon","fierce69");
    if (!$con) {
      die('Could not connect: ' . mysql_error());
      }

    mysql_select_db("dpstele", $con);

    $sharelist = mysql_query("SELECT u.user_id, concat(u.first_name, ' ', u.last_name) as FullName, count(q.qualifications) as TotalQualifications
FROM users u, qualifications q
WHERE q.user_id = u.user_id and q.qual_category='web design'
GROUP BY u.user_id
ORDER BY TotalQualifications DESC");

    if (!$sharelist) {
      die('Invalid query: ' . mysql_error());
      }

    while ($row = mysql_fetch_array($sharelist)) {
      var_dump($row);
    }

mysql_close($con);

?>