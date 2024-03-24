<?php
    include 'top.inc.php';
    $msg = '';
    $subjectt = '';
    if (isset($_GET['id'] )) {
        $id = $_GET['id'];
        $sql2 = mysqli_query($con, "SELECT * FROM subjects where id = '$id'");
        while ($row = mysqli_fetch_assoc($sql2))
        {
            $subjectt = $row['subjects'];
        }
    }
?>
<?php
    if (isset($_POST['submit']))
    {
        $sem = $_POST['sem'];
        $subject = $_POST['subject'];
        $sql = mysqli_query($con, "SELECT * FROM subjects where sem_id = '$sem' AND subjects = '$subject'");
        
        $check = mysqli_num_rows($sql);
        if ($check)
        {
            $msg = "Already exists";
            
        }
        else {
         
        if (isset($_GET['id'] )) {
            $id = $_GET['id'];
            $update = mysqli_query($con, "UPDATE `subjects` SET `sem_id`='$sem',`subjects`='$subject' WHERE id = '$id'");
        }
        else {
            $insert = mysqli_query($con, "INSERT INTO `subjects`(`sem_id`, `subjects`) VALUES ('$sem','$subject')");
        }
        echo '<script>
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Added Subject",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location.href = "Subjects.php";
        });
    </script>';
    }
    
}
?>
<form action="" method="POST">
    <div class="content pb-0">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <br>
                        <div class="card-header"><strong>Semester-Managment</strong><small> Form</small></div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="company" class="form-control-label">Semester</label>
                                <select class="form-control" name="sem">
                                <?php
                                
                                    $sql = mysqli_query($con, "SELECT * FROM sem ORDER BY id ASC ");
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>               
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['sem']; ?></option>
                                    <?php }?>
                                                </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Subjects</label>
                                <input type="text" name="subject" id="company" placeholder="Enter your Subject name" class="form-control" value="<?php echo $subjectt;   ?>">
                            </div>
                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">submit</span>
                            </button>
                            <script>
    var amount = "<?php echo isset($msg) ? $msg : '' ?>";
    if (amount !== '') {
        alert(amount);
    }
</script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
