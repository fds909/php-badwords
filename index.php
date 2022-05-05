<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<body>
  <?php
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet placerat urna, non lacinia mauris ornare nec. Morbi ut sem in neque ultricies tristique ut sed sem.";
    echo ("<p> $paragraph" . "[lunghezza: " . strlen($paragraph) . "]</p>");
    $paragraph_censored = isset($_GET['badword']) ? str_replace($_GET['badword'], '***', $paragraph) : "";
    $paragraph_censored_len = isset($paragraph_censored) ? strlen($paragraph_censored) : "";
    echo ("<p>Testo censurato: " . $paragraph_censored . "[lunghezza: " . $paragraph_censored_len . "]" . "</p>");
  ?>

  <form method="GET" action="index.php">
    <label>Paorola da censurare: </label>
    <input type="text" name="badword"/>
    <input type="submit"/>
  </form>
</body>
</html>