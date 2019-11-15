<?php 
	require("../include/config.php"); 
	if (isset($_POST['member_id'])){
		
		$member_img = addslashes(file_get_contents($_POST['image']['tmp_name']));
		
		$query = "UPDATE `member` SET `profile_img` = '{$member_img}' WHERE `id` = '{$member_id}'";
		$success = $connection->query($query);
		
		printf("%s %s\n",$_POST['member_id'],$_POST['member_img']);
		
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