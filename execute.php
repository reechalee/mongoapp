<?php
//tests simple execute, execute with parameter, and execute with scope

// connect
$m = new Mongo();

// select a database
$db = $m->mydb;

// select a collection (analogous to a relational database's table)
$collection = $db->things;

$response = $db->execute("function() { return 'Hello, world!'; }");
echo $response['retval'];

echo '<br/>';
sleep(1);

$response = $db->execute("function(greeting, name) { return greeting+', '+name+'!'; }", array("Good bye", "Joe"));
echo $response['retval'];

echo '<br/>';
sleep(1);


$func = 
    "function(greeting, name) { ".
        "return greeting+', '+name+', says '+greeter;".
    "}";
$scope = array("greeter" => "Fred");

$code = new MongoCode($func, $scope);

$response = $db->execute($code, array("Goodbye", "Joe"));
echo $response['retval'];


echo '<br/>';



?>
