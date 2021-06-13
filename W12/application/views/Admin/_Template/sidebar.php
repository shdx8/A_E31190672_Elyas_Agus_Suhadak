<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

 	<!-- Sidebar - Brand -->
 	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
 		<div class="sidebar-brand-icon rotate-n-15">
 			<i class="fas fa-laugh-wink"></i>
 		</div>
 		<div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
 	</a>

 	<!-- Divider -->
 	<hr class="sidebar-divider my-0">

 	<!-- Nav Item - Dashboard -->
 	<li class="nav-item">
 		<a class="nav-link" href="index">
 			<i class="fas fa-fw fa-tachometer-alt"></i>
 			<span>Dashboard</span></a>
 	</li>

 	<!-- Divider -->
 	<hr class="sidebar-divider">

 	<!-- Heading -->

 	<!-- Nav Item - Pages Collapse Menu -->
	 <?php
		if($getGrup==1) {
		echo '
 	<li class="nav-item">
 		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
 			aria-controls="collapseTwo">
 			<i class="fas fa-fw fa-table "></i>
 			<span>Data</span>
 		</a>
 		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
 			<div class="bg-white py-2 collapse-inner rounded">
 				<a class="collapse-item" href="'.base_url('Mahasiswa').'">User</a>
 				<a class="collapse-item" href="'.base_url('Grup').'">Grup</a>
 			</div>
 		</div>
 	</li>
	 ';}?>


	<?php
		if($getGrup==2) {
		echo '<li class="nav-item">
 					<a class="nav-link" href="Mahasiswa">
 					<i class="fas fa-fw fa-table"></i>
 					<span>User</span></a>
 					</li>';}?>


 	<!-- Nav Item - Tables -->
 	<!-- <li class="nav-item">
 		<a class="nav-link active" href="index">
 			<i class="fas fa-fw fa-table "></i>
 			<span>User</span></a>
 	</li> -->

 	<!-- Divider -->
 	<hr class="sidebar-divider d-none d-md-block">

 	<!-- Sidebar Toggler (Sidebar) -->
 	<div class="text-center d-none d-md-inline">
 		<button class="rounded-circle border-0" id="sidebarToggle"></button>
 	</div>

 </ul>
