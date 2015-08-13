<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$conn = mysql_connect($dbhost, $dbuser, $dbpass );
if(! $conn)
{
	die('Could not connect: ' . mysql());
}


$sql =  'SELECT emp_id, emp_name, emp_address, emp_salary FROM employee' ;
mysql_SELECT_db('test_db');
$retval = mysql_query($sql, $conn);
if(! $retval )
{
	die('Could not get data:' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "EMP ID :{$row['emp_id']}  <br> ".
         "EMP NAME : {$row['emp_name']} <br> ".
         "EMP SALARY : {$row['emp_salary']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>