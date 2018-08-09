<?php
include "connection.php";
header('Content-Type: application/json');

$getmovies=$conn->prepare("SELECT * FROM movies");
/*$statement->execute();
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
$json=json_encode($results);
echo $json;*/


$getmovies->execute();
$movies = $getmovies->fetchAll();


//echo json_encode($questions);

	$rows = array();
    foreach($movies as $row) {

        $rows[] = array(
            'id' => $row['id'],
            'title' => $row['title']
        );
    }
    //echo json_encode($rows);
 	echo json_encode(array('Movie' => $rows));


?>