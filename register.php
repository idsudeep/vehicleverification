
<?php include 'header.php';?>

<div class="container">


    
<div class ="col-sm-12">

<div class="col-sm-8 offset-2">

<legend style="margin-left: 60px; color:purple; margin-top:20px;">Signup Form </legend>

<?php if(isset($_GET['alert'])){ echo '<h5?>'.$_GET['alert'].'</h5>';} ?>
<hr>
<form  method = "post" action="action.php?form=register">

<div class="col-sm-6">
<div class ="form-group">
<labe>FullName</label>
 <input type="text" name="username" placeholder= " eg: Joe  Bulls" class="form-control">
</div>
</div>

<div class="col-sm-6">
<div class ="form-group">
<labe>Email</label>
 <input type="email" name="email" class="form-control">
</div>
</div>

<div class="col-sm-6">
<div class ="form-group">
<labe>Password</label>
 <input type="password" name="password" class="form-control">
</div>
</div>
<div class="col-sm-6">
<div class ="form-group">
<labe>Mobile No</label>
 <input type="number" name="mobileno" class="form-control">
</div>
</div>
<div class="col-sm-6">
<div class ="form-group">
<labe>Address</label>
 <input type="text" name="address" class="form-control">
</div>
</div>

<div class="col-sm-6">
 <div class="form-group"> 
<a href="#"><h5 style="font-family:cursive; ">Forget Password</h5></a>
<p>Or</p>
<a href="login.php"><span> <p style="margin-left:25px; font-family:cursive;"> Already User</p></span></a>
</div>
<div class="col-sm-6">
<input type="submit" name="btn_register" value="register" class="btn btn-outline-primary" style="margin-left:25px; font-family:cursive;">
</div>



</form>
</div>
</div>
</div>
    
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->