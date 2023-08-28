<?php 
require_once("config.php");
require_once("pdo.php");
require_once("module.php");



        if(($_GET['form']=='register') AND ($_POST['btn_register']=='register')){

            $username = $_POST['username'];
            $email =  $_POST['email'];
            $password = $_POST['password'];
            $mobileno = $_POST['mobileno'];
            $address = $_POST['address'];

             $query = "select *from userlog where email = '$email'";
                $exec = mysqli_query($conn,$query);
            if($exec->num_rows !=0){
               
                $alert = "Email already exits";
                header('location:register.php?alert='.$alert);
                die();
              }
            $hashpass = md5($password);
            $queryi = "insert into userlog (username,email,password,mobileno,address) values('$username','$email','$hashpass','$mobileno','$address')";
            $run = mysqli_query($conn,$queryi);
            if($run){
            $alert = "user registered";
            header("location:login.php?alert=".$alert);
            }
       
        }


        

            if(($_GET['form']=='login') AND ($_POST['btn_login']=='login')){
                $email = $_POST['email'];
                $password = md5($_POST['password']);
            
                
                $query = "select * from userlog where email = '$email'";
                $sql =   mysqli_query($conn,$query);
               
                if($sql->num_rows ==0){
                    $alert = "user's not found";
                    header("location:login.php?alert=".$alert);
                    die();
                }
                if($sql->num_rows !=0){

                 
                    $queryp = "select *from userlog where email = '$email' AND password ='$password'"; 
                    $runqueryp = $conn->query($queryp);

                  
                    if($runqueryp->num_rows !=0){

                        $row = $runqueryp->fetch_assoc();

                      
                        logintostore($row['userid'],$row['username'],$row['usertype']);
                        $alert = "welcome ";
                        header('location: usercheckfine.php');
                        $conn->close();
                        die();
                    }else{

                        $alert= "invalid login data";
                        header("location: login.php?alert=".$alert);
                    }
                }

            }


            if(($_GET['form']=='adminForm') AND ($_POST['btn_login']=='login')){
                $email = $_POST['email'];
                $password = md5($_POST['password']);
            
                
                $query = "select * from userlog where email = '$email'";
                $sql =   mysqli_query($conn,$query);
               
                if($sql->num_rows ==0){
                    $alert = "user's not found";
                    header("location:admin.php?alert=".$alert);
                    die();
                }

                if($sql->num_rows !=0){

                 
                    $queryp = "select *from userlog where email = '$email' AND password ='$password' AND usertype = 'manager'"; 
                    $runqueryp = $conn->query($queryp);

                  
                    if($runqueryp->num_rows !=0){

                        $row = $runqueryp->fetch_assoc();
                        logintostore($row['userid'],$row['username'],$row['usertype']);
                        $alert = "logged In Successfully";
                        header("location:checkVehicle.php?alert=".$alert);
                        $conn->close();
                        die();
                    }else{

                        $alert= "invalid login data";
                        header("location: admin.php?alert=".$alert);
                    }
                }
            }

