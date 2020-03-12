<body class="fullwidth">
<!-- Page Content -->
			<main class="page-main" style="margin-top=60px;">
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
							<li><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li>/<span>Contact</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="row">
							<div class="col-sm-5">
								<div class="text-wrapper">
									<h2>Place for nice title</h2>
									<div class="address-block">
										<h3>ADDRESS 1</h3>
										<ul class="simple-list">
											<li><i class="fa fa-location-pin"></i>Adress: 8901 Marmora Road, Glasgow D04 64 GR, New York</li>
											<li><i class="fa fa-phone"></i>Phone: 9823xxx</li>
											<li><i class="fa fa-phone"></i>Fax: 123456789xxxx</li>
											<li><i class="fa fa-envelope"></i>Email: <a href="mailto:support@seiko.com">Seico@example.com</a></li>
										</ul>
									</div>
									<div class="address-block last">
										<h3>ADDRESS 2</h3>
										<ul class="simple-list">
											<li><i class="fa fa-location-pin"></i>Adress: 5487 Capers Road, Glasgow D43 66 GR, Boston</li>
											<li><i class="fa fa-phone"></i>Phone: 9823xxx</li>
											<li><i class="fa fa-phone"></i>Fax: 123456789xxxx</li>
											<li><i class="fa fa-envelope"></i>Email: <a href="mailto:support@seiko.com">Seico@example.com</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="text-wrapper">
									<h2>Contact Information</h2>
									<p id="contactFormSuccess">Your email was send successfully!</p>
									<p id="contactFormError">Error, try to submit this form again.</p>

							<form id="contactform" class="contact-form white" 
								action="index.php?page=contact_us_action" method="post" 
								enctype="formdata/multi-part">

								<input type="hidden" name="id" value="">
								
									<label>Name<span class="required">*</span></label>
										<input type="text" class="form-control input-lg" name="name" value="">
									<label>E-mail<span class="required">*</span></label>
										<input type="email" class="form-control input-lg" name="email" value="">
									<label>Contact No.<span class="required">*</span></label>
										<input type="number" class="form-control input-lg" name="num" value="">

									<label>Subject<span class="required">*</span></label>
										<input type="text" class="form-control input-lg" name="sub" value="">

									<label>Message<span class="required">*</span></label>
										<textarea class="form-control input-lg" name="msg"></textarea>
										
										<div>
											<button class="btn btn-lg" id="submit" type="submit" name="submit">Submit</button>
										</div>
										<div class="required-text">* Required Fields</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block fullwidth">
					<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSK_nLPUyr7NGihR1MkH5z1COHYFI9SKs"></script>
					<script type="text/javascript">
						// When the window has finished loading create our google map below
						google.maps.event.addDomListener(window, 'load', init);

						function init() {
							// Basic options for a simple Google Map
							// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
							var mapOptions = {
								zoom: 14,
								scrollwheel: false,
								center: new google.maps.LatLng(64.1309896, -21.8393331, 13.75), // Seiko

								// How you would like to style the map. 
								// This is where you would paste any style found on Snazzy Maps.
								styles: [{
									"featureType": "administrative",
									"elementType": "labels.text.fill",
									"stylers": [{
										"color": "#444444"
									}]
								}, {
									"featureType": "landscape",
									"elementType": "all",
									"stylers": [{
										"color": "#f2f2f2"
									}]
								}, {
									"featureType": "poi",
									"elementType": "all",
									"stylers": [{
										"visibility": "off"
									}]
								}, {
									"featureType": "road",
									"elementType": "all",
									"stylers": [{
										"saturation": -100
									}, {
										"lightness": 45
									}]
								}, {
									"featureType": "road.highway",
									"elementType": "all",
									"stylers": [{
										"visibility": "simplified"
									}]
								}, {
									"featureType": "road.highway",
									"elementType": "geometry.fill",
									"stylers": [{
										"color": "#ffffff"
									}]
								}, {
									"featureType": "road.arterial",
									"elementType": "labels.icon",
									"stylers": [{
										"visibility": "off"
									}]
								}, {
									"featureType": "transit",
									"elementType": "all",
									"stylers": [{
										"visibility": "off"
									}]
								}, {
									"featureType": "water",
									"elementType": "all",
									"stylers": [{
										"color": "#dde6e8"
									}, {
										"visibility": "on"
									}]
								}]
							};

							// Get the HTML DOM element that will contain your map 
							// We are using a div with id="map" seen below in the <body>
							var mapElement = document.getElementById('googleMap');

							// Create the Google Map using our element and options defined above
							var map = new google.maps.Map(mapElement, mapOptions);

							// Let's also add a marker while we're at it
							var marker = new google.maps.Marker({
								position: new google.maps.LatLng(64.127182, -21.817184),
								map: map,
								title: 'Seiko'
							});
						}
					</script>
					<!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
					<div id="googleMap" class="google-map"></div>
				</div>
			</main>
			<!-- /Page Content -->
</body>