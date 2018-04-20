<?php
    if (Auth::guest()) {
       return redirect('auth.login');
    }else{

?>

<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo"><b>Nee</b>Ded</a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- message -->
                <li class="dropdown messages-menu open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <i class="fa fa-envelope-o"></i>
                          <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="header">You have 4 messages</li>
                          <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                              <li><!-- start message -->
                                <a href="#">
                                  <div class="pull-left">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                  </div>
                                  <h4>
                                    Support Team
                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                  </h4>
                                  <p>Why not buy a new awesome theme?</p>
                                </a>
                              </li>
                              <!-- end message -->
                              <li>
                                <a href="#">
                                  <div class="pull-left">
                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                  </div>
                                  <h4>
                                    Reviewers
                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                  </h4>
                                  <p>Why not buy a new awesome theme?</p>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                      </li>
                <!-- akhir message -->

                <!-- awal notif -->
                <li class="dropdown notifications-menu open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <i class="fa fa-bell-o"></i>
                          <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="header">You have 10 notifications</li>
                          <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                              <li>
                                <a href="#">
                                  <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                  page and may cause design problems
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-users text-red"></i> 5 new members joined
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-user text-red"></i> You changed your username
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="footer"><a href="#">View all</a></li>
                        </ul>
                      </li>
                <!-- akhir notif-->
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ asset("/bower_components/AdminLTE/dist/img/cat.jpg") }}" class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ asset("/bower_components/AdminLTE/dist/img/cat.jpg") }}" class="img-circle" alt="User Image" />
                            <p>
                                {{ Auth::user()->name }} - Web Developer
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php
}
?>
