<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <!-- Fonts -->
    <link href="<?php echo base_url().'/assets/libs/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/libs/bootstrap-4.5.3/css/bootstrap.min.css'; ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css/admin/index.css'; ?>">
</head>
<body id="page-top">
        <nav class="navbar navbar-expand navbar-light bg-light shadow mb-4">
          <div class="container">
            <a class="navbar-brand" href="#">Tu Portfolio <small class="text-muted">by athomic</small></a>
            

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropleft">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="img-fluid rounded-circle" width="30px" src="https://cdn.pixabay.com/photo/2016/03/31/17/33/account-1293744_960_720.png">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username;?></span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/" ><i class="fas fa-globe-americas"></i> Tu sitio</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar Sesión</a>
                  </div>
                </li>
              </ul>

            </div>
          </div>
        </nav>
        <!-- End of Topbar -->
        <div class="container">

