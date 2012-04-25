<?php

// connect
$m = new Mongo();

// select a database
$db = $m->mydb;

sleep(2); 

// select a collection (analogous to a relational database's table)
$collection = $db->things;

$item= $collection->findOne(array('x' => 4), array('_id'));
print_r($item);


?>
