<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{ asset('plantilla-ecommerce/themes/bootshop/bootstrap.min.css') }}" media="screen"/>
    <link href="{{ asset('plantilla-ecommerce/themes/css/base.css') }}" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="{{ asset('plantilla-ecommerce/themes/css/bootstrap-responsive.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('plantilla-ecommerce/themes/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="{{ asset('plantilla-ecommerce/themes/js/google-code-prettify/prettify.css') }}" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset('plantilla-ecommerce/themes/images/ico/favicon.ico') }}">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
	<div class="container">
	<!-- Navbar ================================================== -->
		<div id="logoArea" class="navbar">
		<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		  <div class="navbar-inner">
		    <a class="brand" href="{{ url('/') }}"><img src="{{ asset('plantilla-ecommerce/themes/images/logo.png') }}" alt="Bootsshop"/></a>
		    <ul id="topMenu" class="nav pull-right">
			 <li class="">
			 @guest
			 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Acceder</span></a>
			 @endguest

			 @auth
			 @if(Auth::User()->type == 'administrador')
			 <a href="{{ route('dashboard') }}" style="padding-right:0"><span class="btn btn-large btn-primary">Administración</span></a>
			 @endif
			 @endauth

			<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
				<div class="modal-header" style="margin-top: 15px;">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 align="center">Accede para hacer tus compras!</h3>
				</div>
				<div class="modal-body">
					<form class="form-horizontal loginFrm" action="{{ route('login') }}" method="POST">
                    @csrf
					<center>
						<div class="control-group">								
							<input name="email" type="text" value="{{ old('email') }}" id="inputEmail" placeholder="Correo Electronico">
						</div>
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<div class="control-group">
							<input name="password" type="password" id="inputPassword" placeholder="Contraseña">
						</div>
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<button type="submit" class="btn btn-success">Acceder</button>
					</center>
					</form>		
					<button class="btn pull-right" data-dismiss="modal" aria-hidden="true">Cerrar</button>
				</div>
			</div>
			</li>
		    </ul>
		  </div>
		</div>
	</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">