<?php 
/*
$cache_file = 'data.json';
 if(file_exists($cache_file)){
   $data = json_decode(file_get_contents($cache_file));
 }else{
  $api_url = 'https://content.api.nytimes.com/svc/weather/v2/current-and-seven-day-forecast.json';
  $data = file_get_contents($api_url);
  file_put_contents($cache_file, $data);
  $data = json_decode($data);
 }

$current = $data->results->current[0];
$forecast = $data->results->seven_day_forecast;*/

?>
<style>

  .aqi-value{
    font-family : "Noto Serif","Palatino Linotype","Book Antiqua","URW Palladio L";
    font-size:30px;
    font-weight:bold;
  }
  h1{
    text-align: center;
    font-size:3em;
  }
  .forecast-block{
  	background-color: #fff!important;
  	width:20% !important;
  }
  .title{
  	background-color:#1b262c;
  	width: 100%;
  	color:#fff;
  	margin-bottom:0px;
  	padding-top:10px;
  	padding-bottom: 10px;
  }
  .bordered{
  	border:1px solid #000;
  }
  .weather-icon{
  	width:40%;
  	font-weight: bold;
  	background-color: #1b262c;
  	padding:10px;
  	border: 1px solid #000;
  }
</style>

<?php
  function convert2cen($value,$unit){
    if($unit=='C'){
      return $value;
    }else if($unit=='F'){
      $cen = ($value - 32) / 1.8;
      	return round($cen,2);
      }
  }
?>

  <br>
  
  <div class="row">
    <h3 class="title text-center bordered">All Haverst</h3>
    <?php /*echo $current->city.' ('.$current->country.')'; */ ?>
    <div class="col-md-12" style="padding-left:0px;padding-right:0px;">
      <div class="single bordered" style="padding-bottom:25px;background:url('back.jpg') no-repeat ;border-top:0px;background-size: cover;">
        <div class="row">
          <div class="col-sm-12" style="font-size:16px;text-align:left;padding-left:30px;">
             <div class="row">
            <div class="col-md-12 ssm">
            <div class="card">
               
            <div class="card-body">
              <div id="tabs-4"><table class="table table-striped thead-dark table-bordered table-hover" id="mhishi">
                <thead>
                <tr>
                    <th>Region</th>
                    <th>Type</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Description</th>
                    
                    <!--<th>Date Added</th>-->
                    <th>ACTION</th>
                    </tr>
                </thead>
                    <?php
                     $a=1;
                    $query=mysqli_query($db,"select *from `agri_tips` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <tr>
                            <td><?php echo $row['region'];?></td>
                            <td><?php echo $row['type'];?></td>
                            <td><?php echo $row['qty'];?></td>
                            <td><?php echo $row['price'];?></td>  
                            <td><?php echo $row['total'];?></td>  
                            <td><?php echo $row['description'];?></td> 
                               
                            <!--<td><?php echo $row['date_t'];?></td>-->
                             <td>    
                  <a href="pest_view.php?edited=1&idx=<?php echo $row['id']; ?>"  class="btn btn-danger"><span class="fa fa-trash">&nbsp;Delete</span></a>
                  <a href="#"  class="btn btn-primary"><span class="fa fa-edit">&nbsp;Edit</span></a>
                              </td>   
                          </tr>
                          <?php
                       
                            $a++;
                      }
                                          
                       if (isset($_GET['idx']) && is_numeric($_GET['idx']))
                      {
                          $id = $_GET['idx'];
                          if ($stmt = $db->prepare("DELETE FROM agri_tips WHERE id = ? LIMIT 1"))
                          {
                              $stmt->bind_param("i",$id);
                              $stmt->execute();
                              $stmt->close();
                               ?>
                    <div class="alert alert-warning " >
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Successfully! </strong><?php echo'Record Successfully Deleted';?></div>
                   <script>
                       setTimeout(function () {
                        window.location.href = "pest_view.php";
                        }, 5000); 
                      
                    </script>
            
                    <?php
                          }
                          

                      }
                
                      ?>
                </table> </div>
            </div>
            </div>    
            </div>
           
            </div>
          </div>
        </div>
          </div>
    </div>
  </div>
  <br><br>
  
