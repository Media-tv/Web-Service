<?php
include "connection.php";
header('Content-Type: application/json');

  $result='';
        $email = $_POST['email'];
         $password = $_POST['password'];
          //$password = sha1($_POST['password']);
          //$hashpass = sha1($password);
      // Query database for row exist or not
          $sql = 'SELECT * FROM users WHERE  email = :email AND password = :password ';
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':email', $email);
          $stmt->bindParam(':password', $password);
          $stmt->execute();

          if($stmt->rowCount())
          {
            //$result="Login Successfully";  
            	  $sth = $conn->prepare("SELECT * FROM users WHERE email =  '".$_POST["email"]."' " );
                  $sth->execute();
                  $result2 = $sth->fetch(PDO::FETCH_ASSOC);
                  echo json_encode($result2);
          }  
          elseif(!$stmt->rowCount())
          {
            $result="error";
          }
      
      // send result back to android
        echo $result;

?>