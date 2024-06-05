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
                                                <div class="text-center">
                                                    <h1 style="background-image: url('/img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:18%;text-decoration:underline;font-weight:bold;" class="text-center ">Featured</h1>
                                                </div>
                                <form action="{{route('feature.update',$feature->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                 @method('PUT')
                                    <div class=" container">
                                    <!-- <H2 class="text-center"> UPDATE FORM </H2> -->
                                    <div class="mb-3">

                                        <label class="col-sm-2 col-label-form"> HEADING</label>
                                        <input type="text" name="heading" value="{{$feature->heading}}" class="form-control" />
<br>
                                        <label class="col-sm-2 col-label-form"> PARAGRAPH</label>
                                        <input type="text" name="paragraph" value="{{$feature->paragraph}}" class="form-control" />
<br>
                                        <label class="col-sm-2 col-label-form"> HEADING 2</label>
                                        <input type="text" name="heading2" value="{{$feature->heading2}}" class="form-control" />
                                        <br>

                                        <label class="col-sm-2 col-label-form"> PARAGRAPH 2</label>
                                        <input type="text" name="paragraph2" value="{{$feature->paragraph2}}" class="form-control" />
                                        <br>

                                        <label class="col-sm-2 col-label-form"> HEADING 3</label>
                                        <input type="text" name="heading3" value="{{$feature->heading3}}" class="form-control" />
                                        <br>

                                        <label class="col-sm-2 col-label-form"> PARAGRAPH 3</label>
                                        <input type="text" name="paragraph3" value="{{$feature->paragraph3}}" class="form-control" />
                                        <br>

                                        <label class="col-sm-2 col-label-form">  PROFILE</label>
                                        <input type="file" name="image" class="form-control" />
                                        <img src="/images/{{$feature->image}}" width="100px" alt="">
                                        <br>


                                        <div class="d-grid">
                                        <button class="btn" type="submit">UPDATE FEATURED</button>
                                        </div>
                                        <br>

                                    </div>

                            </div>
                            </form>
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