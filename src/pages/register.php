<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kairoo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../imgs/kairoo.png" type="image/x-icon">
</head>

<body class="py-4">
    <main class="w-100 m-auto text-center mainForm">
        <form action="../backend/register_user.php" class="needs-validation" method="post" novalidate>
            <img src="../imgs/logokairoo.png" class="mb-4" width="250">

            <div class="form-floating">
                <input type="text" name="name_user" class="form-control border border-0 validacaoUsuario"
                    id="floatingInput" placeholder="email" required>
                <label for="floatingInput">Nome de Usuário</label>

                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating mt-3">
                <input type="email" name="email_user" class="form-control border border-0 validacaoEmail"
                    id="floatingInput" placeholder="email" required>
                <label for="floatingInput">E-mail</label>

                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating mt-3">
                <input type="password" name="password_user" class="form-control border border-0 validacaoSenha"
                    id="floatingInput" placeholder="password" required>
                <label for="floatingInput">Senha</label>

                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input border border-0" type="checkbox" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault" style="color: white;">Lembrar senha</label>
            </div>

            <button type="submit" class="btn button w-100 py-3">Cadastrar</button>
            <a href="login.php" class="text-decoration-none text-white btn button w-100 py-3 mt-3">Entrar</a>
        </form>
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
    <script src="../scripts/register.js"></script>
</body>

</html>