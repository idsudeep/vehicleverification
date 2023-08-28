
<?php 
     require_once('module.php');
     
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Road App</title>
  </head>
  <body>
  
    <span>
    <a class="navbar-brand" href="#"><h5>Vehicle Verification</h5></a>
    </span>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Compliant</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
     
      
      <!-- <p class="btn btn-outline-success my-2 my-sm-0" type="submit">username</p> -->

      <div class="dropdown">
      <?php
if (isset($_SESSION['userid'])) {
?>
    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION['username']; ?>
    </button>
<?php
} else {
?>
   <a href="login.php"> <button class="btn btn-outline-warning " type="button" id="" aria-expanded="false">
        login
    </button></a>
<?php
}
?>

  

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-family:cursive;">
    <a class="dropdown-item" href="#">profile</a>
    <a class="dropdown-item" href="#">setting</a>
    <a class="dropdown-item" href="session.php" style="color:#e3626eb0">logout</a>
  </div>
</div>
    </form>
  </div>
</nav>