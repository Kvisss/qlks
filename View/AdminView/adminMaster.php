<!DOCTYPE html>
<html lang="en">


<head>
    <?php //include("./view/tree/head.php"); 
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- link font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL_BASE; ?>/QLKS/styles/cssAdmin/style-member.css">
    <link rel="stylesheet" href="<?= URL_BASE; ?>/QLKS/styles/cssAdmin/style-header.css">

    <link rel="stylesheet" href="<?= URL_BASE; ?>/QLKS/styles/cssAdmin/<?php echo $cssname; ?>.css">

    <title><?php echo $name; ?></title>

</head>

<body>
    <?php include("./view/tree/adminHeader.php"); ?>
    <?php include("./View/AdminView/$name.php"); ?>


</body>


</html>