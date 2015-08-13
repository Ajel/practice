<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'DROP DATABASE AAAA';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete database db_test: ' . mysql_error());
}
echo "Database deleted successfully\n";
mysql_close($conn);
?>

\\deleting table
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'DROP TABLE SSS';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete table employee: ' . mysql_error());
}
echo "Table deleted successfully\n";
mysql_close($conn);
?>