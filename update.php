<?php
//tests insert, update, and findOne

// connect
$m = new Mongo();

// select a database
$db = $m->addressbook;

// select a collection (analogous to a relational database's table)
$collection = $db->address;

sleep(2);

$collection->insert(array("firstname" => "Bob", "lastname" => "Jones" ));
$newdata = array('$set' => array("address" => "1 Smith Lane"));
$collection->update(array("firstname" => "Bob"), $newdata);

var_dump($collection->findOne(array("firstname" => "Bob")));

$collection->drop();
echo '<br/>';
echo '<br/>';


$collection->update(array("uri" => "/summer_pics"), array('$inc' => array("page hits" => 1)), array("upsert" => true));
var_dump($collection->findOne());

$collection->drop();
?>

