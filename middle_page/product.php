<?php ?>

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

<?php 
		$select1 = "SELECT * FROM category WHERE status='active'";
		$query1 = mysqli_query($conn, $select1);
		$data1 = mysqli_fetch_assoc($query1);

		$c_id = $data1['cat_id'];
		$select2 = "SELECT * FROM sub_category WHERE cat_id='$c_id'";
		$query2 = mysqli_query($conn, $select2);
		$data2 = mysqli_fetch_assoc($query2);

			$product_id = $_GET['product_id'];
			$sel = "SELECT * FROM `product` WHERE pro_id='$product_id'";
			$qry = mysqli_query($conn, $sel);
			$row=mysqli_fetch_assoc($qry);
			//crypt(str); 

			$ip = $_SERVER['REMOTE_ADDR'];
			//$sel2 = "SELECT * FROM `cart` WHERE pro_id='$product_id'";
			$sel2 = "SELECT * FROM `cart` WHERE ip='$ip'";
			$qry2 = mysqli_query($conn, $sel2);
			$row2=mysqli_fetch_assoc($qry2);	
?>
						<ul class="breadcrumbs">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li>/<a href="#"><?php echo $data1['cat_name']; ?></a></li>
							<li>/<a href="#"><?php echo $data2['sub_cat_name']; ?></a></li>
							<li>/<span><?php echo $row['pro_name']; ?></span></li>
							<li class="product-nav">								
							</li>
						</ul>
					</div>
				</div>
				<div class="block product-block">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-4">
								<!-- Product Gallery -->

								<div class="main-image">
									<img src="admin_theme/Uploads/product_img/<?php echo $row['pro_img']; ?>" heigth="300" width="300" class="zoom" alt="" data-zoom-image="images/products/large/product-gallery-1.jpg" />
									<div class="dblclick-text"><span>Double click for enlarge</span></div>
									<a href="http://www.youtube.com/watch?v=qZeeMm35LXo" class="video-link"><i class="fa fa-film"></i></a>
									<a href="images/products/large/product-gallery-1.jpg" class="zoom-link"><i class="fa fa-zoomin"></i></a>
								</div>
								<div class="product-previews-wrapper">
									<div class="product-previews-carousel" id="previewsGallery">
										<a href="#" data-image="images/products/large/product-gallery-1.jpg" data-zoom-image="images/products/large/product-gallery-1.jpg">
											<img src="admin_theme/Uploads/product_img/<?php echo $row['pro_img']; ?>" heigth="300" width="300" alt="" /></a>
										<a href="#" data-image="images/products/large/product-gallery-2.jpg" data-zoom-image="images/products/large/product-gallery-2.jpg">
											<img src="admin_theme/Uploads/product_img/<?php echo $row['pro_img']; ?>" heigth="300" width="300" alt="" /></a>
										<a href="#" data-image="images/products/large/product-gallery-3.jpg" data-zoom-image="images/products/large/product-gallery-3.jpg">
											<img src="admin_theme/Uploads/product_img/<?php echo $row['pro_img']; ?>" heigth="300" width="300" alt="" /></a>
									</div>
								</div>
								<!-- /Product Gallery -->
							</div>
							<div class="col-sm-6 col-md-8 col-lg-5">
								<div class="product-info-block classic">
									
									<div class="product-name-wrapper">
										<h1 class="product-name"><?php echo $row['pro_name']; ?></h1>
										<div class="product-labels">
											<span class="product-label sale">SALE</span>
											<span class="product-label new">NEW</span>
										</div>
									</div>
									<div class="product-availability">Availability: <span>In stock</span></div>
									<div class="product-description">
										<p><?php echo $row['description']; ?></p>
									</div>
									
									<div class="product-options">										
										<div class="product-color swatches">
										</div>
										<div class="product-qty">
											<span class="option-label">Qty:</span>
											<div class="qty qty-changer">
												<fieldset>
													
													<input type="button" value="&#8210;" class="decrease">

													<!-- <input type="text" name="quantity" onchange="Update_Quantity(this.value,<?php //echo $cart_id ?>);" class="qty-input" value="<?php// $row2['quantity']; ?>" data-min="0"> -->
													<?php $product_id=$_REQUEST['product_id']; ?>
													<input type="text" class="qty-input" name="quantity" onchange="Insert_Quantity(this.value,<?php echo $product_id ?>);" value="1" data-min="1" data-max="">

													<!-- <input type="text" class="qty-input" name="quantity"  value="" data-min="1" data-max="">
 -->
													<input type="button" value="+" class="increase">
												</fieldset>
											</div>
										</div>
									</div>
									<div class="product-actions">
										<div class="row">
											<div class="col-md-6">
												<div class="product-meta">
													<span><a href="#"><i class="fa fa-heart"></i> Add to wishlist</a></span><br><br>
													<span><a href="#"><i class="fa fa-balance"></i> Add to Compare</a></span>
												</div>
												<div class="social">
													<div class="share-button toLeft">	
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="price">
													<span class="old-price"><span>$140.00</span></span>
													<span class="special-price"><span>$<?php echo $_SESSION['grand_total']; ?></span></span>
												</div>
												<div class="actions">
													<!-- <a data-loading-text='<i class="fa fa-spinner spin"></i><span>Add to cart</span>' class="btn btn-lg btn-loading">
														<i class="fa fa-cart"></i><span>Add to cart</span>
													</a> -->

													<a href="index.php?page=cart_action&product_id=<?php echo $row['pro_id']; ?>" class="btn add-to-cart" data-product="789123"> 
													<i class="fa fa-cart"></i>
													<span>Add to Cart</span> 
													</a>
													<a href="#" class="btn btn-lg product-details"><i class="fa fa-external-link"></i></a>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-3 hidden-quickview">
								<div class="box-icon-row">									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="tabaccordion">
						<div class="container">
							<!-- Nav tabs -->
							<ul class="nav-tabs product-tab" role="tablist">
								<li><a href="#" role="tab" data-toggle="tab">Description</a></li>
								<li><a href="#" role="tab" data-toggle="tab">Custom tab</a></li>
								<li><a href="#" role="tab" data-toggle="tab">Sizing Guide</a></li>
								<li><a href="#" role="tab" data-toggle="tab">Tags</a></li>
								<li><a href="#" role="tab" data-toggle="tab">Reviews</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane" id="Tab1">
									<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<tbody>
												<tr>
													<td><strong>PROOF</strong></td>
													<td>PDF Proof</td>
												</tr>
												<tr>
													<td><strong>SAMPLES</strong></td>
													<td>Digital, Printed</td>
												</tr>
												<tr>
													<td><strong>WRAPPING</strong></td>
													<td>Yes, No</td>
												</tr>
												<tr>
													<td><strong>UV GLOSS COATING</strong></td>
													<td>Yes</td>
												</tr>
												<tr>
													<td><strong>SHRINK WRAPPING</strong></td>
													<td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>
												</tr>
												<tr>
													<td><strong>WEIGHT</strong></td>
													<td>0.05, 0.06, 0.07ess cards</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="Tab2">
									<h3 class="custom-color">Take a trivial example which of us ever undertakes</h3>
									<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure </p>
									<ul class="marker-simple-list two-columns">
										<li>Nam liberempore</li>
										<li>Cumsoluta nobisest</li>
										<li>Eligendptio cumque</li>
										<li>Nam liberempore</li>
										<li>Cumsoluta nobisest</li>
										<li>Eligendptio cumque</li>
									</ul>
								</div>
								<div role="tabpanel" class="tab-pane" id="Tab3">
									<h3>Single Size Conversion</h3>
									<div class="table-responsive">
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td><strong>UK</strong></td>
													<td>
														<ul class="params-row">
															<li>18</li>
															<li>20</li>
															<li>22</li>
															<li>24</li>
															<li>26</li>
														</ul>
													</td>
												</tr>
												<tr>
													<td><strong>European</strong></td>
													<td>
														<ul class="params-row">
															<li>46</li>
															<li>48</li>
															<li>50</li>
															<li>52</li>
															<li>54</li>
														</ul>
													</td>
												</tr>
												<tr>
													<td><strong>US</strong></td>
													<td>
														<ul class="params-row">
															<li>14</li>
															<li>16</li>
															<li>18</li>
															<li>20</li>
															<li>22</li>
														</ul>
													</td>
												</tr>
												<tr>
													<td><strong>Australia</strong></td>
													<td>
														<ul class="params-row">
															<li>8</li>
															<li>10</li>
															<li>12</li>
															<li>14</li>
															<li>16</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="Tab4">
									<ul class="tags">
										<li><a href="product-image-medium.html#"><span class="value"><span>Dresses</span></span></a></li>
										<li><a href="product-image-medium.html#"><span class="value"><span>Outerwear</span></span></a></li>
										<li><a href="product-image-medium.html#"><span class="value"><span>Tops</span></span></a></li>
										<li><a href="product-image-medium.html#"><span class="value"><span>Sleeveless tops</span></span></a></li>
										<li><a href="product-image-medium.html#"><span class="value"><span>Sweaters</span></span></a></li>
									</ul>
									<div class="divider"></div>
									<h3>Add your tag</h3>
									<form class="contact-form white" action="product-image-medium.html#">
										<label>Tag<span class="required">*</span></label>
										<input class="form-control input-lg">
										<div>
											<button class="btn btn-lg">Submit Tag</button>
										</div>
										<div class="required-text">* Required Fields</div>
									</form>
								</div>
								<div role="tabpanel" class="tab-pane" id="Tab5">
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<td></td>
													<td class="text-center">1 star</td>
													<td class="text-center">2 star</td>
													<td class="text-center">3 star</td>
													<td class="text-center">4 star</td>
													<td class="text-center">5 star</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><strong>Price</strong></td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-price1" type="radio" name="vote-price" value="1"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-price2" type="radio" name="vote-price" value="2"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-price3" type="radio" name="vote-price" value="3"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-price4" type="radio" name="vote-price" value="4"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-price5" type="radio" name="vote-price" value="5"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
												</tr>
												<tr>
													<td><strong>Value</strong></td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-value1" type="radio" name="vote-value" value="1"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-value2" type="radio" name="vote-value" value="2"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-value3" type="radio" name="vote-value" value="3"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-value4" type="radio" name="vote-value" value="4"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-value5" type="radio" name="vote-value" value="5"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
												</tr>
												<tr>
													<td><strong>Quality</strong></td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-quality1" type="radio" name="vote-quality" value="1"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-quality2" type="radio" name="vote-quality" value="2"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-quality3" type="radio" name="vote-quality" value="3"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-quality4" type="radio" name="vote-quality" value="4"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
													<td class="text-center">
														<label class="radio">
															<input id="vote-quality5" type="radio" name="vote-quality" value="5"><span class="outer"><span class="inner"></span></span>
														</label>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<h3>Add new review</h3>
									<form class="contact-form white" action="#">
										<label>Review<span class="required">*</span></label>
										<textarea class="form-control input-lg"></textarea>
										<div>
											<button class="btn btn-lg">Submit Review</button>
										</div>
										<div class="required-text">* Required Fields</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="row">							
								<!-- Blog Carousel -->
									<?php include('template/frm_blog.php'); ?>
								<!-- /Blog Carousel -->
							
								<!-- Deal Carousel -->
									<?php include('template/dod.php'); ?>								
								<!-- /Deal Carousel -->
							</div>
						</div>
					</div>
				</div>
			</main>
			<!-- /Page Content -->
		</body>
<script type="text/javascript">
				
				function Insert_Quantity(quantity,product_id) 
				{
					//alert(product_id);
					$.ajax({
					url:'middle_page/insert_quntity.php',
					type:'post',
					data:{quantity:quantity,id:product_id},
					dataType:'text',

					success: function(data)
            		{
            		alert(data);            
            		window.location="index.php?page=cart";
            		},

	            	 error: function(errorThrown)
	            	 {
	       				alert('request failed');
	    			 }	
				});

}
		</script>