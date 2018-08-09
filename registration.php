<?php
include "connection.php";


		$sthandler = $conn->prepare("SELECT email FROM `users` WHERE email = :email");
		$sthandler->bindParam(':email', $_POST['email']);
		$sthandler->execute();

		if($sthandler->rowCount() > 0){
		    echo "exists! cannot insert";
		} else {
		            $sql = "INSERT INTO `users` ( `full_name`, `email`, `password`, `phone`,`points`, `age`, `location`, `address` , `details_manufacturing`) VALUES (
		           :full_name,
		           :email,
		           :password,
		           :phone,
		           :points,
		           :age,
		           :location,
		           :address,
		           :details_manufacturing)";
		            $statement = $conn->prepare($sql);
		            $statement->bindValue(':full_name', $_POST['full_name']);
		            $statement->bindValue(':email', $_POST['email']);
		            $statement->bindValue(':password', $_POST['password']);
		            $statement->bindValue(':phone', $_POST['phone']);
		            		            $statement->bindValue(':points', $_POST['points']);
		            $statement->bindValue(':age', $_POST['age']);
		            $statement->bindValue(':location', $_POST['location']);
		            $statement->bindValue(':address', $_POST['address']);
		            $statement->bindValue(':details_manufacturing', $_POST['details_manufacturing']);
		            $inserted = $statement->execute();
		            if($inserted){
                  		 $sth = $conn->prepare("SELECT * FROM users WHERE email =  '".$_POST["email"]."' " );
			                  $sth->execute();
			                  $result2 = $sth->fetch(PDO::FETCH_ASSOC);
			                  echo json_encode($result2);
		            }                                           
		}




?>