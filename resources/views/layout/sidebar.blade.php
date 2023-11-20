<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('admin/dist/img/property.jpg') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">E-Property</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ asset('admin/dist/img/user1-128x128.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="" class="d-block"></a>
      </div>
    </div>
        <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
              <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
              </button>
          </div>
      </div>
    </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
               <li class="nav-item">
                <a href="{{ route('auth.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
            <ul class="nav nav-treeview">
            </ul>
          </li>
            <li class="nav-item">
            <a href="/penyewa" class="nav-link @if (Request::segment(1)== 'penyewa') active @endif ">
            <i class="nav-icon fas fa-users"></i>
                <p>
                Penyewa
                </p>
               </a>
              </li>
                <li class="nav-item">
                    <a href="/properti" class="nav-link @if (Request::segment(1)== 'properti') active @endif ">
                    <i class="nav-icon fas fa-building"></i>
                        <p>
                          Properti
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admins" class="nav-link @if (Request::segment(1)== 'admins') active @endif">
                    <i class="nav-icon fas fa-user"></i>
                        <p>
                          Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/genre" class="nav-link @if (Request::segment(1)== 'genre') active @endif ">
                       
                        <p>
                          
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/genre" class="nav-link @if (Request::segment(1)== 'genre') active @endif ">
                        
                        <p>
                            
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <form action="{{ route('auth.logout') }}" method="POST">
                  @csrf
                  <button class="Btn">
  
  <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
  
  <div class="text">Logout</div>
</button>



          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>    
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->