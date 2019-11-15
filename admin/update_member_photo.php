<?php 
	require("../include/config.php"); 
	if (isset($_POST['member_id'])){
		$query = "UPDATE `member` SET `profile_img` = '{$image}' WHERE `id` = {$member_id}";
		$success = $connection->query($query);
		
		printf("%s %s\n",$_POST['member_id'],$_POST['image']);
		
		if($success){
			printf("success\n");
			
			//printf("<img src=\"data:image/png;base64,'.base64_encode($row['image']).'\">");
		}
		else{
			printf("failure\n %s\n", $connection->error);
		}
		$connection->close();
	}
?>