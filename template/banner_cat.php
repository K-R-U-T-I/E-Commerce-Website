<body class="fullwidth">
<!-- Banners -->

		<div class="row">
<?php 
		$sel = "SELECT * FROM banner ORDER BY bann_id DESC LIMIT 2";
		$qry = mysqli_query($conn, $sel);
		while($row = mysqli_fetch_assoc($qry)){
?>
			<div class="col-sm-6">
				<a href="#" class="banner-wrap">
					<div class="banner style-9 autosize-text image-hover-scale" data-fontratio="6.4">
						<img src="admin_theme/Uploads/banner_img/<?php echo $row['bann_image']; ?>"
						 heigth="100" width="100" alt="Banner">
						<div class="banner-caption vertb">
							<div class="vert-wrapper">
								<div class="vert">
									<div class="text-1 text-hoverslide" data-hcolor="#ffffff"><span><span class="text"><?php echo $row['bann_name']; ?></span><span class="hoverbg"></span></span>
									</div>
									<div class="text-2"><?php echo $row['bann_desc']; ?></div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- <div class="col-sm-6">
				<a href="#" class="banner-wrap">
					<div class="banner style-10 autosize-text image-hover-scale" data-fontratio="6.4">
						<img src="images/banners/banner-category-2.jpg" alt="Banner 2">
						<div class="banner-caption vertb horc">
							<div class="vert-wrapper">
								<div class="vert">
									<div class="text-1">You deserve the best</div>
									<div class="banner-btn text-hoverslide" data-hcolor="#f82e56"><span><span class="text">Shop Now</span><span class="hoverbg"></span>
									</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div> -->
	<?php }?>

		</div>

		<!-- /Banners -->
						
</body>