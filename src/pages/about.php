<?php
session_start();

$type_user = $_SESSION['type_user'] ?? 'GUEST';
$logado = $_SESSION['logado'] ?? false;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kairoo | Sobre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="shortcut icon" href="../imgs/kairoo.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar bg-header">
        <div class="container-fluid ms-3 me-3">
            <img src="../imgs/logoheader.png" alt="Kairoo" width="150px">

            <ul class="nav d-flex align-items-center <?php if (!$logado) echo 'py-2'; ?> ">
                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="../../index.php"
                        class="me-4 text-decoration-none rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5"
                        aria-current="page">INÍCIO</a>
                </li>

                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="about.php"
                        class="me-4 text-decoration-none active rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5">SOBRE</a>
                </li>

                <?php
                if ($logado && $type_user == 'STUDENT') {
                ?>
                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="play.php"
                        class="text-decoration-none rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5"
                        aria-current="page">JOGAR</a>
                </li>
                <?php
                } elseif ($logado && $type_user == 'TEACHER') {
                ?>
                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="createRoom.php"
                        class="text-decoration-none rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5"
                        aria-current="page">CRIAR SALA</a>
                </li>
                <?php
                } else {
                ?>
                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="login.php"
                        class="text-decoration-none rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5">ENTRAR</a>
                </li>
                <?php
                }
                ?>

                <li class="nav-item d-xxl-none d-xl-none d-xxl-block d-lg-none d-xl-block d-md-none d-lg-block">
                    <button class="navbar-menu rounded-3 p-2 align-items-center d-flex" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                        aria-controls="#navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </li>

                <?php
                if ($logado) {
                ?>
                <li class="nav-item">
                    <a href="../pages/profile.php"
                        class="ms-4 text-decoration-none rounded-pill fw-bold btn-profile d-flex justify-content-center align-items-center p-1 fs-5">
                    </a>
                </li>
                <?php
                }
                ?>

            </ul>
            <!--Menu oculto (para celulares)-->
            <div class="collapse navbar-collapse d-xxl-none d-xl-none d-xxl-block d-lg-none d-xl-block d-md-none d-lg-block"
                id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item mt-3 mb-3 ">
                        <a class="btn-collapseBar fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            aria-current="page" href="../../index.php">INICIO</a>
                    </li>

                    <li class="nav-item mb-3">
                        <a class="active fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            href="about.php">SOBRE</a>
                    </li>
                    <?php
                    if ($logado && $type_user == 'STUDENT') {
                    ?>
                    <li class="nav-item">
                        <a class="btn-collapseBar fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            href="play.php">JOGAR</a>
                    </li>
                    <?php
                    } elseif ($logado && $type_user == 'TEACHER') {
                    ?>
                    <li class="nav-item">
                        <a class="btn-collapseBar fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            href="createRoom.php">CRIAR SALA</a>
                    </li>
                    <?php
                    } else {
                    ?>
                    <li class="nav-item">
                        <a class="btn-collapseBar fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            href="login.php">ENTRAR</a>
                    </li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>

    <main class=" mt-5">
        <div class="localRow d-flex justify-content-center align-items-center">
            <div class="col-lg-7">
                <div class="box1 p-3 rounded-3">
                    <h2 class="text-center fw-bold py-3" style="color: #48005d;">QUEM SOMOS?</h2>

                    <p class="fs-5 fw-medium text-light">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, ipsam a aut inventore,
                        adipisci beatae repellat eum facilis veniam illo nobis amet, ullam doloremque. Vel officiis
                        assumenda tempora iure doloribus? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Odit illo ipsam saepe itaque earum ex rem, sunt omnis repellat distinctio eum aspernatur quis
                        totam blanditiis molestias exercitationem, vel consequuntur maiores. Lorem ipsum dolor, sit
                        amet consectetur adipisicing elit. Neque, ipsam a aut inventore,
                        adipisci beatae repellat eum facilis veniam illo nobis amet, ullam doloremque. Vel officiis
                        assumenda tempora iure doloribus? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Odit illo ipsam saepe itaque earum ex rem, sunt omnis repellat distinctio eum aspernatur quis
                        totam blanditiis molestias exercitationem, vel consequuntur maiores. Lorem ipsum dolor, sit
                        amet consectetur adipisicing elit. Neque, ipsam a aut inventore,
                        adipisci beatae repellat eum facilis veniam illo nobis amet, ullam doloremque. Vel officiis
                        assumenda tempora iure doloribus?
                    </p>
                </div>
            </div>

            <div class="col-lg-4 d-flex justify-content-center">
                <img class="rounded-3" height="450px" src="../imgs/kairooTeam.png">
            </div>
        </div>

        <div class="localRow mt-5">
            <div class="localCarousel">
                <div class="group gap-4">
                    <div class="item">
                        <h2 class="text-center fw-bold py-3" style="color: #48005d;">Design</h2>

                        <ul class="fs-5 fw-medium text-light">
                            <li>MARIA EDUARDA PEREIRARODRIGUES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li>DAVI DE MELO MENESES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li class="liMarker">GERSON <span style="color: #7a3db0;">(GAME)</span></li>
                            
                            <li>DANILO OLIVEIRA <span style="color: #7a3db0;">(GAME)</span></li>
                    </div>
                    <div class="item">
                        <h2 class="text-center fw-bold py-3" style="color: #48005d;">Design</h2>

                        <ul class="fs-5 fw-medium text-light">
                            <li>MARIA EDUARDA PEREIRARODRIGUES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li>DAVI DE MELO MENESES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li class="liMarker">GERSON <span style="color: #7a3db0;">(GAME)</span></li>
                            
                            <li>DANILO OLIVEIRA <span style="color: #7a3db0;">(GAME)</span></li>
                    </div>
                    <div class="item">
                        <h2 class="text-center fw-bold py-3" style="color: #48005d;">Design</h2>

                        <ul class="fs-5 fw-medium text-light">
                            <li>MARIA EDUARDA PEREIRARODRIGUES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li>DAVI DE MELO MENESES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li class="liMarker">GERSON <span style="color: #7a3db0;">(GAME)</span></li>

                            <li>DANILO OLIVEIRA <span style="color: #7a3db0;">(GAME)</span></li>
                        </ul>
                    </div>
                </div>
                <div aria-hidden class="group gap-4">
                    <div class="item">
                        <h2 class="text-center fw-bold py-3" style="color: #48005d;">Design</h2>

                        <ul class="fs-5 fw-medium text-light">
                            <li>MARIA EDUARDA PEREIRARODRIGUES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li>DAVI DE MELO MENESES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li class="liMarker">GERSON <span style="color: #7a3db0;">(GAME)</span></li>
                            
                            <li>DANILO OLIVEIRA <span style="color: #7a3db0;">(GAME)</span></li>
                    </div>
                    <div class="item">
                        <h2 class="text-center fw-bold py-3" style="color: #48005d;">Design</h2>

                        <ul class="fs-5 fw-medium text-light">
                            <li>MARIA EDUARDA PEREIRARODRIGUES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li>DAVI DE MELO MENESES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li class="liMarker">GERSON <span style="color: #7a3db0;">(GAME)</span></li>
                            
                            <li>DANILO OLIVEIRA <span style="color: #7a3db0;">(GAME)</span></li>
                    </div>
                    <div class="item">
                        <h2 class="text-center fw-bold py-3" style="color: #48005d;">Design</h2>

                        <ul class="fs-5 fw-medium text-light">
                            <li>MARIA EDUARDA PEREIRARODRIGUES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li>DAVI DE MELO MENESES <span style="color: #7a3db0;">(SITE)</span></li>

                            <li class="liMarker">GERSON <span style="color: #7a3db0;">(GAME)</span></li>

                            <li>DANILO OLIVEIRA <span style="color: #7a3db0;">(GAME)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>