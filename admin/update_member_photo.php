<?php 
	require("../include/config.php"); 
	if (isset($_POST['member_id'])){
		$query = "UPDATE `member` SET `image` = '{$image}' WHERE `id` = {$member_id}";
		$success = $connection->query($query);
		
		if($success){
			printf("success\n");
			
			//printf("<img src=\"data:image/png;base64,'.base64_encode($row['image']).'\">");
		}
		else{
			printf("failure");
		}
		$connection->close();
	}
?>