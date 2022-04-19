<?php
include '../app/controller/verificaLogin.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- BootStrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JavaScript -->
    <script type="text/javascript" src="../view/assets/js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="../view/assets/js/jquery.maskedinput-1.1.4.pack.js"></script>
    <script src="../view/assets/js/script.jS" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"
        defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"
        defer></script>


    <!-- Styles Esternos -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-xing'></i>
            <span class="logo_name">ProjUninassau</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Cadastro</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Cadastro</a></li>
                    <li><a href="usuario.php">Usuários</a></li>
                    <li><a href="setor.php">Setor</a></li>
                    <li><a href="escola.php">Escola</a></li>
                    <li><a href="visita.php">Visitas</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Relatórios</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Relatórios</a></li>
                    <li><a href="#">Setores</a></li>
                    <li><a href="../app/controller/relatorioEscola.php" target="_blank">Escolas</a></li>
                    <li><a href="../app/controller/relatorioVisita.php" target="_blank">Visitas</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Gráficos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Gráficos</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Configurações</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Configurações</a></li>
                </ul>
            </li>
            <li>

            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <?php echo "Bem-vindo,";?>
                                    <spam class="text-dark"><?php echo $_SESSION['cpf'];?></spam>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#"><i class='bx bx-user'></i> Perfil</a></li>
                                    <li><a class="dropdown-item" href="#"><i class='bx bx-message-minus'></i>
                                            Mensagens</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="./../app/controller/logout.php"><i
                                                class='bx bx-exit'></i> Sair</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>