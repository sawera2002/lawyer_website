<x-app-layout>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>lawyers:: Administrative Panel</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="css/adminlte.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/adminstyle.css">
	</head>

	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">

			<!-- Main Sidebar Container -->
				@include('admin.header')

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">

							<div class="col-sm-6">

							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->


					<div class="text-center">
						<h1 style="background-image: url('/img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:12%;text-decoration:underline;font-weight:bold;" class="text-center ">Service</h1>
					</div>
					<form action="{{route('serv.store')}}" method="post">
						@csrf
						<!-- cross side request forgery -->
						<div class="container">
							<!-- <H2 class="text-center"> SUBMIT FORM </H2> -->
							<div class="mb-3">
								<label for="heading" class="form-label">HEADING</label>
								<input type="text" name="heading" value="{{old('heading')}}" id="heading" class="form-control" placeholder="heading" aria-describedby="helpId">

								<br>
								<label for="PARAGRAPH" class="form-label">PARAGRAPH</label>
								<input type="text" name="paragraph" value="{{old('paragraph')}}" id="PARAGRAPH" class="form-control" placeholder="paragraph" aria-describedby="helpId">
								<br>
								<div class="d-grid">
									<button type="submit" class="btn">INSERT SERVICE </button>
								</div>

							</div>

						</div>
					</form>
					<!-- </div> -->
			</div>
		</div>
		</div>
		<!-- /.card -->
		</section>
		<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">

			<strong>Copyright &copy; 2014-2022 lawyerlaw All rights reserved.
		</footer>

		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="js/demo.js"></script>
	</body>

	</html>
</x-app-layout>