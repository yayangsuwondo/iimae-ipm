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
    <link rel="stylesheet" type="text/css" href=",lingkaran3.css">
    


    <title>Dashboard</title>
    <link rel="stylesheet" href="css.css">
    <link rel = "stylesheet" type="text/css" href="piechart2/style.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               
            Institut Teknologi Sepuluh Nopember
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
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
    <li class="nav-item active">
                <a class="nav-link" href="data_csv.php">
                    <i class="fas fa-fw fa-archive"></i>
                    <span>Data CSV </span></a> 
    </li>
        
            
               
            
            
        <!-- Divider -->
            <hr class="sidebar-divider">

           

            <!-- Nav Item - Pages Collapse Menu -->
           

            <!-- Nav Item - Utilities Collapse Menu -->
           
            <!-- Divider -->
            <hr class="sidebar-divider">
             <!--Nav Item-Logout-->
             <li class="nav-item active">
                        <div class="fixed-bottom">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-fw fa-key"></i>
                                <span>Logout</span></a>
    
                        </div>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
           
            <!-- Sidebar Message -->
            

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

                    <!-- Page Heading -->
                   <center> Machine Status </center>
                    <!-- Content Row --> 
                </div>
<!---------------------------if else linkaran------------------------->
<?php
$conn = mysqli_connect("localhost","root","","ipm"); 
//status machine on
$sqlCek1 = "select * from p1_data_machine_on where (triggertime between timestamp(DATE_SUB(NOW(), INTERVAL 1 day)) and timestamp(NOW())) and recovertime is null";
$runCekPower = mysqli_query($conn, $sqlCek1);
if(mysqli_num_rows($runCekPower)>0){
    echo'<div style="background: red">
            <div class="lingkaran">    
                <div class="blink_me1">
                    <div class="bulat1">Power On</div> 
                </div> 
            </div> 
        </div>';
}else{
    echo'<div style="background: grey">
    <div class="lingkaran">
    <div class="bulat1">Power On</div> 
    </div> 
    </div>';
}
//status idle
$sqlCek2 = "select * from p1_data_idle where (triggertime between timestamp(DATE_SUB(NOW(), INTERVAL 1 day)) and timestamp(NOW())) and recovertime is null";
$runCekIdle = mysqli_query($conn, $sqlCek2);
if(mysqli_num_rows($runCekIdle)>0){
    echo'<div style="background: red">
            <div class="lingkaran">    
                <div class="blink_me2">
                    <div class="bulat2">Idle Time</div> 
                </div> 
            </div> 
        </div>';
}else{
    echo'<div style="background: grey">
    <div class="lingkaran">
    <div class="bulat2">idle time</div> 
    </div> 
    </div>';
}
//data status setup time
$sqlCek3 = "select * from p1_data_setup where (triggertime between timestamp(DATE_SUB(NOW(), INTERVAL 1 day)) and timestamp(NOW())) and recovertime is null";
$runCekSetup = mysqli_query($conn, $sqlCek3);
if(mysqli_num_rows($runCekSetup)>0){
    echo'<div style="background: red">
            <div class="lingkaran">    
                <div class="blink_me3">
                    <div class="bulat3">Setup TIme</div> 
                </div> 
            </div> 
        </div>';
}else{
    echo'<div style="background: grey">
    <div class="lingkaran">
    <div class="bulat3">Setup Time</div> 
    </div> 
    </div>';
}
//data status running
$sqlCek4 = "select * from p1_data_run where (triggertime between timestamp(DATE_SUB(NOW(), INTERVAL 1 day)) and timestamp(NOW())) and recovertime is null";
$runCekRunning = mysqli_query($conn, $sqlCek4);
if(mysqli_num_rows($runCekRunning)>0){
    echo'<div style="background: red">
            <div class="lingkaran">    
                <div class="blink_me4">
                    <div class="bulat4">Running</div> 
                </div> 
            </div> 
        </div>';
}else{
    echo'<div style="background: grey">
    <div class="lingkaran">
    <div class="bulat4">Running</div> 
    </div> 
    </div>';
}
//data status urgent break
$sqlCek5 = "select * from p1_data_urgent_break where (triggertime between timestamp(DATE_SUB(NOW(), INTERVAL 1 day)) and timestamp(NOW())) and recovertime is null";
$runCekRunning = mysqli_query($conn, $sqlCek5);
if(mysqli_num_rows($runCekRunning)>0){
    echo'<div style="background: red">
            <div class="lingkaran">    
                <div class="blink_me5">
                    <div class="bulat5">Urgent break</div> 
                </div> 
            </div> 
        </div>';
}else{
    echo'<div style="background: grey">
    <div class="lingkaran">
    <div class="bulat5">Urgent break</div> 
    </div> 
    </div>';
}
//data status normal break
$sqlCek5 = "select * from p1_data_normal_break where (triggertime between timestamp(DATE_SUB(NOW(), INTERVAL 1 day)) and timestamp(NOW())) and recovertime is null";
$runCekRunning = mysqli_query($conn, $sqlCek5);
if(mysqli_num_rows($runCekRunning)>0){
    echo'<div class="lingkaran">    
                <div class="blink_me10">
                    <div class="bulat10">Normal Break</div> 
                </div> 
            </div> 
        </div>';
}else{
    echo'   <div class="lingkaran">
    <div class="bulat10">Normal Break</div> 
    </div> ';
}

//breakdown
$sqlCek6 = "select * from p1_data_breakdown where (triggertime between timestamp(DATE_SUB(NOW(), INTERVAL 1 day)) and timestamp(NOW())) and recovertime is null";
$runCekBreakdown = mysqli_query($conn, $sqlCek6);
if(mysqli_num_rows($runCekBreakdown)>0){
    echo'<div style="background: red">
            <div class="lingkaran2">    
                <div class="blink_me6">
                    <div class="bulat6">Breakdown</div> 
                </div> 
            </div> 
        </div>';
}else{
    echo'<div style="background: grey">
    <div class="lingkaran2">
    <div class="bulat6">Breakdown</div> 
    </div> 
    </div>';
}
//qc call
$sqlCek7 = "select * from p1_data_qc_call where (triggertime between timestamp(DATE_SUB(NOW(), INTERVAL 1 day)) and timestamp(NOW())) and recovertime is null";
$runCekQc = mysqli_query($conn, $sqlCek7);
if(mysqli_num_rows($runCekQc)>0){
    echo'<div style="background: red">
            <div class="lingkaran2">    
                <div class="blink_me7">
                    <div class="bulat7">Qc Call</div> 
                </div> 
            </div> 
        </div>';
}else{
    echo'<div style="background: grey">
    <div class="lingkaran2">
    <div class="bulat7">Qc Call</div> 
    </div> 
    </div>';
}
//dissconnected 
if(!$conn){
    echo'<div class="lingkaran2">
    <div class="blink_me9">
    <div class="bulat9">Disconnected</div> 
    </div> 
    </div>';
	
}else{
    echo'   <div class="lingkaran2">    
                    <div class="bulat9">Disconnected</div> 
                </div>';
		
}
//support call
$sqlCek8 = "select * from p1_data_support_call where (triggertime between timestamp(DATE_SUB(NOW(), INTERVAL 1 day)) and timestamp(NOW())) and recovertime is null";
$runCekSupport = mysqli_query($conn, $sqlCek8);
if(mysqli_num_rows($runCekSupport)>0){
    echo'   <div class="lingkaran2">    
                <div class="blink_me8">
                    <div class="bulat8">Support Call</div> 
                </div> 
            </div> 
        ';
}else{
    echo'<div class="lingkaran2">
    <div class="bulat8">Support Call</div> 
    </div> 
    </div>';
}

?>

                    
                        

                              

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                      

                           
                            

                      
                            

                            
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>