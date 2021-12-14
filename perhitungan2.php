<?php
$koneksi    = mysqli_connect("localhost", "root", "", "grafik");
$laptop      = mysqli_query($koneksi, "SELECT * FROM salespermonth WHERE produk='Laptop'");
$pc          = mysqli_query($koneksi, "SELECT * FROM salespermonth WHERE produk='PC'");
$monitor     = mysqli_query($koneksi, "SELECT * FROM salespermonth WHERE produk='Monitor'");
$printer     = mysqli_query($koneksi, "SELECT * FROM salespermonth WHERE produk='Printer'");
$accessories = mysqli_query($koneksi, "SELECT * FROM salespermonth WHERE produk='Accessories'");
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
                <a class="nav-link collapse" class="collapse" href="index.php" aria-labelledby="headingone" data-parent="#accordionSidebar">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Dashboard</span></a> 
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
                            <a class="nav-link" href="login.php">
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                      

                        <div class="topbar-divider d-none d-sm-block"></div>

                        Industrial Productivty Measurement
                            
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
          <input type="date" class="form-control" name="tgl1">
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-sm-6">
      <div class="card">
        <div class="card-body p-4">
          <label for="">End Time</label>
          <input type="date"  class="form-control" name="tgl2">
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
$conn = mysqli_connect("localhost","root","","plant1"); 
//ambil data dari data tabel
$result11 = mysqli_query($conn, "SELECT * FROM data_machine_on");
$result12 = mysqli_query($conn, "SELECT * FROM data_setup");
$result13 = mysqli_query($conn, "SELECT * FROM data_run");
$result14 = mysqli_query($conn, "SELECT * FROM data_normal_break");
$result15 = mysqli_query($conn, "SELECT * FROM data_breakdown_time");
$result16 = mysqli_query($conn, "SELECT * FROM data_qc");
$result17 = mysqli_query($conn, "SELECT * FROM data_product_good");
$result18 = mysqli_query($conn, "SELECT * FROM data_product_reject");
$result19 = mysqli_query($conn, "SELECT * FROM data_new_product");

if(isset($_POST['submit']))
{
	$date1=$_POST['tgl1'];
	$date2=$_POST['tgl2'];

$result1 = mysqli_query($conn, "SELECT SUM(selisih_waktu) as value_sum from data_machine_on where triger > '$date1' and rilis < '$date2' "); 

$row1    = mysqli_fetch_assoc($result1); 
$sum1    = $row1['value_sum'];

$result2 = mysqli_query($conn, "SELECT SUM(selisih_waktu) as value_sum from data_setup where triger > '$date1' and rilis < '$date2' "); 

$row2    = mysqli_fetch_assoc($result2); 
$sum2    = $row2['value_sum'];

$result3 = mysqli_query($conn, "SELECT SUM(selisih_waktu) as value_sum from data_run where triger > '$date1' and rilis < '$date2' "); 

$row3    = mysqli_fetch_assoc($result3); 
$sum3    = $row3['value_sum'];


$result4 = mysqli_query($conn, "SELECT SUM(selisih_waktu) as value_sum from data_normal_break where triger > '$date1' and rilis < '$date2' "); 

$row4    = mysqli_fetch_assoc($result4); 
$sum4    = $row4['value_sum'];


$result5 = mysqli_query($conn, "SELECT SUM(selisih_waktu) as value_sum from data_breakdown_time where triger > '$date1' and rilis < '$date2' "); 

$row5    = mysqli_fetch_assoc($result5); 
$sum5    = $row5['value_sum'];


$result6 = mysqli_query($conn, "SELECT SUM(selisih_waktu) as value_sum from data_qc where triger > '$date1' and rilis < '$date2' "); 

$row6    = mysqli_fetch_assoc($result6); 
$sum6    = $row6['value_sum'];

$result7 = mysqli_query($conn, "SELECT SUM(selisih_waktu) as value_sum from data_product_good where triger > '$date1' and rilis < '$date2' "); 

$row7    = mysqli_fetch_assoc($result7); 
$sum7    = $row7['value_sum'];

$result8 = mysqli_query($conn, "SELECT SUM(selisih_waktu) as value_sum from data_product_reject where triger > '$date1' and rilis < '$date2' "); 

$row8    = mysqli_fetch_assoc($result8); 
$sum8    = $row8['value_sum'];

$result9 = mysqli_query($conn, "SELECT SUM(selisih_waktu) as value_sum from data_new_product where triger > '$date1' and rilis < '$date2' "); 

$row9    = mysqli_fetch_assoc($result9); 
$sum9    = $row9['value_sum'];

//Actual Product
$sum9 = $sum7 + $sum8;

//Target Product\
/*
$result10 = mysqli_query($conn, "SELECT * FROM target_produk ORDER BY ID DESC LIMIT 1"); 
$row10    = mysqli_fetch_assoc($result10); 
$sum10    = $row10['targetProduct'];*/

//QUALITY
$nilai_quality = ($sum7/$sum9)*100;

//PERFORMANCE
$nilai_performance = ($sum9/1)*100;

//Availability
$nilai_availability = (($sum1-($sum2+$sum4+$sum5+$sum6))/$sum1)*100;

//OEE
$nilai_oee = (($nilai_quality/100) * ($nilai_performance/100) * ($nilai_availability/100))*100;
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

  <!--production rate-->
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
      <div class="card mt-4 mb-4">
        <div class="card-header">
           Production rate
        </div>
      <div class="card-body">
    
<div id='myChart'><a class="zc-ref" href="https://www.zingchart.com/">Charts by ZingChart</a></div>
  <script>
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
    window.feed = function(callback) {
      var tick = {};
      tick.plot0 = Math.ceil(350 + (Math.random() * 500));
      callback(JSON.stringify(tick));
    };
 
    var myConfig = {
      type: "gauge",
      globals: {
        fontSize: 16
      },
      plotarea: {
        marginTop: 10
      },
      plot: {
        size: '50%',
        valueBox: {
          placement: 'center',
          text: '%v', //default
          fontSize: 24,
          rules: [{
              rule: '%v >= 700',
              text: '%v<br>EXCELLENT'
            },
            {
              rule: '%v < 700 && %v > 640',
              text: '%v<br>Good'
            },
            {
              rule: '%v < 640 && %v > 580',
              text: '%v<br>Fair'
            },
            {
              rule: '%v <  580',
              text: '%v<br>Bad'
            }
          ]
        }
      },
      tooltip: {
        borderRadius: 5
      },
      scaleR: {
        aperture: 180,
        minValue: 300,
        maxValue: 850,
        step: 50,
        center: {
          visible: false
        },
        tick: {
          visible: false
        },
        item: {
          offsetR: 0,
          rules: [{
            rule: '%i == 9',
            offsetX: 15
          }]
        },
        labels: ['300', '', '', '', '', '', '', '', '', '750', '', '850'],
        ring: {
          size: 50,
          rules: [{
              rule: '%v <= 580',
              backgroundColor: '#E53935'
            },
            {
              rule: '%v > 580 && %v < 640',
              backgroundColor: '#EF5350'
            },
            {
              rule: '%v >= 640 && %v < 700',
              backgroundColor: '#FFA726'
            },
            {
              rule: '%v >= 700',
              backgroundColor: '#29B6F6'
            }
          ]
        }
      },
      refresh: {
        type: "feed",
        transport: "js",
        url: "feed()",
        interval: 1500,
        resetTimeout: 1000
      },
      series: [{
        values: [755], // starting value
        backgroundColor: 'black',
        indicator: [10, 10, 10, 10, 0.75],
        animation: {
          effect: 2,
          method: 1,
          sequence: 4,
          speed: 900
        },
      }]
    };
 
    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: 200,
      width: '100%'
    });
  </script>
  </div>

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
      <td> 01:20:40 </td>
      <td> 3 pcs</td>
      <td> 2 pcs</td>
      </tr>
      </center>
      </tbody>
      </table>
  </div>
</div>


<!--Line graph-->
<div class="col-lg-4">
  <div class="card">
    <div class="card-header">
    Trend Over Time
    </div>
      <div class="card-body">
        <div class="row">
        <canvas id="linechart" width="2" height="2"></canvas>
        </div>
          <div class="col-6">        
          <script  type="text/javascript">
            var ctx = document.getElementById("linechart").getContext("2d");
            var data = {labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
            datasets: [
                  {
                    label: "Laptop",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#29B0D0",
                    borderColor: "#29B0D0",
                    pointHoverBackgroundColor: "#29B0D0",
                    pointHoverBorderColor: "#29B0D0",
                    data: [<?php while ($p = mysqli_fetch_array($laptop)) { echo '"' . $p['jan'] . '","' . $p['feb'] . '","' . $p['mar'] . '","' . $p['apr'] . '","' . $p['may'] . '","' . $p['jun'] . '","' . $p['jul'] . '","' . $p['aug'] . '","' . $p['sep'] . '","' . $p['oct'] . '","' . $p['nov'] . '","' . $p['dec'] . '",';}?>]
                  },
                  {
                    label: "PC",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#2A516E",
                    borderColor: "#2A516E",
                    pointHoverBackgroundColor: "#2A516E",
                    pointHoverBorderColor: "#2A516E",
                    data: [<?php while ($p = mysqli_fetch_array($pc)) { echo '"' . $p['jan'] . '","' . $p['feb'] . '","' . $p['mar'] . '","' . $p['apr'] . '","' . $p['may'] . '","' . $p['jun'] . '","' . $p['jul'] . '","' . $p['aug'] . '","' . $p['sep'] . '","' . $p['oct'] . '","' . $p['nov'] . '","' . $p['dec'] . '",';}?>]
                  },
                  {
                    label: "Monitor",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F07124",
                    borderColor: "#F07124",
                    pointHoverBackgroundColor: "#F07124",
                    pointHoverBorderColor: "#F07124",
                    data: [<?php while ($p = mysqli_fetch_array($monitor)) { echo '"' . $p['jan'] . '","' . $p['feb'] . '","' . $p['mar'] . '","' . $p['apr'] . '","' . $p['may'] . '","' . $p['jun'] . '","' . $p['jul'] . '","' . $p['aug'] . '","' . $p['sep'] . '","' . $p['oct'] . '","' . $p['nov'] . '","' . $p['dec'] . '",';}?>]
                  },
                  {
                    label: "Printer",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#CBE0E3",
                    borderColor: "#CBE0E3",
                    pointHoverBackgroundColor: "#CBE0E3",
                    pointHoverBorderColor: "#CBE0E3",
                    data: [<?php while ($p = mysqli_fetch_array($printer)) { echo '"' . $p['jan'] . '","' . $p['feb'] . '","' . $p['mar'] . '","' . $p['apr'] . '","' . $p['may'] . '","' . $p['jun'] . '","' . $p['jul'] . '","' . $p['aug'] . '","' . $p['sep'] . '","' . $p['oct'] . '","' . $p['nov'] . '","' . $p['dec'] . '",';}?>]
                  },
                  {
                    label: "Accessories",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#979193",
                    borderColor: "#979193",
                    pointHoverBackgroundColor: "#979193",
                    pointHoverBorderColor: "#979193",
                    data: [<?php while ($p = mysqli_fetch_array($accessories)) { echo '"' . $p['jan'] . '","' . $p['feb'] . '","' . $p['mar'] . '","' . $p['apr'] . '","' . $p['may'] . '","' . $p['jun'] . '","' . $p['jul'] . '","' . $p['aug'] . '","' . $p['sep'] . '","' . $p['oct'] . '","' . $p['nov'] . '","' . $p['dec'] . '",';}?>]
                  }
                  ]
          };

            var myBarChart = new Chart(ctx, {
                  type: 'line',
                  data: data,
                  options: {
                  legend: {
                    display: true},
                  barValueSpacing: 10,
                  scales: {yAxes: [{ticks: {min: 0,}}],
              xAxes: [{gridLines: {color: "rgba(0, 0, 0, 0)",}}]}}});
        </script>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<!--tabel losses-->
Z


<!--TIME ACCOUNT-->
<div class="col-6">
<div class="card">
  <div class="card-header">
    Time Accounts
  </div>
  <div class="card-body">
<div class="row">
<div class="card-body">
  <div class="row justify-content-start">
    <div class="col-6">
    <center>  
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Machine On</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Run Time</th>
    </tr>
    <tr>
      <th scope="row">Setup Time</th>
    </tr>
    <tr>
      <th scope="row">Breakdown Time</th>
    </tr>
</tbody>
</table>
</center>
    </div>
    <div class="col-6">
    <div class="bar-chart">
        <!-- bar -->
        <!--active machine-->
        <div class="chart clearfix">
            <div class="item">
                <div class="bar">
                    <span class="persen">100%</span>

                    <div class="progress" data-persen="100">
                        <span class="title">08:00:00</span>
                    </div>
                </div>
            </div>
        <!--Run Time-->
            <div class="item">
                <div class="bar">
                    <span class="persen">62,5%</span>

                    <div class="progress" data-persen="62.5">
                        <span class="title">05:20:15</span>
                    </div>
                </div>
            </div>
        <!--setup time-->
            <div class="item">
                <div class="bar">
                    <span class="persen">5%</span>

                    <div class="progress" data-persen="6.25">
                        <span class="title">00:42:15</span>
                    </div>
                </div>
            </div>
        <!--breakdown time-->
            <div class="item">
                <div class="bar">
                    <span class="persen">37,5%</span>

                    <div class="progress" data-persen="37.5">
                        <span class="title">02:20:10</span>
                    </div>
                </div>
           
        </div>
    </div>
</div>
</div>
</div>
</div> </div> </div>

<!--penutup container-->
</div>
</div>
</div>


</body>
</html>

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
    lineWidth: 15,
    trackColor: "#525151",
    lineCap: "circle",
    animate: 2000,
  });
});
</script>

