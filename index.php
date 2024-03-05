<?php 



?>
<?php include('header.php') ?>
	<?php
		
	?>
	<div class="container">
	<div class="row">
	<div class="col-xl-3 col-lg-4 col-md-5">
		<div class="sidebar-categories">
			<div class="head">Browse Categories</div>
			<ul class="main-categories">
				<li class="main-nav-list">
				<a href="index.php?category_id=1" ><span class="lnr lnr-arrow-right"></span>Category name</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-xl-9 col-lg-8 col-md-7">
	<div class="filter-bar d-flex flex-wrap align-items-center">
		<div class="pagination">
			
				<a href="?pageno=1&category_id=2" class="active">First</a>
				<a href="#" class="prev-arrow">
					<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
				</a>
				<a href="#" class="active">2</a>
				<a 
					href="#" class="next-arrow">
					<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
				</a>
				<a href="?pageno=2" class="active">Last</a>
			
		</div>
	</div>
	<!-- End Filter Bar -->
	<!-- Start Best Seller -->
	<section class="lattest-product-area pb-40 category-list">
		<div class="row">
		<div class="col-lg-4 col-md-6">
			<div class="single-product">
				<img class="img-fluid" src="admin/images/download (2).jpeg" style="height: 250px;">
				<div class="product-details">
					<h6>Product</h6>
					<div class="price">
						<h6>product price</h6>
					</div>
					<div class="prd-bottom">
						<form action="addtocart.php" method="post">	
							
							<input type="hidden" name="id" value="3">
							<input type="hidden" name="qty" value="1">
								<div class="social-info">
									<button type="submit" style="display:contents" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="left:20px">add to bag</p>
									</button>
								</div>
								<a href="product_detail.php?id=5" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
						</form>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- End Best Seller -->
<?php include('footer.php');?>
