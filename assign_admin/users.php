<?php
include 'top.inc.php';
?>
<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $del = mysqli_query($con, "DELETE FROM comming_send_mail WHERE id = '$id'");
    if ($del) {
        echo "<script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Deleted',
                showConfirmButton: false,
                timer: 1500
            });
            </script>";
    }
}
?>

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">users </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">

                            <!-- &nbsp; <a href="manage_userss.php"> <button type="button" class="btn btn-primary">Add</button></a> -->

                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                  
                                        <th class="avatar">First name</th>
                                        <th class="avatar">last name    </th>
                                        <th>email</th>
                                        <th>subjects</th>
                                        <th>message</th>
                                        <th class="avatar">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    $sql = mysqli_query($con,"SELECT * FROM comming_send_mail ORDER BY id DESC");

                                    while ($row = mysqli_fetch_assoc($sql)) {
                                        $i++;
                                      
                                       
                                    ?>
                                        <tr>
                                            <td class="serial"><?php echo $i ?></td>
                                            <td><?php echo $row['fname']; ?></td>
                                            <td><span class=""><?php echo $row['lname'] ?></span></td>
                                            <td><span class=""><?php echo $row['email'] ?></span></td>
                                            <td><span class=""><?php echo $row['subjects']?></span></td>
                                            <td><span class=""></span><?php echo $row['messages']?></span></td>
                                            <td>
                                                <!-- <a href="manage_userss.php?id=<?php echo $row['id'] ?>"><span class="btn btn-success">Edit</span></a> -->
                                                <a href="users.php?id=<?php echo $row['id'] ?>"> <span class="btn btn-danger">Delete</span></a>
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
<div class="clearfix"></div>

<?php
include 'footer.inc.php';
?>
