<!-- Main Sidebar Container -->
<div class="form-group">
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index3.html" class="brand-link"> <img src="dist/img/AdminLTELogo.png" alt="Alhikma Public School" class="brand-image img-circle elevation-3" style="opacity: .9"> <span class="brand-text font-weight-light"><b> Alhikma Public School</span> </a>
		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image"> <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> </div>
				<div class="info"> <a href="#" class="d-block">{{ $LoggedUserInfo['name']}}</a> </div>
			</div> {{--
			<!-- SidebarSearch Form -->
			<div class="form-inline">
				<div class="input-group" data-widget="sidebar-search">
					<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-sidebar"> <i class="fas fa-search fa-fw"></i> </button>
					</div>
				</div>
			</div> --}}
			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
				   with font-awesome or any other icon font library -->
					<li class="nav-item menu-open">
						<a href="#" class="nav-link active"> <i class="nav-icon fas fa-tachometer-alt"></i>
							<p> Dashboard {{-- <i class="right fas fa-angle-left"></i> --}} </p>
						</a> 
					 </li>
					<li class="nav-item">
						<a href="#" class="nav-link"> <i class="nav-icon fas fa-copy"></i>
							<p> Student <i class="fas fa-angle-left right"></i> <span class="badge badge-info right">5</span> </p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item"> <i class="far fa-circle nav-icon"></i> <a href="{{ route('admission')}}"><i class="fa fa-graduation-cap"></i> {{ ('Enrollement') }}</a> </li>
							<li class="nav-item"> <i class="far fa-circle nav-icon"></i> <a href="enrollement"><i class="fas fa-reciep"></i> {{ ('Enrollement Record') }} </a> </li>
							<li class="nav-item"> <i class="far fa-circle nav-icon"></i> <a href=""><i class="fas fa-reciep"></i> {{ ('Fee Structure') }} </a> </li>
							<li class="nav-item"> <i class="far fa-circle nav-icon"></i> <a href=""><i class="fas fa-users"></i> {{ ('Attendance') }}</a></li>
                            <li class="nav-item"><i class="far fa-circle nav-icon"></i><a href=""><i class="nav-icon fas fa-edit"></i> {{ ('Examination') }}</a></li>
						</ul>
					</li>


					<li class="nav-item">
						<a href="#" class="nav-link"> <i class="nav-icon fas fa-copy"></i>
							<p> Faculty <i class="fas fa-angle-left right"></i> <span class="badge badge-info right">2</span> </p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item"> <i class="far fa-circle nav-icon"></i> <a href=""><i class="fa fa-graduation-cap"></i> {{ ('Teaching Staff Hirring') }}</a> </li>
							<li class="nav-item"> <i class="far fa-circle nav-icon"></i> <a href=""><i class="fa fa-graduation-cap"></i> {{ ('Teaching Staff Record') }}</a> </li>
						</ul>
					</li>


					<li class="nav-item">
						<a href="#" class="nav-link"> <i class="nav-icon fas fa-copy"></i>
							<p> Administration <i class="fas fa-angle-left right"></i> <span class="badge badge-info right">5</span> </p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item"> <i class="far fa-circle nav-icon"></i> <a href=""><i class="fa fa-graduation-cap"></i> {{ ('Principle') }}</a> </li>
							<li class="nav-item"> <i class="far fa-circle nav-icon"></i> <a href=""><i class="fas fa-reciep"></i> {{ ('Vice Principal') }} </a> </li>
							<li class="nav-item"> <i class="far fa-circle nav-icon"></i> <a href=""><i class="fas fa-reciep"></i> {{ ('Clerk') }} </a> </li>
							<li class="nav-item"> <i class="far fa-circle nav-icon"></i> <a href=""><i class="fas fa-users"></i> {{ ('Accounts') }}</a></li>
                            <li class="nav-item"><i class="far fa-circle nav-icon"></i><a href=""><i class="nav-icon fas fa-edit"></i> {{ (' Security Guard') }}</a></li>
							
						</ul>
					</li>
								<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
</div>