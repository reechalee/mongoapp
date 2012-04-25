<?php

// connect
$m = new Mongo();

// select a database
$db = $m->mydb;

sleep(2);

// select a collection (analogous to a relational database's table)
$collection = $db->things;


// search for documents where 5 < x < 20
$rangeQuery = array('x' => array( '$gt' => 5, '$lt' => 20 ));

$cursor = $collection->find($rangeQuery);

// iterate through the results
foreach ($cursor as $obj) {
    echo $obj["_id"] . '<br/>';
    echo $obj["x"] . '<br/>';
    echo $obj["j"] . '<br/>';
    echo '<br/>';
}

?>
