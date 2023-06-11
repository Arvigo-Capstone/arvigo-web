<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: black;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center mb-3 justify-content-center"
        style="padding-top: 50px; padding-bottom: 35px;" href="{{ url('/u/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15 px-1">
            {{-- <i class="fas fa-book"></i> --}}
        </div><br>
        <div><img src="https://storage.googleapis.com/arvigo-bucket/arvigo-logo/arvigo-logo-white.png"
                alt="Girl in a jacket" width="150"></div>
    </a>

    {{-- <div class="profile text-center mb-3">
        @if (Auth::user()->photo_profile == null)
            <img class="img-profile rounded-circle w-25" src="{{ asset('/img/profile.png') }}">
        @else
            <img class="img-profile rounded-circle w-25" src="{{ asset('storage/' . Auth::user()->photo_profile) }}">
        @endif
        <p class="text-white fs-normal" style="padding-top: 20px;">
            {{ auth()->user()->email }} <br>
            <span class="fs-small">{{ auth()->user()->role }} arvigo</span>
        </p>
    </div> --}}

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item active border-top border-bottom">
            <a class="nav-link px-5" href="/u/dashboard">
                <i class="fas fa-fw fa-home"></i>
                <span>Dashboard</span>
            </a>
        </li> --}}

    <li class="nav-item active border-bottom">
        <a class="nav-link px-5 collapsed" href="#" data-toggle="collapse" data-target="#collapseOffer"
            aria-expanded="true" aria-controls="collapseOffer">
            <i class="fas fa-fw fa-inbox"></i>
            <span>Partner Offer</span>
        </a>
        <div id="collapseOffer" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Partner Offer</h6>
                <a class="collapse-item" href="/u/transaction3">Waiting List</a>
                <a class="collapse-item" href="/u/transaction4">Approved</a>
                <a class="collapse-item" href="/u/transaction5">Rejected</a>
            </div>
        </div>
    </li>
    {{-- 
    <li class="nav-item active border-top border-bottom">
        <a class="nav-link px-5" href="/u/transaction3">
            <i class="fas fa-fw fa-inbox"></i>
            <span>Partner Offer</span>
        </a>
    </li> --}}

    <li class="nav-item active border-bottom">
        <a class="nav-link px-5 collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaction"
            aria-expanded="true" aria-controls="collapseTransaction">
            <i class="fas fa-fw fa-money-check"></i>
            <span>Transaction</span>
        </a>
        <div id="collapseTransaction" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Transaction</h6>
                <a class="collapse-item" href="/u/transaction">Users</a>
                <a class="collapse-item" href="/u/transaction2">Partners</a>
            </div>
        </div>
    </li>

    <li class="nav-item active border-bottom">
        <a class="nav-link px-5 collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
            aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Supports</h6>
                <a class="collapse-item" href="/u/admins">Users</a>
                <a class="collapse-item" href="/u/customers">Partners</a>
                {{-- <a class="collapse-item" href="/u/dashboard">Admin</a> --}}
                {{-- <div class="collapse-divider"></div>
          <h6 class="collapse-header">Other Pages:</h6>
          <a class="collapse-item" href="#">404 Page</a>
          <a class="collapse-item" href="#">Blank Page</a> --}}
            </div>
        </div>
    </li>

    <li class="nav-item active border-bottom">
        <a class="nav-link px-5 collapsed" data-id="masterData" href="#" data-toggle="collapse"
            data-target="#collapseMaster" aria-expanded="true" aria-controls="collapseMaster">
            <i class="fas fa-fw fa-folder"></i>
            <span>Master</span>
        </a>
        <div id="collapseMaster" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Brands & Category</h6>
                <a class="collapse-item" data-id="authors" href="/u/author">Brands</a>
                <a class="collapse-item" href="/u/publisher">Category</a>
                {{-- <a class="collapse-item" href="/u/genre">Genres</a> --}}
                {{-- <div class="collapse-divider"></div>
          <h6 class="collapse-header">Other Pages:</h6>
          <a class="collapse-item" href="#">404 Page</a>
          <a class="collapse-item" href="#">Blank Page</a> --}}
            </div>
        </div>
    </li>

    {{-- <li class="nav-item active border-top border-bottom">
            <a class="nav-link px-5" href="/u/book">
                <i class="fas fa-fw fa-book"></i>
                <span>Buku</span>
            </a>
        </li> --}}

    <li class="nav-item active border-bottom">
        <a class="nav-link px-5 collapsed" data-id="masterData" href="#" data-toggle="collapse"
            data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
            <i class="fas fa-fw fa-book"></i>
            <span>Products</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Products by Category</h6>
                <a class="collapse-item" data-id="authors" href="/u/book">Sunglasses</a>
                <a class="collapse-item" href="/u/book2">Makeup</a>
                {{-- <a class="collapse-iteLank Page</a> --}}
            </div>
        </div>
    </li>

    {{-- <li class="nav-item active border-bottom">  
    <a class="nav-link px-5" href="{{ route('home') }}">
      <i class="fas fa-fw fa-hdd"></i>
      <span>Backup Data</span>
    </a>
  </li> --}}

    <li class="nav-item active border-bottom">
        <a class="nav-link px-5" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt mx-1"></i>
            <span>Keluar</span>
        </a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    {{-- <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div> --}}

</ul>
<!-- End of Sidebar -->
