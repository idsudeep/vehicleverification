

<?php include 'header.php';?>

<div class="container">


    
<div class ="col-sm-12">

<div class="col-sm-7 offset-3">

<legend style="margin-left: 60px; color:purple; margin-top:20px;">User's Login</legend>
<span><?php if(isset($_GET['alert'])){ echo '<h5?>'.$_GET['alert'].'</h5>';} ?></span>
<hr>
<form method="post" action="action.php?form=login">

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

<div class="col-sm-4 offset-2">
<input type="submit" class="btn btn-outline-primary " style="text-align: center;font-family: cursive;" value="login" name="btn_login"> 
</div>
<div class="col-sm-6 " style="margin-left:32px;">
 <div class="form-group"> 
<a href="#"><p style="font-family:cursive;  margin-top:20px;">Forget Password</p></a>
<p>Or</p>
<a href="register.php"><span> <p style="margin-left:25px; font-family:cursive;"> Create a Account</p></span></a>
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


    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->