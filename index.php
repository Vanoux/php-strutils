<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php-strutils</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<h1>Exo StrUtils</h1>
  <?php
    include('classes/StrUtils.class.php');

    $myStr = new StrUtils('php is awesome !!!');

    echo $myStr->getBold() . '<br>';
    echo $myStr->getItalic() . '<br>';
    echo $myStr->getUnderline(). '<br>';
    echo $myStr->getCapitalize();
 
 ?>

</body>
</html>
