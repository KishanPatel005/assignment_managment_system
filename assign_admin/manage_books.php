<?php
include 'top.inc.php';
$msg = '';
$link  =  '';
$subjectss = '';
$semm = '';
$title = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $semm = "Your books current sem is " . $_GET['sem'];

    $subjectss = $_GET['subject'];
    $sell = mysqli_query($con,"SELECT * FROM books WHERE id = '$id'");
  
    while ($row = mysqli_fetch_assoc($sell)) {
        $title = $row['title'];
        $link = $row['books'];
    }
}



if (isset($_POST['submit'])) {
    $sem = $_POST['sem'];
    $subject = $_POST['subject'];
    $title = $_POST['title'];
    $books_link = $_POST['books_link'];

    // Check if the subject already exists in the subjects table
    $checkSubject = mysqli_query($con, "SELECT id FROM books WHERE sem_id = '$sem' AND subjects_id = '$subject' AND title = '$title' AND books = '$books_link'");
    if (mysqli_num_rows($checkSubject) > 0) {
        $msg = "Subject already exists.";
    } else {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            $update = mysqli_query($con, "UPDATE `books` SET `sem_id`='$sem',`subjects_id`='$subject',`title`='$title',`books`='$books_link' WHERE id = '$id'");
        } else {
            $insert = mysqli_query($con, "INSERT INTO `books`(`sem_id`, `subjects_id`,`title`,`books`) VALUES ('$sem','$subject','$title','$books_link')");
        }
        
            echo '<script>
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Added books",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "books.php";
                });
            </script>';
        }
       
    }

?>

<!-- HTML Form -->
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
                                <label for="sem" class="form-control-label">Semester</label>
                                <select class="form-control" name="sem" id="sem" required>
                                    <option value="<?php echo $sem; ?>" selected><?php echo $semm; ?></option>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM sem ORDER BY id ASC ");
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                        ?>               
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['sem']; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subjects" class="form-control-label">Subjects</label>
                                <select class="form-control" name="subject" id="subjects" required>
                                  
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="company" class="form-control-label">Title </label>
                                <input type="text" name="title" id="company" placeholder="Enter your books title" class="form-control" value="<?php echo $title; ?>" required>
                            </div>



                            <div class="form-group">
                                <label for="company" class="form-control-label">books link</label>
                                <input type="text" name="books_link" id="company" placeholder="Enter your books link" class="form-control" value="<?php echo $link; ?>" required>
                            </div>
                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Submit</span>
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

<!-- Include jQuery and AJAX Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Listen for changes in the semester dropdown
        $('#sem').change(function () {
            var semId = $(this).val(); // Get the selected semester ID
            // Send an AJAX request to fetch subjects for the selected semester
            $.ajax({
                url: 'get_subjects.php', // Update the path to match your file structure
                type: 'POST',
                data: { sem_id: semId }, // Send the selected semester ID
                success: function (response) {
                    // Populate the subjects dropdown with the fetched data
                    $('#subjects').html(response);
                }
            });
        });
    });
</script>
