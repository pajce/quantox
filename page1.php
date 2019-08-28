<?php

$dbhost='localhost';
$dbuser='petar';
$dbpass='pajic';
$mysql=mysqli_connect($dbhost, $dbuser, $dbpass) or die('Connection problem: '.mysqli_error());

$sql='select * from test.student';

$ret=mysqli_query($mysql, $sql);

echo "<a href='page2.php'>CSM school board student list<br/><br/></a>";

echo "<a href='page3.php'>CSMB school board student list<br/><br/></a>";

?>

