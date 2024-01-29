<?php
include ('tpl/header.php');
include ('tpl/nav.php');
include("dbconnect.php");
$result = $mysqli->query("SELECT * FROM remarks"); 
$table= "<table align='center'; style='margin-bottom:15px;'>"; 
echo $table;
$k = 1; 
while ($myrow = $result->fetch_assoc()) {
  $table .= "<tr>"; 
  $table .= "<td style='border: 1px solid black; padding: 15px;'>".$myrow['tema']."</td>";
  $table .= "<td style='border: 1px solid black; padding: 15px;'>".$myrow['text']."</td>";
  $table .= "</tr>";
  $k++;
}
$table .= "</table>"; 
echo $table;
include ('tpl/footer.php');
?>

