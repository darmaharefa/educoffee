@extends('frontend.plain')

@section('title','| Checkout')

@section('stylesheet')
    <link rel="stylesheet" href="/css/checkout.css">
@endsection

@section('content')
   <div class="section-header-checkout">
   	
   </div>

   <div class="section-content-checkout">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="form-checkout">
						<div class="row">
							<div class="panel-card">
								<div class="panel-card-header">
									<h3 class="panel-title">Alamat</h3>
								</div>
								<div class="panel-card-body">
									<form action="" method="POST" class="form-horizontal" role="form">
										<div class="form-group">
											<label for="inputAlabel" class="control-label">Label Alamat <span class="required-input">*</span></label>
											<input type="text" class="form-control" id="inputAlabel" placeholder="Contoh: Alamat Rumah, Alamat Kantor" name="lblAlamat" required>
										</div>
										<div class="form-group">
											<label for="inputAnama" class="control-label">Nama Lengkap <span class="required-input">*</span></label>
											<input type="text" class="form-control" id="inputAnama" placeholder="Nama Penerima" name="namaLengkap" required>
										</div>

										<div class="form-group">
						                    <label for="inputAnegara" class="control-label">Negara</label>
					                        <select id="inputAnegara" class="form-control">
					                            <option>Indonesia</option>
					                        </select>
						                </div>

						                <div class="form-group">
						                    <label for="inputAnegara" class="control-label">Provinsi</label>
					                        <select id="inputAnegara" class="form-control">
					                            <option>Sumatera Utara</option>
					                        </select>
						                </div>

						                <div class="form-group">
						                    <label for="inputAnegara" class="control-label">Kota</label>
					                        <select id="inputAnegara" class="form-control">
					                            <option>Medan</option>
					                        </select>
						                </div>

						                <div class="form-group">
						                    <label for="inputAnegara" class="control-label">Kecamatan</label>
					                        <select id="inputAnegara" class="form-control">
					                            <option>Medan Helvetia</option>
					                        </select>
						                </div>

										<div class="form-group">
											<label for="inputAalamat" class="control-label">Alamat <span class="required-input">*</span></label>
											<input type="text" class="form-control" id="inputAalamat" placeholder="Alamat" name="alamat" required>
										</div>
										<div class="form-group">
											<label for="inputApos" class="control-label">Kode Pos <span class="required-input">*</span></label>
											<input type="text" class="form-control" id="inputApos" placeholder="Kode Pos" name="kodePos" required>
										</div>
										<div class="form-group">
											<label for="inputAhp" class="control-label">Nomor Handphone<span class="required-input">*</span></label>
											<input type="text" class="form-control" id="inputAhp" placeholder="Nomor Handphone" name="nomorHandphone" required>
										</div>
										<div class="form-group">
											<label for="inputAtelp" class="control-label">Nomor Telepon</label>
											<input type="text" class="form-control" id="inputAtelp" placeholder="Nomor Telepon" name="nomorTelp" required>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-success btn-block">
												Tambahkan ke Alamat Saya
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="finish-checkout">
						<div class="row">
							<div class="panel-card">
								<div class="panel-card-header">
									<h3 class="panel-title">Ringkasan Pemesanan</h3>
								</div>
								<div class="panel-card-body">

									<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr class="cart-item-top">
													<td rowspan="2" class="cart-item-preview">
														<img src="/images/coffee/example12.jpg" alt="gambar-product">
													</td>
													<td class="cart-item-name">
														<a href="/details-coffee">Coffee Nias 250g</a>
														<p class="cart-item-brew-method">Espresso</p>
													</td>
													<td rowspan="2" class="cart-item-subtotal">
														<p class="cart-item-price-old">Rp. 500.000</p>
														<p class="cart-subtotal">Rp. 250.000</p>
													</td>
												</tr>

												<tr class="cart-item-bottom">
													<td class="cart-item-quantity">
														<input type="number" min="0" value="1">
														<button class="btn btn-clean">hapus</button>
														<p class="cart-item-price-new">x Rp. 250.000</p>
													</td>
												</tr>

												<tr class="cart-item-top">
													<td rowspan="2" class="cart-item-preview">
														<img src="/images/coffee/example12.jpg" alt="gambar-product">
													</td>
													<td class="cart-item-name">
														<a href="/details-coffee">Coffee Arabika Mocacino Amercano 250g</a>
														<p class="cart-item-brew-method">Bean</p>
													</td>
													<td rowspan="2" class="cart-item-subtotal">
														<p class="cart-subtotal">Rp. 500.000</p>
													</td>
												</tr>

												<tr class="cart-item-bottom">
													<td class="cart-item-quantity">
														<input type="number" min="0" value="1">
														<button class="btn btn-clean">hapus</button>
														<p class="cart-item-price-new">x Rp. 250.000</p>
														<p class="cart-item-price-old">Rp. 500.000</p>
													</td>
												</tr>

												<tr class="cart-item-total">
													<td colspan="2">Sub Total</td>
													<td>Rp. 500.000</td>
												</tr>
												<tr class="cart-item-total">
													<td colspan="2">Total Pembayaran</td>
													<td>Rp. 500.000</td>
												</tr>
												<tr>
													<td colspan="3">
														<button class="btn btn-block btn-primary">Lanjut Ke Pembayaran</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
   	</div>

   	<div class="section-footer-checkout">
		<div class="container">
			<div class="row">
				<p>
			   		<a href="/policy">Privacy Policy</a> | 
			   		<a href="/term">Term & Condition</a>
			   	</p>
			   	<p>Copyright &copy; EduCoffee 2017</p>
			</div>
		</div>
   	</div>
@endsection
