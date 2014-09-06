<?php
#Pie Semi Circle Chart
require '../../conn/connection.php';

$result = mysql_query("SELECT name, val FROM web_marketing WHERE val>10.00");

//$rows = array();
$rows['type'] = 'pie';
$rows['name'] = 'Revenue';
$rows['innerSize'] = '50%';
while ($r = mysql_fetch_array($result)) {
    $rows['data'][] = array($r['name'], $r['val']);    
}
$rslt = array();
array_push($rslt,$rows);
print json_encode($rslt, JSON_NUMERIC_CHECK);

mysql_close($con);


