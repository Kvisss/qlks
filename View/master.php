<!DOCTYPE html>
<html>


<head>
    <?php //include("./View/Tree/head.php"); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/css/style-header.css">
    <link rel="stylesheet" href="/styles/css/style-footer.css">
    <link rel="stylesheet" href="/styles/css/<?php echo$cssname;?>.css">
    <title><?php echo$name;?></title>
    
</head>

<body>
    <?php include("./View/Tree/header.php"); ?>
    <?php include("./View/$name.php"); ?>
    <?php include("./View/Tree/footer.php"); ?>
    
</body>


</html>