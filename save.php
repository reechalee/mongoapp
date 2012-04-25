<?php
// connect
$m = new Mongo();

// select a database
$db = $m->comedy;

// select a collection (analogous to a relational database's table)
$collection = $db->test;

$obj = array('x' => 1);

sleep(2);

// insert $obj into the db
$collection->save($obj);

// add another field
$obj['foo'] = 'bar';

// $obj cannot be inserted again, causes duplicate _id error
$collection->insert($obj);

// save updates $obj with the new field
$collection->save($obj);

$collection->drop();

?>

