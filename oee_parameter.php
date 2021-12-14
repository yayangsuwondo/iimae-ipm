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
    <script src="jquery.js" charset="utf-8"></script>
    <script src="easypiechrat.js" charset="utf-8"></script>
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

<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="Chart.js"></script>
    <script src="Gauge.js"></script>

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

                <!-- Begin Page Content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-4 col-lg-6 col-sm-6">
      <div class="card">
        <div class="card-body p-4">
          <label for="">Select Area</label>
          <select class="form-control" name="">
            <option>Plant 1</option>
            <option>Plant 2</option>
            <option>Plant 3</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-sm-6">
      <div class="card">
      <form action="#" method="POST" onsubmit="return showoverlay(); ">
        <div class="card-body p-4">
          <label for="">Start Time</label>
          <input type="date" class="form-control" name="tgl1" value="<?php if(isset($_POST['submit'])){ echo$_POST['tgl1'];} ?>">
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-sm-6">
      <div class="card">
        <div class="card-body p-4">
          <label for="">End Time</label>
          <input type="date"  class="form-control" name="tgl2" value="<?php if(isset($_POST['submit'])){ echo$_POST['tgl2'];} ?>">
          <div class="input-group-append">
              <button class="btn btn-primary" type="submit" name="submit" class="btn btn-primary btn-xl" value="SUBMIT">
                <i class="fas fa-calendar fa-sm"></i>
              </button>
              
            </div>
        </div>
      </div>
    </div>
</form>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
      <div class="card shadow mb-4 mt-4">
          
<!------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------>
<!-------------------- PERHITUNGAN OEE ----------------------------------------------------------------------------->
<!--
<form action="#" method="post">
		<input type="date" name="tgl1">
		<input type="date" name="tgl2">
		<input type="submit" name="submit" class="btn btn-primary btn-xl" value="SUBMIT">
</form>
</center>
-->

<?php
//ambil data dari data tabel
$result11 = mysqli_query($koneksi, "SELECT * FROM p1_data_machine_on");
//$result12 = mysqli_query($koneksi, "SELECT * FROM p1_data_setup");
$result13 = mysqli_query($koneksi, "SELECT * FROM p1_data_run");
$result14 = mysqli_query($koneksi, "SELECT * FROM p1_data_normal_break");
$result15 = mysqli_query($koneksi, "SELECT * FROM p1_data_breakdown");
$result16 = mysqli_query($koneksi, "SELECT * FROM p1_data_qc_call");
$result17 = mysqli_query($koneksi, "SELECT * FROM p1_data_product_good");
$result18 = mysqli_query($koneksi, "SELECT * FROM p1_data_product_reject");
$result19 = mysqli_query($koneksi, "SELECT * FROM p1_data_new_product");

if(isset($_POST['submit']))
{
	$date1=$_POST['tgl1'];
	$date2=$_POST['tgl2'];

$result1 = mysqli_query($koneksi, "SELECT SUM(selisih) as value_sum from p1_data_machine_on where triggertime > '$date1' and recovertime < '$date2' "); 

$row1    = mysqli_fetch_assoc($result1); 
$sum1    = $row1['value_sum'];

$sqlResult2 = "SELECT SUM(selisih) as value_sum from p1_data_setup where triggertime > '$date1' and recovertime < '$date2' ";
$result2 = mysqli_query($koneksi, $sqlResult2);

$row2    = mysqli_fetch_assoc($result2);
$sum2    = $row2['value_sum'];

$result3 = mysqli_query($koneksi, "SELECT SUM(selisih) as value_sum from p1_data_run where triggertime > '$date1' and recovertime < '$date2' "); 

$row3    = mysqli_fetch_assoc($result3); 
$sum3    = $row3['value_sum'];


$result4 = mysqli_query($koneksi, "SELECT SUM(selisih) as value_sum from p1_data_normal_break where triggertime > '$date1' and recovertime < '$date2' "); 

$row4    = mysqli_fetch_assoc($result4); 
$sum4    = $row4['value_sum'];


$result5 = mysqli_query($koneksi, "SELECT SUM(selisih) as value_sum from p1_data_breakdown where triggertime > '$date1' and recovertime < '$date2' "); 

$row5    = mysqli_fetch_assoc($result5); 
$sum5    = $row5['value_sum'];


$result6 = mysqli_query($koneksi, "SELECT SUM(selisih) as value_sum from p1_data_qc_call where triggertime > '$date1' and recovertime < '$date2' "); 

$row6    = mysqli_fetch_assoc($result6); 
$sum6    = $row6['value_sum'];

$sqlResult7 = "SELECT COUNT(selisih) as value_sum from p1_data_product_good where triggertime > '$date1' and recovertime < '$date2' ";
$result7 = mysqli_query($koneksi, $sqlResult7); 

$row7    = mysqli_fetch_assoc($result7); 
$sum7    = $row7['value_sum'];


$result8 = mysqli_query($koneksi, "SELECT COUNT(selisih) as value_sum from p1_data_product_reject where triggertime > '$date1' and recovertime < '$date2' "); 

$row8    = mysqli_fetch_assoc($result8); 
$sum8    = $row8['value_sum'];

$result9 = mysqli_query($koneksi, "SELECT COUNT(selisih) as value_sum from p1_data_new_product where triggertime > '$date1' and recovertime < '$date2' "); 

$row9    = mysqli_fetch_assoc($result9); 
$sum9    = $row9['value_sum'];

$result21  = mysqli_query($koneksi, "SELECT SUM(selisih) as value_sum from p1_data_idle where triggertime > '$date1' and recovertime < '$date2' "); 
$row21    = mysqli_fetch_assoc($result21); 
$sum21    = $row21['value_sum'];

$result22  = mysqli_query($koneksi, "SELECT SUM(selisih) as value_sum from p1_data_support_call where triggertime > '$date1' and recovertime < '$date2' "); 
$row22    = mysqli_fetch_assoc($result22); 
$sum22   = $row22['value_sum'];

$result12 = mysqli_query($koneksi, "SELECT SUM(selisih) as value_sum from p1_data_setup where triggertime > '$date1' and recovertime < '$date2' "); 

$row12    = mysqli_fetch_assoc($result12); 
$sum12    = $row12['value_sum'];


//Actual Product
$sum9 = $sum7 + $sum8;

//Target Product dari halaman input target

$result10 = mysqli_query($koneksi, "SELECT SUM(jumlah_target) as value_sum FROM data_input_target ORDER BY jumlah_target DESC LIMIT 1"); 
$row10    = mysqli_fetch_assoc($result10);
$sum10    = $row10['value_sum'];

//target produk untuk perhitungan good product
$result20 = mysqli_query($koneksi,"SELECT SUM(jumlah_target) as value_sum FROM data_input_target where tanggal between '$date1' and '$date2' "); 
$row11    = mysqli_fetch_assoc($result20);
$sum11    = $row11['value_sum'];
//std time
//$result23 = mysqli_query($koneksi,"SELECT count(data_std_time) as value_sum FROM p1_data_std_time where tanggal between '$date1' and '$date2' "); 
//$row23    = mysqli_fetch_assoc($result22);
//$sum23    = $row23['value_sum'];


//QUALITY
$nilai_quality = ($sum7/$sum9)*100;

//PERFORMANCE
//$nilai_performance = ($sum9/$sum10)*100;
$nilai_performance = ($sum9/(($sum21+$sum3)-($sum5+$sum6+$sum22+$sum12)))*100;

//Availability
$nilai_availability =(($sum1-($sum2+$sum4+$sum5+$sum6))/$sum1)*100;

//OEE
$nilai_oee = (($nilai_quality/100) * ($nilai_performance/100) * ($nilai_availability/100))*100;

//availability loss
//$loss1 = ($sum5/($sum2+$sum4+$sum5+$sum6));     
//$loss1 = (1-$nilai_availability);
$loss1  = $nilai_availability-($sum21+$sum5+$sum3);
//Performance loss
$loss2 = ((($sum21+$sum3)-2).$sum9)/($sum21+$sum3);
// Quality loss
$loss3 = $sum8 / $sum9;
}



?>
		
    
 
 
  <br>
 

<!---------------------------------- akhir perhitungan ------------------------------------------------------------->

<!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Key Performance Indicator</h6>
          <div class="dropdown no-arrow"></div>
        </div>
         <!-- Card Body -->
        <div class="card-block">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-sm-4">
                <div class="card mt-4 ml-4 mb-2">
                  <div class="card-body">
                    <div class="box">
                      <div class="chartBig" data-percent="<?php echo $nilai_oee ?>" ><?php echo round($nilai_oee); ?>%</div>
                      <h2>OEE</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-lg-8 col-sm-8">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-sm-4">
                    <div class="card mt-4 mb-4" style="width: 100%">
                      <div class="card-body">
                        <div class="box">
                          <div class="chart" data-percent="<?php echo $nilai_availability ?>" ><?php echo round($nilai_availability); ?>%</div>
                            <h2>Availability</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-4">
                      <div class="card mt-4 mb-4" style="width: 100%">
                        <div class="card-body">
                          <div class="box">
                            <div class="chart" data-percent="<?php echo $nilai_performance ?>" ><?php echo round($nilai_performance); ?>%</div>
                            <h2>Performance</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-4">
                      <div class="card mt-4 mr-4 mb-4" style="width: 100%">
                        <div class="card-body">
                          <div class="box">
                            <div class="chart" data-percent="<?php echo $nilai_quality ?>" ><?php echo round($nilai_quality);?>%</div>
                            <h2>Quality</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="card mt-4 mr-4 mb-2" style="width: 100%;">
                        <div class="card-body">
                          <div class="box">
                        
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


  <!---------------------------production rate----------------------------------------->
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
      <div class="card mt-4 mb-4">
        <div class="card-header">
           Good Production Rate
        </div>
      <div class="card-body">
      <div class="row" align="center">
        <canvas id="canvas" width="20" height="20"></canvas>
        <br><br>
      </div>
    </div>
  </div>

  <script  type="text/javascript">
var ctx = document.getElementById("canvas").getContext("2d");
new Chart(ctx, {
  type: "tsgauge",
  data: {
    datasets: [{
      backgroundColor: ["#ff0000", "#ffff00", "#008000"],
      borderWidth: 0,
      gaugeData: {
        value: <?php echo round($sum7) ?>,
        valueColor: "#ff7143"
      },
      gaugeLimits:  [0, Math.round(<?php echo $sum11;?>/5), Math.round(<?php echo $sum11;?>/2), <?php echo $sum11 ?>]
    }]
  },
  options: {
            events: [],
            showMarkers: true
  }
});
</script>


<!-----------------------------tabel factor losses------------------------------>
</div>
  <div class="col-6">
      <table class="table">
      <thead>
      <center>
      <tr>
      <th scope="col">Availability Loss</th>
      <th scope="col">Performance Loss</th>
      <th scope="col">Quality Loss</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td> 
    <?php echo gmdate("H:i:s",$loss1); ?>
    </div>
     </td>
      <td> <?php echo gmdate("H:i:s",$loss2); ?></td>
      <td><?php echo round ($loss3); ?> </td>
      </tr>
      </center>
      </tbody>
      </table>
  </div>
</div>

<!--TIME ACCOUNT-->


<!--penutup container-->
</div>
</div>
</div>
                  </div>


<script type="text/javascript">
  $(function() {
  $('.chart').easyPieChart({
    size: 80,
    barColor: "#36e617",
    scaleLength: 0,
    lineWidth: 15,
    trackColor: "#525151",
    lineCap: "circle",
    animate: 2000,
  });
});
</script>
<script type="text/javascript">
  $(function() {
  $('.chartBig').easyPieChart({
    size: 150,
    barColor: "#36e617",
    scaleLength: 0,
    lineWidth: 20,
    trackColor: "#525151",
    lineCap: "circle",
    animate: 2000,
  });
});
</script>





</body>
</html>



