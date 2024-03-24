         <?php
            include 'top.php';
            ?>




         <!-- Loading Screen -->

         <!-- Start Top Header -->


         <!-- /End Top Header -->

         <!-- Start Fables Navigation -->

         <!-- /End Fables Navigation -->

         <!-- Start Header -->

         <!-- /End Header -->

         <!-- Start Breadcrumbs -->
         <div class="fables-light-background-color">
             <div class="container">
                 <nav aria-label="breadcrumb">
                     <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                         <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Contact 2</li>
                     </ol>
                 </nav>
             </div>
         </div>
         <!-- /End Breadcrumbs -->

         <!-- Start page content -->
         <div class="mb-4 mb-md-5">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.605815600641!2d72.51805167505469!3d23.111521413003402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e82d327b6665d%3A0x15ce36c9772a1c7b!2sAhmedabad%20Institute%20of%20Technology!5e0!3m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

         </div>
         <div class="container">
             <div class="row overflow-hidden">
                 <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".5s">
                     <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                         <span class="fables-iconmap-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                         <h2 class="font-16 semi-font fables-main-text-color my-3">Address Information</h2>
                         <p class="font-14 fables-forth-text-color">
                             Beside Vasantnagar Township 380061, Gota Ognaj road, Off, Gota Cross roads, Ahmedabad, Gujarat 380061
                         </p>
                     </div>
                 </div>
                 <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".8s">
                     <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                         <span class="fables-iconphone fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                         <h2 class="font-16 semi-font fables-main-text-color my-3">Mail & Phone number</h2>
                         <!-- <p class="font-14 fables-forth-text-color text-truncate">adminsupport@website.com</p>
                    <p class="font-14 fables-forth-text-color">+333 111 111 000</p> -->
                     </div>
                 </div>
                 <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay="1.1s">
                     <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                         <span class="fables-iconshare-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                         <h2 class="font-16 semi-font fables-main-text-color my-3">Stay In Touch</h2>
                         <ul class="nav fables-contact-social-links">
                             <li><a href="#" target="_blank"><i class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                             <li><a href="#" target="_blank"><i class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li>
                             <li><a href="#" target="_blank"><i class="fab fa-twitter fables-forth-text-color    fa-fw"></i></a></li>
                             <li><a href="#" target="_blank"><i class="fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="row mt-0 mb-4 my-md-5 overflow-hidden">
                 <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                     <h3 class="font-35 font-weight-bold fables-main-text-color mb-4 text-center">Contact Us</h3>
                     <!-- <p class="fables-contact-text fables-forth-text-color text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p> -->
                 </div>

             </div>
             <?php
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;
 
     require 'PHPMailer-master/src/PHPMailer.php';
     require 'PHPMailer-master/src/Exception.php';
     require 'PHPMailer-master/src/SMTP.php';
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $subjects = $_POST['subjects'];
        $messages = $_POST['messages'];

        // Perform database insertion
        $sql = "INSERT INTO comming_send_mail (fname, lname, email, subjects, messages) 
                VALUES ('$fname', '$lname', '$email', '$subjects', '$messages')";

        if (mysqli_query($con, $sql)) {
            // Form data inserted successfully

            // Send email using PHPMailer
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com'; // Your SMTP host
            $mail->SMTPAuth = true;
            $mail->Username = 'kishan7112@example.com'; // SMTP username
            $mail->Password = 'vrpv jtyz souu ddf'; // SMTP password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587; // Port for TLS/STARTTLS
            
            $mail->setFrom('your@example.com', 'Your Name');
            $mail->addAddress('kishan7112@gmail.com'); // Email address to send to

            $mail->isHTML(true);
            $mail->Subject = 'New Message Received';
            $mail->Body = "You have received a new message from $fname $lname. <br>Email: $email<br>Subject: $subjects<br>Message: $messages";

            if ($mail->send()) {
                // Email sent successfully
                echo '<script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Email Sent",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location.href = "Assignments.php";
                    });
                </script>';
            } else {
                // Error occurred while sending email
                echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '")</script>';
            }
        } else {
            // Error occurred during insertion
            echo '<script>alert("ERROR: ' . mysqli_error($con) . '")</script>';
        }
    }
?>

             <div class="row">
                 <div class="col-12 wow fadeInLeft">
                     <form class="fables-contact-form" method="post">
                         <div class="form-row">
                             <div class="form-group col-md-6">
                                 <input type="text" name="fname" class="form-control p-3 fables-rounded" placeholder="First Name">
                             </div>
                             <div class="form-group col-md-6">
                                 <input type="text" name="lname" class="form-control p-3 fables-rounded" placeholder="Last Name">
                             </div>
                         </div>
                         <div class="form-row">
                             <div class="form-group col-md-6">
                                 <input type="email" name="email" class="form-control p-3 fables-rounded" placeholder="Email">
                             </div>
                             <div class="form-group col-md-6">
                                 <input type="text" name="subjects" class="form-control p-3 fables-rounded" placeholder="Subject">
                             </div>
                         </div>
                         <div class="form-row">
                             <div class="form-group col-md-12">
                                 <textarea class="form-control p-3 fables-rounded" name="messages" placeholder="Message" rows="4"></textarea>
                             </div>
                         </div>
                         <div class="form-row">
                             <div class="col-md-12 text-center">
                                 <button type="submit" name="submit" class="btn fables-second-background-color 
                         text-white fables-btn-rounded px-7 py-2 font-20">Send</button>
                             </div>
                         </div>
                     </form>


                 </div>

             </div>
         </div>

         <!-- /End page content -->


         <!-- Start Footer 2 Background Image  -->

         <?php
            include 'footer.php';
            ?>