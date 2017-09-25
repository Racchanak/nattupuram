<?php
	$title = 'Testimonials';
	$menu = 'testi';
	include('header.php');
?>	
	<section>
		<div class="container">
			<div class="row">				
				<?php
					include('category.php');
				?>
				<div class="col-sm-9">
					<div class="blog-post-area">
                        <div class="col-sm-12">
                        	<div class="col-sm-9">
								<h2 class="title text-center">Product Reviews</h2>
								<div id="product_list">
									<?php if(!empty($product_reviews)){
			                                foreach ($product_reviews as $key => $value) { 
			                                    if($key==0){ $classa = 'active'; } else { $classa = ''; }?>
			                                    <div class="col-sm-12">
													<div class="single-blog-post">
														<h3><?php echo $value['name']; ?> - <?php echo $value['city']; ?></h3>
														<div class="col-sm-3">
															<a href="javascript:;">
																<img src="<?php echo $value['product_img']; ?>" alt="">
															</a>
															<!-- <div class="post-meta">
																<span style="float: left;">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-o"></i>
																</span>
															</div> -->
														</div>								
														<div class="col-sm-9">
															<p><?php echo $value['product_name']; ?></p>
															<p><?php echo $value['message']; ?></p>
														</div>
													</div>
												</div>
			                            <?php } 
			                        } ?>
			                    </div>
	                        </div>
	                        <div class="col-sm-3">
	                        	<select id="product_filter" name="option">
		                            <option value="">Filter</option>		                            
		                            <option value="Groundnut Oil">Groundnut Oil(Cold Press)</option>
		                            <option value="Sesame Oil">Sesame Oil(Cold Press)</option>
		                            <option value="Coconut Oil">Coconut Oil(Cold Press)</option>
		                            <option value="Natural Ghee">Natural Ghee</option>
		                        </select>
	                        </div>
						</div>
						<!-- <div class="single-blog-post">
							<h3>Girls Pink T Shirt arrived in store</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="images/blog/blog-two.jpg" alt="">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<a  class="btn btn-primary" href="">Read More</a>
						</div>
						<div class="single-blog-post">
							<h3>Girls Pink T Shirt arrived in store</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="images/blog/blog-three.jpg" alt="">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<a  class="btn btn-primary" href="">Read More</a>
						</div>
 -->						<!-- <div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
	include('footer.php');
?>	