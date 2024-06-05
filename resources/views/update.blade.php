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
	@include('admin.header')
           <div class="content-wrapper">
        
                <!-- Main content -->
                <section class="content">
<form action="update" method="get">
    @csrf
    <!-- cross side request forgery -->
    <div class="container">
    <div class="text-center">
                                                    <h1 style="background-image: url('/img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:12%;text-decoration:underline;" class="text-center ">Update Contact</h1>
                                                </div>
        <div class="mb-3">
            <input type="hidden" name="user_id" value="{{$user_id}}" class="form-control" placeholder="username" aria-describedby="helpId">
            
            <br>
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" value="{{$name}}" id="name" class="form-control" placeholder="username" aria-describedby="helpId">
            
            <br>

            <label for="email" class="form-label">email</label>
            <input type="email" name="email" value="{{$email}}" id="email" class="form-control" placeholder="email" aria-describedby="helpId">
           
            <br>


            <label for="subject" class="form-label">subject</label>
            <input type="text" name="subject" value="{{$subject}}" id="subject" class="form-control" placeholder="subject " aria-describedby="helpId">
           
            <br>

            <label for="paragraph" class="form-label">paragraph</label>
            <input type="text" name="paragraph" value="{{$paragraph}}" id="paragraph" class="form-control" placeholder="paragraph " aria-describedby="helpId">
            
           <br>

            <div class="d-grid">
                <button type="submit" class="btn">update record </button>
            </div>

        </div>

    </div>
</form>
                </section>
           </div>
<br><br>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>