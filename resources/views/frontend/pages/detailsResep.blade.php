@extends('frontend.master')

@section('title','| Details Resep')

@section('stylesheet')
    <link rel="stylesheet" href="/css/details-resep.css">
@endsection

@section('content')
	<div class="section-details-resep">
		<div class="details-resep-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default-header">
							<h3>Detail Resep</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="details-resep-title">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="resep-title-name">
							Capuccino Nias
							<span class="title-date">Date: 12-12-2016</span>
						</div>
						<div class="resep-title-creator">
							Created by : <a href="">Invokerista</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="resep-fork">
							<button class="btn btn-primary">Copy Resep</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="details-resep-image">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="resep-image">
							<img src="/images/coffee/example11.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="details-resep-social">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="resep-social-count">
							<span class="social-count-comment">
								<i class="fa fa-comment-o fa-1x"></i>
								20
							</span>
							<span class="social-count-like">
								<i class="fa fa-thumbs-o-up fa-1x"></i>
								20
							</span>

							<span class="social-count-view">
								<i class="fa fa-eye fa-1x"></i>
								20
							</span>

							<span class="social-count-copy">
								<i class="fa fa-copy fa-1x"></i>
								20
							</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="resep-social-share">
							Share
							<span class="social-share-facebook">
								<a href="">
									<i class="fa fa-facebook-square fa-2x"></i>
								</a>
							</span>
							<span class="social-share-twitter">
								<a href="">
									<i class="fa fa-twitter-square fa-2x"></i>
								</a>
							</span>
							<span class="social-share-googleplus">
								<a href="">
									<i class="fa fa-google-plus-square fa-2x"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="details-resep-deskripsi">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default-header">
							<h3>Deskripsi</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card-default">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero sapiente, laboriosam incidunt eius cum facere quibusdam ratione porro dolor, aspernatur labore perspiciatis aliquam eum quasi ut accusantium voluptatum laborum, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque non, porro neque nam corporis reprehenderit quasi aspernatur iste! Nemo esse rerum culpa animi, officia numquam delectus eveniet voluptatum laudantium corrupti! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolor ab quidem, reiciendis in repellendus saepe repellat at reprehenderit architecto ipsa, asperiores excepturi, tempora ullam natus dolores, illo tempore consectetur!
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="details-resep-bahan">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default-header">
							<h3>Bahan</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card-default">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero sapiente, laboriosam incidunt eius cum facere quibusdam ratione porro dolor.</p>
							<ul>
								<li>
									<a href="/details-coffee">Nias Coffee 10g</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="details-resep-alat">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default-header">
							<h3>Alat</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card-default">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero sapiente, laboriosam incidunt eius cum facere quibusdam ratione porro dolor, aspernatur labore perspiciatis aliquam eum quasi ut accusantium voluptatum laborum, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque non, porro neque nam corporis reprehenderit quasi aspernatur iste! Nemo esse rerum culpa animi, officia numquam delectus eveniet voluptatum laudantium corrupti! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolor ab quidem, reiciendis in repellendus saepe repellat at reprehenderit architecto ipsa, asperiores excepturi, tempora ullam natus dolores, illo tempore consectetur!
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="details-resep-cara">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default-header">
							<h3>Cara</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card-default">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero sapiente, laboriosam incidunt eius cum facere quibusdam ratione porro dolor, aspernatur labore perspiciatis aliquam eum quasi ut accusantium voluptatum laborum, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque non, porro neque nam corporis reprehenderit quasi aspernatur iste! Nemo esse rerum culpa animi, officia numquam delectus eveniet voluptatum laudantium corrupti! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolor ab quidem, reiciendis in repellendus saepe repellat at reprehenderit architecto ipsa, asperiores excepturi, tempora ullam natus dolores, illo tempore consectetur!
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div class="details-resep-komentar"></div>
	</div>
@endsection