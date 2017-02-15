@extends('frontend.master')

@section('title','| Komparasi Kopi')

@section('stylesheet')
    <link rel="stylesheet" href="/css/komparasi.css">
@endsection

@section('content')

	<div class="section-komparasi">
		<div class="section-komparasi-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default-header">
							<h3>Komparasi Kopi</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-komparasi-kopi">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						&nbsp;
					</div>
					<div class="col-md-3">
						<div class="komparasi-kopi-title">
							<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="" placeholder="Pencarian...">
							Drip Coffee 10g Arabica Flores "Manggarai"
						</div>
					</div>
					<div class="col-md-3">
						<div class="komparasi-kopi-title">
							<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="" placeholder="Pencarian...">
							Drip Coffee 10g Arabica Flores "Manggarai"
						</div>
					</div>
					<div class="col-md-3">
						<div class="komparasi-kopi-tambah">
							<button class="btn btn-primary btn-block">	
								<i class="fa fa-plus"></i>
								Tambah Kopi
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-komparasi-body">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="core-komparasi">
							<ul>
								<li>Acidity <i class="fa fa-chevron-circle-right"></i></li>
								<li>Altitude <i class="fa fa-chevron-circle-right"></i></li>
								<li>Flavour <i class="fa fa-chevron-circle-right"></i></li>
								<li>Mouthfeel <i class="fa fa-chevron-circle-right"></i></li>
								<li>Country <i class="fa fa-chevron-circle-right"></i></li>
								<li>Process <i class="fa fa-chevron-circle-right"></i></li>
								<li>Producer <i class="fa fa-chevron-circle-right"></i></li>
								<li>Roast Profile <i class="fa fa-chevron-circle-right"></i></li>
								<li>Sweetness <i class="fa fa-chevron-circle-right"></i></li>
								<li>Testing Note <i class="fa fa-chevron-circle-right"></i></li>
								<li>Varietal <i class="fa fa-chevron-circle-right"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="value-komparasi">
							<ul>
								<li>Lastic</li>
								<li>1200</li>
								<li>Milk Chocolate</li>
								<li>Creamy</li>
								<li>Brazil</li>
								<li>Pulped Natural</li>
								<li>Planalto</li>
								<li>Medium</li>
								<li>Refind Sugar</li>
								<li>Milk Chocolate Sake</li>
								<li>Yellow Cutai</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="value-komparasi">
							<ul>
								<li>Lastic</li>
								<li>1200</li>
								<li>Milk Chocolate</li>
								<li>Creamy</li>
								<li>Brazil</li>
								<li>Pulped Natural</li>
								<li>Planalto</li>
								<li>Medium</li>
								<li>Refind Sugar</li>
								<li>Milk Chocolate Sake</li>
								<li>Yellow Cutai</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection