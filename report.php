<?php
// Arquivo para armazenar as denúncias
$reportFile = 'reports.json';

// Verifica se a denúncia foi enviada
if (isset($_GET['file'])) {
    $reportedFile = $_GET['file'];
        $reportData = [
                'file' => $reportedFile,
                        'date' => date('Y-m-d H:i:s')
                            ];

                                // Carrega as denúncias existentes
                                    $existingReports = [];
                                        if (file_exists($reportFile)) {
                                                $existingReports = json_decode(file_get_contents($reportFile), true);
                                                    }

                                                        // Adiciona a nova denúncia
                                                            $existingReports[] = $reportData;

                                                                // Salva as denúncias no arquivo
                                                                    file_put_contents($reportFile, json_encode($existingReports, JSON_PRETTY_PRINT));

                                                                        $message = "O arquivo '$reportedFile' foi denunciado com sucesso.";
                                                                        } else {
                                                                            $message = "Nenhum arquivo foi especificado para denúncia.";
                                                                            }
                                                                            ?>
                                                                            <!DOCTYPE html>
                                                                            <html lang="en">
                                                                            <head>
                                                                              <meta charset="UTF-8">
                                                                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                                                  <title>Denúncia</title>
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

                                                                                                                                                                                                                      <!-- Mensagem de Denúncia -->
                                                                                                                                                                                                                        <div class="container mt-5">
                                                                                                                                                                                                                            <div class="alert alert-success">
                                                                                                                                                                                                                                  <?php echo htmlspecialchars($message); ?>
                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                          <a href="videos.php" class="btn btn-primary">Voltar para Vídeos</a>
                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                              <!-- Bootstrap JS -->
                                                                                                                                                                                                                                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
                                                                                                                                                                                                                                                </body>
                                                                                                                                                                                                                                                </html>