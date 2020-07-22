<!DOCTYPE html>
<html lang="fr">
<head>
    <script src="assets/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <title>Afrinet - Se Connecter</title>
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/mediaelement/4.1.3/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="assets/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="assets/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url({{asset("assets/demo/night.jpg")}})">
<div id="wrapper" class="row wrapper">
    <div class="col-md-8 text-inverse d-none d-sm-block">
        <div class="login-left-inner">
            <div class="login-content">
                <h3 class="mr-b-20 sub-heading-font-family fw-400">AfriNet : Administration</h3>
                </p>
            </div>
        </div>
        <!-- /.login-left-inner -->
    </div>
    <!-- /.login-left -->
    <div class="col-10 ml-auto ml-sm-auto col-sm-8 col-md-4 login-right float-right">
        <div class="navbar-header text-center">
            <a href="#">
               <h1>AfriNet</h1>
            </a>
        </div>
        <!-- /.navbar-header -->
        <form class="form-material" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" placeholder="johndoe@site.com" class="form-control form-control-line @error('email') is-invalid @enderror" name="email" id="example-email">
                <label for="example-email">Email</label>
                @error('email')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="password" class="form-control form-control-line @error('password') is-invalid @enderror">
                <label>Mot de passe</label>
                @error('password')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-lg btn-color-scheme ripple" type="submit">Se connecter</button>
            </div>
        </form>



    </div>
    <!-- /.login-right -->
</div>
<!-- /.body-container -->
<!-- Scripts -->
<script type="text/javascript" src="assets/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/material-design.js"></script>
</body>


<!-- Mirrored from oscar.thinqteam.com/default/page-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2020 15:21:19 GMT -->
</html>