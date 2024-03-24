<?php
include 'top.php';
$subject  = '';
?>
<?php
if (isset($_GET['subject_id']) && ($_GET['subjects'])) {
    $subject_id = $_GET['subject_id'];
    $subject = $_GET['subjects'];
    $sem = $_GET['sem'];
}
?>


<!--Video Section-->
<section class="content-section video-section fables-after-overlay">
    <div class="pattern-overlay">
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=ir21tgn5hX4',containment:'.video-section', quality:'large',mute: 'true' ,autoPlay:true, opacity:1}">bg</a>
        <div class="container position-relative z-index">
            <div class="fables-video-caption text-center wow zoomIn" data-wow-delay="1s" data-wow-duration="2s">
                <h1 class="white-color font-weight-bold mt-6">We are a Uploading notes and assignments of AIT Students </h1>
                <p class="fables-fifth-text-color mt-3 mb-4 font-18">
                    We are providing assignments of Information Technology students
                </p>
                <!-- <a data-fancybox href="https://www.youtube.com/watch?v=meBbDqAXago">
                 <span class="fables-iconplay fables-second-text-color fa-4x wow bounce"></span>
              </a>  -->

            </div>
        </div>
    </div>
</section>
<!--Video Section Ends Here-->

<div class="container py-4 py-lg-5">
    <div class="fables-blog my-3">
        <h2 class="fables-second-text-color mb-4 mb-lg-5 font-weight-bold"><?php echo "Assignments of $subject" ?></h2>


        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">ASSIGNMENTS & NOTES OF <?php echo $subject ?></h5>
                <p class="card-text">
                    <a href="assignments.php?subject_id=<?php echo $subject_id ?>&sem=<?php echo $sem ?>&subjects=<?php echo $subject ?>&action=assignment">
                        (CLICK HERE TO REDIRECT)
                    </a>
                </p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">NOTES OF <?php echo $subject ?></h5>
                <p class="card-text">
                <a href="notes.php?subject_id=<?php echo $subject_id ?>&sem=<?php echo $sem ?>&subjects=<?php echo $subject ?>&action=notes">
                        (CLICK HERE TO REDIRECT)
                    </a>
                </p>
            </div>
        </div>

        <!-- Content to display if no assignments found -->
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
                        <p class="font-18 fables-fifth-text-color">We are working on the website very hard.</p>
                        <div id="coming-soon" data-countdown="2020/01/01"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php
include 'footer.php';
?>