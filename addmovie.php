<?php
include "connection.php";

if($_POST['id_tvseries_tmdb'] == 0){


		$sthandler = $conn->prepare("SELECT id FROM `movies` WHERE id = :id");
		$sthandler->bindParam(':id', $_POST['id']);
		$sthandler->execute();

		if($sthandler->rowCount() > 0){
		    echo "exists! cannot insert";
		} else {
		            $sql = "INSERT INTO `movies` (`id`, `title`, `file_id`) VALUES (:id, :title, :file_id)";
		            $statement = $conn->prepare($sql);
		            $statement->bindValue(':id', $_POST['id']);
		            $statement->bindValue(':title', $_POST['title']);
		            $statement->bindValue(':file_id', $_POST['file_id']);
		            $inserted = $statement->execute();
		            if($inserted){
		                echo "Add Movie Done!";
		            }                                           
		}
}else{


				$sthandler = $conn->prepare("SELECT id_tvseries_tmdb ,episode_id_tmdb FROM `tv_series` WHERE id_tvseries_tmdb = :id_tvseries_tmdb AND episode_id_tmdb = :episode_id_tmdb");
			$sthandler->bindParam(':id_tvseries_tmdb', $_POST['id_tvseries_tmdb']);
			$sthandler->bindParam(':episode_id_tmdb', $_POST['episode_id_tmdb']);

			$sthandler->execute();

			if($sthandler->rowCount() > 0){
			    echo "exists! cannot insert tv episode ";
			} else {
			            $sql = "INSERT INTO `tv_series` (`id_tvseries_tmdb`,
			            									 `name_tv_series`,
			            										  `season_number`,
			            										  `episode_name`,
 															    `episode_number`,
			            										  `episode_id_tmdb` )

			             VALUES (:id_tvseries_tmdb,
			              :name_tv_series,
			               :season_number,
								:episode_name,
								:episode_number,
								:episode_id_tmdb )";
			            $statement = $conn->prepare($sql);
			            $statement->bindValue(':id_tvseries_tmdb', $_POST['id_tvseries_tmdb']);
			            $statement->bindValue(':name_tv_series', $_POST['name_tv_series']);
			            $statement->bindValue(':season_number', $_POST['season_number']);
			            $statement->bindValue(':episode_name', $_POST['episode_name']);
			            $statement->bindValue(':episode_number', $_POST['episode_number']);
			            $statement->bindValue(':episode_id_tmdb', $_POST['episode_id_tmdb']);

			            $inserted = $statement->execute();
			            if($inserted){
			                echo "Add tv episode Done!";
			            }                                           
			}
}


?>