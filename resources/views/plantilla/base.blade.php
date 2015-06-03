<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			{{ config('tienda.informacion.nombre') }} | @yield('titulo', 'Panel Administrador')
		</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<meta name="description" content="@yield('descripcion', 'Panel de Administracion de F5 Store.')" />
		{{-- Bootstrap --}}
		{!! Html::style('administrador/css/vendor/bootstrap.min.css') !!}
		{{-- FontAwesome 4.3.0 Ionicons 2.0.0 --}}
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		{{-- Theme style --}}
		{!! Html::style('administrador/css/theme.css') !!}
		{!! Html::style('administrador/css/theme-skin.css') !!}

		@yield('css')

	</head>

	<body class="skin-blue">
		<div class="wrapper">
			{{-- Menu top --}}
			<header class="main-header">
				<a href="{{ url('/admin') }}" class="logo"><strong>F5</strong> Store</a>
				<nav class="navbar navbar-static-top" role="navigation">
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							{{-- Mensajes --}}
							<li class="dropdown messages-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-envelope-o"></i>
									<span class="label label-success">10</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">Tienes 10 Mensajes</li>
									<li>
										<ul class="menu">
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="{{ url('administrador/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image"/>
													</div>
													<h4>
														Support Team
														<small><i class="fa fa-clock-o"></i> 5 mins</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li><!-- end message -->
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="{{ url('administrador/img/user2-160x160.jpg') }}" class="img-circle" alt="user image"/>
													</div>
													<h4>
														AdminLTE Design Team
														<small><i class="fa fa-clock-o"></i> 2 hours</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="{{ url('administrador/img/user2-160x160.jpg') }}" class="img-circle" alt="user image"/>
													</div>
													<h4>
														Developers
														<small><i class="fa fa-clock-o"></i> Today</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="{{ url('administrador/img/user2-160x160.jpg') }}" class="img-circle" alt="user image"/>
													</div>
													<h4>
														Sales Department
														<small><i class="fa fa-clock-o"></i> Yesterday</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="{{ url('administrador/img/user2-160x160.jpg') }}" class="img-circle" alt="user image"/>
													</div>
													<h4>
														Reviewers
														<small><i class="fa fa-clock-o"></i> 2 days</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
										</ul>
									</li>
									<li class="footer"><a href="#">See All Messages</a></li>
								</ul>
							</li>

							{{-- Notificaciones --}}
							<li class="dropdown notifications-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell-o"></i>
									<span class="label label-warning">10</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have 10 notifications</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li>
												<a href="#">
													<i class="fa fa-users text-aqua"></i> 5 new members joined today
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-users text-red"></i> 5 new members joined
												</a>
											</li>

											<li>
												<a href="#">
													<i class="fa fa-shopping-cart text-green"></i> 25 sales made
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-user text-red"></i> You changed your username
												</a>
											</li>
										</ul>
									</li>
									<li class="footer"><a href="#">View all</a></li>
								</ul>
							</li>

							{{-- Tareas --}}
							<li class="dropdown tasks-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-flag-o"></i>
									<span class="label label-danger">9</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have 9 tasks</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li><!-- Task item -->
												<a href="#">
													<h3>
														Design some buttons
														<small class="pull-right">20%</small>
													</h3>
													<div class="progress xs">
														<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
															<span class="sr-only">20% Complete</span>
														</div>
													</div>
												</a>
											</li><!-- end task item -->
											<li><!-- Task item -->
												<a href="#">
													<h3>
														Create a nice theme
														<small class="pull-right">40%</small>
													</h3>
													<div class="progress xs">
														<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
															<span class="sr-only">40% Complete</span>
														</div>
													</div>
												</a>
											</li><!-- end task item -->
											<li><!-- Task item -->
												<a href="#">
													<h3>
														Some task I need to do
														<small class="pull-right">60%</small>
													</h3>
													<div class="progress xs">
														<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
															<span class="sr-only">60% Complete</span>
														</div>
													</div>
												</a>
											</li><!-- end task item -->
											<li><!-- Task item -->
												<a href="#">
													<h3>
														Make beautiful transitions
														<small class="pull-right">80%</small>
													</h3>
													<div class="progress xs">
														<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
															<span class="sr-only">80% Complete</span>
														</div>
													</div>
												</a>
											</li><!-- end task item -->
										</ul>
									</li>
									<li class="footer">
										<a href="#">View all tasks</a>
									</li>
								</ul>
							</li>

							{{-- Perfil usuario --}}
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="{{ url('administrador/img/user2-160x160.jpg') }}" class="user-image" alt="Stiven castillo"/>
									<span class="hidden-xs">{{ Auth::user()->nombre_completo }}</span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="{{ url('administrador/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
										<p>
											{{ Auth::user()->nombre_completo }}
											<small>Member since Nov. 2012</small>
										</p>
									</li>
									<!-- Menu Body -->
									<li class="user-body">
										<div class="col-xs-4 text-center">
											<a href="#">Followers</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Sales</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Friends</a>
										</div>
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="#" class="btn btn-default btn-flat">Perfil</a>
										</div>
										<div class="pull-right">
											<a href="{{ url('auth/logout') }}" class="btn btn-default btn-flat">Cerrar Sesión</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			
			{{-- Menu Left --}}
			@extends('admin.template.menu')

			{{-- Contenido --}}
			<div class="content-wrapper">
				{{-- Titulo y Breadcrumbs --}}
				<section class="content-header">
					<h1>
						@yield('titulo', 'Escritorio')
						<small>@yield('subtitulo', 'Control Panel')</small>
					</h1>

					@yield('breadcrumbs', Breadcrumbs::render('escritorio'))
					
				</section>

				{{-- Contenido principal --}}
				<section class="content">
					@yield('contenido', "Sin Contenido para mostrar.")
				</section>
			</div>

			<footer class="main-footer">
				<div class="pull-right hidden-xs">
					<b>Versión</b> 1.0
				</div>
				<a href="#">Tienda.com.co &copy;</a> 2015. Todos los derechos reservados.
			</footer>
		</div>

		{{-- jQuery 2.1.3  --}}
		{!! Html::script('administrador/js/vendor/jquery.2.1.3.min.js') !!}
		<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
		{{-- Bootstrap --}}
		{!! Html::script('administrador/js/vendor/bootstrap.min.js') !!}
		{{-- Main js --}}
		{!! Html::script('administrador/js/app.js') !!}

		@yield('script')
	</body>
</html>