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
			<!-- Navbar -->
			@include('admin.header')

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<!-- <img src="img/adminbanner.jpg"  alt="banner image"> -->
				<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 style="background-image: url('img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:26%;text-decoration:underline;font-weight:bolder;" class="text-center ">APPOINTMENT VIEW</h1>
							</div>
							<div class="col-sm-6">

							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<table class="table">
					<caption class="text-center">Admin Appointments</caption>

					<thead>
						<tr>
							<th>ID</th>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>DATE</th>
							<th>TIME</th>
							<th>which law</th>
							<th>DELETE</th>
						</tr>
					</thead>
					<tbody>


						@foreach($Data as $item)
						@if($item->lawyer_id == NULL)
						<tr>
							<!-- <form action="" method="get"> -->
							<!-- @csrf -->
							<td>
								<input type="hidden" name="user_id" value="{{$item->user_id}}">
								{{$item->id}}
							</td>
							<td>
								<input type="hidden" name="name" value=" {{$item->name}}">
								{{$item->name}}
							</td>
							<td>
								<input type="hidden" name="email" value="{{$item->email}}">
								{{$item->email}}
							</td>
							<td>
								<input type="hidden" name="date" value="{{$item->date}}">
								{{$item->date}}
							</td>
							<td>
								<input type="hidden" name="time" value="{{$item->time}}">
								{{$item->time}}
							</td>
							<td>
								<input type="hidden" name="message" value="{{$item->message}}">
								{{$item->message}}
							</td>
							<td>
								<a href="update_entries/{{$item->id}}" class="btn btn-outline-danger">Transfer to Lawyer</a>
							</td>
							<!-- sawera delete -->
							<form action="{{ route('appointments.delete', ['id' => $item->id]) }}" method="POST">
								@csrf
								@method('DELETE')
								<!-- ... (other table columns) ... -->
								<td>
									<button type="submit" class="btn" name="delete" id="del">Delete</button>
								</td>
							</form>

							<!-- <form action="/delete/user/{{$item->id}}" method="POST">
						@csrf
						@method('DELETE')
						
						<td>
							<button type="submit" class="btn" name="delete" id="del">Delete</button>
						</td>
					</form> -->
							@endif
							<!-- </form> -->
						</tr>
						@endforeach
					</tbody>
				</table>

				<table class="table">
					<caption class="text-center">Lawyer Appointments</caption>
					<thead>
						<tr>
							<th>ID</th>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>DATE</th>
							<th>TIME</th>
							<th>Lawyer</th>
							<th>DELETE</th>
						</tr>
					</thead>
					<tbody>


						@foreach($Data as $item)
						@if($item->lawyer_id != NULL)
						<tr>
							<!-- <form action="" method="get"> -->
							<!-- @csrf -->
							<td>
								<input type="hidden" name="user_id" value="{{$item->user_id}}">
								{{$item->id}}
							</td>
							<td>
								<input type="hidden" name="name" value=" {{$item->name}}">
								{{$item->name}}
							</td>
							<td>
								<input type="hidden" name="email" value="{{$item->email}}">
								{{$item->email}}
							</td>
							<td>
								<input type="hidden" name="date" value="{{$item->date}}">
								{{$item->date}}
							</td>
							<td>
								<input type="hidden" name="time" value="{{$item->time}}">
								{{$item->time}}
							</td>
							<td>
								<input type="hidden" name="message" value="{{$item->message}}">
								{{$item->lawyer->name}}
							</td>


							<form action="{{ route('appointments.delete', ['id' => $item->id]) }}" method="POST">
								@csrf
								@method('DELETE')
								<!-- ... (other table columns) ... -->
								<td>
									<button type="submit" class="btn" name="delete" id="del">Delete</button>
								</td>
							</form>
							<!-- <form action="/delete/user/{{$item->id}}" method="POST">
						@csrf
						@method('DELETE')
						
						<td>
							<button type="submit" class="btn" name="delete" id="del">Delete</button>
						</td>
					</form> -->
							@endif
							<!-- </form> -->
						</tr>
						@endforeach
					</tbody>
				</table>
				<footer class="main-footer">

					<strong>Copyright &copy; 2023 <span style="color: #aa9166;">JusticeJuorney</span> All rights reserved.
				</footer>

				<!-- Bootstrap JavaScript Libraries -->
				<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
				</script>

				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
				</script>
	</body>

	</html>
</x-app-layout>