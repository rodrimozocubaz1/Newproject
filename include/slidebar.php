<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="assets/img/avatar.png">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        <?php echo $_SESSION['nom_ape']; ?>
                        <span class="user-level">
                            <?php
                            if ($_SESSION['rol'] == '1') {
                                echo "Administrador";
                            } else {
                                echo "Usuario";
                            }
                            ?>
                        </span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">Mi Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Editar Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Configuración</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item <?php
            if (@$active == 'dashboard') {
                echo 'active';
            }
            ?>">
                <a href="dashboard">
                    <i class="la la-dashboard"></i>
                    <p>Dashboard</p>
                    <span class="badge badge-count">1</span>
                </a>
            </li>
            <li class="nav-item <?php
            if (@$active == 'index') {
                echo 'active';
            }
            ?>">
                <a href="index">
                    <i class="la la-search"></i>
                    <p>Busqueda</p>
                    <span class="badge badge-count">2</span>
                </a>
            </li>
            <li class="nav-item <?php
            if (@$active == 'horario') {
                echo 'active';
            }
            ?>">
                <a href="horario">
                    <i class="la la-calendar"></i>
                    <p>Horario</p>
                    <span class="badge badge-count">3</span>
                </a>
            </li>
            <li class="nav-item <?php
            if (@$active == 'registrar_empleado') {
                echo 'active';
            }
            ?>">
                <a href="registrar_empleado">
                    <i class="la la-folder"></i>
                    <p>Registrar Empleado</p>
                    <span class="badge badge-count">4</span>
                </a>
            </li>
            
            <hr>
            <li class="nav-item update-pro">
                <!--<img src="./img/cviche.png">-->
                <button  data-toggle="modal" data-target="#modalUpdate">
                    <i class="la la-hand-pointer-o"></i>
                    <p>Contáctanos Aqui</p>
                </button>
            </li>
            <hr>
            <!--            <li class="nav-item">
                            <a href="components">
                                <i class="la la-table"></i>
                                <p>Components</p>
                                <span class="badge badge-count">14</span>
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a href="forms">
                                <i class="la la-keyboard-o"></i>
                                <p>Forms</p>
                                <span class="badge badge-count">50</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tables">
                                <i class="la la-th"></i>
                                <p>Tables</p>
                                <span class="badge badge-count">6</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="notifications">
                                <i class="la la-bell"></i>
                                <p>Notifications</p>
                                <span class="badge badge-success">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="typography">
                                <i class="la la-font"></i>
                                <p>Typography</p>
                                <span class="badge badge-danger">25</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="icons">
                                <i class="la la-fonticons"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li class="nav-item update-pro">
                            <button  data-toggle="modal" data-target="#modalUpdate">
                                <i class="la la-hand-pointer-o"></i>
                                <p>Update To Pro</p>
                            </button>
                        </li>-->
        </ul>
    </div>
</div>