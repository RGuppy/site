<!--Popular START-->

	<section class="popular">
		<div class="container popular__topline">
			<div class="row">
				<h3>Популярные</h3>
			</div>
		</div>
	</section>
	<section class="pslider-wrap" style="display: block;">
			<div class="container">
				<div class="pslider-nav-container">
					<div class="pslider-nav">
						<div class="pprev"><i class="fa fa-angle-left"></i></div>
						<div class="pnext"><i class="fa fa-angle-right"></i></div>

					</div>
				</div>
			</div>
			<div class="pslider">
				<?php for ($b = 1; $b <= 3; $b++){
				?>
					<div class="pslide">
						<div class="pslide-bg"></div>
						<div class="pslide-content">
							<div class="container">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<div class="row">
											<?php for ($i = 1; $i <= 3; $i++){
											?>
											<div class="col-md-4">
												<div class="card-item">
														<a href="#">
															<div class="card-item-image">
															<img src="img/mockup.png" alt="" class="img-responsive">
																		<svg width="100px" height="100px" viewBox="0 0 180 180">
																			<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<g id="180---iPhone-6-Plus" stroke="white">
																					<circle id="Oval-1" stroke-width="5" cx="90" cy="90" r="87"></circle>
																					<path d="M90,30 L90,150" id="Line" stroke-width="4" stroke-linecap="square" transform="translate(90.000000, 90.000000) rotate(90.000000) translate(-90.000000, -90.000000) "></path>
																					<path d="M90,30 L90,150" id="Line" stroke-width="4" stroke-linecap="square"></path>
																				</g>
																			</g>
																		</svg>
																</div>
														</a>
														<h4>Bootstrap 3 Template</h4>
														<div class="card-item-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="card-item-price">
															<i class="fa fa-credit-card"></i>	<span>100</span> $
														</div>
														<button class="btn btn_default">Купить</button>
													</div>
												</div>
											<?php } ?>
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>


			</div>
		</section>	
<!--Popular END-->