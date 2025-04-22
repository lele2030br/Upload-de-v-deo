<?php
$videoDir = 'uploads/videos/';
$videos = array_diff(scandir($videoDir), array('.', '..'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vídeos</title>
      </head>
      <body>
        <h1>Vídeos</h1>
          <ul>
              <?php foreach ($videos as $video): ?>
                    <li>
                            <video controls width="320">
                                      <source src="<?php echo $videoDir . $video; ?>" type="video/mp4">
                                              </video>
                                                      <p><?php echo $video; ?></p>
                                                            </li>
                                                                <?php endforeach; ?>
                                                                  </ul>
                                                                    <a href="index.php">Voltar</a>
                                                                    </body>
                                                                    </html>