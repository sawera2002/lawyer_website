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
                    <div class="container ">
                        <div class="row">

							<div class="text-center">
								<h1 style="background-image: url('/img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:12%;text-decoration:underline;font-weight:bold;" class="text-center ">Portfolio</h1>
							</div>
							<form action="{{route('portfolio.store')}}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="row mb-3">
										<label class="col-sm-2 col-label-form"> LAW</label>
										<div class="col-sm-10">
											<input type="text" name="law" class="form-control" />
										</div>
									</div>

									<div class="row mb-3">
										<label class="col-sm-2 col-label-form"> CASE</label>
										<div class="col-sm-10 col-lg-10">
											<input type="text" name="case" class="form-control" />
										</div>
									</div>

									<div class="row mb-3">
										<label class="col-sm-2 col-label-form"> DATE</label>
										<div class="col-sm-10">
											<input type="text" name="date" class="form-control" />
										</div>
									</div>

									<div class="row mb-3">
										<label class="col-sm-2 col-label-form">PROFILE</label>
										<div class="col-sm-10">
											<input type="file" name="image" class="form-control" />
										</div>
									</div>



									<div class="row mb-3">
										<div class="col-sm-10">
											<button class="btn text-center" type="submit">INSERT DATA</button>
										</div>
									</div>
								</form>
							</div>
						</div>
			<!-- </div> -->
	
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