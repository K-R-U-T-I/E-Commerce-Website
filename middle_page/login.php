<body class="fullwidth">
			<!-- Sidebar -->
			<!-- <div class="sidebar-wrapper">
				<div class="sidebar-top"><a href="login.html#" class="slidepanel-toggle">
					<i class="fa fa-left-arrow-circular"></i></a></div>
				<ul class="sidebar-nav">
					<li> <a href="index.html">HOME</a> </li>
					<li> <a href="gallery.html">GALLERY</a> </li>
					<li> <a href="blog.html">BLOG</a> </li>
					<li> <a href="category-fixed-sidebar.html">SHOP</a> </li>
					<li> <a href="faq.html">FAQ</a> </li>
					<li> <a href="contact.html">CONTACT</a> </li>
				</ul>
				<div class="sidebar-bot">
					<div class="share-button toTop">
						<span class="toggle"></span>
						<ul class="social-list">
							<li>
								<a href="login.html#" class="fa fa-google google"></a>
							</li>
							<li>
								<a href="login.html#" class="fa fa-fancy fancy"></a>
							</li>
							<li>
								<a href="login.html#" class="fa fa-pinterest pinterest"></a>
							</li>
							<li>
								<a href="login.html#" class="fa fa-twitter-logo twitter"></a>
							</li>
							<li>
								<a href="login.html#" class="fa fa-facebook-logo facebook"></a>
							</li>
						</ul>
					</div>
				</div>
			</div> -->
			<!-- /Sidebar -->
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
							<li><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li>/<span>Logination</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="row row-eq-height">
							<div class="col-sm-6">
								<div class="form-card">
									<h4>New Customers</h4>
									<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									<div><a href="account-create.html" class="btn btn-lg">
										<i class="fa fa-user"></i>
										<span>Create An Account</span></a></div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-card">
									<h4>Registered Customers</h4>
									<p>If you have an account with us, please log in.</p>

							<form class="account-create" action="index.php?page=login_action" method="post" enctype="formdata/multi-part">

                                <input type="hidden" name="id" value="">

										<label>E-mail<span class="required">*</span></label>
											<input type="text" name="email" value=""
												 class="form-control input-lg">
										<label>Password<span class="required">*</span></label>
											<input type="password" name="password" value="" 
												class="form-control input-lg">

										<div>
											<button type="submit" name="submit" class="btn btn-lg">
											Log In</button>
											<span class="required-text">* Required Fields</span>
										</div>
										<div class="back"><a href="login.html#">Forgot Your Password?</a></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
			<!-- /Page Content -->
			
		</body>