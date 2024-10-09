<?php require_once('zvinodiwa/database.php');


                            if(isset($db,$_POST['submit'])){
                            $name = mysqli_real_escape_string($db,$_POST['name']);
                            $tin = mysqli_real_escape_string($db,$_POST['tin']);
                            $country = mysqli_real_escape_string($db,$_POST['country']);
                            $city = mysqli_real_escape_string($db,$_POST['city']);
                            $phone = mysqli_real_escape_string($db,$_POST['phone']);
                            $email = mysqli_real_escape_string($db,$_POST['email']);
                            $username = mysqli_real_escape_string($db,$_POST['Username']);
                            $password = mysqli_real_escape_string($db,$_POST['password']);
                            $repassword = mysqli_real_escape_string($db,$_POST['repassword']);
                            $file = $_POST['file'];
        $file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'efac_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../images/'.$file_name_new;
    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {         
                            
                            $sql_e = "SELECT * FROM business WHERE email ='$email'";
                            $res_e = mysqli_query($db, $sql_e);
                            if(mysqli_num_rows($res_e) > 0){
                            ?>
                             <div class="alert alert-danger  animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> OPPS! </strong><?php echo'Sorry its seems like this business registered';?></div>
                        <?php    
                       }else if ($password = $repassword)
                       	{      
                  
                $sql = "INSERT INTO business(name,TINnumber,country,city,phone,email,username,password,status,file )VALUES('$name','$tin','$country','$city','$phone','$email','$username','$password','panding','$file_name_new')";
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success  animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Thank you for Registration! Login to check status ';
                        header('location:login.php?success=true');
                        ?>
                    </div>
                        <?php

                          }else{
                                ?>
                         <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Error! </strong><?php echo'OPPS something went wrong';?></div>
                        <?php    
                          }      
                      }
                 }
             }

                
                ?> 