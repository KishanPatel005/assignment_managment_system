<?php
include 'top.inc.php';
?>
<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $del = mysqli_query($con, "DELETE FROM sem WHERE id = '$id'");
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
                        <h4 class="box-title">Semester </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">

                            &nbsp; <a href="manage_Semesters.php"> <button type="button" class="btn btn-primary">Add</button></a>

                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">Semester</th>
                                        <th class="avatar">Total Subjects</th>
                                        <th class="avatar">Total Assignments</th>
                                        <th class="avatar">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    $sql = mysqli_query($con, "SELECT sem.id, sem.sem, COUNT(subjects.id) AS total_subjects
                                            FROM sem
                                            LEFT JOIN subjects ON sem.id = subjects.sem_id
                                            GROUP BY sem.id, sem.sem
                                            ORDER BY sem.id ASC");

                                    while ($row = mysqli_fetch_assoc($sql)) {
                                        $i++;
                                        // Get the total assignments for this semester
                                        $semId = $row['id'];
                                        $assignmentsSql = mysqli_query($con, "SELECT COUNT(*) AS total_assignments FROM assignments WHERE sem_id = '$semId'");
                                        $assignmentsRow = mysqli_fetch_assoc($assignmentsSql);
                                        $totalAssignments = $assignmentsRow['total_assignments'];
                                    ?>
                                        <tr>
                                            <td class="serial"><?php echo $i ?></td>
                                            <td><?php echo $row['sem']; ?></td>
                                            <td><span class="count"><?php echo $row['total_subjects']; ?></span></td>
                                            <td><span class="count"><?php echo $totalAssignments; ?></span></td>
                                            <td>
                                                <a href="manage_Semesters.php?id=<?php echo $row['id'] ?>"><span class="btn btn-success">Edit</span></a>
                                                <a href="Semesters.php?id=<?php echo $row['id'] ?>"> <span class="btn btn-danger">Delete</span></a>
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
