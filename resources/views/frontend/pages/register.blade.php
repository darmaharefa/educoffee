@extends('frontend.master')

@section('title','| Register Page')

@section('stylesheet')
    <link rel="stylesheet" href="/css/register.css">
@endsection

@section('content')
	<div class="section-register">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="panel-primary effect2">
						<div class="panel-primary-header">
							<h3 class="panel-title">Member Baru ?</h3>
						</div>
						<div class="panel-primary-body">
						{{-- Register Form Start --}}
							<form action="" method="POST" class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputFname" class="col-md-2 col-md-offset-2 control-label
									">Nama Lengkap</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="inputFname" placeholder="Nama Lengkap" name="namalengkap" required>
									</div>
								</div>
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
									<label for="inputRePassword" class="col-md-2 col-md-offset-2 control-label">Re-Password</label>
									<div class="col-sm-6">
										<input type="password" class="form-control" id="inputRePassword" placeholder="Re-Password" name="password_02" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-md-2 col-md-offset-2 control-label">Phone</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="inputPhone" placeholder="Phone" name="phone_number" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-md-2 col-md-offset-2 control-label">Tanggal Lahir</label>
					                <div class="col-sm-6">	
										<div class='input-group date' id='datetimepicker1'>
						                    <input type='text' class="form-control" placeholder="DD/MM/YYY" />
						                    <span class="input-group-addon">
						                        <span class="glyphicon glyphicon-calendar"></span>
						                    </span>
						                </div>
					                </div>
					            </div>
					            <div class="form-group">
									<label for="inputPhone" class="col-md-2 col-md-offset-2 control-label">Jenis Kelamin</label>
									<div class="col-sm-6">
										<input type="radio" name="" id="input" value=""> Laki-laki
										<input type="radio" name="" id="input" value=""> Perempuan
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-7 col-md-offset-3">
										<button type="submit" class="btn btn-success btn-block">
											Register
										</button>
										<span class="label-terms">Dengan menekan daftar, berarti Anda telah menyetujui <a href="">syarat dan ketentuan</a> kami</span>
									</div>
								</div>
							</form>
						{{-- Register Form End --}}
						</div>							
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection