

<?php 
     require_once('module.php');
     require_once('yesno.php');
     
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

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Compliant
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Query</a>
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
    <div class="col-sm-7">
    <span style="color:green;"><?php if(isset($_GET['alert'])){ echo '<h5?>'.$_GET['alert'].'</h5>';} ?></span>
<legend style="margin-left: 60px; color:purple; margin-top:20px;">Check Vehicle Detail</legend>

<hr>
<form>

<input type="text" id="vehicleNumber" placeholder="Enter Vehicle Number">
        <button type="button" id="searchButton">Search</button>

</form>

<div id="resultContainer" style="font-family: 'Courier New', Courier, monospace; overflow-y: scroll; "></div>
<footer class="bg-light text-center py-3 fixed-bottom">
  <p>&copy; 2023 Your Company. All rights reserved.</p>
</footer>

    </div>
  </div>
</div>

    
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" crossorigin="anonymous"></script>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {
  $("#searchButton").click(function() {

    var finearr = [];
    var vehicleNumber = $("#vehicleNumber").val();

    $.ajax({
      url: "https://scanty-shoe.000webhostapp.com/roadapp/getinfo.php",
      type: "GET",
      dataType: "json",
      data: { vehicleNumber: vehicleNumber },
      success: function(data) {
        var resultHTML = "";
        if(data.statusCode == 404){ resultHTML = data.message;}
        if (data.length > 0) {
          for (var i = 0; i < data.length; i++) {
            var vehicleDetails = data[i].vehicle_details;
          
           
                            resultHTML += "<table class='table table-bordered'> <tr> <th> Vehicle Number</th> <th>Vehicle Type</th><th> OwnerName</th><th>RegistrationDate</th><th>TaxYear</th></tr>";
                            resultHTML += "<tr>";
                            resultHTML += "<td> " + vehicleDetails.vehicle_no + "</td>";
                            resultHTML += "<td> " + vehicleDetails.vehicle_type + "</td>";
                            resultHTML += "<td>"  + vehicleDetails.owner_name + "</td>";
                            resultHTML += "<td>"  + vehicleDetails.registration_date + "</td>";
                            resultHTML += "<td> " + vehicleDetails.tax_year + "</td>";
                            resultHTML += "</tr>";
                            resultHTML += "</table>";
                            resultHTML += "<hr>";
                            resultHTML += "<table class='table table-bordered'> <tr> <th> Fine ID</th> <th> Violation Date </th><th> Violation Description </th><th>Fine Amount </th></tr>";
                            resultHTML +="<div style= color : green;'>";                  
            for (var j = 0; j < data[i].fine_details.length; j++) {
              var fine = data[i].fine_details[j];
              resultHTML += "<tr>";
                          
              resultHTML += "<td>" + fine.fine_id + "</td>";
              resultHTML += "<td>" + fine.rule_violation_date + "</td>";
              resultHTML += "<td>" + fine.rule_violation_description + "</td>";
              resultHTML += "<td>" + fine.fine_amount + "</td>";
              resultHTML += "</tr>";
             
              finearr.push(fine.fine_id);
             
            }
          
            resultHTML += "</table>";
            resultHTML +="<div class='text-center'><button class='btn btn-outline-warning mx-auto' style='margin-bottom: 100px;' data-toggle='modal' data-target='#payConfirmationModal'>Pay</button></div>";
            resultHTML += "</div>";
          }
        } 

        $("#resultContainer").html(resultHTML);
        
      },
      error: function() {
        $("#resultContainer").html("<p>Error fetching data.</p>");
      }
    });

    $("#confirmPaymentButton").click(function() {
        var voucher_no = $("#voucher_no").val();

        $.ajax({
        url: "https://scanty-shoe.000webhostapp.com/roadapp/transaction.php",
        type: "POST",
        dataType: "json",
        data: {finearr:finearr,vehicleNumber:vehicleNumber,voucher_no:voucher_no},
        success: function(response) {
        if (response.success) {

        } else {

        }
        },
        error: function() {

        }
        });
        $("#payConfirmationModal").modal("hide");
        });

  });
});




  </script>
