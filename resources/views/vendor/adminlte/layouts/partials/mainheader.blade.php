<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>EMR</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>EMR</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Control Sidebar Toggle Button -->
                <li class="dropdown user user-menu">
                    <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span>
                    </a>
                        <ul class="dropdown-menu" id="drop-reorder">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="" class="img-circle">
                                <p>DEMO -  Admin</p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="http://demo_emr.jwits.co/logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>