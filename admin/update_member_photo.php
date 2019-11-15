<?php 
	require("../include/config.php"); 
	if (isset($_POST['member_id'])){
		$query = "UPDATE `member` SET `image` = '{$image}' WHERE `id` = {$member_id}";
		$success = $connection->query($query);
		
		if($success){
			printf("success");
		}
		else{
			printf("success");
		}
		$connection->close();
	}
?>