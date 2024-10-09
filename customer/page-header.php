




<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #00bd56; width: 100%; height: 80px;">
    <div class="container-fluid" style="background: #00bd56; width: 100%; height: 80px;">

        <button type="button" id="sidebarCollapse" class="btn sm-btn-toggle ">
            <!--<i class="fa fa-align-left"></i>-->
            <span><img src="img/agric-background.jpeg" width="100px" height="60px"></span>
        </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-align-justify"></i>
    </button>
    
    
   <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color: #fff; margin-left: 10px;">
        <div style="margin-left: 5px;"><h4>NTAMUPAKA</h4></div>
        <form action="searched.php" method="GET">
     <div class="input-group mb-9" style="margin-left: 50px;">
  <input type="text" class="form-control" name="search"  value=" <?php if(isset($_GET['search'])){ echo $_GET['search'];} ?>" placeholder="Search" pattern="[a-zA-Z ]{1,20}" required>
  <button type="submit"  class="btn btn-primary" >Search</button>
</div></form>
        
        <ul class="nav navbar-nav ml-auto" >
            <li class="nav-item">
                <a class="nav-link" href="index.php" class="" style="color: #fff;">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" class="fa fa-power-off" style="color: #fff;">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php" class="fa fa-power-off" style="color: #fff;">CONTACT US</a>
            </li>
          <li class="nav-item">
               <a class="nav-link" href="../index.php" class="fa fa-power-off" style="color: #fff;">lOGOUT</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="searched.php?search=" style="color: #fff;"><button class="btn btn-dark" style="margin: -5px 5px 5px 5px;">Products</button></a>
            </li>
        </ul>
    </div>
    </div>
</nav>
<!-- Page Content  -->
<div id="content">