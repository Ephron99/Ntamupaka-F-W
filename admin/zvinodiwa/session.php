<?php
session_start();
if($_SESSION['username']){
    
}else{
    header('Location:customer/login.php');
}
?>