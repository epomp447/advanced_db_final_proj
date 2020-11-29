<?php
 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
 
$username = "C##admin";             
$password = "password";         
$database = "localhost/XE";  
 
$query = "select * from users";
 
$c = oci_connect($username, $password, $database);
if (!$c) {
    $m = oci_error();
    trigger_error('Could not connect to database: '. $m['message'], E_USER_ERROR);
}
 
$s = oci_parse($c, $query);
if (!$s) {
    $m = oci_error($c);
    trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
}
$r = oci_execute($s);
if (!$r) {
    $m = oci_error($s);
    trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
}
 
echo "<table border='1'>\n";
$ncols = oci_num_fields($s);
echo "<tr>\n";
for ($i = 1; $i <= $ncols; ++$i) {
    $colname = oci_field_name($s, $i);
    echo "  <th><b>".htmlspecialchars($colname,ENT_QUOTES|ENT_SUBSTITUTE)."</b></th>\n";
}
echo "</tr>\n";
 
while (($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    
    echo "<tr>\n";
	echo "<td>". $row["USER_ID"] . "</td>\n";
    echo "<td>". $row["FIRST_NAME"] . "</td>\n";
	echo "<td>". $row["LAST_NAME"] . "</td>\n";
	echo "<td>". $row["AGE"] . "</td>\n";
	echo "<td>". $row["GENDER"] . "</td>\n";
	echo "<td>". $row["LOCATION"] . "</td>\n";
	echo "<td>". $row["EMAIL"] . "</td>\n";
	echo "<td>". "*****" . "</td>\n";
    echo "</tr>\n";
   
}
echo "</table>\n";
 
?>
