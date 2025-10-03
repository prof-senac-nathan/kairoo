<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kairoo | Início</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/home.css">
    <link rel="stylesheet" href="src/css/book.css">
    <link rel="shortcut icon" href="src/imgs/kairoo.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar bg-header py-4">
        <div class="container-fluid ms-3 me-3">
            <img src="src/imgs/logoheader.png" alt="Kairoo" width="150px">

            <ul class="nav">
                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="src/pages/home.php"
                        class="me-4 text-decoration-none active rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5"
                        aria-current="page">INÍCIO</a>
                </li>

                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="src/pages/about.php"
                        class="me-4 text-decoration-none rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5">SOBRE</a>
                </li>

                <li class="nav-item d-sm-none d-md-block d-none d-sm-block">
                    <a href="src/pages/login.php"
                        class="text-decoration-none rounded-pill fw-bold btn-header d-flex justify-content-center p-1 fs-5">ENTRAR</a>
                </li>

                <li class="nav-item d-xxl-none d-xl-none d-xxl-block d-lg-none d-xl-block d-md-none d-lg-block">
                    <button class="navbar-menu rounded-3 p-2 align-items-center d-flex" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                        aria-controls="#navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </li>
            </ul>
            <!--Menu oculto (para celulares)-->
            <div class="collapse navbar-collapse d-xxl-none d-xl-none d-xxl-block d-lg-none d-xl-block d-md-none d-lg-block"
                id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item mt-3 mb-3 ">
                        <a class="active fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            aria-current="page" href="#">INICIO</a>
                    </li>

                    <li class="nav-item mb-3">
                        <a class="btn-collapseBar fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            href="src/pages/about.php">SOBRE</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn-collapseBar fw-bold py-2 text-decoration-none rounded-3 d-flex justify-content-center"
                            href="src/pages/play.php">JOGAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="d-flex justify-content-center">
            <div class="row mt-5">
                <div class="col">
                    <div class="row">
                        <div class="box p-3 rounded-3">
                            <h2>Lorem ipsum dolor</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore dignissimos adipisci
                                provident magni! Dolor, laudantium ipsum eos necessitatibus reiciendis quia repudiandae
                                libero eaque aperiam dolorem laboriosam porro ex reprehenderit modi.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="box p-3 rounded-3 mt-5">
                            <h2>Lorem ipsum dolor</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore dignissimos adipisci
                                provident magni! Dolor, laudantium ipsum eos necessitatibus reiciendis quia repudiandae
                                libero eaque aperiam dolorem laboriosam porro ex reprehenderit modi.</p>
                        </div>
                    </div>
                </div>

                <div class="col mx-5">
                    <div class="boxBook p-3 rounded 3 d-flex justify-content-center align-items-center">
                        <div class="cardBook">
                            <div class="coverBook">
                                <img src="src/imgs/coverBook.png">
                                <!--       <img src="../imgs/coverBook.png"> -->
                            </div>

                            <div class="contentBook">
                                <h2>Titulo</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vel iusto repellat
                                    tenetur laboriosam suscipit magnam ducimus enim dolores animi a, veniam quas hic,
                                    reiciendis quibusdam labore aut neque iure.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vel iusto repellat
                                    tenetur laboriosam suscipit magnam ducimus enim dolores animi a, veniam quas hic,
                                    reiciendis quibusdam labore aut neque iure.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vel iusto repellat
                                    tenetur laboriosam suscipit magnam ducimus enim dolores animi a, veniam quas hic,
                                    reiciendis quibusdam labore aut neque iure.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <div class="box p-3 rounded-3">
                            <h2>Lorem ipsum dolor</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore dignissimos adipisci
                                provident magni! Dolor, laudantium ipsum eos necessitatibus reiciendis quia repudiandae
                                libero eaque aperiam dolorem laboriosam porro ex reprehenderit modi.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="box p-3 rounded-3 mt-5">
                            <h2>Lorem ipsum dolor</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore dignissimos adipisci
                                provident magni! Dolor, laudantium ipsum eos necessitatibus reiciendis quia repudiandae
                                libero eaque aperiam dolorem laboriosam porro ex reprehenderit modi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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