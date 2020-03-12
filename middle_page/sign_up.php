<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="javascript" type="text/js" href="js/validation.js">

</head>

<body class="fullwidth">
<!-- Page Content -->
			<main class="page-main">
				<div class="block">
					<div class="container">

						<div class="space">
						    <style>
						        .space{
						            margin: 120px 0 0 0;
						        }
						    </style>
						</div>

						<ul class="breadcrumbs">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li>/<span>Sign Up</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="form-card">
							<h3>Personal Information</h3><!-- action="index.php?page=sign_up_action" -->
							<form class="account-create" action="index.php?page=sign_up_action"  method="post" enctype="multipart/form-data" onsubmit="return sign_up()">

								<input type="hidden" name="id" value="">

								<label><h4>First Name</h4><span class="required"></span></label>
									<input type="text" name="fname" id="txtfname" class="form-control input-lg">
									<!-- <span id="req_fname" style="color: red;">Enter First Name</span><br>
									<span id="valid_fname" style="color: red;">Enter Valid First Name
									</span> -->

								 <label><h4>Middle Name</h4><span class="required"></span></label>
									<input type="text" name="mname" id="txtmname" class="form-control input-lg">
									<!-- <span id="req_mname" style="color: red;">Enter Middle Name</span><br>
									<span id="valid_mname" style="color: red;">Enter Valid Middle Name
									</span> -->

								<label><h4>Last Name</h4><span class="required"></span></label>
									<input type="text" name="lname" id="txtlname" class="form-control input-lg">
									<!-- <span id="req_lname" style="color: red;">Enter Last Name</span><br>
									<span id="valid_lname" style="color: red;">Enter Valid Last Name</span> -->

								<label><h4>E-mail</h4><span class="required"></span></label>
									<input type="email" name="email" id="txtemail" class="form-control input-lg">
									<!-- <span id="req_email" style="color: red;">Enter Email-Id</span><br>
									<span id="valid_email" style="color: red;">Enter Valid Email-Id</span> -->

								<label><h4>Password</h4><span class="required"></span></label>
									<input type="password" name="password" id="txtpassword" class="form-control input-lg">
									<!-- <span id="req_password" style="color: red;">Enter Psw</span><br>
									<span id="valid_password" style="color: red;">Enter Valid Psw</span> -->

								<label><h4>Confirm Password</h4><span class="required"></span></label>
									<input type="password" name="conf_psw" id="txtconfpsw" class="form-control input-lg">

								<label><h4>Contact No.</h4><span class="required"></span></label>
									<input type="number" name="number" id="txtcontact" class="form-control input-lg">
									<!-- <span id="req_contact" style="color: red;">Enter Contact No.</span>
									<br>
									<span id="valid_contact" style="color: red;">Enter Valid Contact No.
									</span><br>
									<span id="ten_contact" style="color: red;">Enter 10 digits Contact No.</span>	 -->							

								<label><h4>Birth-date</h4><span class="required"></span></label>
									<input type="date" name="bday" id="txtdob" class="form-control input-lg"> 
									<!-- <span id="req_dob" style="color: red;">Require DOB</span> -->

								<label><h4>Gender</h4><span class="required"></span></label>
									<p>Female:</p>
									<input type="radio" name="gender" id="txtmale" value="Female"
									 class="form-control input-xs rrbtn">
									 	<!-- <span id="req_gender" style="color: red;">Require gender</span> -->
									 
									 	<label><span></span></label>
									 	<p>Male:</p>
									<input type="radio" name="gender" id="txtfemale" value="Male" 
									class="form-control input-xs rrbtn">
										<!-- <span id="req_gender" style="color: red;">Require gender</span> -->								

								<label><h4>Languages known</h4><span class="required"></span></label>
								<div class="col-md-12  cls-name">
									<p class="lan-name">Gujarati:</p>
									<input type="checkbox" name="lan[]" value="Gujarati" class="form-control input-lg chk">
								</div>
								<div class="col-md-12  cls-name">
								    <p class="lan-name">English</p>
                                    <input type="checkbox" name="lan[]" value="English" class="form-control input-lg chk">
                                </div>
								<div class="col-md-12  cls-name">
                                    <p class="lan-name">Hindi</p>
                                    <input type="checkbox" name="lan[]" value="Hindi" class="form-control input-lg chk">
                                </div>
								<div class="col-md-12  cls-name">
									<p class="lan-name">Chinese</p>
                                    <input type="checkbox" name="lan[]" value="Chinese" class="form-control input-lg chk">
                                </div>
								<div class="col-md-12  cls-name">
                                     <p class="lan-name">Urdu</p>
                                    <input type="checkbox" name="lan[]" value="Urdu" class="form-control input-lg chk">
                                </div>
								<div class="col-md-12  cls-name">
									<p class="lan-name">French</p>
                                    <input type="checkbox" name="lan[]" value="French" class="form-control input-lg chk">
                                </div>
								
								<label><h4>Country</h4><span class="required"></span></label>
									<select class="form-control input-lg" id="txtcountry" name="country">
											<option id="req_country">Select country</option>
                                            <option>India</option>
                                            <option>US</option>
                                            <option>UK</option>
                                    </select>

                                <label><h4>Profile</h4>
                                	<input class="form-control input-lg" type="file" name="image">
                                </label>

								<div>
									<button type="submit" name="register" value="submit"
											class="btn btn-lg">Create</button>
										<span class="required-text">* Required Fields</span>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</main>
			<!-- /Page Content -->
		</body>	

		</html>

