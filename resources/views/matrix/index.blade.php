@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Generador de Matrix
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

					<!-- New Task Form -->
					<form action="/matrix" method="POST" class="form-horizontal">

						<!-- Task Name -->
						<div class="form-group">
							<div class="col-sm-4">
								<!-- Apply any bg-* class to to the info-box to color it -->
								<div class="info-box bg-yellow">
								  <span class="info-box-icon"><i class="fa fa-star-o"></i></span>
								  <div class="info-box-content">
								    <span class="info-box-text">Caracas</span>
								    <span class="info-box-number">41,410</span>
								    <!-- The progress section is optional -->
								    <div class="progress">
								      <div class="progress-bar" style="width: 70%"></div>
								    </div>
								    <span class="progress-description">
								      70% Increase in 30 Days
								    </span>
								  </div><!-- /.info-box-content -->
								</div><!-- /.info-box -->
							</div>
							<div class="col-sm-4">
								<!-- Apply any bg-* class to to the info-box to color it -->
								<div class="info-box bg-yellow">
								  <span class="info-box-icon"><i class="fa fa-star-o"></i></span>
								  <div class="info-box-content">
								    <span class="info-box-text">Maracaibo</span>
								    <span class="info-box-number">41,410</span>
								    <!-- The progress section is optional -->
								    <div class="progress">
								      <div class="progress-bar" style="width: 70%"></div>
								    </div>
								    <span class="progress-description">
								      70% Increase in 30 Days
								    </span>
								  </div><!-- /.info-box-content -->
								</div><!-- /.info-box -->
							</div>
							<div class="col-sm-4">
								<!-- Apply any bg-* class to to the info-box to color it -->
								<div class="info-box bg-yellow">
								  <span class="info-box-icon"><i class="fa fa-star-o"></i></span>
								  <div class="info-box-content">
								    <span class="info-box-text">Valencia</span>
								    <span class="info-box-number">41,410</span>
								    <!-- The progress section is optional -->
								    <div class="progress">
								      <div class="progress-bar" style="width: 70%"></div>
								    </div>
								    <span class="progress-description">
								      70% Increase in 30 Days
								    </span>
								  </div><!-- /.info-box-content -->
								</div><!-- /.info-box -->
							</div>
						</div>

						<!-- Add Task Button -->
						<div class="form-group">
							<div class="text-center col-sm-4">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-plus"></i>Generar
								</button>
							</div>
							<div class="text-center col-sm-4">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-plus"></i>Generar
								</button>
							</div>
							<div class="text-center col-sm-4">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-plus"></i>Generar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
