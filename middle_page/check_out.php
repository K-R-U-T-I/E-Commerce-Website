<?php 
	//include ('template/banner.php');
?>
<body class="fullwidth">
<!-- Page Content -->
			<main class="page-main">
				<div class="block">
					<div class="container">

						<div class="space">
						    <style>
						        .space{
						            margin: 150px 0 0 0;
						        }
						    </style>
						</div>

						<ul class="breadcrumbs">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li>/<span>Checkout</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h2>Billing Details</h2>
								<form class="white" action="index.php?page=check_out_action" method="post">
									<div class="row">
										<div class="col-sm-6">
											<label>Country<span class="required">*</span></label>
											<div class="select-wrapper">
												<select class="form-control">
													<option> - Select Country - </option>
													<option data-code="US" value="United States">United States</option>
													<option data-code="NL" value="Netherlands">Netherlands</option>
													<option data-code="CA" value="Canada">Canada</option>
													<option data-code="TD" value="Chad">Chad</option>
													<option data-code="CL" value="Chile">Chile</option>
													<option data-code="CN" value="China">China</option>
													<option data-code="CY" value="Cyprus">Cyprus</option>
													<option data-code="EG" value="Egypt">Egypt</option>
													<option data-code="FI" value="Finland">Finland</option>
													<option data-code="FR" value="French">French</option>
													<option data-code="DE" value="German">German</option>
													<option data-code="GR" value="Greece">Greece</option>
													<option data-code="HT" value="Haiti">Haiti</option>
													<option data-code="HU" value="Hungary">Hungary</option>
													<option data-code="IS" value="Iceland">Iceland</option>
													<option data-code="IN" value="India">India</option>
													<option data-code="ID" value="Indonesia">Indonesia</option>
													<option data-code="IR" value="Iran, Islamic Republic Of">Iran</option>
													<option data-code="IQ" value="Iraq">Iraq</option>
													<option data-code="IE" value="Ireland">Ireland</option>
													<option data-code="IL" value="Israel">Israel</option>
													<option data-code="IT" value="Italy">Italy</option>
													<option data-code="JP" value="Japan">Japan</option>
													<option data-code="LU" value="Luxembourg">Luxembourg</option>
													<option data-code="MX" value="Mexico">Mexico</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<label>State/Province <span class="required">*</span></label>
											<div class="select-wrapper">
												<select class="form-control">
													<option> - Select Province/State - </option>
													<option value="AB">Alberta</option>
													<option value="BC">British Columbia</option>
													<option value="MB">Manitoba</option>
													<option value="NB">New Brunswick</option>
													<option value="NL">Newfoundland and Labrador</option>
													<option value="NS">Nova Scotia</option>
													<option value="NT">Northwest Territories</option>
													<option value="NU">Nunavut</option>
													<option value="ON">Ontario</option>
													<option value="PE">Prince Edward Island</option>
													<option value="QC">Quebec</option>
													<option value="SK">Saskatchewan</option>
													<option value="YT">Yukon</option>
													<option> ---------------- </option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="DC">District Of Columbia</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NV">Nevada</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WA">Washington</option>
													<option value="WV">West Virginia</option>
													<option value="WI">Wisconsin</option>
													<option value="WY">Wyoming</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<label>First Name<span class="required">*</span></label>
											<input type="text" name="fname" class="form-control">
										</div>
										<div class="col-sm-6">
											<label>Last Name<span class="required">*</span></label>
											<input type="text" name="lname" class="form-control">
										</div>
									</div>
									<label>Company Name</label>
									<input type="text" name="cname" class="form-control">
									<div class="row">
										<div class="col-sm-6">
											<label>E-mail<span class="required">*</span></label>
											<input type="text" name="email" class="form-control">
										</div>
										<div class="col-sm-6">
											<label>Phone Number<span class="required">*</span></label>
											<input type="text" name="number" class="form-control">
										</div>
									</div>

									<label>Address 1</label>
									<input type="text" name="adr1" class="form-control">

									<div class="row">
										<div class="col-sm-6">
											<label>Town / City<span class="required">*</span></label>
											<input type="text" name="city1" class="form-control">
										</div>
										<div class="col-sm-6">
											<label>Postcode / Zip<span class="required">*</span></label>
											<input type="text" name="pin1" class="form-control">
										</div>
									</div>

									<label>Address 2</label>
									<input type="text" name="adr2" class="form-control">

									<div class="row">
										<div class="col-sm-6">
											<label>Town / City<span class="required">*</span></label>
											<input type="text" name="city2" class="form-control">
										</div>
										<div class="col-sm-6">
											<label>Postcode / Zip<span class="required">*</span></label>
											<input type="text" name="pin2" class="form-control">
										</div>
									</div>
									
									<div>
										<!-- <div class="checkbox-group"> -->
											<input type="submit" name="create" value="Submit" id="checkbox-createAccount"> 
											
											<!-- <label for="checkbox-createAccount"><span class="check"></span><span class="box"></span>Create an Account ?</label> -->
										<!-- </div> -->
									</div>
								</form>
																
							</div>
							<div class="col-md-6">
								
								
								<div class="clearfix"></div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="divider"></div>
			</main>
			<!-- /Page Content -->
		</body>