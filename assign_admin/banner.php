<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update banner set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from banner where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from banner order by id asc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Banner </h4>
				   <h4 class="box-link">   &nbsp; <a href="manage_Semesters.php"> <button type="button" class="btn btn-primary">Add</button></a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>Heading1</th>
							   <th>Heading2</th>
							   <th>Btn Txt</th>
							   <th>Btn Link</th>
							   <th>Image</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   </td>
							   <td><?php echo $row['heading1']?></td>
							   <td><?php echo $row['heading2']?></td>
							   <td><?php echo $row['btn_txt']?></td>
							   <td><?php echo $row['btn_link']?></td>
							   <td>
							   <?php
							   
echo "<a target='_blank' href='".BANNER_SITE_PATH.$row['image']."'><img width='150px' src='".BANNER_SITE_PATH.$row['image']."'/></a>";
							   ?>
							   </td>
							   <td>
    <a href="manage_Semesters.php?id=<?php echo $row['id']; ?>">
        <span class="btn btn-success">Edit</span>
    </a>
    <a href="Semesters.php?id=<?php echo $row['id']; ?>">
        <span class="btn btn-danger">Delete</span>
    </a>
</td>

							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>