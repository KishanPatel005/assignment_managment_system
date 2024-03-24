<?php
include 'connection.inc.php'; // Include your database connection script

if (isset($_POST['sem_id'])) {
    $semId = $_POST['sem_id'];
    
    // Fetch subjects for the selected semester from your database
    $query = mysqli_query($con, "SELECT * FROM subjects WHERE sem_id = '$semId' ORDER BY subjects ASC");
    
    if ($query) {
        $options = '<option value="">Select Subject</option>';
        while ($row = mysqli_fetch_assoc($query)) {
            $options .= '<option value="' . $row['id'] . '">' . $row['subjects'] . '</option>';
        }
        echo $options; // Return the options as a response
    } else {
        echo '<option value="">No Subjects found</option>';
    }
} else {
    echo '<option value="">Invalid Request</option>';
}
?>
