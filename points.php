<?php
include "connection.php";


		
if(isset($_POST['id']))
{

					if(isset($_POST['points']))	{
					    $sql = "UPDATE `users` SET `points` = :points
					    								WHERE id =  '".$_POST["id"]."' ";

					    $statement = $conn->prepare($sql);
					    $statement->bindValue(':points', $_POST['points']);
					    $updated = $statement->execute();
					    if($updated){
					  		 $sth = $conn->prepare("SELECT * FROM users WHERE id =  '".$_POST["id"]."' " );
					              $sth->execute();
					              $result2 = $sth->fetch(PDO::FETCH_ASSOC);
					              echo json_encode($result2);
					    }     
    }else {
    	 $sth = $conn->prepare("SELECT * FROM users WHERE id =  '".$_POST["id"]."' " );
              $sth->execute();
              $result2 = $sth->fetch(PDO::FETCH_ASSOC);
              echo json_encode($result2);
    }

}



?>