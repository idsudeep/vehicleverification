

<?php include 'header.php';?>

<div class="container">


    
<div class ="col-sm-12">

<div class="col-sm-7 offset-3">

<legend style="margin-left: 60px; color:purple; margin-top:20px;">User's Login</legend>
<span><?php if(isset($_GET['alert'])){ echo '<h5?>'.$_GET['alert'].'</h5>';} ?></span>
<hr>
<form method="post" action="action.php?form=adminForm">

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
