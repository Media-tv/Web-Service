<?php
include "connection.php";

if(isset($_POST['user']))
{
    $sql = "INSERT INTO `request` (`title`,`description`,`user`) VALUES (:title, :description ,:user)";
      $statement = $conn->prepare($sql);
        $statement->bindValue(':title', $_POST['title']);
        $statement->bindValue(':description', $_POST['description']);
        $statement->bindValue(':user', $_POST['user']);
        $inserted = $statement->execute();
        if($inserted){
            echo "Done!";
         }                                           

}

?>