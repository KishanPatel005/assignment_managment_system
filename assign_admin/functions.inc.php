<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function redirect($url){
	?>
	<script>
	window.location.href="<?php echo $url?>";
	</script>
	<?php
}

function productSoldQtyByProductId($con,$pid){
	$sql="select sum(order_detail.qty) as qty from order_detail,`order` where `order`.id=order_detail.order_id and order_detail.product_id=$pid and `order`.order_status!=4";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row['qty'];
}

function validShipRocketToken($con){
	date_default_timezone_set('Asia/Kolkata');
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from shiprocket_token"));
	$added_on=strtotime($row['added_on']);
	$current_time=strtotime(date('Y-m-d h:i:s'));
	$diff_time=$current_time-$added_on;
	if($diff_time>86400){
		$token=generateShipRocketToken($con);
	}else{
		$token=$row['token'];
	}
	return $token;
}


function isAdmin(){
	if(!isset($_SESSION['ADMIN_LOGIN'])){
	?>
		<script>
		window.location.href='login.php';
		</script>
		<?php
	}
	if($_SESSION['ADMIN_ROLE']==1){
		?>
		<script>
		window.location.href='product.php';
		</script>
		<?php
	}
}

function imageCompress($source,$path,$quality=60){
	$arr=getimagesize($source);
	
	imagejpeg($path,$quality);
}
?>