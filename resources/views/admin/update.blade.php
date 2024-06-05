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
		<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="/css/adminlte.min.css">
		<link rel="stylesheet" href="/css/custom.css">
        <link rel="stylesheet" href="/css/adminstyle.css">
	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Main Sidebar Container -->
			@include('admin.header')

           <div class="content-wrapper">
        
                <!-- Main content -->
                <section class="content">
                <div class="text-center">
                                                    <h1 style="background-image: url('/img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:12%;text-decoration:underline;font-weight:bold;" class="text-center ">Update Team</h1>
                                                </div>
                <form action="{{route('person.update',$person->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form"> LAWYER NAME</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{$person->name}}" class="form-control"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form"> LAWYER PARAGRAPH</label>
                                <div class="col-sm-10">
                                    <input type="text" name="paragraph" value="{{$person->paragraph}}" class="form-control" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form"> LAWYER PROFILE</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" />
                                    <img src="/images/{{$person->image}}" width="100px" alt="">
                                </div>
                            </div>

                           

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button class="btn"type="submit">UPDATE DATA</button>
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
</x-app-layout>







