<?php
 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
 
$username = "C##admin";             
$password = "4041";         
$database = "localhost/XE";  
 
$query = "SELECT u.FIRST_NAME, u.AGE, b.TEXT_BODY FROM USERS u, biography b WHERE u.user_id=b.user_id";
 
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
 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Love Brew</title>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light">
        <img src="img/cup.png" class="logo" alt="Love Brew" width=50 height=50>
        <a class="navbar-brand" href="index.html"><strong>Love Brew</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="documentation.html">Documentation</a>
            </li>
          </ul>
        </div><hr>
      </nav>

      <h2 class = "title">Love Brew: A Smarter Way To Online Date</h2>
     <table border='1' class='center'>
	 <tr>
	 <th><b>Name</b></th>
	 <th><b>Age</b></th>
	 <th><b>Bio</b></th>
	 </tr>
	 <?php 
	 while (($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {  
    echo "<tr>\n";
    echo "<td>". $row["FIRST_NAME"] . "</td>\n";
	echo "<td>". $row["AGE"] . "</td>\n";
	echo "<td>". $row["TEXT_BODY"] . "</td>\n";
    echo "</tr>\n";
	}
	?>
	</table>
  </body>
</html>
