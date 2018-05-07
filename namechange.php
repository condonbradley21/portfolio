<?php
$con = mysql_connect("localhost","condon","fierce69");
if (!$con) {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dpstele", $con);
// Query to pull most qualified web designer to table on page
$sharelist = mysql_query("SELECT u.user_id, concat(u.first_name, ' ', u.last_name) as FullName, count(q.qualifications) as TotalQualifications
FROM users u, qualifications q
WHERE q.user_id = u.user_id and q.qual_category='web design'
GROUP BY u.user_id
ORDER BY TotalQualifications DESC");


echo "<table border='2' style='border-collapse: collapse'>";
echo "<thead><tr>"; // LINE ADDED
echo "<th style='padding: 0px 5px 0px 5px !important;'>user Id</th><th style='padding: 0px 5px 0px 5px !important;'>FullName</th><th style='padding: 0px 5px 0px 5px !important;'>TotalQualifications</th>";
echo "</tr></thead>"; // LINE ADDED

echo "<tbody>"; // LINE ADDED

while($elev = mysql_fetch_array($sharelist)){
    echo "<tr><td colspan=4'>"; // LINE ADDED
    echo "<h4 style='display:inline-block;padding-right:20px'> " . $elev['user_id']  . " </h4>" . "<h4 style='display:inline-block;padding-right:20px'> " . $elev['FullName'] . " </h4>" . "<h4 style='display:inline-block;padding-right:20px'> " . $elev['TotalQualifications'] . " </h4>";


    echo "</td></tr>"; // LINE ADDED
}




echo "</tbody></table>"; // LINE ADDED ?>
