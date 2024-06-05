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
								<h1 style="background-image: url('/img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:12%;text-decoration:underline;font-weight:bold;" class="text-center ">View Page</h1>
							</div>
							<table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>LAWYER</th>
                                        <th>PARAGRAPH</th>
                                        <th>UPDATE</th>
                                        <th>DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->heading}}</td>
                                        <td>{{$item->paragraph}}</td>
                                        <td>
                                            <form action="{{ route('serv.edit', $item->id) }}" method="get">
                                                @csrf
                                                <button type="submit" id="btn" class="btn ">Update</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('serv.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn " id="btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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