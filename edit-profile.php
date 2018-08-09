<?php
include "connection.php";


		



    $sql = "UPDATE `users` SET `full_name` = :full_name,
    								`email` = :email,
    								`password` = :password,
    								`phone` = :phone,
    								`age` = :age
    								WHERE id =  '".$_POST["id"]."' ";

    $statement = $conn->prepare($sql);
    $statement->bindValue(':full_name', $_POST['full_name']);
    $statement->bindValue(':email', $_POST['email']);
    $statement->bindValue(':password', $_POST['password']);
    $statement->bindValue(':phone', $_POST['phone']);
    $statement->bindValue(':age', $_POST['age']);
    $updated = $statement->execute();
    if($updated){
  		 $sth = $conn->prepare("SELECT * FROM users WHERE id =  '".$_POST["id"]."' " );
              $sth->execute();
              $result2 = $sth->fetch(PDO::FETCH_ASSOC);
              echo json_encode($result2);
    }                                           





?>