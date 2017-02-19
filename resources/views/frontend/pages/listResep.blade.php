@extends('frontend.master')

@section('title','| List Mesin')

@section('stylesheet')
    <link rel="stylesheet" href="/css/list-resep.css">
@endsection

@section('content')
	<div class="section-sorting">
		<div class="container">
			<div class="panel-search">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
			                <div class="input-group input-group-md">
			                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
			                    <div class="icon-addon addon-md">
			                        <input type="text" placeholder="Cari Resep..." class="form-control" id="email">
			                    </div>
			                </div>
			            </div>
			        </div>

			        <div class="col-md-2">
			        	<div class="sorting-date">
							<div class="dropdown">
							  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							    Urutkan
							    <i class="fa fa-sort-down"></i>
							  </button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							    <li><a href="#">Most Likes</a></li>
							    <li><a href="#">Most View</a></li>
							     <li role="separator" class="divider"></li>
							    <li><a href="#">Paling Lama</a></li>
							    <li><a href="#">Paling Baru</a></li>
							  </ul>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-list">
		<div class="container">
			<div class="row">

				<a href="/details-resep">
					<div class="col-md-10">
						<div class="card-resep-full hvr-float-shadow">
							<div class="row">
								<div class="col-md-4">
									<div class="resep-full-images">
										<img src="/images/coffee/example11.jpg" alt="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="resep-full-details">
										<span class="resep-title">Macciato Nias <span class="resep-date">Date: 12-12-2016</span></span>
										<span class="resep-brew">AeroPress</span>
										<div class="resep-social-icon">
											<i class="fa fa-comments-o fa-2x"></i>
											<span class="icon-comment">10</span>

											<i class="fa fa-thumbs-up fa-2x"></i>
											<span class="icont-like">10</span>

											<i class="fa fa-eye fa-2x"></i>
											<span class="icon-view">20</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</a>

				<a href="/details-resep">
					<div class="col-md-10">
						<div class="card-resep-full hvr-float-shadow">
							<div class="row">
								<div class="col-md-4">
									<div class="resep-full-images">
										<img src="/images/coffee/example11.jpg" alt="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="resep-full-details">
										<span class="resep-title">Macciato Nias <span class="resep-date">Date: 12-12-2016</span></span>
										<span class="resep-brew">AeroPress</span>
										<div class="resep-social-icon">
											<i class="fa fa-comments-o fa-2x"></i>
											<span class="icon-comment">10</span>

											<i class="fa fa-thumbs-up fa-2x"></i>
											<span class="icont-like">10</span>

											<i class="fa fa-eye fa-2x"></i>
											<span class="icon-view">20</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</a>



			</div>
		</div>
	</div>
@endsection