<?php
include 'top.inc.php';
?>
<?php
$sql = mysqli_query($con, "SELECT * FROM sem");
$sql1 = mysqli_query($con, "SELECT * FROM subjects");
$sql2 = mysqli_query($con, "SELECT * FROM assignments");
$sem = mysqli_num_rows($sql);
$subjects = mysqli_num_rows($sql1);
$assignment = mysqli_num_rows($sql2);
?>

<br /><br /><br>
TOTAL SEMESTERS:-
<?php echo $sem; ?><br>

TOTAL SUBJECTS:-<?php echo $subjects; ?><br>

TOTAL ASSIGNMENTS:-<?php echo $assignment; ?><br>



















<?php
include 'footer.inc.php';
?>