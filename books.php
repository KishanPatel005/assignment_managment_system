<?php
include 'top.php';
define('AIT', true);
?>


<!--Video Section-->
<section class="content-section video-section fables-after-overlay">
    <div class="pattern-overlay">
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=ir21tgn5hX4',containment:'.video-section', quality:'large',mute: 'true' ,autoPlay:true, opacity:1}">bg</a>
        <div class="container position-relative z-index">
            <div class="fables-video-caption text-center wow zoomIn" data-wow-delay="1s" data-wow-duration="2s">
                <h1 class="white-color font-weight-bold mt-6">We are a Uploading notes and assignments of Ahmedabad Institute of Technology Students </h1>
                <p class="fables-fifth-text-color mt-3 mb-4 font-18">
                    We are providing assignments of Information Technology students
                </p>

            </div>
        </div>
    </div>
</section>
<!--Video Section Ends Here-->


<div class="container">
    <div class="row">
        <div class="position-relative z-index col-12 col-md-8 offset-md-2 text-center wow zoomIn" data-wow-duration="2s">
            <h3 class=" white-color mb-3 font-25 font-weight-bold">Ait Assignments & Notes</h3>
            <div class="d-flex justify-content-center">
                <div class="list-group" style="width: 1000px;">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List BOOKS</h5>
                        </div>
                    </a>

                    <?php
                    $sql = mysqli_query($con, "SELECT b.*, s.sem, sub.subjects FROM books AS b
                           LEFT JOIN sem AS s ON b.sem_id = s.id
                           LEFT JOIN subjects AS sub ON b.subjects_id = sub.id
                           ORDER BY b.id ASC");

                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                        <a href="<?php echo $row['books']; ?>" class="list-group-item list-group-item-action">CLICK HERE TO DOWNLOAD BOOK<br>
                            <!-- SEM:-  -->
                            <?php echo $row['sem']; ?> <br>
                            SUBJECT:-<?php echo $row['subjects']; ?> <br> <?php echo $row['title']; ?>
                        </a>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</div>










<?php
include 'footer.php';
?>