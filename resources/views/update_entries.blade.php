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
        <link rel="stylesheet" href="/css/adminlte.min.css">
        <link rel="stylesheet" href="/css/custom.css">
        <link rel="stylesheet" href="/css/adminstyle.css">
    </head>

    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            @include('admin.header')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- <img src="img/adminbanner.jpg"  alt="banner image"> -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 style="background-image: url('/img/adminbanner.jpg');height: 300px;width: 1083px;padding-top:26%;text-decoration:underline;font-weight:bolder;" class="text-center ">ASSIGN A LAW</h1>
                            </div>
                            <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                        <div class="container">
                            <h1>Select a Lawyer</h1>

                            <form method="POST" action="/assignLawyer/{{$id}}">
                                @csrf

                                <div class="form-group">
                                    <!-- <label for="lawyer_id">Select a Lawyer:</label> -->
                                    <select name="lawyer_id" id="lawyer_id" class="form-control">
                                        @foreach($lawyers as $lawyer)
                                        <option value="{{ $lawyer->id }}">{{ $lawyer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn" id="btn">Assign Lawyer</button>
                            </form>
                        </div>
                </section>

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






