<aside class="site-sidebar scrollbar-enabled clearfix">
    <!-- User Details -->
    <div class="side-user">
        <a class="col-sm-12 media clearfix" href="javascript:void(0);">
            <figure class="media-left media-middle user--online thumb-sm mr-r-10 mr-b-0">
                <img src="assets/demo/users/user-image.png" class="media-object rounded-circle" alt="">
            </figure>
            <div class="media-body hide-menu">
                <h4 class="media-heading mr-b-5 text-uppercase">{{ Auth::user()->last_name }} {{ Auth::user()->first_name }}</h4>
            </div>
        </a>
    </div>
    <!-- /.side-user -->
    <!-- Sidebar Menu -->
    <nav class="sidebar-nav">
        <ul class="nav in side-menu">
            <li class="current-page"><a href="{{ route('dashboard') }}" class="ripple">
                    <i class="list-icon material-icons">dashboard</i>
                    <span class="hide-menu">Dashboard</span></a>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">playlist_add</i>
                    <span class="hide-menu">Clients</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{ route('customers.index') }}">Liste</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">playlist_add</i>
                    <span class="hide-menu">Abonnements</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{ route('forfait.index') }}">Forfait</a></li>
                    <li><a href="{{ route('forfait.subscription') }}">Abonnement</a></li>
                </ul>
            </li>


            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">playlist_add</i>
                    <span class="hide-menu">Support</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{ route('support.index') }}">Liste</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">playlist_add</i>
                    <span class="hide-menu">Administrateurs</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{ route('users.index') }}">Liste</a></li>
                </ul>
            </li>


            <li class="list-divider"></li>
            <li><a href="{{ route('auth.logout') }}"><i class="list-icon material-icons">settings_power</i> <span class="hide-menu"></span> Deconnexion</a>
            </li>
        </ul>
        <!-- /.side-menu -->
    </nav>
    <!-- /.sidebar-nav -->
</aside>
