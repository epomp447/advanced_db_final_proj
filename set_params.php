<?/*
CREATE OR REPLACE FUNCTION echo_update
( max_len IN     NUMBER,
 min_supp IN     NUMBER,
  min_conf IN     NUMBER) RETURN VARCHAR2 IS
BEGIN
  dbms_output.put_line(upd_settings(max_len,min_supp,min_supp));
  RETURN 'upd_settings ['||max_len||',0'||min_supp||',0'||min_conf||'] received.';
END;
*/
?>
<?php
  
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	require_once('dbinfo.php');

  // Attempt to connect to your database.
  $c = oci_connect(ORA_CON_UN, ORA_CON_PW, ORA_CON_DB);
  if (!$c) {
    print "Sorry! The connection to the database failed. Please try again later.";
    die();
  }
  else {
    // Initialize incoming message whether or not parameter sent.
    $msg_in = (isset($_GET['msg'])) ? $_GET['msg'] : "Cat got your keyboard?";
 
    // Set the call statement, like a SQL statement.
    $sql = "BEGIN :b := echo_update(2,0.2,0.3); END;";
 
    // Prepare the statement and bind the two strings.
    $stmt = oci_parse($c,$sql);
 
    // Bind local variables into PHP statement, you MUST size OUT only variables.
    //oci_bind_by_name($stmt, ":a", $msg_in);
    oci_bind_by_name($stmt, ":b", $msg_out, 80, SQLT_CHR);
 
    // Execute it and print success or failure message.
    if (oci_execute($stmt)) {
      print $msg_out;
    }
    else {
      print "Sorry error";
    }
 
    // Free resources.
    oci_free_statement($stmt);
    oci_close($c);
  }
?>

