<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'INSERT INTO employee '.
       '(emp_name,emp_address, emp_salary) '.
       'VALUES ( "Ajel", "Putalisadak", 20000)';

mysql_select_db('test_db');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully!!!!!COOL\n";
mysql_close($conn);
?>