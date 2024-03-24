<?php
include 'top.php';
$sem = '';
?>

<?php
if (isset($_GET['id']) && ($_GET['sem'])) {
  $id = $_GET['id'];
  $sem = $_GET['sem'];
}
?>




<!--Video Section-->
<section class="content-section video-section fables-after-overlay">
  <div class="pattern-overlay">
    <a id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/BTGKVNa7FU4', containment:'.video-section', quality:'highres', mute: 'false', autoPlay:true, opacity:1, showControls: false, modestBranding: true}">bg</a>
    <div class="container position-relative z-index">
      <div class="fables-video-caption text-center wow zoomIn" data-wow-delay="1s" data-wow-duration="2s">
        <h1 class="white-color font-weight-bold mt-6">We are Uploading notes and assignments of AIT Students</h1>
        <p class="fables-fifth-text-color mt-3 mb-4 font-18">
          We are providing assignments of Information Technology students
        </p>
      </div>
    </div>
  </div>
</section>

<!--Video Section Ends Here-->
<div class="d-flex justify-content-center">
  <div class="list-group" style="width: 1000px;"> <!-- Adjust the width as needed -->
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">List subject of <?php echo  $sem ?></h5>
      </div>
    </a>

    <?php
    $sql = mysqli_query($con, "SELECT * FROM `subjects` WHERE sem_id = $id ORDER BY sem_id ASC");
    if (mysqli_num_rows($sql) > 0) {
      while ($row = mysqli_fetch_assoc($sql)) {
    ?>
        <a href="options.php?subject_id=<?php echo $row['id'] ?>&sem=<?php echo $sem ?>&subjects=<?php echo $row['subjects'] ?>" class="list-group-item list-group-item-action">
          <?php echo $row['subjects']; ?>
        </a>
      <?php }
    } else { ?>
      <div class="fables-light-background-color">
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="fables-breadcrumb breadcrumb px-0 py-3">
              <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Coming Soon</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- /End Breadcrumbs -->

      <!-- Start page content -->
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2 text-center my-4 my-lg-5 py-0 py-lg-5">
            <div class="fables-404-page">
              <span class="fables-iconcommingSoon fables-second-text-color fa-4x"></span>
              <h3 class="font-40 font-weight-bold fables-second-text-color my-3">Coming Soon</h3>
              <p class="font-18 fables-fifth-text-color">We are working on website very hard. </p>
              <div id="comming-soon" data-countdown="2020/01/01"></div>
            </div>
          </div>
        </div>


      </div>
    <?php  }
    ?>

  </div>
</div>


<?php
include 'footer.php';
?>