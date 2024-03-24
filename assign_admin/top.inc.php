<?php
   include 'connection.inc.php';
   include 'functions.inc.php';
   if(!isset($_SESSION['ADMIN_LOGIN']) || empty($_SESSION['ADMIN_LOGIN'])) {
      header('location:login.php');
      die();
  }
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <style>
        body {
            font-family: "Audiowide", sans-serif;
        }
    </style>

   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <!-- <li class="menu-item-has-children dropdown">
                     <a href="banner.php" > Banner</a>
                  </li> -->
                  <li class="menu-item-has-children dropdown">
                     <a href="users.php" > users</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="Semesters.php" > Semesters</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="Subjects.php" > Subjects</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="Assignments.php" > Assignments </a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="notes.php" > Notes</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="books.php" > books</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <!-- <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><img src="images/logo (2).png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="images/logo (2).png" alt="Logo"></a> -->
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               <!-- </div> -->
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $_SESSION['ADMIN_USERNAME'] ?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>