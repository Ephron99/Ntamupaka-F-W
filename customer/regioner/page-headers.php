<nav id="sidebar">
    <div class="sidebar-header">
        <h6>Agriculture</h6>
    </div>

    <ul class="list-unstyled components">
        
        <li class="active">
            <a href="dashboard.php" class="fa fa-th"> Dashboard</a>

        </li>
         <li>
            <a href="#pageSubmenuRue"  data-toggle="collapse" aria-expanded="false" class="fa-map-signs dropdown-toggle"> Region</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRue">
                <li>
                    <a href="region_add.php">Add Region</a>
                </li>

                <li>
                    <a href="region_view.php">view Region</a>
                </li>
            </ul>
        </li>
        
         
       <li>
            <a href="#pageSubmenuRuebaeRamus"  data-toggle="collapse" aria-expanded="false" class="fa fa-thermometer-half dropdown-toggle"> Weather Updates</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRuebaeRamus">
                <li>
                    <a href="">Add</a>
                </li>

                <li>
                    <a href="">view</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenuRuebae"  data-toggle="collapse" aria-expanded="false" class="fa-industry dropdown-toggle"> Harvest</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRuebae">
                <li>
                    <a href="pest_add.php">Add Harvest</a>
                </li>

                <li>
                    <a href="pest_view.php">view Harvest</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#pageSubmenu1"  data-toggle="collapse" aria-expanded="false" class="fa fa-user-circle-o dropdown-toggle"> User</a>
            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li>
                    <a href="users_add.php">Add</a>
                </li>
                <li>
                    <a href="">view</a>
                </li>

            </ul>
        </li>

        </ul>
</nav>


<!-- Page Content  -->
<div id="content">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn sm-btn-toggle ">
            <i class="fa fa-align-left"></i>
            <span>Agro System</span>
        </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-align-justify"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" class="fa fa-power-off">Welcome <?php echo $_SESSION['name'].' ' ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="date_time"></a>
                <script type="text/javascript">window.onload = date_time('date_time');</script>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" class="fa fa-power-off">logout</a>
            </li>
        </ul>
    </div>
    </div>
</nav>