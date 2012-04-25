<?php
//tests find

// connect
$m = new Mongo();

// select a database
$db = $m->mydb;

sleep(2);

// select a collection (analogous to a relational database's table)
$collection = $db->things;

// find everything in the collection
$cursor = $collection->find();

// iterate through the results
foreach ($cursor as $obj) {
    echo $obj["_id"] . '<br/>';
    echo $obj["x"] . '<br/>';
    echo $obj["j"] . '<br/>';
    echo '<br/>';
}

?>
