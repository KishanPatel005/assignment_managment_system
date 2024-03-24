<?php
include 'top.inc.php';
?>
<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $del = mysqli_query($con, "DELETE FROM subjects WHERE id = '$id'");
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
                        <h4 class="box-title">Subjects </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">

                            &nbsp; <a href="manage_subjects.php"> <button type="button" class="btn btn-primary">Add</button></a>

                            <table class="table">
    <thead>
        <tr>
            <th class="serial">#</th>
            <th class="avatar">Semester</th>
            <th class="avatar">Subjects</th>
            <th class="avatar">Total Assignments</th>
            <th class="avatar">Actions</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        $sql = mysqli_query($con, "SELECT subjects.id, subjects.subjects, sem.sem, COUNT(assignments.id) AS total_assignments
                                FROM subjects
                                LEFT JOIN sem ON subjects.sem_id = sem.id
                                LEFT JOIN assignments ON subjects.id = assignments.subjects_id
                                GROUP BY subjects.id, subjects.subjects, sem.sem
                                ORDER BY subjects.id ASC");

        while ($row = mysqli_fetch_assoc($sql)) {
            $i++;
        ?>
        <tr>
            <td class="serial"><?php echo $i ?></td>
            <td><?php echo $row['sem']; ?></td>
            <td><?php echo $row['subjects']; ?></td>
            <td><span class="count"><?php echo $row['total_assignments']; ?></span></td>
            <td>
                <a href="manage_subjects.php?id=<?php echo $row['id'] ?>"><span class="btn btn-success">Edit</span></a>
                <a href="subjects.php?id=<?php echo $row['id'] ?>"><span class="btn btn-danger">Delete</span></a>
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