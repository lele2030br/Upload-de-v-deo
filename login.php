<?php
session_start();

// Credenciais do administrador
$adminUsername = 'admin';
$adminPassword = '123456'; // Substitua por uma senha forte

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
        $password = $_POST['password'];

            // Validar credenciais
                if ($username === $adminUsername && $password === $adminPassword) {
                        $_SESSION['loggedin'] = true;
                                header('Location: admin.php');
                                        exit;
                                            } else {
                                                    $error = "Nome de usuário ou senha inválidos.";
                                                        }
                                                        }
                                                        ?>
                                                        <!DOCTYPE html>
                                                        <html lang="en">
                                                        <head>
                                                          <meta charset="UTF-8">
                                                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                              <title>Login</title>
                                                                <!-- Bootstrap CSS -->
                                                                  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
                                                                  </head>
                                                                  <body class="bg-light">
                                                                    <div class="container mt-5">
                                                                        <h1 class="text-center mb-4">Login Administrativo</h1>
                                                                            <div class="row justify-content-center">
                                                                                  <div class="col-md-4">
                                                                                          <form method="POST" action="login.php">
                                                                                                    <?php if (isset($error)): ?>
                                                                                                                <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                                                                                                                          <?php endif; ?>
                                                                                                                                    <div class="mb-3">
                                                                                                                                                <label for="username" class="form-label">Nome de Usuário</label>
                                                                                                                                                            <input type="text" name="username" id="username" class="form-control" required>
                                                                                                                                                                      </div>
                                                                                                                                                                                <div class="mb-3">
                                                                                                                                                                                            <label for="password" class="form-label">Senha</label>
                                                                                                                                                                                                        <input type="password" name="password" id="password" class="form-control" required>
                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                            <button type="submit" class="btn btn-primary w-100">Entrar</button>
                                                                                                                                                                                                                                    </form>
                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                  <!-- Bootstrap JS -->
                                                                                                                                                                                                                                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
                                                                                                                                                                                                                                                    </body>
                                                                                                                                                                                                                                                    </html>