<?php 
include_once('../config/config2.php');


$del = $conn->query("DELETE FROM `sales_detail_mst` WHERE sd_id = '".$_POST['id']."'");
if($del)
{
	echo "ok";
}

?>