<?php
include_once(__DIR__ . '/../check_admin.php');
check_admin();

include_once(__DIR__ . '/../check_admin.php');
check_admin();

echo "<div class='table1' style='width:600px;height:150px;'>";

echo "<table border=1 >";
echo "<tr>"; 
echo "<td><b>Id</b></td>"; 
echo "<td><b>Client Id</b></td>";
echo "<td><b>Client Secret</b></td>"; 
echo "<td><b>Client Name</b></td>";
echo "<td><b></b></td>";
echo "<td><b></b></td>";

echo "</tr>";
$result = db_get_clients();
foreach($result as $row){
    foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
    echo "<tr>";
    echo "<td valign='top'>" . nl2br( $row['id']) . "</td>";
    echo "<td valign='top'>" . nl2br( $row['client_id']) . "</td>";
    echo "<td valign='top'>" . nl2br( $row['client_secret']) . "</td>";
    echo "<td valign='top'>" . nl2br( $row['client_name']) . "</td>";

    echo "<td valign='top'><a href='index.php?action=edit&id={$row['id']}'>Edit</a></td><td><a href='index.php?action=delete&id={$row['id']}'>Delete</a></td> ";
    echo "</tr>";
} 
echo "</table>";
echo "<br/><a href='index.php?action=new'>New Row</a>";

echo "</div>";


?>