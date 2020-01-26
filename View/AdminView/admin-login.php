<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TQĐ Admin - Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="<?= URL_BASE; ?>./QLKS/styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL_BASE; ?>./QLKS/styles/css/style-login.css">

</head>

<body>
    <div class="box-login">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2  col-md-6 col-md-offset-3">
                    <FORM action="/QLKS/admincp/loginaction" method="POST">
                        <fieldset>
                            <div class="login">
                                <h1>Đăng Nhập TQD Admin</h1>
                                <div class="form-group box-login-input">
                                    <input type="Username" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="text">
                                </div>
                                <div class="form-group box-login-input">
                                    <input type="Password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Mật khẩu">
                                </div>
                                <div class="form-group box-login-btn">
                                    <button name="" id="" class="btn btn-primary" href="/QLKS/admincp/loginaction" role="button">Đăng nhập</button>
                                </div>
                                <h2><?php echo $mess; ?></h2>

                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
        <div class="background-color"></div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= URL_BASE; ?>./QLKS/styles/js/bootstrap.min.js"></script>
</body>

</html>