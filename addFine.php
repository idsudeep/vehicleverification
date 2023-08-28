
<?php 
     require_once('module.php');
     
?>

<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Road App</title>
  </head>
  <body>
  
    <span>
    <!-- <a class="navbar-brand" href="#"><h5>Vehicle Verification</h5></a> -->
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
        <a class="btn btn-outline-warning dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        RuleViolation
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="checkVehicle.php">checkVehicle</a>
          <a class="dropdown-item" href="#">UpdateFine</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">RemoveFine</a>
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

<div class="container">
  <div class="d-flex justify-content-center align-items-center" >
    
    <div class="col-sm-4">
    <h2 style="font-family: 'Courier New', Courier, monospace; text-align:center">Add Fine </h2>
    <div id="resultContainer" style="font-family: 'Courier New', Courier, monospace; text-align:center;margin-bottom:30px "></div>
  <form id="addFineForm">
    <div class="form-group">
      <label for="vechicle_no">VehicleNumber:</label>
      <input type="text" class="form-control" id="vehicleNumber" name="vehicleNumber" required>
    </div>

    <div class="form-group">
      <label for="violationDescription">Violation Description:</label>
      <select class="form-control" id="violationDescription" name="violationDescription" required>
        <option value="" disabled selected>Select Violation Description</option>
        <option value="No Helmet while riding">No Helmet while riding</option>
        <option value="Over speed">Over speed</option>
        <option value="Signal Violation">Signal Violation</option>
      
      </select>
    </div>
    <div class="form-group">
      <label for="fineAmount">Fine Amount:</label>
      <input type="number" class="form-control" id="fineAmount" name="fineAmount" required>
    </div>
    <div class="text-center"> 
      <button type="submit" class="btn btn-primary">Add Fine</button>
    </div>
  </form>
    </div>
  </div>
</div>

    
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" crossorigin="anonymous"></script>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

 

<script>
    $(document).ready(function() {
      $("#addFineForm").submit(function(e) {
        e.preventDefault(); 

        var vehicleNumber = $("#vehicleNumber").val();
        var violationDescription = $("#violationDescription").val();
        var fineAmount = $("#fineAmount").val();

        $.ajax({
          url: "https://scanty-shoe.000webhostapp.com/roadapp/reqaddfine.php",
          type: "POST",
          data: {
            vehicleNumber: vehicleNumber,
            violationDescription: violationDescription,
            fineAmount: fineAmount
          },
          dataType: "json",
          success: function(data) {
            $("#resultContainer").html(data.message);
          },
          error: function() {
            $("#resultContainer").html("<p>Error adding fine.</p>");
          }
        });
      });
    });
  </script>