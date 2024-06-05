<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lawyers:: Administrative Panel</title>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="\plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="\css/adminlte.min.css">
	<link rel="stylesheet" href="\css/custom.css">
	<link rel="stylesheet" href="\css/adminstyle.css">
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
				<div class="container ">
					<div class="row">

						<div class="text-center">
							<h1 style="background-image: url('/img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:18%;text-decoration:underline;font-weight:bold;" class="text-center ">Update Service</h1>
						</div>
						<div class="container">
							<h2>Update Service</h2>
							<form action="{{ route('serv.update', $item->id) }}" method="post">
								@csrf
								@method('PUT')
						
								<div class="mb-3">
									<input type="hidden" name="id" value="{{$item->id}}" class="form-control" placeholder="id" aria-describedby="helpId">
									<br>
						
									<label for="heading" class="form-label">HEADING</label>
									<input type="text" name="heading" value="{{$item->heading}}" id="heading" class="form-control" placeholder="heading" aria-describedby="helpId">
									<br>
									<label for="paragraph" class="form-label">PARAGRAPH</label>
									<input type="text" name="paragraph" value="{{$item->paragraph}}" id="paragraph" class="form-control" placeholder="paragraph" aria-describedby="helpId">
						
									<div class="d-grid">
										<button type="submit" class="btn btn-primary btn-block">UPDATE RECORD</button>
									</div>
								</div>
							</form>
						</div>
						
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