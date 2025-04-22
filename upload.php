<?php
$uploadDirVideos = 'uploads/videos/';
$uploadDirImages = 'uploads/images/';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $uploadFile = $_FILES['file'];
        $fileName = basename($uploadFile['name']);
            $fileType = $uploadFile['type'];
                $targetDir = '';

                    // Determinar o diretório com base no tipo de arquivo
                        if (strpos($fileType, 'video') !== false) {
                                $targetDir = $uploadDirVideos;
                                    } elseif (strpos($fileType, 'image') !== false) {
                                            $targetDir = $uploadDirImages;
                                                }

                                                    if ($targetDir && move_uploaded_file($uploadFile['tmp_name'], $targetDir . $fileName)) {
                                                            $message = "Arquivo '$fileName' enviado com sucesso!";
                                                                    $alertType = "success";
                                                                        } else {
                                                                                $message = "Falha ao enviar o arquivo. Por favor, tente novamente.";
                                                                                        $alertType = "danger";
                                                                                            }
                                                                                            } else {
                                                                                                $message = "Nenhum arquivo foi enviado.";
                                                                                                    $alertType = "warning";
                                                                                                    }
                                                                                                    ?>
                                                                                                    <!DOCTYPE html>
                                                                                                    <html lang="en">
                                                                                                    <head>
                                                                                                      <meta charset="UTF-8">
                                                                                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                                                                          <title>Upload</title>
                                                                                                            <!-- Bootstrap CSS -->
                                                                                                              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
                                                                                                                <style>
                                                                                                                    body {
                                                                                                                          background-color: #f8f9fa;
                                                                                                                              }
                                                                                                                                </style>
                                                                                                                                </head>
                                                                                                                                <body>
                                                                                                                                  <!-- Navbar -->
                                                                                                                                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                                                                                                                        <div class="container">
                                                                                                                                              <a class="navbar-brand" href="index.php">Gerenciador de Arquivos</a>
                                                                                                                                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                                                                                                                            <span class="navbar-toggler-icon"></span>
                                                                                                                                                                  </button>
                                                                                                                                                                        <div class="collapse navbar-collapse" id="navbarNav">
                                                                                                                                                                                <ul class="navbar-nav">
                                                                                                                                                                                          <li class="nav-item"><a class="nav-link" href="index.php">Upload</a></li>
                                                                                                                                                                                                    <li class="nav-item"><a class="nav-link" href="videos.php">Vídeos</a></li>
                                                                                                                                                                                                              <li class="nav-item"><a class="nav-link" href="images.php">Imagens</a></li>
                                                                                                                                                                                                                        <li class="nav-item"><a class="nav-link" href="admin.php">Administração</a></li>
                                                                                                                                                                                                                                </ul>
                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                            </nav>

                                                                                                                                                                                                                                              <!-- Mensagem de Upload -->
                                                                                                                                                                                                                                                <div class="container mt-5">
                                                                                                                                                                                                                                                    <div class="alert alert-<?php echo $alertType; ?>">
                                                                                                                                                                                                                                                          <?php echo htmlspecialchars($message); ?>
                                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                                  <a href="index.php" class="btn btn-primary">Voltar para Upload</a>
                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                      <!-- Bootstrap JS -->
                                                                                                                                                                                                                                                                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
                                                                                                                                                                                                                                                                        </body>
                                                                                                                                                                                                                                                                        </html>