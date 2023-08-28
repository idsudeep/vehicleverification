<?php 
session_start();
require_once("config.php");



function logintostore($userid ,$username ,$usertype){

    if(!isset($_SESSION['userid'])&& !isset($_SESSION['username']) && !isset($_SESSION['usertype'])){

        $_SESSION['userid']= $userid;
        $_SESSION['username']=$username;
        $_SESSION['usertype']=$usertype;

    }
}

function traceuser(){

    if(isset($_SESSION['userid'])){

        return array('userid'=>$_SESSION['userid'],
                    'username'=>$_SESSION['username'],
                    'usertype'=>$_SESSION['usertype']);
    }
    return FALSE;
}

 function getproductid($conn,$id){

    $query = "select *from products where categoryid = $id";
    $rq = mysqli_query($conn, $query);


    $productIDs = array();
    while ($row = $rq->fetch_assoc()) {
        if (isset($row['ProductID'])) {
            $productIDs[] = $row['ProductID'];
        }
    }

    return $productIDs;   

 }

?>