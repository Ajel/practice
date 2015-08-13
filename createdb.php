<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
$sql = 'CREATE Database test_db';
echo 'Connected successfully';
$sql = 'CREATE TABLE employee( '.
       'emp_id INT NOT NULL AUTO_INCREMENT, '.
       'emp_name VARCHAR(20) NOT NULL, '.
       'emp_address  VARCHAR(20) NOT NULL, '.
       'emp_salary   INT NOT NULL, '.
       'join_date    timestamp(14) NOT NULL, '.
       'primary key ( emp_id ))';

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create database: ' . mysql_error());
}
echo "Database test_db created successfully\n";
mysql_close($conn);


echo "Added new content";

echo "Added change again"
?>