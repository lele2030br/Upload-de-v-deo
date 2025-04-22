<?php
$imageDir = 'uploads/images/';
$images = array_diff(scandir($imageDir), array('.', '..'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Imagens</title>
      </head>
      <body>
        <h1>Imagens</h1>
          <ul>
              <?php foreach ($images as $image): ?>
                    <li>
                            <img src="<?php echo $imageDir . $image; ?>" alt="<?php echo $image; ?>" width="320">
                                    <p><?php echo $image; ?></p>
                                          </li>
                                              <?php endforeach; ?>
                                                </ul>
                                                  <a href="index.php">Voltar</a>
                                                  </body>
                                                  </html>