<nav class="navbar">
    <!-- Logo Area -->
    <div class="navbar-header">
        <a href="{{ route('dashboard') }}" class="navbar-brand">
          <h4 style="color: #fff;">AFRINET</h4>
        </a>
    </div>
    <!-- /.navbar-header -->
    <!-- Left Menu & Sidebar Toggle -->
    <ul class="nav navbar-nav">
        <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon">menu</i></a>
        </li>
    </ul>

    <div class="spacer"></div>

    <!-- User Image with Dropdown -->
    <ul class="nav navbar-nav">
        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><span class="avatar thumb-sm"><img src="assets/demo/users/user-image.png" class="rounded-circle" alt=""> <i class="material-icons list-icon">expand_more</i></span></a>
            <div
                    class="dropdown-menu dropdown-left dropdown-card  dropdown-card-dark text-inverse">
                <div class="card">
                    <header class="card-heading-extra">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="mr-b-10 sub-heading-font-family fw-300">{{ Auth::user()->last_name }} {{ Auth::user()->first_name }}</h5>
                            </div>
                            <div class="col-4 d-flex justify-content-end"><a href="{{ route('auth.logout') }}" class="mr-t-10">
                                    <i class="material-icons list-icon">power_settings_new</i> Deconnexion</a>
                            </div>
                            <!-- /.col-4 -->
                        </div>
                        <!-- /.row -->
                    </header>
                </div>
            </div>
        </li>
    </ul>
    <!-- /.navbar-right -->
</nav>
