
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class=" col-md-8" style="margin-top:25vh">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                       
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                                    </div>
                                    <form method='GET' action='{{route('login.authentication')}}' class="user">
                                        <div class="form-group">
                                            <input name='email' type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                                @error('email') <span class='text-danger'>{{$message}}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <input name='password' type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                            @error('password') <span class='text-danger'>{{$message}}</span> @enderror

                                        </div>

                                        <div class='form-group d-flex align-items-center'>
                                            <button class='btn btn-primary rounded-pill mx-1'>Entrar</button>                                        
                                            <a href='{{route('blog.news.home')}}' class='btn btn-dark rounded-pill'>Página inicial</a>                                        
                                        </div>
                                        
                                        </div>                                        
                                        
                                    </form>

                                
                                 
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    

</body>

</html>