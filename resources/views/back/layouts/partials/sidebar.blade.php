<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
        <img src="{{asset('back')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('back')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-exchange-alt"></i>
                        <p>
                            Back / Front
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.home')}}" class="nav-link">
                                <i class="fas fa-home"></i>
                                <p>Adsmany Admin</p>
                            </a>
                        </li> 
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                               <i class="fas fa-globe"></i>
                                <p>Adsmany Front</p>
                            </a>
                        </li>                            
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="{{route('admin.language')}}" class="nav-link">
                        <i class="fas fa-language"></i>
                        <p>
                            Languages
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.country')}}" class="nav-link">
                        <i class="fas fa-flag-usa"></i>
                        <p>
                            Country
                        </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="{{route('admin.tv')}}" class="nav-link">
                        <i class="fas fa-tv"></i>
                        <p>
                            TV Channel
                        </p>
                    </a>
                </li>
             <li class="nav-item">
                    <a href="{{route('admin.program')}}" class="nav-link">
                        <i class="fas fa-spinner"></i>
                        <p>
                            Programs
                        </p>
                    </a>
                </li>
             <li class="nav-item">
                    <a href="{{route('admin.contact')}}" class="nav-link">
                        <i class="fas fa-id-card-alt"></i>
                        <p>
                            Contacts
                        </p>
                    </a>
                </li>
                
               <li class="nav-item">
                    <a href="{{route('admin.logout')}}" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>
                            ????x????
                        </p>
                    </a>
                </li>
        
            
            
                 
                     
                  
                   
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
