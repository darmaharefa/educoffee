@extends('frontend.master')

@section('title','| Profil')

@section('stylesheet')
    <link rel="stylesheet" href="/css/profil.css">
@endsection

@section('content')

	<div class="section-profil">
		<div class="section-profil-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default-header">
							<h3>Profile</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-profil-info">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<div class="profil-info-image">
									<img src="/images/coffee/user.png" alt="user-images">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="profil-info-social">
									<span class="social-facebook">
										<a href="">
											<i class="fa fa-facebook-square fa-2x"></i>
										</a>
									</span>
									<span class="social-twitter">
										<a href="">
											<i class="fa fa-twitter-square fa-2x"></i>
										</a>
									</span>
									<span class="social-instagram">
										<a href="">
											<i class="fa fa-instagram fa-2x"></i>
										</a>
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="profil-info-add-social">
								<a href="">+tambah social media</a>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="profil-info-data">
							<div class="table-responsive table-profil">
								<table class="table table-hover">
									<tbody>
										<tr>
											<td>Nama</td>
											<td>Javent Lienata</td>
										</tr>
										<tr>
											<td>Email</td>
											<td>javent_lienata@gmail.com</td>
										</tr>
										<tr>
											<td>No. HP</td>
											<td>081234567890</td>
										</tr>
										<tr>
											<td>Sertifikat</td>
											<td>Sertifikat Barista Medan</td>
										</tr>
										<tr>
											<td>Resep</td>
											<td>-</td>
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
    
@endsection