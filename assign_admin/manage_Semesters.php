
<?php
    include 'top.inc.php';
    $msg = '';
    $semm  =  '';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sell = mysqli_query($con,"SELECT * FROM sem WHERE id = '$id'");
        while ($row = mysqli_fetch_assoc($sell)) {
            $semm = $row['sem'];
        }
    }
    if (isset($_POST['submit']))
    {
        $sem = $_POST['sem'];
        $sel = mysqli_query($con,"SELECT * FROM sem WHERE sem = '$sem'");
        $check = mysqli_num_rows($sel);
        if ($check > 0)
        {
            $msg = 'Already Exists';
        }
        else {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = mysqli_query($con, "UPDATE `sem` SET `sem`='$sem' WHERE id = '$id'");
            }
            else {
                $sql = mysqli_query($con, "INSERT INTO `sem`(`sem`) VALUES ('$sem')");
            }
            echo '<script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Added Sem",
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                window.location.href = "Semesters.php";
            });
        </script>';
        }
    }
?>

<br>
<form action="" method="post">
    <div class="content pb-0">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <br>
                        <div class="card-header"><strong>Semester-Managment</strong><small> Form</small></div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Semester</label>
                                <input type="text" name="sem" id="company" placeholder="Enter your Semester name" class="form-control" value="<?php echo $semm; ?>">
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

<?php
include 'footer.inc.php';
?>