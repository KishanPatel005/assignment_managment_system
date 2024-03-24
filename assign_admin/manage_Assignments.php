<?php
include 'top.inc.php';
$msg = '';
$link  =  '';
$subjectss = '';
$semm = '';
$title = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $semm = "Your assignment current sem is " . $_GET['sem'];

    $subjectss = $_GET['subject'];
    $sell = mysqli_query($con,"SELECT * FROM assignments WHERE id = '$id'");
  
    while ($row = mysqli_fetch_assoc($sell)) {
        
        $link = $row['assignment'];
    }
}



if (isset($_POST['submit'])) {
    $sem = $_POST['sem'];
    $subject = $_POST['subject'];
    $title = $_POST['title'];
    $assignment_link = $_POST['assignment_link'];

    // Check if the subject already exists in the subjects table
    $checkSubject = mysqli_query($con, "SELECT id FROM assignments WHERE sem_id = '$sem' AND subjects_id = '$subject' AND title = '$title' AND assignment = '$assignment_link'");
    if (mysqli_num_rows($checkSubject) > 0) {
        $msg = "Subject already exists.";
    } else {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            $update = mysqli_query($con, "UPDATE `assignments` SET `sem_id`='$sem',`subjects_id`='$subject',`title`='$title',`assignment`='$assignment_link' WHERE id = '$id'");
        } else {
            $insert = mysqli_query($con, "INSERT INTO `assignments`(`sem_id`, `subjects_id`,`title`,`assignment`) VALUES ('$sem','$subject','$title','$assignment_link')");
        }try {



                 // <td>SEM = '.$sem.'</td></tr>
                        // <td>SUBJECT = '.$subject.'</td><tr>
            $html = '<html><head></head>
            <body>
                <table border="5">
                    <tr>
                        <td>NEW ASSIGNMENT ADDED   in    http://ait.lovestoblog.com/</td></tr><tr>
                 
                        <td>TITLE = '.$title.'</td></tr><tr>
                        <td>ASSIGNMENT LINK = '.$assignment_link.'</td></tr>
                    </tr>
                </table>
            </body>
            </html>';
            include('smtp/PHPMailerAutoload.php');
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";
            $mail->SMTPAuth = true;
            $mail->Username = "kishan7112@gmail.com";
            $mail->Password = "bwodvkmcvgdambgi"; // You should set your Gmail account password here
            $mail->SetFrom("kishan7112@gmail.com");
        
            // Use the existing $con connection
            $db = $con;
        
            // Fetch email addresses from the comming_send_mail table
            $stmt = $db->query("SELECT email FROM comming_send_mail");
            $emailList = array();
        
            while ($row = $stmt->fetch_assoc()) {
                $emailList[] = $row['email'];
            }
        
            // Loop through the email addresses and send the email to each recipient
            foreach ($emailList as $email) {
                $mail->clearAddresses();
                $mail->addAddress($email);
                $mail->IsHTML(true);
                $mail->Subject = "Invoice Details";
                $mail->Body = "$html";
                $mail->SMTPOptions = array('ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => false
                ));
        
                // Send the email
                $mail->send();
            }
        
            // Close the database connection
            $db->close();
        
            echo '<script>
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Added Assignment",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "Assignments.php";
                });
            </script>';
        } catch (Exception $e) {
            // Handle exceptions
            echo "Error: " . $e->getMessage();
        }
        
       
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
                                <input type="text" name="title" id="company" placeholder="Enter your Assignment title" class="form-control" value="<?php echo $title; ?>" required>
                            </div>



                            <div class="form-group">
                                <label for="company" class="form-control-label">Assignment link</label>
                                <input type="text" name="assignment_link" id="company" placeholder="Enter your Assignment link" class="form-control" value="<?php echo $link; ?>" required>
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
