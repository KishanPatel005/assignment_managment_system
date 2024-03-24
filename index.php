<?php
include 'top.php';
?>


<!--Video Section-->
<section class="content-section video-section fables-after-overlay">
  <div class="pattern-overlay">
    <!-- <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=ir21tgn5hX4',containment:'.video-section', quality:'large',mute: 'true' ,autoPlay:true, opacity:1}">bg</a> -->
    <div class="container position-relative z-index">
      <div class="fables-video-caption text-center wow zoomIn" data-wow-delay="1s" data-wow-duration="2s">
        <h1 class="white-color font-weight-bold mt-6">We are a Uploading notes and assignments of AIT Students </h1>
        <p class="fables-fifth-text-color mt-3 mb-4 font-18">
          We are providing assignments of Information Technology students
        </p>
        
        <a data-fancybox href="https://www.youtube.com/watch?v=meBbDqAXago">
                 <span class="fables-iconplay fables-second-text-color fa-4x wow bounce"></span>
              </a> 

      </div>
    </div>
  </div>
</section>
<!--Video Section Ends Here-->


<div class="d-flex justify-content-center">
  <div class="list-group" style="width: 1000px;"> <!-- Adjust the width as needed -->
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">List semesters</h5>
      </div>
    </a>

    <?php
    $sql = mysqli_query($con, "SELECT * FROM sem ORDER BY sem ASC");
    while ($row = mysqli_fetch_assoc($sql)) {
    ?>
      <a href="subjects.php?id=<?php echo $row['id'] ?>&sem=<?php echo $row['sem'] ?>" class="list-group-item list-group-item-action">
        <?php echo $row['sem']; ?>
      </a>
    <?php } ?>

  </div>
</div>




<!-- 
    
<div class="container py-4 py-lg-5">
    <div class="fables-blog my-3">
        <h2 class="fables-second-text-color mb-4 mb-lg-5 font-weight-bold">
            <?php
            $sql = mysqli_query($con, "SELECT * FROM sem ORDER BY sem ASC");
            while ($row = mysqli_fetch_assoc($sql)) {
            ?>
                 <a href="subjects.php?id=<?php echo $row['id'] ?>&sem=<?php echo $row['sem'] ?>"><?php echo $row['sem']; ?></a> <br>
                 
                   <?php }
                    ?>

        </h2>
    </div>
    
</div> -->






<?php
include 'footer.php';
?>