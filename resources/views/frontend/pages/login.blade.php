@extends('frontend.master')

@section('title','| Login Page')

@section('stylesheet')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('content')
	
	<div class="section-register">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel-primary">
						<div class="panel-primary-header">
							<h3>Silahkan Login</h3>
						</div>
						<div class="panel-primary-body">
							{{-- Login Form --}}
							<form action="" method="POST" class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputEmail" class="col-md-2 col-md-offset-2 control-label">Email</label>
									<div class="col-md-6">
										<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email_address" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-md-2 col-md-offset-2 control-label">Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password_01" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-7 col-md-offset-3">
										<button type="submit" class="btn btn-success btn-block">
											Login.
										</button>
									</div>
								</div>
								<div class="to-register">
									<div class="row">
										<div class="col-md-7 col-md-offset-3">
											Belum punya akun? <a href="/register">Daftar sekarang</a>
										</div>
									</div>
								</div>
							</form>
						{{-- Login Form End --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection