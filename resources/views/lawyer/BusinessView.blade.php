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
		@include('lawyer.header')
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<!-- <img src="img/adminbanner.jpg"  alt="banner image"> -->
				<section class="content-header">					
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 style="background-image: url('img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:26%;text-decoration:underline;font-weight:bolder;" class="text-center " >View Page</h1>
							</div>
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

                            <div class="col-md-9">
                                <!-- <div class="card"> -->
                                <div class="text-center">
                                    <!-- <h3>LAWYERS INSERT</h3> -->
                                </div>
                                <div class="container"><br>
                                    <!-- <h1 class="text-center">VIEW IN TABULAR FORM </h1><br><br> -->
                                    <div class="row">
                                        <div class="col-12">
											<table class="table">
												<thead>
													<th>ID</th>
													<th>IMAGES</th>
													<th>NAME</th>
													<th>LAW</th>
													<th>PARAGRAPH</th>
													<th>UPDATE</th>
													<th>DELETE</th>
												</thead>
												<tbody>
													@foreach ($businesses as $business)
													<tr>
														<td>{{ $business->id }}</td>
														<td><img src="/images/{{ $business->image }}" width="80px" alt=""></td>
														<td>{{ $business->name }}</td>
														<td>{{ $business->law }}</td>
														<td>{{ $business->paragraph }}</td>
														<td>
															<a href="{{ route('businesses.edit', $business->id) }}" class="btn" id="upd">Update</a>
														</td>
														<td>
															<form action="{{ route('businesses.destroy', $business->id) }}" method="post">
																@csrf
																@method('DELETE')
																<button type="submit" class="btn" id="del">Delete</button>
															</form>
														</td>
													</tr>
													@endforeach
												</tbody>
											</table>
											

                                        </div>
                                    </div>
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
</x-app-layout>