<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

       <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="login.css" rel="stylesheet">
</head>
<body>
	<br/>
	<!-- cek pesan notifikasi -->
    <h2></h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        
    </div>
    <div class="form-container sign-in-container">
            
    <br/>
    <br/>
    <div class="login">
	<br/>
    
        <p> .</p> 
		<form action="cek_login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>	
          		
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            
            <div class="overlay-panel overlay-right">
                <h1>Welcome To</h1>
                <h2> Industrial Productivity Measurement </h2>
                <p></p>
            </div>
        </div>
    </div>
</div>


</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('please enter your username and password !');
			return false;
		}
	}
 
</script>
</html>