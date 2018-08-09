<?php
include "connection.php";
header('Content-Type: application/json');
$statement=$conn->prepare("SELECT * FROM movies");
$statement->execute();
$results=$statement->fetchAll(PDO::FETCH_ASSOC);

$output = json_encode(array('total_results' => count($results),'results' => $results));
//$json=json_encode($results);
echo $output;
?>