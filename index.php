<!DOCTYPE html>
<?
    if (count($_POST)) {
        include 'render.php';
        exit;
    }
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Hacete un Certificate Of Incorporation de Belize!</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="index.css" type="text/css" />
</head>
<body>
    <div class="navbar navbar-fixed-top" style="position: absolute;">
        <div class="navbar-inner">
            <div class="container" style="width: auto; padding: 0 20px;">
                <a class="brand" href="#">Hacete un Certificate Of Belize!</a>
                <ul class="nav">
                    <li class="active"><a href="#">Crear certificado</a></li>
                    <!--li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li-->
                </ul>
            </div>
        </div>
    </div>
    <div class="hero-unit">
        <h1>Hacete un Certificate of Belize</h1>
        <form action="" method="post">
            <p>Hacete uno y compartilo en Facebook!</p>
            <div class="input-append">
                <input type="text" name="fullname" value="" placeholder="Juan Perez">
                <input class="btn btn-primary" type="submit" value="Generar!" />
            </div>
        </form>
        <p>
            <img src="artwork/v1.jpg" />
        </p>
    </div>
</body>
</html>
