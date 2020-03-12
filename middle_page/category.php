<body class="fullwidth">

<body class="boxed">
	
	<div id="wrapper">

		<!-- Page -->
		<div class="page-wrapper">
			<!-- Sidebar -->
			<!-- /Sidebar -->
			<!-- Page Content -->
			<main class="page-main">

<?php 
	$sel1 = "SELECT * FROM category WHERE status='active'";
	$qry1 = mysqli_query($conn, $sel1);
	$res1 = mysqli_fetch_assoc($qry1);

?>				<!-- <div class="block">
					<div class="container">
						<ul class="breadcrumbs">
							<h2>
							<li><a href="index.php"><i class="fa fa-home" style="font-size: 30px;"></i></a></li>
							<li>/<span><?php echo $res1['cat_name']; ?></span></li></h2>
						</ul>
					</div>
				</div> -->
				<div class="container">

					<div class="space">
						    <style>
						        .space{
						            margin: 100px 0 0 0;
						        }
						    </style>
					</div>

					<!-- Two columns -->
					<div class="row">
						<!-- Left column -->
						<div class="col-md-3 filter-col aside">
							
						</div>
						<!-- /Left column -->
						<!-- Center column -->
						<div class="col-md-9 aside">
							<!-- Page Title -->
							<div class="page-title">
								<div class="title center">
									<h1><?php echo $res1['cat_name']; ?></h1>
								</div>
							</div>
							<!-- /Page Title -->
							<!-- Banners -->
							<?php include('template/banner_cat.php'); ?>
							<!-- /Banners -->
							<!-- Categories Info -->
							<div class="info-block">
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui.</p>
							</div>
							<!-- Categories Info -->
							<!-- Categories -->
							<div class="categories">
								<div class="row">
		<?php
			$sel = "SELECT * FROM `sub_category` ORDER BY sub_cat_id DESC LIMIT 4  ";
			$query =mysqli_query($conn, $sel);
			while($res =mysqli_fetch_assoc($query)){

		?>						
									<div class="col-xs-6 col-sm-3">
										<a href="#" class="category-block">
											<div class="category-image">
<img src="admin_theme/Uploads/sub-category_img/<?php echo $res['profile']; ?>" height="400" width="120" alt="#">
											</div>
											<div class="category-title">
												<?php echo $res['sub_cat_name']; ?>
											</div>
										</a>
									</div>
									<?php }?>
								</div>
							</div>
						
							<!-- /Categories -->
							<!-- Filter Row -->
							<div class="filter-row">
								<div class="row">
									<div class="col-xs-8 col-sm-7 col-lg-5 col-left">
										<div class="filter-button">
											<a href="#" class="btn filter-col-toggle"><i class="fa fa-filter"></i><span>FILTER</span></a>
										</div>
										<div class="form-label">Sort by:</div>
										<div class="select-wrapper-sm">
											<select class="form-control input-sm">
												<option value="featured">Featured</option>
												<option value="rating">Rating</option>
												<option value="price">Price</option>
											</select>
										</div>
										<div class="directions">
											<a href="#"><i class="fa fa-arrow-down"></i></a>
											<a href="#"><i class="fa fa-arrow-up"></i></a>
										</div>
									</div>
									<div class="col-sm-2 col-lg-2 hidden-xs">
										<div class="view-mode">
											<a href="#" class="grid-view"><i class="fa fa-th"></i></a>
											<a href="#" class="list-view"><i class="fa fa-th-list"></i></a>
										</div>
									</div>
									<div class="col-xs-4 col-sm-3 col-lg-5 col-right">
										<div class="form-label">Show:</div>
										<div class="select-wrapper-sm">
											<select class="form-control input-sm">
												<option value="featured">12</option>
												<option value="rating">36</option>
												<option value="price">100</option>
											</select>
										</div>
									</div>
								</div>
								<div class="bg-striped"></div>
							</div>
							<!-- /Filter Row -->
							<!-- Total -->
							<div class="items-total">Items 1 to 15 of 28 total</div>
							<!-- /Total -->
							<!-- Products Grid -->
							<div class="products-grid four-in-row product-variant-5">
								<!-- Product Item -->
<?php
       $select = "SELECT * FROM product WHERE status='active'";
       $qry = mysqli_query($conn, $select);
       while($row=mysqli_fetch_assoc($qry)){
     
?> 					
								<div class="product-item large colorvariants category2">
									<div class="product-item-inside">
										<div class="product-item-info">
											<!-- Product Photo -->
											<div class="product-item-photo">
												<!-- Product Label -->
												<div class="product-item-label label-sale"><span>-20%</span></div>
												<!-- /Product Label -->
												<!-- product main photo -->
												<div class="product-item-gallery-main">
													<a href="index.php?page=category">
														<img class="product-image-photo" src="admin_theme/Uploads/product_img/<?php echo $row['pro_img']; ?>" height="300" width="100" alt=""></a>
														
													<a href="index.php?page=quick_view" title="Quick View" class="quick-view-link quick-view-btn"> <i class="fa fa-eye"></i><span>Quick View</span></a>
												</div>
												<!-- /product main photo  -->
												<!-- <div class="countdown-box hidden-xs">
													<div class="countdown-wrapper">
														<div class="countdown-title">special price expires in</div>
														<div class="countdown" data-promodate="2016/12/01"></div>
													</div>
												</div> -->
												<!-- Product Actions -->
												<a href="index.php?page=category" title="Add to Wishlist" class="wishlist active"> <i class="fa fa-heart"></i><span>Add to Wishlist</span> </a>
												<div class="product-item-actions">
													<div class="share-button toBottom">
														<span class="toggle"></span>
														<ul class="social-list">
															<li>
																<a href="#" class="fa fa-google"></a>
															</li>
															<li>
																<a href="#" class="fa fa-fancy fancy"></a>
															</li>
															<li>
																<a href="#" class="fa fa-pinterest"></a>
															</li>
															<li>
																<a href="#" class="fa fa-twitter"></a>
															</li>
															<li>
																<a href="#" class="fa fa-facebook"></a>
															</li>
														</ul>
													</div>
												</div>
												<!-- /Product Actions -->
											</div>
											<!-- /Product Photo -->
											<!-- Product Details -->
											<div class="product-item-details">
												<div class="product-item-name"> 
													<a title="Long sleeve overall" href="index.php?page=product" class="product-item-link"><?php echo $row['pro_name']; ?></a>
												</div>
												<div class="product-item-description">
													<?php  echo $row['description']; ?>
												</div>

												<div class="price-box"> <span class="price-container"> <span class="price-wrapper"> <span class="old-price">$190.00</span> <span class="special-price">$149.00</span> </span>
													</span>
												</div>
												<div class="product-item-rating"> <i class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i></div>
												<button class="btn add-to-cart" data-product="789123"> <i class="fa fa-cart"></i><span>Add to Cart</span> </button>
											</div>
											<!-- /Product Details -->
										</div>
									</div>
								</div>
								<!-- /Product Item -->
								<?php } ?>
							</div>
							<!-- /Products Grid -->
							<!-- Filter Row -->
							<div class="filter-row">
								<div class="row">
									<div class="col-xs-8 col-sm-7 col-lg-5 col-left">
										<div class="filter-button">
											<a href="#" class="btn filter-col-toggle"><i class="fa fa-filter"></i><span>FILTER</span></a>
										</div>
										<div class="form-label">Sort by:</div>
										<div class="select-wrapper-sm">
											<select class="form-control input-sm">
												<option value="featured">Featured</option>
												<option value="rating">Rating</option>
												<option value="price">Price</option>
											</select>
										</div>
										<div class="directions">
											<a href="#"><i class="fa fa-arrow-down"></i></a>
											<a href="#"><i class="fa fa-arrow-up"></i></a>
										</div>
									</div>
									<div class="col-sm-2 col-lg-2 hidden-xs">
										<div class="view-mode">
											<a href="#" class="grid-view"><i class="fa fa-th"></i></a>
											<a href="#" class="list-view"><i class="fa fa-th-list"></i></a>
										</div>
									</div>
									<div class="col-xs-4 col-sm-3 col-lg-5 col-right">
										<div class="form-label">Show:</div>
										<div class="select-wrapper-sm">
											<select class="form-control input-sm">
												<option value="featured">12</option>
												<option value="rating">36</option>
												<option value="price">100</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<!-- /Filter Row -->
							<!-- Total -->
							<div class="items-total">Items 1 to 15 of 28 total</div>
							<!-- /Total -->
						</div>
						<!-- /Center column -->
					</div>
					<!-- /Two columns -->
				</div>
			</main>
			<!-- /Page Content -->

		</div>
		<!-- /Page -->
	</div>
	<!-- ProductStack -->
	<div class="productStack disable hide_on_scroll">
		<a href="#" class="toggleStack"><i class="fa fa-cart"></i> (6) items</a>
		<div class="productstack-content">
			<div class="products-list-wrapper">
				<ul class="products-list">
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-10.jpg" alt=""></a>
						<span class="item-qty">3</span>
						<div class="actions">
							<a href="#" class="action edit" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-11.jpg" alt=""></a>
						<span class="item-qty">3</span>
						<div class="actions">
							<a class="action edit" href="#" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-12.jpg" alt=""></a>
						<span class="item-qty">3</span>
						<div class="actions">
							<a class="action edit" href="#" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-13.jpg" alt=""></a>
						<span class="item-qty">3</span>
						<div class="actions">
							<a class="action edit" href="#" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-14.jpg" alt=""></a>
						<span class="item-qty">3</span>
						<div class="actions">
							<a class="action edit" href="#" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-15.jpg" alt=""></a>
						<span class="item-qty">3</span>
						<div class="actions">
							<a class="action edit" href="#" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="action-cart">
				<button type="button" class="btn" title="Checkout"> <span>Checkout</span> </button>
				<button type="button" class="btn" title="Go to Cart"> <span>Go to Cart</span> </button>
			</div>
			<div class="total-cart">
				<div class="items-total">Items <span class="count">6</span></div>
				<div class="subtotal">Subtotal <span class="price">2.150</span></div>
			</div>
		</div>
	</div>
	<!-- /ProductStack -->
	<!-- Modal Quick View -->
	<div class="modal quick-view zoom" id="quickView">
		<div class="modal-dialog">
			<div class="modalLoader-wrapper">
				<div class="modalLoader bg-striped"></div>
			</div>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">&#10006;</button>
			</div>
			<div class="modal-content">
				<iframe></iframe>
			</div>
		</div>
	</div>
	<!-- /Modal Quick View -->

	