<?php
    $paragraph= $_POST['paragraphText'];
    $censure = $_POST['wordToCensure'];
    
    
    $censuredParagraph = str_replace($censure,'***',$paragraph);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Paragrafo originale (<?php echo strlen($paragraph); ?> caratteri)</h2>


      <p><?php echo $paragraph ?></p>

      <p><?php echo $censuredParagraph ?></p>
</body>
</html>
      




