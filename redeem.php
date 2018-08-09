<?php
include "connection.php";


		
if(isset($_POST['id']))
{
			$getpoints = $conn->prepare("SELECT points FROM `users` WHERE id =  '".$_POST["id"]."' " );
			$getpoints->execute();
			$row = $getpoints->fetch(PDO::FETCH_ASSOC);
			$x =$row["points"];
		if($_POST['redeem'] == "8EB-CBRP-DCVM-ELTD-FCCZ-91ZZ"){
			
			$y=500;
			$z=$x+$y;
					 $sql = "UPDATE `users` SET `points` = '".$z."'
					    								WHERE id =  '".$_POST["id"]."' ";

					    $statement = $conn->prepare($sql);
					    //$statement->bindValue(':points', $_POST['points']);
					    $updated = $statement->execute();
					    if($updated){
					  		 $sth = $conn->prepare("SELECT * FROM users WHERE id =  '".$_POST["id"]."' " );
					              $sth->execute();
					              $result2 = $sth->fetch(PDO::FETCH_ASSOC);
					              echo json_encode($result2);
					    }     
		}elseif ($_POST['redeem'] == "BV4-6RJ0-PDG3-0T8X-TTHU-39P1") {
			$y=1000;
			$z=$x+$y;
					 $sql = "UPDATE `users` SET `points` = '".$z."'
					    								WHERE id =  '".$_POST["id"]."' ";

					    $statement = $conn->prepare($sql);
					    //$statement->bindValue(':points', $_POST['points']);
					    $updated = $statement->execute();
					    if($updated){
					  		 $sth = $conn->prepare("SELECT * FROM users WHERE id =  '".$_POST["id"]."' " );
					              $sth->execute();
					              $result2 = $sth->fetch(PDO::FETCH_ASSOC);
					              echo json_encode($result2);
					    }     
		}


					/*if(isset($_POST['points']))	{
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
    }*/

}



?>