<?php
  $db_host = '127.0.0.1';
  $db_user = 'root';
  $db_password = 'ollie.jx';
  $db_db = 'ipisa_pag';
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
  echo "fallo al conectar a mysql: (".$mysqli->connect_errno.")".$mysqli->connect_error;

  }
/*
  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;
*/

?>