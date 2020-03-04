<nav class="navbar navbar-header navbar-expand-lg">
    <div class="container-fluid">

<!--        <form class="navbar-left navbar-form nav-search mr-md-3" action="">
            <div class="input-group">
                <input type="text" placeholder="Search ..." class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="la la-search search-icon"></i>
                    </span>
                </div>
            </div>
        </form>-->
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
<!--            <li class="nav-item dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="la la-envelope"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>-->
            <li class="nav-item dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="la la-bell"></i>
                    <div id='total_noti_visto'>
                    </div>
                </a>
                <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown" id="listadodenotificaciones">
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="assets/img/avatar.png" alt="user-img" width="36" class="img-circle"><span><?php echo @$_SESSION['primer_nombre'];?></span></span> </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <div class="user-box">
                            <div class="u-img"><img src="assets/img/avatar.png" alt="user"></div>
                            <div class="u-text">
                                <h4><?php echo @$_SESSION['primer_nombre'];?></h4>
                                <p class="text-muted"><?php echo @$_SESSION['correo'];?></p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Ver Perfil</a></div>
                        </div>
                    </li>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
                    <a class="dropdown-item" href="#"></i> My Balance</a>
                    <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" onclick="cerrarsession();"><i class="fa fa-power-off"></i> Logout</a>
                </ul>
                <!-- /.dropdown-user -->
            </li>
        </ul>
    </div>
</nav>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="script/notificacion.js" type="text/javascript"></script>