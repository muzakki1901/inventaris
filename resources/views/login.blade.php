<!DOCTYPE html>
<<<<<<< HEAD
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | NERV System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-cover bg-center"
      style="background-image: url('https://4kwallpapers.com/images/walls/thumbs_3t/15699.png');">

    <!-- CARD UTAMA (TRANSPARAN, NO BLUR) -->
    <div class="flex w-[850px] max-w-full rounded-2xl overflow-hidden
    shadow-[0_0_40px_rgba(0,255,120,0.3)]
    bg-black/30 border border-white/20">

        <!-- KIRI -->
        <div class="w-1/2 hidden md:flex flex-col justify-center items-center
        bg-gradient-to-br from-[#7C00FF]/40 to-[#00FF9C]/40 border-r border-white/20">

            <h1 class="text-4xl font-bold tracking-widest text-black">
                Muzakki
            </h1>

            <p class="text-black mt-2 tracking-widest">
                PRAKTIKUM INVENTARIS
            </p>
        </div>

        <!-- KANAN -->
        <div class="w-full md:w-1/2 p-8 text-white">

            <h2 class="text-2xl font-semibold mb-6 text-[#00FF9C]">
                LOGIN ACCESS EVA SERIES
            </h2>

            <form action="/login" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="text-sm text-[#7C00FF]">Username</label>
                    <input type="text" name="username"
                        class="w-full bg-white/10 border border-[#7C00FF]
                        rounded-lg px-4 py-2 focus:outline-none
                        focus:ring-2 focus:ring-[#00FF9C]">
                </div>

                <div>
                    <label class="text-sm text-[#7C00FF]">Password</label>
                    <input type="password" name="password"
                        class="w-full bg-white/10 border border-[#7C00FF]
                        rounded-lg px-4 py-2 focus:outline-none
                        focus:ring-2 focus:ring-[#00FF9C]">
                </div>

                <button type="submit"
                    class="w-full mt-4 py-2 rounded-lg font-semibold
                    bg-gradient-to-r from-[#7C00FF] to-[#00FF9C]
                    text-black hover:opacity-90 transition">
                    ENTER SYSTEM
                </button>
            </form>

        </div>

    </div>

</body>
</html>
=======
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <br/>
                                <img src="/sbadmin/logo.png" width="70%">
                            </div>

                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN INVENTARIS</h1>
                                    </div>

                                    {{-- form login --}}
                                    <form class="user" action="/login" method="POST">                                        
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    {{-- --------------------------- --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/sbadmin/js/sb-admin-2.min.js"></script>

</body>

</html>
>>>>>>> 668b34001591edffbe788c94551622f19656e975
