<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}


$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productos'])) {
    $productos = (int) $_POST['productos'];
    $meta_total = 360;

    $data = [
        "productos_actuales" => $productos,
        "meta_total" => $meta_total
    ];

    $archivo = __DIR__ . '/metas.json';
    if (file_put_contents($archivo, json_encode($data, JSON_PRETTY_PRINT))) {
        $msg = "Actualizado correctamente: $productos productos registrados.";
    } else {
        $msg = "Error al guardar los datos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar productos</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body id="page-top">

    <div id="wrapper">

        <div include-html="sidebar.html"></div>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div style="position: absolute; left: 50%; transform: translateX(-50%);">
                        <h1 class="h3 mb-0 text-gray-800">Actualizar Productos</h1>
                    </div>
                </nav>

                <div class="container-fluid">
                    <?php if ($msg): ?>
                        <div class="alert alert-info text-center"><?= htmlspecialchars($msg) ?></div>
                    <?php endif; ?>

                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card shadow">
                                <div class="card-header" style="background-color: #7B113A; color: white;">
                                    <h6 class="m-0">Actualizar cantidad de productos actuales</h6>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <label for="productos">Número total de productos:</label>
                                            <input type="number" class="form-control" id="productos" name="productos" required>
                                        </div>
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <a href="index.php" class="btn btn-secondary ml-2">Volver al inicio</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div include-html="footer.html"></div>

        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/includeHtml.js"></script>
    <script>includeHTML();</script>
</body>

</html>