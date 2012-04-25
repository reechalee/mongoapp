<?php
//tests group command

// connect
$m = new Mongo();

// select a database
$db = $m->store;

// select a collection (analogous to a relational database's table)
$collection = $db->inventory;

sleep(2);

$collection->insert(array("category" => "fruit", "name" => "apple"));
$collection->insert(array("category" => "fruit", "name" => "peach"));
$collection->insert(array("category" => "fruit", "name" => "banana"));
$collection->insert(array("category" => "veggie", "name" => "corn"));
$collection->insert(array("category" => "veggie", "name" => "broccoli"));

$keys = array("category" => 1);

$initial = array("items" => array());

$reduce = "function (obj, prev) { prev.items.push(obj.name); }";

$g = $collection->group($keys, $initial, $reduce);

echo json_encode($g['retval']);

$collection->drop();
?>

