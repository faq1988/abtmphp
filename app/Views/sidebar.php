<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ABTM WEB</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="<?=base_url()?>assets/img/logo.png" alt="...">
                </div>
                <div class="sidebar-brand-text mx-3">ABTM WEB</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url()?>novedades">
                    <i class="fa fa-exclamation-circle"></i>
                    <span>Novedades</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu principal
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-trophy"></i>
                    <span>Torneos</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="<?=base_url()?>como_participar">Como Participar</a>
                        <a class="collapse-item" href="<?=base_url()?>calendario">Calendario</a>
                        <a class="collapse-item" href="<?=base_url()?>resultados">Resultados</a>
                        <a class="collapse-item" href="<?=base_url()?>grafico">Gráfico</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosiciones"
                    aria-expanded="true" aria-controls="collapsePosiciones">
                    <i class="fa fa-arrow-right"></i>
                    <span>Posiciones</span>
                </a>
                <div id="collapsePosiciones" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="<?=base_url()?>rating">Rating General</a>
                        <a class="collapse-item" href="<?=base_url()?>ranking">Ranking</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCircuito"
                    aria-expanded="true" aria-controls="collapseCircuito">
                    <i class="fa fa-users"></i>
                    <span>Circuito ABTM</span>
                </a>
                <div id="collapseCircuito" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="<?=base_url()?>autoridades">Autoridades</a>
                        <a class="collapse-item" href="utilities-border.html">Sistema de Puntaje</a>
                        <a class="collapse-item" href="<?=base_url()?>puntaje_rating">Puntaje Rating</a>
                        <a class="collapse-item" href="<?=base_url()?>categorias_rating">Categorías Rating</a>
                        <a class="collapse-item" href="<?=base_url()?>donde_jugar">Donde Jugar</a>
                        <a class="collapse-item" href="<?=base_url()?>contacto">Contacto</a>
                    </div>
                </div>
            </li>

             <!-- Nav Item - Utilities Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTdm"
                    aria-expanded="true" aria-controls="collapseTdm">
                    <i class="fa fa-globe"></i>
                    <span>Tenis de Mesa</span>
                </a>
                <div id="collapseTdm" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="<?=base_url()?>reglamento">Reglamento</a>
                        <a class="collapse-item" href="<?=base_url()?>historia">Historia</a>
                    </div>
                </div>
            </li>

             <!-- Nav Item - Utilities Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReglamento"
                    aria-expanded="true" aria-controls="collapseReglamento">
                    <i class="fa fa-book"></i>
                    <span>Reglamento</span>
                </a>
                <div id="collapseReglamento" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="<?=base_url()?>gomas_aprobadas">Gomas Aprobadas</a>
                        <a class="collapse-item" href="<?=base_url()?>declaracion_jurada">Declaración Jurada</a>
                        <a class="collapse-item" href="<?=base_url()?>reglamento_tecnico">Reglamento Técnico</a>
                        <a class="collapse-item" href="<?=base_url()?>tribunal_disciplina">Tribunal de disciplina</a>
                        <a class="collapse-item" href="<?=base_url()?>reglamento_abtm">Reglamento ABTM</a>
                    </div>
                </div>
            </li>

             <!-- Nav Item - Utilities Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInscripcion"
                    aria-expanded="true" aria-controls="collapseInscripcion">
                    <i class="fa fa-check"></i>
                    <span>Inscripcion</span>
                </a>
                <div id="collapseInscripcion" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="<?=base_url()?>inscripcion">Inscribirse</a>
                        <a class="collapse-item" href="<?=base_url()?>ver_inscriptos">Ver Inscriptos</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Administrador
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Artículos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Inscripciones</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Resultados</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="<?=base_url()?>assets/img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->