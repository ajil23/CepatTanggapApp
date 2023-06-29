<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
    <div class="navbar-toggler-icon">
        <img class="navbar-toggler-icon" src="{{asset('backend/img/logo.png')}}" >
    </div>
    <div class="sidebar-brand-text mx-3">CepatTanggap</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="{{'redirects' == request()->path() ? 'nav-item active' : 'nav-item'}}">
    <a class="nav-link" href="{{route('admin.index')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pusat Kesehatan Collapse Menu -->
<li class="{{'pusat/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
    <a class="nav-link collapsed" href="{{route('pusat.view')}}">
        <i class="fa fa-building"></i>
        <span>Pusat Kesehatan</span></a>
</li>

<!-- Nav Item - Pertolongan Nakes Collapse Menu -->
<li class="{{'nakes/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
    <a class="nav-link collapsed" href="{{route('nakes.view')}}">
        <i class="fa fa-user-md"></i>
        <span>Pertolongan Nakes</span></a>
</li>

<!-- Nav Item - Ambulance Collapse Menu -->
<li class="{{'ambulance/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
    <a class="nav-link collapsed" href="{{route('ambulance.view')}}">
        <i class="fa fa-ambulance"></i>
        <span>Pertolongan Ambulance</span></a>
</li>

<!-- Nav Item - Data Pasien Collapse Menu -->
<li class="{{'pasien/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
    <a class="nav-link collapsed" href="{{route('pasien.view')}}">
        <i class="fa fa-server"></i>
        <span>Data Pasien</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->