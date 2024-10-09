<?php
                 require_once('../zvinodiwa/database.php');
                 require_once('../zvinodiwa/session.php');
      

          if(isset($_POST['submit'])){
                            $description = mysqli_real_escape_string($db,$_POST['description']);
                            $region = mysqli_real_escape_string($db,$_POST['region']);
                            $ruser = $_SESSION["username"];
                            $type = mysqli_real_escape_string($db,$_POST['type']);
                            $Price = mysqli_real_escape_string($db,$_POST['Price']);
                            $qty = mysqli_real_escape_string($db,$_POST['qty']);
                            $total = $Price * $qty;
                            //$image = mysqli_real_escape_string($db,$_POST['image']);         
                            $date_t = date('Y-m-d');

                             $file = $_POST['file'];
        $file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'efac_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../images/'.$file_name_new;
    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
                  
                $sql = "INSERT INTO agri_tips(description,region,user,type,qty,price,total,file,date_t)VALUES('$description','$region','$ruser','$type','$qty','$Price','$total','$file_name_new','$date_t')";
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results==1){
                              ?>
                        
                        <?php echo'Thank you for adding Agriculatral harvest ';
                    header('location:pest_view.php?success=true');
                           
                          }      
                      }
                }

                
                ?>    