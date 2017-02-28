@extends('frontend.master')

@section('title','| Homepage')

@section('stylesheet')
    <link rel="stylesheet" href="/css/details-coffee.css">
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
									<h4>Deskripsi Coffee</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa asperiores dolor iste eum, suscipit sapiente sunt repellat. Similique, inventore enim ad ut. Laborum, voluptatum officiis et unde magni suscipit velit.</p>
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
													Drip Coffee 10g Arabica Flores "Manggarai
												</div>
											</div>
										</div>

										<div class="coffee-brew">
											<div class="row">
												<div class="col-md-12">
													<span class="sub-title">Brew Method</span>
												</div>

												<div class="col-md-12">
													<div class="dropdown">
													  <button class="btn btn-default btn-block dropdown-toggle flex-justify-between" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
													   PILIH BREW METHOD
													    <i class="fa fa-sort-down"></i>
													  </button>
													  <ul class="dropdown-menu dropdown-brew" aria-labelledby="dropdownMenu1">
													    <li><a href="#">DRIP</a></li>
													    <li><a href="#">ESPRESSO</a></li>
													    <li><a href="#">AEROPRESS</a></li>
													    <li><a href="#">WHOLEBEAN</a></li>
													  </ul>
													</div>
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
														<div class="col-md-7 flex-direction-coloumn">
															<div class="harga-count-pembelian">
																<span class="price-new">Rp.500.000</span>
																<span class="price-old">Rp.1.000.000</span>
															</div>
														</div>
														<div class="col-md-5">
															<div class="btn-count-pembelian">
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
													<button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#addToChart">
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

					<div class="details-core">
						<div class="row">
							<div class="col-sm-12">
								<div class="panel-card">
									<div class="panel-card-header">
										<h3 class="panel-title">Details</h3>
									</div>
									<div class="panel-card-body">
										<div class="core-details">
											<table>
												<tr>
													<td>Acidity</td>
													<td>Lastic</td>
												</tr>
												<tr>
													<td>Altitude</td>
													<td>1200</td>
												</tr>
												<tr>
													<td>Flavour</td>
													<td>Milk Chocolate</td>
												</tr>
												<tr>
													<td>Mouthfeel</td>
													<td>Creamy</td>
												</tr>
												<tr>
													<td>Coutry</td>
													<td>Brazil</td>
												</tr>
												<tr>
													<td>Process</td>
													<td>Pulped Natural</td>
												</tr>
												<tr>
													<td>Producer</td>
													<td>Planalto</td>
												</tr>
												<tr>
													<td>Roast Profile</td>
													<td>Medium</td>
												</tr>
												<tr>
													<td>Sweetness</td>
													<td>Refind Sugar</td>
												</tr>
												<tr>
													<td>Tasting Note</td>
													<td>Milk Chococolate Sake</td>
												</tr>
												<tr>
													<td>Varietal</td>
													<td>Yellow Catuai</td>
												</tr>
											</table>
										</div>
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

	<div class="section-resep-coffee">
		<div class="container">
			{{-- Baris Related Resep Start --}}
			<div class="row">
				<div class="col-md-12">
					<div class="panel-default-header">
						<h3>Resep</h3>
					</div>
					<div class="resep-coffee-list">
						<div class="row">
							{{-- List Resep Start --}}
							<div class="col-md-6">
								<div class="card-resep hvr-float-shadow">
									<div class="row">
										<a href="/details-resep">
											<div class="col-md-4">
												<div class="resep-image">
													<img src="/images/coffee/example9.jpg">
												</div>
											</div>
											<div class="col-md-8">
												<div class="resep-list-details">
													<span class="resep-title">Macciato Nias</span>
													<span class="resep-brew">AeroPress</span>
													<div class="resep-social-icon">
														<i class="fa fa-comments-o"></i>
														<span class="icon-comment">10</span>

														<i class="fa fa-thumbs-up"></i>
														<span class="icont-like">10</span>

														<i class="fa fa-eye"></i>
														<span class="icon-view">20</span>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card-resep hvr-float-shadow">
									<div class="row">
										<a href="">
											<div class="col-md-4">
												<div class="resep-image">
													<img src="/images/coffee/example9.jpg">
												</div>
											</div>
											<div class="col-md-8">
												<div class="resep-list-details">
													<span class="resep-title">Macciato Nias</span>
													<span class="resep-brew">AeroPress</span>
													<div class="resep-social-icon">
														<i class="fa fa-comments-o"></i>
														<span class="icon-comment">10</span>

														<i class="fa fa-thumbs-up"></i>
														<span class="icont-like">10</span>

														<i class="fa fa-eye"></i>
														<span class="icon-view">20</span>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							{{-- List Resep End --}}
						</div>
					</div>
				</div>
			</div>
			{{-- Baris Related Resep End --}}
		</div>
	</div>
	
	<div class="section-related-coffee">
      <div class="container">
      	<div class="row">
      		<div class="col-md-12">
	      		{{-- Produk Kopi Terbaru --}}
		        <div class="panel-default">
		            <div class="panel-default-header">
                        <div class="panel-header-title">Related Kopi</div>
                        <div class="panel-header-link">
                             <a href="">Lihat semua</a>
                        </div>
		            </div>
		            <div class="panel-default-body">
		                <div class="row">
		                    {{-- Baris Tanpa Discount --}}
		                    <div class="col-md-3">
		                         <div class="product-col">       
		                            <div class="inner-product-col">
		                                <a class="voucher-link" href="/coffee/sesuatu">
		                                    <div class="image">
		                                        <i class="fa fa-search overlayhover"></i>
		                                        <img src="/images/coffee/example10.jpg" alt="product" class="lazy img-responsive product" />
		                                    </div>
		                                </a>
		                                <div class="caption">
		                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
		                                    <div class="voucher-caption">
		                                        <div class="price">
		                                            <span class="price-new">Rp 100.000</span>
		                                        </div>  
		                                    </div>
		                                </div>
		                                <div class="btn-beli">
		                                    <button class="btn btn-lg">
		                                        <i class="fa fa-shopping-cart"></i>
		                                        <span>Beli</span>
		                                    </button>
		                                </div>
		                                <div class="clear" style="clear:both"></div>
		                            </div>
		                        </div>
		                    </div>
		                    {{-- Baris Tanpa Discount End --}}

		                    {{-- Baris Dengan Discount --}}
		                    <div class="col-md-3">
		                         <div class="product-col">       
		                            <div class="inner-product-col">
		                                <a class="voucher-link" href="/coffee/sesuatu">
		                                    <div class="image">
		                                        <i class="fa fa-search overlayhover"></i>
		                                        <img src="/images/coffee/example10.jpg" alt="product" class="lazy img-responsive product" />
		                                        <span class="price-disc">50<sup>%</sup></span>
		                                    </div>
		                                </a>
		                                <div class="caption">
		                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
		                                    <div class="voucher-caption">
		                                        <div class="price">
		                                            <span class="price-old">Rp 2.000.000</span>
		                                            <span class="price-new">Rp 1.000.000</span>
		                                        </div>  
		                                    </div>
		                                </div>
		                                <div class="btn-beli">
		                                    <button class="btn btn-lg">
		                                        <i class="fa fa-shopping-cart"></i>
		                                        <span>Beli</span>
		                                    </button>
		                                </div>
		                                <div class="clear" style="clear:both"></div>
		                            </div>
		                        </div>
		                    </div>
		                    {{-- Baris Dengan Discount End --}}

		                     {{-- Baris Tanpa Discount --}}
		                    <div class="col-md-3">
		                         <div class="product-col">       
		                            <div class="inner-product-col">
		                                <a class="voucher-link" href="/coffee/sesuatu">
		                                    <div class="image">
		                                        <i class="fa fa-search overlayhover"></i>
		                                        <img src="/images/coffee/example10.jpg" alt="product" class="lazy img-responsive product" />
		                                    </div>
		                                </a>
		                                <div class="caption">
		                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
		                                    <div class="voucher-caption">
		                                        <div class="price">
		                                            <span class="price-new">Rp 100.000</span>
		                                        </div>  
		                                    </div>
		                                </div>
		                                <div class="btn-beli">
		                                    <button class="btn btn-lg">
		                                        <i class="fa fa-shopping-cart"></i>
		                                        <span>Beli</span>
		                                    </button>
		                                </div>
		                                <div class="clear" style="clear:both"></div>
		                            </div>
		                        </div>
		                    </div>
		                    {{-- Baris Tanpa Discount End --}}

		                    {{-- Baris Dengan Discount --}}
		                    <div class="col-md-3">
		                         <div class="product-col">       
		                            <div class="inner-product-col">
		                                <a class="voucher-link" href="/coffee/sesuatu">
		                                    <div class="image">
		                                        <i class="fa fa-search overlayhover"></i>
		                                        <img src="/images/coffee/example10.jpg" alt="product" class="lazy img-responsive product" />
		                                        <span class="price-disc">50<sup>%</sup></span>
		                                    </div>
		                                </a>
		                                <div class="caption">
		                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
		                                    <div class="voucher-caption">
		                                        <div class="price">
		                                            <span class="price-old">Rp 2.000.000</span>
		                                            <span class="price-new">Rp 1.000.000</span>
		                                        </div>  
		                                    </div>
		                                </div>
		                                <div class="btn-beli">
		                                    <button class="btn btn-lg">
		                                        <i class="fa fa-shopping-cart"></i>
		                                        <span>Beli</span>
		                                    </button>
		                                </div>
		                                <div class="clear" style="clear:both"></div>
		                            </div>
		                        </div>
		                    </div>
		                    {{-- Baris Dengan Discount End --}}

		                </div>
		            </div>            
		        </div>
		        {{-- Produk Kopi Terbaru End--}}
      		</div>
      	</div>
      </div>
	</div>

	<div class="section-cart-coffee">
		<div class="modal fade" id="addToChart">
			<div class="modal-dialog modal-cart">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title">Keranjang Belanja(1)</h3>
					</div>
					<div class="modal-body">
						<div class="table-responsive">
							<table class="table table-cart">
								<thead>
									<tr>
										<td colspan="2">&nbsp;</td>
										<td>
											<p>Harga</p>
										</td>
										<td class="cart-item-quantity">
											<p>Jumlah</p>
										</td>
										<td>
											<p>Subtotal</p>
										</td>
										<td>&nbsp;</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="cart-item-preview">
											<img src="/images/coffee/example12.jpg" alt="gambar-product">
										</td>
										<td class="cart-item-name">
											<a href="/details-coffee">Coffee Nias 250g</a>
											<p class="cart-item-brew-method">Espresso</p>
										</td>
										<td class="cart-item-price">
											<p class="cart-item-price-new">Rp. 250.000</p>
											<p class="cart-item-price-old">Rp. 500.000</p>
										</td>
										<td class="cart-item-quantity">
											<input type="number" min="0" value="1">
										</td>
										<td class="cart-item-subtotal">
											<p class="cart-subtotal">Rp. 500.000</p>
										</td>
										<td class="cart-item-delete">
											<button class="btn btn-cart-delete">
												<i class="fa fa-times-circle"></i>
											</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn" data-dismiss="modal">Lanjutkan Belanja</button>
						<button type="submit" class="btn btn-success">Lanjutkan Pembayaran</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	


@endsection