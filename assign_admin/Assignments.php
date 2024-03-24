<?php
include 'top.inc.php';
?>
<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $del = mysqli_query($con, "DELETE FROM assignments WHERE id = '$id'");
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


?>

<?php
}

?>




<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Assignments </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">

                            &nbsp; <a href="manage_assignments.php"> <button type="button" class="btn btn-primary">Add</button></a>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">Semester</th>
                                        <th class="avatar">Subject</th>
                                        <th class="avatar">Title</th>
                                        <th class="avatar">Assignments</th>
                                        <th class="avatar">Actions</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    $sql = mysqli_query($con, "SELECT assignments.id, sem.sem, subjects.subjects, assignments.assignment,title
                                    FROM assignments 
                                    LEFT JOIN sem sem ON assignments.sem_id = sem.id
                                    LEFT JOIN subjects ON assignments.subjects_id = subjects.id
                                    ORDER BY assignments.id ASC");
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                        $i++;
                                    ?>
                                        <tr>
                                            <td class="serial"><?php echo $i; ?></td>
                                            <td><?php echo $row['sem']; ?></td>
                                            <td><?php echo $row['subjects']; ?></td>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['assignment']; ?></td>
                                            <td>
                                                <a href="manage_Assignments.php?id=<?php echo $row['id']; ?>&sem=<?php echo $row['sem'] ?>&subject=<?php echo $row['subjects'] ?>;"><span class="btn btn-success">Edit</span></a>
                                                <a href="Assignments.php?id=<?php echo $row['id']; ?>"><span class="btn btn-danger">Delete</span></a>
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