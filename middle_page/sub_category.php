<body class="fullwidth">

<body class="boxed">	
	<div id="wrapper">
		<!-- Page -->
		<div class="page-wrapper">			
			<!-- Page Content -->

<?php 

	$category_id = $_GET['cat_id'];
	$sel1 = "SELECT * FROM category WHERE cat_id='$category_id'";
	$qry1 = mysqli_query($conn, $sel1);
	$res1 = mysqli_fetch_assoc($qry1);
?>	
			<main class="page-main">
				<div class="block">
					<div class="container">

					</div>
				</div>

				<div class="block">
					<div class="container">
						<div class="title center">
							<h1><?php //echo $res1['cat_name']; ?></h1>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="space">
						    <style>
						        .space{
						            margin: 90px 0 0 0;
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
								</div>
							</div>
						
							<!-- /Categories -->

							<!-- Products Grid -->
							<div class="products-grid four-in-row product-variant-5">
								<!-- Product Item -->
<?php
			
			$sub_id = $_GET['cat_id'];
			$sel = "SELECT * FROM sub_category WHERE cat_id='$sub_id' AND status='active'";
			//$sel = "SELECT * FROM sub_category WHERE status='active'";
			$query =mysqli_query($conn, $sel);
			while($res =mysqli_fetch_assoc($query)){
?>							
								<div class="product-item large colorvariants category2">
									<div class="product-item-inside">
										<div class="product-item-info">
											<!-- Product Photo -->
											<div class="product-item-photo">
												<!-- Product Label -->
												<!-- /Product Label -->
												<!-- product main photo -->
												<div class="product-item-gallery-main">
													<a href="index.php?page=prod&sub_id=<?php echo $res['sub_cat_id'] ?>">
														<img class="product-image-photo" src="admin_theme/Uploads/sub-category_img/<?php echo $res['profile']; ?>" height="300" width="100" alt=""></a>		
												</div>
												<!-- /product main photo  -->
												<!-- Product Actions -->	
												<!-- /Product Actions -->
											</div>
											<!-- /Product Photo -->
											<!-- Product Details -->
<?php 

		$sub_id = $_GET['sub_id'];
		$pro_sel = "SELECT * FROM product WHERE sub_cat_id='$sub_id'";
		$pro_qry = mysqli_query($conn, $pro_sel);
		$data = mysqli_fetch_assoc($pro_qry);
?>
											<div class="product-item-details">
												<div class="product-item-name"> 
													<a title="Long sleeve overall" href="index.php?page=prod&sub_id=<?php echo $res['sub_cat_id'] ?>" class="product-item-link"><?php echo $res['sub_cat_name']; ?></a>
												</div>
												<div class="product-item-description">
													<?php  echo $res['description']; ?>
												</div>
												<div class="product-item-rating">
												 <i class="fa fa-star-fill"></i>
												 <i class="fa fa-star-fill"></i>
												 <i class="fa fa-star-fill"></i>
												 <i class="fa fa-star-fill"></i>
												 <i class="fa fa-star-fill"></i>
												</div>
											</div>
											<!-- /Product Details -->
										</div>
									</div>
								</div>
								<!-- /Product Item -->
								<?php } ?>
							</div>
							<!-- /Products Grid -->
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

	