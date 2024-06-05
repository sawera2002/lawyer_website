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
			<aside class="main-sidebar sidebar elevation-4">
				<!-- Brand Logo -->
				<a href="#" class="brand-link">
					<img src="img\logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light" style="color: black;">JusticeJuorney</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Admin Dashboard</p>
								</a>																
							</li>
							<li class="nav-item">
								<a href="{{ url('/form') }}" class="nav-link">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>lawyers</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/aboutt')}}" class="nav-link">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>About</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/serv')}}" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>Services</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/testimonialadd')}}" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>Testimonials</p>
									
								</a>
								
							</li>
							<li class="nav-item">
								<a href="{{url('/featureadd')}}" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>Features</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/blogadd')}}" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>Blog</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/std')}}" class="nav-link">
									<i class="nav-icon  far fa-file-alt"></i>
									<p>Consulation</p>
								</a>
							</li>	
							<li class="nav-item">
								<a href="{{url('/appoin')}}" class="nav-link">
									<i class="nav-icon  far fa-file-alt"></i>
									<p>Appointment</p>
								</a>
							</li>	
							<li class="nav-item">
								<a href="{{url('/see')}}" class="nav-link">
									<i class="nav-icon  far fa-file-alt"></i>
									<p>lawyers appointment</p>
								</a>
							</li>					
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
         	</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 style="background-image: url('img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:26%;text-decoration:underline;font-weight:bolder;" class="text-center ">Add Abouts Lawyers</h1>
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
					
                                <div class="text-center">
                                    <!-- <h3>LAWYERS INSERT</h3> -->
                                </div>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-md-9">
                                                    <form action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row mb-3">
                                                            <label class="col-sm-2 col-label-form"> HEADING</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="name" class="form-control" />
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-sm-2 col-label-form"> PARAGRAPH</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="paragraph" class="form-control" />
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-sm-2 col-label-form"> IMAGE</label>
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
                    <!-- /.card -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
				
				<strong>Copyright &copy; 2023 <span style="color: #aa9166;">JusticeJuorney</span> All rights reserved.
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