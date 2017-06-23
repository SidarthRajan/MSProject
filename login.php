<?php
include 'accountmanager.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MiSi</title>

    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="lib/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,700,500);
        body {
            padding-top: 90px;
            background:#F7F7F7;
            color:#666666;
            font-family: 'Roboto', sans-serif;
            font-weight:100;
        }
        body{
            width: 100%;
            background: -webkit-linear-gradient(left, #22d686, #24d3d3, #22d686, #24d3d3);
            background: linear-gradient(to right, #22d686, #24d3d3, #22d686, #24d3d3);
            background-size: 600% 100%;
            -webkit-animation: HeroBG 20s ease infinite;
            animation: HeroBG 20s ease infinite;
        }
        @-webkit-keyframes HeroBG {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 100% 0;
            }
            100% {
                background-position: 0 0;
            }
        }
        @keyframes HeroBG {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 100% 0;
            }
            100% {
                background-position: 0 0;
            }
        }
        .panel {
            border-radius: 5px;
        }
        label {
            font-weight: 300;
        }
        .panel-login {
            border: none;
            -webkit-box-shadow: 0px 0px 49px 14px rgba(188,190,194,0.39);
            -moz-box-shadow: 0px 0px 49px 14px rgba(188,190,194,0.39);
            box-shadow: 0px 0px 49px 14px rgba(188,190,194,0.39);
        }
        .panel-login .checkbox input[type=checkbox]{
            margin-left: 0px;
        }
        .panel-login .checkbox label {
            padding-left: 25px;
            font-weight: 300;
            display: inline-block;
            position: relative;
        }
        .panel-login .checkbox {
            padding-left: 20px;
        }
        .panel-login .checkbox label::before {
            content: "";
            display: inline-block;
            position: absolute;
            width: 17px;
            height: 17px;
            left: 0;
            margin-left: 0px;
            border: 1px solid #cccccc;
            border-radius: 3px;
            background-color: #fff;
            -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
            -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
            transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        }
        .panel-login .checkbox label::after {
            display: inline-block;
            position: absolute;
            width: 16px;
            height: 16px;
            left: 0;
            top: 0;
            margin-left: 0px;
            padding-left: 3px;
            padding-top: 1px;
            font-size: 11px;
            color: #555555;
        }
        .panel-login .checkbox input[type="checkbox"] {
            opacity: 0;
        }
        .panel-login .checkbox input[type="checkbox"]:focus + label::before {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }
        .panel-login .checkbox input[type="checkbox"]:checked + label::after {
            font-family: 'FontAwesome';
            content: "\f00c";
        }
        .panel-login>.panel-heading .tabs{
            padding: 0;
        }
        .panel-login h2{
            font-size: 20px;
            font-weight: 300;
            margin: 30px;
        }
        .panel-login>.panel-heading {
            color: #848c9d;
            background-color: #e8e9ec;
            border-color: #fff;
            text-align:center;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom: 0px;
            padding: 0px 15px;
        }
        .panel-login .form-group {
            padding: 0 30px;
        }
        .panel-login>.panel-heading .login {
            padding: 20px 30px;
            border-bottom-left-radius: 5px;
        }
        .panel-login>.panel-heading .register {
            padding: 20px 30px;
            background: #2d3b55;
            border-bottom-right-radius: 5px;
        }
        .panel-login>.panel-heading a{
            text-decoration: none;
            color: #666;
            font-weight: 300;
            font-size: 16px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        .panel-login>.panel-heading a#register-form-link {
            color: #fff;
            width: 100%;
            text-align: right;
        }
        .panel-login>.panel-heading a#login-form-link {
            width: 100%;
            text-align: left;
        }
        .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
            height: 45px;
            border: 0;
            font-size: 16px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 1px solid #e7e7e7;
            border-radius: 0px;
            padding: 6px 0px;
        }
        .panel-login input:hover,
        .panel-login input:focus {
            outline:none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-color: #ccc;
        }
        .btn-login {
            background-color: #E8E9EC;
            outline: none;
            color: #2D3B55;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border: none;
            border-radius: 0px;
            box-shadow: none;
        }
        .btn-login:hover,
        .btn-login:focus {
            color: #fff;
            background-color: #2D3B55;
        }
        .forgot-password {
            text-decoration: underline;
            color: #888;
        }
        .forgot-password:hover,
        .forgot-password:focus {
            text-decoration: underline;
            color: #666;
        }
        .btn-register {
            background-color: #E8E9EC;
            outline: none;
            color: #2D3B55;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border: none;
            border-radius: 0px;
            box-shadow: none;
        }
        .btn-register:hover,
        .btn-register:focus {
            color: #fff;
            background-color: #2D3B55;
        }
    </style>
</head>
<body>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">MiSi</a>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" method="post" role="form" style="display: block;">
                                <h2>LOGIN</h2>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-xs-6 form-group pull-left checkbox">
                                    <input id="checkbox1" type="checkbox" name="remember">
                                    <label for="checkbox1">Remember Me</label>
                                </div>
                                <div class="col-xs-6 form-group pull-right">
                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                </div>
                                <div class="form-group pull-left">
                                    <a nohref onclick="formSwitch();return false;" id="register-link">Don't have an account? Create one.</a>
                                </div>
                            </form>
                            <form id="register-form" action="#" method="post" role="form" style="display: none;">
                                <h2>REGISTER</h2>
                                <div class="form-group pull-left">
                                    <input type="text" name="fName" id="fName" tabindex="1" class="form-control" placeholder="First Name" value="">
                                </div>
                                <div class="form-group pull-right">
                                    <input type="text" name="lName" id="lName" tabindex="1" class="form-control" placeholder="Last Name" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pull-left">
                                    <a nohref onclick="formSwitch();return false;" id="login-link">Have an account?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function formSwitch() {
        var login = document.getElementById('login-form');
        var register = document.getElementById('register-form');
        if (login.style.display === 'none') {
            register.style.display = 'none';
            login.style.display = 'block';
        } else {
            login.style.display = 'none';
            register.style.display = 'block';
        }
    }
</script>
</body>
</html>