<aside class="main-sidebar">
	<section class="sidebar">
		{{-- Busqueda --}}
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Buscar..."/>
				<span class="input-group-btn">
					<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		{{-- Menú Principal --}}
		<ul class="sidebar-menu">
			<li class="header">MENÚ</li>
			<li>
				<a href="{{ route('escritorio') }}">
					<i class="fa fa-dashboard"></i> <span>Escritorio</span>
				</a>
			</li>

			{{-- Catalogo de productos --}}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-book"></i> <span>Catálogo</span> <i class="fa fa-angle-left pull-right"></i>
				</a>

				<ul class="treeview-menu menu-open">
					<li><a href="#"><span>Categorias</span></a></li>
					<li><a href="#"><span>Productos</span></a></li>
					<li><a href="#"><span>Atributos</span></a></li>
					<li><a href="#"><span>Caracteristicas</span></a></li>
					<li><a href="#"><span>Fabricantes</span></a></li>
					<li><a href="#"><span>Proveedores</span></a></li>
					<li><a href="#"><span>Etiquetas</span></a></li>
					<li><a href="#"><span>Adjuntos</span></a></li>
				</ul>
			</li>

			{{-- Administracion de la plataforma --}}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-cogs"></i> <span>Administración</span> <i class="fa fa-angle-left pull-right"></i>
				</a>

				<ul class="treeview-menu menu-open">
					<li>
						<a href="{{ route('admin.usuario.index') }}">
							<i class="fa fa-users"></i> <span>Usuarios</span>
						</a>
					</li>
				</ul>
			</li>

			<li class="header">MÓDULOS</li>
			<li>
				<a href="{{ route('escritorio') }}">
					<i class="fa fa-cog"></i> <span>Obtener Módulos</span>
				</a>
			</li>

			<li>
				<a href="{{ route('escritorio') }}">
					<i class="fa fa-ticket"></i> <span>Soporte</span>
				</a>
			</li>

			<li>
				<a href="{{ route('escritorio') }}">
					<i class="fa fa-database"></i> <span>Backup</span>
				</a>
			</li>

			<li>
				<a href="{{ route('escritorio') }}">
					<i class="fa fa-envelope"></i> <span>E-marketing</span>
				</a>
			</li>

			<li class="header">CUENTA</li>
			<li><a href="#"><i class="fa fa-circle-o text-danger"></i> Expandir</a></li>
		</ul>
	</section>
</aside>