@extends('frontend.master')

@section('title','| Homepage')

@section('stylesheet')
    <link rel="stylesheet" href="/css/details-mesin.css">
@endsection

@section('content')
	
	<div class="section-details-coffee">
		<div class="container">
			{{-- Baris Detail Produk Start --}}
			<div class="row">
				{{-- Detail Kiri Start --}}
				<div class="col-md-7">	
					<div class="details-slide">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="details-slide-header">
										<div class="col-md-12">
										<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">

										  	<!-- Wrapper for slides -->
											<div class="carousel-inner">

											    <div class="item active srle">
											      <img src="images/coffee/example1.jpg" alt="1.jpg" class="img-responsive">
											      <div class="carousel-caption">
											        <p> 1.jpg </p>
											      </div>
											    </div>

											    <div class="item">
											      <img src="images/coffee/example8.jpg" alt="2.jpg" class="img-responsive">
											      <div class="carousel-caption">
											        <p> 2.jpg </p>
											      </div>
											    </div>


											</div>

										  	<!-- Controls -->
										  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
										    	<span class="glyphicon glyphicon-chevron-left"></span>
										  	</a>
										  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
										    	<span class="glyphicon glyphicon-chevron-right"></span>
										  	</a>

										</div>
									</div>
									</div>
								</div>

								<div class="row">
									<!-- Thumbnails --> 
									<div class="details-slide-body">
										<ul class="thumbnails-carousel clearfix col-md-12">
										  	<li class="col-md-3"><img src="/images/coffee/example6.jpg" alt="1_tn.jpg"></li>
											<li class="col-md-3"><img src="/images/coffee/example7.jpg" alt="1_tn.jpg"></li>
									  	</ul>
									</div>
								  	<!-- Thumbnails End -->
								</div>
							
							</div>
						</div>
					</div>

					<div class="details-deskripsi">
						<div class="row">
							<div class="panel-card">
								<div class="panel-card-body">
									<h4>Deskripsi Mesin</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta libero aliquam maxime saepe illo magnam consequatur rerum reprehenderit neque odio dolore blanditiis, sint eaque ipsa? Quos eum, architecto molestias nobis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<h4>Cara Penggunaan</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta odit, obcaecati accusamus ea optio, quisquam impedit fugiat suscipit illo fuga autem molestiae ad et ratione commodi perferendis voluptatem a? Cupiditate!</p>
									<ul>
										<li>Langkah</li>
										<li>Langkah</li>
										<li>Langkah</li>
										<li>Langkah</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
				{{-- Detail Kiri End --}}

				{{-- Detail Kanan Start --}}
				<div class="col-md-5">
					<div class="details-pembelian">
						<div class="row">
							<div class="col-sm-12">
								<div class="panel-card">
									<div class="panel-card-header">
										<h3 class="panel-title">Lakukan Pembelian</h4>									
									</div>
									<div class="panel-card-body">
										<div class="coffee-title">
											<div class="row">
												<div class="col-md-12">
													Aero Press 2000 XYZ
												</div>
											</div>
										</div>

										<div class="coffee-harga">
											<div class="row">
												<div class="col-md-12">
													<span class="sub-title">Harga</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-7">
															<div class="harga-count-pembelian flex-column">
																<span class="price-new">Rp.250.000</span>
																<span class="price-old">Rp.500.000</span>
															</div>
														</div>
														<div class="col-md-5">
															<div class="btn-count-pembelian flex-between">
																<button type="button" class="btn btn-primary btn-count">-</button>
																<div class="count-pembelian">1</div>
																<button type="button" class="btn btn-primary btn-count">+</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="coffee-button">
											<div class="row">
												<div class="col-md-12">
													<button type="button" class="btn btn-block btn-success" id="addtoCart">
														<i class="fa fa-shopping-cart"></i> 
														Beli Sekarang
													</button>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="details-related">
						<div class="row">
							<div class="col-md-12">
								<h4 class="panel-title-clean">Related Mesin Kopi</h4>
								<div class="card-related-list">
									<div class="card-related">
										<a href="">
											<div class="card-related-images">
												<img src="/images/coffee/example9.jpg" alt="">
											</div>
											<div class="card-related-caption">
												<span class="caption-title">Aeropress Filter</span>
												<span class="caption-price">Rp. 250.000</span>
											</div>
										</a>
									</div>

									<div class="card-related">
										<a href="">
											<div class="card-related-images">
												<img src="/images/coffee/example9.jpg" alt="">
											</div>
											<div class="card-related-caption">
												<span class="caption-title">Aeropress Filter</span>
												<span class="caption-price">Rp. 250.000</span>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				{{-- Detail Kanan End --}}
			</div>
			{{-- Baris Detail Produk End --}}
		</div>
	</div>

@endsection