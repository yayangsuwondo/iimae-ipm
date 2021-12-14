<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="piechart2/jquery.js" charset="utf-8"></script>
    <script src="piechart2/easypiechrat.js" charset="utf-8"></script>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    
    </style>
    <link rel="stylesheet" href="barchart2.css" type="text/css" />

    <script nonce="undefined" src="zingchart.min.com"></script>
  <style>
    html,
    body {
      height: 100%;
      width: 100%;
    }
 
    #myChart {
      height: 100%;
      width: 100%;
      min-height: 150px;
    }
 
    .zc-ref {
      display: none;
    }
  </style>
  <script src="linechart.js"></script>


    <title>OEE Parameter</title>
    <link rel="stylesheet" href="css.css">
    <link rel = "stylesheet" type="text/css" href="piechart2/style.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- barchar-->
    <script>
$(document).ready(function(){
    barChart();

    $(window).resize(function(){
        barChart();
    });

    function barChart(){
        $('.bar-chart').find('.progress').each(function(){
            var itemProgress = $(this),
            itemProgressWidth = $(this).parent().width() * ($(this).data('persen') / 100);
            itemProgress.css('width', itemProgressWidth);
        });
    }
});
</script>
</head>

<body id="page-top">

 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
       
    Institut Teknologi Sepuluh Nopember
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    
    <li class="nav-item active">
                <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Dashboard</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Select area :</h6>
                        <a class="collapse-item" href="index.php">Plant 1</a>
                        <a class="collapse-item" href="plant2.php">Plant 2</a>
                        <a class="collapse-item" href="plant3.php">Plant 3</a>
                    </div>
                </div>
    </li> 

    <li class="nav-item active">
                <a class="nav-link" href="oee_parameter.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>OEE Parameter</span></a> 
</li>
<li class="nav-item active">
                <a class="nav-link" href="input_target.php">
                    <i class="fas fa-fw fa-archive"></i>
                    <span>Input Target </span></a> 
</li>

    
       
    
    
<!-- Divider -->
    <hr class="sidebar-divider">

   

    <!-- Nav Item - Pages Collapse Menu -->
   

    <!-- Nav Item - Utilities Collapse Menu -->
   
    <!-- Divider -->
    <hr class="sidebar-divider">
            <!-- Divider -->
            <hr class="sidebar-divider">
             <!--Nav Item-Logout-->
             <li class="nav-item active">
                        <div class="fixed-bottom">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-fw fa-key"></i>
                                <span>Logout</span></a>
    
                        </div>

            <!-- Heading -->
        


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->


<!-- Topbar Search -->
Industrial Productivity Measurement
<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">


        
        

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
            <img class="img-profile rounded-circle"
                src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->

<center>    

    <div class="col-md-4 col-md-offset-4 form-login">
<!------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------>
<!----------------------- database connection ---------------------------------------------------------->

<?php
           $conn = mysqli_connect("localhost","root","","ipm"); 
            if(isset($_POST['simpan']))
            {
                $target=$_POST['jumlahProduk'];
                $sekarang = date("Y-m-d");
                $jumlah= "insert into data_input_target (id, jumlah_target, tanggal) values (default, '".$target."', '$sekarang')";
               $run = mysqli_query($conn, $jumlah);
                echo "Target Produk Telah Tersimpan";
            }

            ?>

<!----------------------------------akhir koneksi------------------------------------------------------->


<div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
        <br><br><br><br>

        <?php echo date('l, d-m-Y'); ?>
       
                <br>
                <div class="form-group">
                    <h3> Input Target Produk </h3>
                </div>
                <?php
                $now = date('Ymd');
                $cekSql = "select * from data_input_target where tanggal = '$now'";
                $cekRun = mysqli_query($conn, $cekSql);
                if(mysqli_num_rows($cekRun)<1){
                    echo'
                    <form action="" class="inner-login" method="post">
                        <input type="number" class="form-control" name="jumlahProduk" placeholder="">
                        <br>
                        <input type="submit" class="btn btn-success btn-sm" name= "simpan" value="SUBMIT" />
                    </form>
                    ';
                }else{
                    echo'Telah Memasukkan Target Pada Hari Ini';
                }
                
                ?>
            </div>
        </div>
    </div>
</center>


    <div>
        
  <footer class="sticky-footer bg-white">
      <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; MIA-SC 2021</span>
      </div>
      </div>
  </footer>
</div>