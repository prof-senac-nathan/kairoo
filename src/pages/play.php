<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kairoo | Jogar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/game.css">
    <link rel="shortcut icon" href="../imgs/kairoo.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar bg-header py-4">
        <div class="container-fluid ms-3 me-3">
            <img src="../imgs/logoheader.png" alt="Kairoo" width="150px">

            <ul class="nav">
                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="../../index.php"
                        class="me-4 text-decoration-none rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5">INÍCIO</a>
                </li>

                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="about.php"
                        class="me-4 text-decoration-none rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5">SOBRE</a>
                </li>

                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="play.php"
                        class="text-decoration-none active rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5"
                        aria-current="page">JOGAR</a>
                </li>

                <li class="nav-item d-xxl-none d-xl-none d-xxl-block d-lg-none d-xl-block d-md-none d-lg-block">
                    <button class="navbar-menu rounded-3 p-2 align-items-center d-flex" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                        aria-controls="#navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </li>
            </ul>
            <!--Menu oculto (para celulares)----------------------------->
            <div class="collapse navbar-collapse d-xxl-none d-xl-none d-xxl-block d-lg-none d-xl-block d-md-none d-lg-block"
                id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item mt-3 mb-3 ">
                        <a class="btn-collapseBar fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            href="../../index.php">INICIO</a>
                    </li>

                    <li class="nav-item mb-3">
                        <a class="btn-collapseBar fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            href="about.php">SOBRE</a>
                    </li>

                    <li class="nav-item">
                        <a class="active fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            aria-current="page" href="#">JOGAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="d-flex justify-content-center align-items-center my-5">

    <iframe id="gameIframe" class="d-flex justify-content-center align-items-center"
        src="../game/index.html" 
        width="1280" 
        height="720" 
        frameborder="0"
    >
        Seu navegador não suporta iframes.
    </iframe>
    
    </main>

    <script src="../scripts/playBtn.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>