<?php
include "connection.php";
if(isset($_POST['post']))
{
    try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO movies(title,overview,release_date,genres,poster_path,cover_path,trailer_path, production_companies,production_countries,adult,revenue,vote_average,servers)
    VALUES ('".$_POST["title"]."'
    ,'".$_POST["overview"]."'
    ,'".$_POST["release_date"]."'
    ,'".$_POST["genres"]."'
    ,'".$_POST["poster_path"]."'
    ,'".$_POST["cover_path"]."'
    ,'".$_POST["trailer_path"]."'
    ,'".$_POST["production_companies"]."'
    ,'".$_POST["production_countries"]."'
    ,'".$_POST["adult"]."'
    ,'".$_POST["revenue"]."'
    ,'".$_POST["vote_average"]."'
    ,'".$_POST["servers"]."')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
   
}
?>