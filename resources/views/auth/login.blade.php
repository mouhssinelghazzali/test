
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="au theme template">
<meta name="author" content="Hau Nguyen">
<meta name="keywords" content="au theme template">

<title>Login</title>

<link href="css/font-face.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

<link href="css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
<div class="page-wrapper">
<div class="page-content--bge5">
<div class="container">
<div class="login-wrap">
<div class="login-content">
<div class="login-logo">
<a href="#">
<img src="images/icon/logo.png" alt="CoolAdmin">
</a>
</div>
<div class="login-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf
<div class="form-group">
<label>{{ __('E-Mail Address') }}</label>
<input id="email" type="email" class="au-input au-input--full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<div class="form-group">
<label>{{ __('Password') }}</label>
<input class="au-input au-input--full @error('password') is-invalid @enderror"  type="password" name="password" required autocomplete="current-password">
@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<div class="login-checkbox">
<label>
    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
</label>
<label>
<a href="#">Forgotten Password?</a>
</label>
</div>

<button type="submit" class="au-btn au-btn--block au-btn--green m-b-20" >
    {{ __('Login') }}
</button>

</form>
<div class="register-link">
<p>

<a href="#">Sign Up Here</a>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="vendor/jquery-3.2.1.min.js" type="693b3e683d298df326b5765b-text/javascript"></script>

<script src="vendor/bootstrap-4.1/popper.min.js" type="693b3e683d298df326b5765b-text/javascript"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js" type="693b3e683d298df326b5765b-text/javascript"></script>

<script src="vendor/slick/slick.min.js" type="693b3e683d298df326b5765b-text/javascript">
    </script>
<script src="vendor/wow/wow.min.js" type="693b3e683d298df326b5765b-text/javascript"></script>
<script src="vendor/animsition/animsition.min.js" type="693b3e683d298df326b5765b-text/javascript"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js" type="693b3e683d298df326b5765b-text/javascript">
    </script>
<script src="vendor/counter-up/jquery.waypoints.min.js" type="693b3e683d298df326b5765b-text/javascript"></script>
<script src="vendor/counter-up/jquery.counterup.min.js" type="693b3e683d298df326b5765b-text/javascript">
    </script>
<script src="vendor/circle-progress/circle-progress.min.js" type="693b3e683d298df326b5765b-text/javascript"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js" type="693b3e683d298df326b5765b-text/javascript"></script>
<script src="vendor/chartjs/Chart.bundle.min.js" type="693b3e683d298df326b5765b-text/javascript"></script>
<script src="vendor/select2/select2.min.js" type="693b3e683d298df326b5765b-text/javascript">
    </script>

<script src="js/main.js" type="693b3e683d298df326b5765b-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="693b3e683d298df326b5765b-|49" defer=""></script></body>
</html>
