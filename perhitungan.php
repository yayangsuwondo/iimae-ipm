<? include "koneksi_oee.php";
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=Data Tabel.xls");?>
<!doctype html>
<html> 
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<title> Grafik OEE</title> 
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Local CSS -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/chart.css" rel="stylesheet">
  
 </head>
<body>
	<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

          <!-- Sidebar -->
          <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

           
            <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.php">
             <div class="sidebar-brand-icon rotate-n-15">
                 
             </div>
             <div class="sidebar-brand-text mx-1">Institut Teknologi Sepuluh Nopember </div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
             <a class="nav-link" href=" index.html">
                 <i class="fas fa-fw fa-clipboard-list"></i>
                 <span>Dashboard</span></a> 
                 
                 <!-- Nav Item - OEEParameter -->
                 <li class="nav-item active">
                     <a class="nav-link" href="oee parameter2.php">
                         <i class="fas fa-fw fa-chart-area"></i>
                         <span>OEE Parameter</span></a> 
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading"> </div>
                
                 <!--Nav Item-Logout-->
                 <li class="nav-item active">
                     <div class="fixed-bottom">
                         <a class="nav-link" href="login.php">
                             <i class="fas fa-fw fa-key"></i>
                             <span>Logout</span></a>
 
                     </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!--OEE tittle-->

                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                     
                           <b>Overall Equipment Effeciveness
                        </b>

                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                     
                   
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">admin1</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            
                        </li>

                    </ul>

                </nav>
<center>

<!-- date range-->
<br><br>
 <div class="row justify-content-end">
  <div class="col-xl-12 col-lg-12">

 <div class="card shadow mb-4">
      <a class="d-block card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">TANGGAL</h3>
      </a>
      <div class="card-body">
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="#" method="POST" onsubmit="return showoverlay(); ">
          <div class="input-group" id ="overlay">
                     
            <input class="textbox-n form-control bg-light border-0 small" type="date" name="tgl1">
            <input class="textbox-n form-control bg-light border-0 small ml-4" type="date" name="tgl2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" name="submit" class="btn btn-primary btn-xl" value="SUBMIT">
                <i class="fas fa-calendar fa-sm"></i>
              </button>
              
            </div>
          </div>
        </form>
        <i class="fa fa-spinner fa-spin spin-big"></i>
      </div>
      
    </div>
   </div>
</div>


<!--
<form action="#" method="post">
		<input type="date" name="tgl1">
		<input type="date" name="tgl2">
		<input type="submit" name="submit" class="btn btn-primary btn-xl" value="SUBMIT">
</form>
</center>
-->

<?php
$conn = mysqli_connect("localhost","weintek","","plant1"); 
//ambil data dari data tabel
$result11 = mysqli_query($conn, "SELECT * fROM data_machine_on");
$result12 = mysqli_query($conn, "SELECT * fROM data_setup");
$result13 = mysqli_query($conn, "SELECT * fROM data_run");
$result14 = mysqli_query($conn, "SELECT * fROM data_normal_break");
$result15 = mysqli_query($conn, "SELECT * fROM data_breakdown_time");
$result16 = mysqli_query($conn, "SELECT * fROM data_qc");
$result17 = mysqli_query($conn, "SELECT * fROM data_product_good");
$result18 = mysqli_query($conn, "SELECT * fROM data_product_reject");
$result19 = mysqli_query($conn, "SELECT * fROM data_new_product");

if(isset($_POST['submit']))
{
	$date1=$_POST['tgl1'];
	$date2=$_POST['tgl2'];

$result1 = mysqli_query($result11, "SELECT SUM(selisih_waktu) as value_sum from data_machine_on where triger > '$date1' and rilis < '$date2' "); 

$row1    = mysqli_fetch_assoc($result11); 
$sum1    = $row1['value_sum'];

$result2 = mysqli_query($result12, "SELECT SUM(selisih_waktu) as value_sum from data_setup where triger > '$date1' and rilis < '$date2' "); 

$row2    = mysqli_fetch_assoc($result12); 
$sum2    = $row2['value_sum'];

$result3 = mysqli_query($result13, "SELECT SUM(selisih_waktu) as value_sum from data_run where triger > '$date1' and rilis < '$date2' "); 

$row3    = mysqli_fetch_assoc($result13); 
$sum3    = $row3['value_sum'];


$result4 = mysqli_query($result14, "SELECT SUM(selisih_waktu) as value_sum from dat_normal_break where triger > '$date1' and rilis < '$date2' "); 

$row4    = mysqli_fetch_assoc($result14); 
$sum4    = $row4['value_sum'];


$result5 = mysqli_query($result15, "SELECT SUM(selisih_waktu) as value_sum from data_breakdown_time where triger > '$date1' and rilis < '$date2' "); 

$row5    = mysqli_fetch_assoc($result15); 
$sum5    = $row5['value_sum'];


$result6 = mysqli_query($result16, "SELECT SUM(selisih_waktu) as value_sum from data_ qc where triger > '$date1' and rilis < '$date2' "); 

$row6    = mysqli_fetch_assoc($result16); 
$sum6    = $row6['value_sum'];

$result7 = mysqli_query($result17, "SELECT SUM(selisih_waktu) as value_sum from data_product_good where triger > '$date1' and rilis < '$date2' "); 

$row7    = mysqli_fetch_assoc($result17); 
$sum7    = $row7['value_sum'];

$result8 = mysqli_query($result18, "SELECT SUM(selisih_waktu) as value_sum from data_product_reject where triger > '$date1' and rilis < '$date2' "); 

$row8    = mysqli_fetch_assoc($result18); 
$sum8    = $row8['value_sum'];

$result9 = mysqli_query($result19, "SELECT SUM(selisih_waktu) as value_sum from data_new_product where triger > '$date1' and rilis < '$date2' "); 

$row9    = mysqli_fetch_assoc($result19); 
$sum9    = $row9['value_sum'];

//Actual Product
$sum9 = $sum7 + $sum8;

//Target Product 
$result10 = mysqli_query($result, "SELECT * FROM target_produk ORDER BY ID DESC LIMIT 1"); 
$row10    = mysqli_fetch_assoc($result10); 
$sum10    = $row10['targetProduct'];

//QUALITY
$nilai_quality = ($sum7/$sum9)*100;

//PERFORMANCE
$nilai_performance = ($sum9/$sum10)*100;

//Availability
$nilai_availability = (($sum1-($sum2+$sum4+$sum5+$sum6))/$sum1)*100;

//OEE
$nilai_oee = (($nilai_quality/100) * ($nilai_performance/100) * ($nilai_availability/100))*100;
}


?>
		<section id="s-team" class="section">
			 
			<br>

			<div class="b-skills">
				<div class="container">
					<h2>PARAMETER PRESENTASE</h2>
					<h2>OVERALL EQUIPMENT EFFECTIVENESS</h2>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent= "<?php echo $nilai_availability ?>" data-bar-color="#23afe3">
										<span class="percent" data-after="%"></span>
									</div>
								</div>

								<p>AVAILABILITY</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " href="chart-koneksi.php" data-percent ="<?php echo $nilai_performance ?>" data-bar-color="#a7d212">
										<span class="percent" data-after="%"></span>
									</div>
								</div>

								<p>PERFORMANCE</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " href="chart-koneksi.php" data-percent= "<?php echo $nilai_quality ?>" data-bar-color="#ff4241">
										<span class="percent" data-after="%"></span>
									</div>
								</div>

								<p>QUALITY</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " href="chart-koneksi.php" data-percent="<?php echo $nilai_oee ?>" data-bar-color="#edc214">
										<span class="percent" data-after="%"></span>
									</div>
								</div>

								<p>OEE</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <br><br><br><br><br>
    
 
 
  <br>
  
  
  
 <script src="plugins/jquery-2.2.4.min.js"></script>
 <script src="plugins/jquery.appear.min.js"></script>
 <script src="plugins/jquery.easypiechart.min.js"></script> 
 <script>
    'use strict';

var $window = $(window);

function run()
{
	var fName = arguments[0],
		aArgs = Array.prototype.slice.call(arguments, 1);
	try {
		fName.apply(window, aArgs);
	} catch(err) {
		 
	}
};
 
/* chart
================================================== */
function _chart ()
{
	$('.b-skills').appear(function() {
		setTimeout(function() {
			$('.chart').easyPieChart({
				easing: 'easeOutElastic',
				delay: 3000,
				barColor: '#369670',
				trackColor: '#fff',
				scaleColor: false,
				lineWidth: 21,
				trackWidth: 21,
				size: 250,
				lineCap: 'round',
				onStep: function(from, to, percent) {
					this.el.children[0].innerHTML = Math.round(percent);
				}
			});
		}, 150);
	});
};
 

$(document).ready(function() {
  
	run(_chart);
  
    
});


    
    </script>
 
 
 <a href="data-tabel.php" class="btn btn-primary btn-lg">PARAMETER DETAIL</a>
 <a href="" class="btn btn-info btn-lg">INPUT TARGET</a>
 <a target="_blank" href="csv.php" class="btn btn-info btn-lg">Download CSV</a>
 
 <!-- Footer Wrapper -->
<div>
  <footer class="sticky-footer bg-white">
      <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; MIA-SC 2021</span>
      </div>
      </div>
  </footer>
</div>
   
</center>
</div>
</div>
</li>
</li>
</li>
</ul>
</div>
</body>
</body>
</html>
