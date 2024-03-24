<?php
include 'top.inc.php';
?>
<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $del = mysqli_query($con, "DELETE FROM books WHERE id = '$id'");
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
                        <h4 class="box-title">books </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">

                            &nbsp; <a href="manage_books.php"> <button type="button" class="btn btn-primary">Add</button></a>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">Semester</th>
                                        <th class="avatar">Subject</th>
                                        <th class="avatar">Title</th>
                                        <th class="avatar">books</th>
                                        <th class="avatar">Actions</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    $sql = mysqli_query($con, "SELECT books.id, sem.sem, subjects.subjects, books.books,title
                                    FROM books 
                                    LEFT JOIN sem sem ON books.sem_id = sem.id
                                    LEFT JOIN subjects ON books.subjects_id = subjects.id
                                    ORDER BY books.id ASC");
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                        $i++;
                                    ?>
                                        <tr>
                                            <td class="serial"><?php echo $i; ?></td>
                                            <td><?php echo $row['sem']; ?></td>
                                            <td><?php echo $row['subjects']; ?></td>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['books']; ?></td>
                                            <td>
                                                <a href="manage_books.php?id=<?php echo $row['id']; ?>&sem=<?php echo $row['sem'] ?>&subject=<?php echo $row['subjects'] ?>;"><span class="btn btn-success">Edit</span></a>
                                                <a href="books.php?id=<?php echo $row['id']; ?>"><span class="btn btn-danger">Delete</span></a>
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