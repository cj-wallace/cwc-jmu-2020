<?php 
	require("../include/config.php"); 
	if (isset($_POST['member_id'])){
		$query = "INSERT INTO `product_images` (`id`, `image`) VALUES ('1', '{$image}')";
		$success = $connection->query($query);
		
		if($success){
			printf("success");
		}
		else{
			printf("success");
		}
	}
?>