<?php 
		include('template/banner.php');
?>
<body class="boxed">
	<!-- Loader -->
	<!-- /Loader -->
	<div class="fixed-btns demo-mode">
		<!-- Tools Panel -->		
		<!-- /Tools Panel -->
		<!-- Buy Now -->
		<!--/Buy Now -->
		<!-- Back To Top -->
		<a href="#" class="top-fixed-btn back-to-top">
			<i class="fa fa-arrow-up"></i>
		</a>
		<!-- /Back To Top -->
	</div>
	<div id="wrapper">
		<!-- Page -->
		<div class="page-wrapper">
			<!-- Header -->
			<!-- Sidebar -->

			<!-- Page Content -->
			<main class="page-main">
				
				<div class="block">
					<div class="container">
						<!-- Wellcome text -->
						<div class="text-center bottom-space">
							<h1 class="size-lg no-padding">WELCOME TO <span class="logo-font custom-color">KT</span> CoMpaNY</h1>
							<div class="line-divider"></div>
							<p class="custom-color-alt">Lorem ipsum dolor sit amet, ex eam mundi populo accusamus, aliquam quaestio petentium te cum.
								<br> Vim ei oblique tacimates, usu cu iudico graeco. Graeci eripuit inimicus vel eu, eu mel unum laoreet splendide, cu integre apeirian has.
							</p>
						</div>
						<!-- /Wellcome text -->
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="box style2 bgcolor1 text-center">
									<div class="box-icon"><i class="fa fa-truck" style="color:black;font-size: 30px;"></i></div>
									<h3 class="box-title">FREE SHIPPING</h3>
									<div class="box-text">Free shipping on all orders over $199</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="box style2 bgcolor2 text-center">
									<div class="box-icon"><i class="fa fa-dollar" style="color:black;font-size: 30px;"></i></div>
									<h3 class="box-title">MONEY BACK</h3>
									<div class="box-text">100% money back guarantee</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="box style2 bgcolor3 text-center">
									<div class="box-icon"><i class="fa fa-heart" style="color:blue;font-size: 30px;"></i></div>
									<h3 class="box-title">ONLINE SUPPORT</h3>
									<div class="box-text">Service support fast 24/7</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<ul class="filters filters-product style2">
							<li><a href="index.php" class="filter-label">All<span class="count"></span></a></li>
							<li><a href="index.php" class="filter-label active" data-filter=".category1">New<span class="count"></span></a></li>
							<!-- <li><a href="#" class="filter-label" data-filter=".category2">Sale<span class="count"></span></a></li> -->
						</ul>
						<div class="products-grid-wrapper isotope-wrapper">
							<div class="products-grid isotope four-in-row product-variant-5">
								
				<!-- Product Item -->
<?php 
		$sel = "SELECT * FROM product WHERE status='active'";
		$qry = mysqli_query($conn, $sel);
		while($row = mysqli_fetch_assoc($qry)){
?>
				<div class="product-item previews-2 large category1 category2">
					<div class="product-item-inside">
						<div class="product-item-info">
							<!-- Product Photo -->
							<div class="product-item-photo">
								<!-- Product Label -->
								<div class="product-item-label label-new"><span>New</span></div>
								<!-- /Product Label -->
								<!-- product main photo -->
								<div class="product-item-gallery-main">
									<a href="#">
										<img class="product-image-photo" src="admin_theme/Uploads/product_img/<?php echo $row['pro_img']; ?>" heigth="200" width="200" alt="">
									</a>
									<a href="quick-view.php" title="Quick View" class="quick-view-link quick-view-btn"> <i class="fa fa-eye"></i><span>Quick View</span></a>
								</div>
								<!-- /product main photo  -->
								<div class="countdown-box hidden-xs">
								</div>
								<!-- Product Actions -->
								<a href="index.html#" title="Add to Wishlist" class="no_wishlist"> <i class="fa fa-heart"></i><span>Add to Wishlist</span> </a>
								<div class="product-item-actions">
									<div class="share-button toBottom">
									</div>
								</div>
								<!-- /Product Actions -->
								<!-- product carousel -->								
								<!-- /product carousel -->
							</div>
							<!-- /Product Photo -->
							<!-- Product Details -->
							<div class="product-item-details">
								<div class="product-item-name">
									<a title="Mesh bodycon dress" href="index.php?page=product" class="product-item-link"><?php echo $row['pro_name']; ?></a>
								</div>
								<div class="product-item-description">
									<?php echo $row['description']; ?>
								</div>
								<div class="price-box">
								 <span class="price-container">
								 <span class="price-wrapper">
								 <span class="old-price">$290.00</span>
								 <span class="special-price"><?php echo $row['amount']; ?></span>
								 </span>
								 </span>
								</div>
								<div class="product-item-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="index.php?page=cart" class="btn add-to-cart" data-product="789123">
									<i class="fa fa-cart"></i>
									<span>Add to Cart</span> 
								</a>
							</div>
							<!-- /Product Details -->
						</div>
					</div>
				</div>
			<?php }?>
				<!-- /Product Item -->								
							</div>
						</div>
					</div>
				</div>

				<!-- Middle Banner  -->
				<?php include('template/banner_mid_home.php');; ?>
				<!-- /Middle Banner  -->
				
				<div class="block bottom-space">
					<div class="container">
						<div class="row">
							
								<!-- Blog Carousel -->
							<?php include ('template/frm_blog.php'); ?>
								<!-- /Blog Carousel -->

								<!-- /Deal Carousel -->
							<?php include ('template/dod.php'); ?>							
								<!-- /Deal Carousel -->
							
						</div>
					</div>
				</div>
				<div class="block fullwidth full-nopad">
					<div class="container">
						<div id="instafeed" class="instagramm-feed-full"></div>
						<div class="instagramm-title">Instagram Feed</div>
					</div>
				</div>
			</main>
			<!-- /Page Content -->
			<!-- Footer -->
			
			<a class="back-to-top back-to-top-mobile" href="index.html#">
				<i class="fa fa-angle-up"></i> To Top
			</a>
		</div>
		<!-- /Page -->
	</div>
	<!-- ProductStack -->
	<div class="productStack disable hide_on_scroll">
		<a href="index.html#" class="toggleStack"><i class="fa fa-cart"></i> (6) items</a>
		<div class="productstack-content">
			<div class="products-list-wrapper">
				<ul class="products-list">
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-10.jpg" alt=""></a>
						<span class="item-qty">3</span>
						<div class="actions">
							<a href="index.html#" class="action edit" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="index.html#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
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
							<a class="action edit" href="index.html#" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="index.html#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
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
							<a class="action edit" href="index.html#" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="index.html#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
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
							<a class="action edit" href="index.html#" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="index.html#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
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
							<a class="action edit" href="index.html#" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="index.html#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
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
							<a class="action edit" href="index.html#" title="Edit item"><i class="fa fa-pencil"></i></a>
							<a class="action delete" href="index.html#" title="Delete item"><i class="fa fa-trash-alt"></i></a>
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
