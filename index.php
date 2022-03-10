<?php

   $paragrafo = "il mio primo nuovo progetto con php";

   var_dump($_GET);

   if(isset($_GET['censura'])) {

    $censura = $_GET['censura'];
    
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <h1>Ciao questo è <?php echo$paragrafo ?>!</h1>

    <h4>La mia stringa è lunga: "<?php echo strlen($paragrafo)?>" caratteri.</h4>

    <?php echo str_replace($censura, '***', $paragrafo)?>
    
</head>
<body>
    
</body>
</html>