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
    <h3 class="title text-center bordered">Available Products<form action="" method="GET">
     <div class="input-group mb-9" style="margin-left: 900px; width: 250px;">
  <input type="text" class="form-control" name="search"  value=" <?php if(isset($_GET['search'])){ echo $_GET['search'];} ?>" placeholder="Search" pattern="[a-zA-Z ]{1,20}" required>
  <button type="submit"  class="btn btn-primary" >Search</button>
</div></form></h3>
<div id="services" class="container-fluid text-center" style="margin: 5px; ">
  
        
        
        <table class="table table-striped thead-dark table-bordered table-hover" id="mhishi">
        <div class="row slideanim" style="margin-left: 100px;">
<?php
if (isset($_GET['search'])) {
                      $filtervalues = $_GET['search'];
                     
                    $query=mysqli_query($db,"SELECT * FROM `agri_tips` where CONCAT(description,region,type,qty,price,total,date_t) LIKE '%$filtervalues%'");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
        
            <div class="card" width="320px" height="250px" style="margin: 10px; display: flex;">
              <a href="#">
                <a href="more.php?edited=1&idx=<?php echo $row['id']; ?>" >

<img src="../images/<?php echo $row['file'];?>" width="320px" height="250px">

                <div class="row slideanim" style="margin-left: 0px; display: block;">
              <div>
                <p>Product:&nbsp;<?php echo $row['type'];?></p>
              </div>
              <div>
                <p>Price:&nbsp;&nbsp;&nbsp;<?php echo $row['price']; ?> <?php echo '/ kg'; ?></p>
              </div>
            </div>
            <div class="row slideanim" style="margin-left: 0px; display: block;">
              <div>
                <p>Location:&nbsp;<?php echo $row['region']; ?> </p>
              </div>
              <div>
                <p>Quantity: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['qty']; ?> <?php echo ' kg'; ?></p>
              </div></a>
              <form action="order.php" method="post">
                <input type="text" name="pid"  value="<?php echo $row['id'];?>" hidden>
                <input type="text" name="user"  value="<?php echo $row['user'];?>" hidden>
                <input type="text" name="name"  value="<?php echo $row['name'];?>" hidden>
                <input type="text" name="price"  value="<?php echo $row['price']; ?>" hidden>
                <input type="text" name="qty1"  value="<?php echo $row['qty']; ?>" hidden>
                <input type="text" name="qty" class="form-control" placeholder="Quantity" style="width:300px; margin-left: 10px;" required>
            </div>
                 <button type="submit" name="send" class="btn btn-primary" style="margin: 10px 50px 5px 100px;">MAKE Order</button>
                  </form>
            </div>
            
            <?php
                       
                           
                      }}
                      ?></table>

        </div></div></div>
    </div>
                      </div></div> 
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
  
