<?php require_once('main_connection.php'); ?>
<?php
if(isset($_POST['register'])){
	
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$registerdate=$_POST['register_date'];
		 
	$queryL="INSERT INTO tbl_registration(username,password,email,first_name,last_name,register_date) VALUES('$username','$password','$email','$firstname','$lastname','$registerdate')";
    mysqli_query($connection,$queryL);

	echo '<script>alert("Account create  successfully") </script>';
	echo '<script>window.location="loging.php"</script>';
}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title> register</title>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <!-----link boostrap----->
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
        <!-----link css Style----->
		<link rel = "stylesheet" type = "text/css" href = "css/logstyle.css">
		
        <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=AzdVIdjfRVWCKEZ_zmv2SeLtyBRSZwskYoleqoWpUtRK0U9TkgFR-nG_hfBT8uOgGKCOC4z2I0iNwigcBFSgkbJdvhTCwegS_3ZBvg2EIe3pqEidkyA9wEYafa0Xl1c0xWIoWZhIylgAiAOa3Lg0aK_vYNYS_B3Hrnr4Rd-kJve8uwgymVw3s_5mNnLQTBBLjKmF96QBktuEya8nNfDCXlzia7W2nYcvXLQF6Pz6tudfM_BY7ZIqYlqlioQtKzJLrjJFt6BLftaXrAkaS7syA_L6NskWRXROMbXAyyKpCqqFfWC0RIqEKMSm9B4y6SOj4aTT8esZTkiOJ_uUguLOjYL8ZyqkFnnZxuMoRLXmWQYmb6AuWSa2oDw1lRGmiTY3CC8nsPkmALUiX8djyk2R05WiXddeeXCdfVOGHbNzlYXmSMRX_6HBtQBofrUi1KecodDK9xuXX-16fthh46HCv6rBhBUA1UiRTGnHAeJU9lOqWVJVQy8xbmHbwF9mxTVeaGdgwDVmaT6p3poGpWWXS1aul--PI3c4rUP0ibeI9gNSKLmKOMoWVm0EOpGZSvRXYRgNWaJ6gycfZHj6nCmlgiBQB9XI066ZSvdvAAn22nVYrCImDqWrJsHkadZUMNujeydOvzVI5kSeIQiQlQIEwwBneZXlvr6HK2PmkXbYo0pQHnCBUb9ZP23u3NxVGEaVjOZ8nw7lMltjduRz8_u06Oi-rP9W2s0ue0IuLlkd2uhMEcufWsv1HBJmbRRoKAqJ_rHr48L8aSWsuab8C3FoOWaHC2J_28tTykrdwXQE0MPJRM6PQTyrngxKvOYWXcblXZxGF_7QG6rihsZZRv76jm05q-EQd6j9BN0u3XS7jzgb8prU7Qt2R-nOWL4VTLIUmz3xPnWYV-PBV3QJcnQDTzTLdxI1e46TsUkwV5ppAe98alzCbct9xZYLJi15NxxNlQYFITNFDHgvzeMG7PkmvHnhqn1nE-OmDGai4MiNQ5eVSzXRNPZMA3VkZpCYBLkQxETxvkDGunUW7ZNCgVQKEOcDPN5TM7YXRVKa_Kf9ZA9_o1UDJrQ62zzFXSRKQMDFipPI_f-akctRhCeyv8FnrDN8O2P8dlcAhW58Lyy7PnMJiY02NepOrMLzgOFlmwgi11u8yH9FmH2VdbqoxtmFj_cxGKfIOyOh0_o7xTGg5XpsmoO9H_OATdUICwTiUd39vacTEOJ8cmMhMNWlGhqVgQ" nonce="b1ae715cdb4d364bc86268149d2d1397" charset="UTF-8">
        </script>
    </head>
	<body>
		<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
					<div><br><br><br></div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line logo-image"> <img src="img/owners.jpg" class="img-fluid"> </div>
                </div>
            </div>
			
            <div class="col-lg-6">
                <div class="card1 card border-0 px-4 py-5">
                    <div><br><br><br></div>
                    <form method="post" action="#">
						<div class="row px-3">
							<label class="mb-1">
								<h6 class="mb-0 text-sm">Name</h6>
							</label>
								<input class="mb-4" type="text" name="username" placeholder="Enter your name">
						</div>
						<div class="row px-3">
							<label class="mb-1">
								<h6 class="mb-0 text-sm">Password</h6>
							</label>
								<input class="mb-4" type="password" name="password" placeholder="Enter your name">
						</div>
						<div class="row px-3">
							 <label class="mb-1">
								<h6 class="mb-0 text-sm">E-mail</h6>
							</label>
							<input type="email" name="email" placeholder="Enter a valid email">
						</div>
						<br>
						<div>
							<label class="mb-1">
								<h6 class="mb-0 text-sm">First Name</h6>
							</label>
							 <input class="mb-4" type="text" name="firstname" placeholder="Enter your first name">
						</div>
						<div class="row px-3">
							<label class="mb-1">
								<h6 class="mb-0 text-sm">Last Name</h6>
							</label>
								<input class="mb-4" type="text" name="lastname" placeholder="Enter your last name">
						</div>
						<div class="row px-3">
							<label class="mb-1">
								<h6 class="mb-0 text-sm">Register Date</h6>
							</label>
								<input class="mb-4" type="date" name="register_date" placeholder="Enter your name">
						</div>
						
						<div class="row mb-3 px-3">
							 <button type="submit" class="btn btn-blue text-center" name="register">Register</button>
						 </div>
					</form>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
		<script type = "text/javascript" src = "js/bootstrap.min.js "></script>
		<script type = "text/javascript" src = "js/Jque.js "></script>
	</body>
</html>
<?php mysqli_close($connection); ?>