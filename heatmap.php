<?php
session_start();

// if (!isset($_SESSION['usuario'])) {
//     header("Location: login.php");
//     exit;
// }

$ubicaciones = [
    "Hermosillo" => 84,
    "Guaymas" => 6,
    "Culiacán" => 12,
    "Mazatlán" => 13,
    "Cuauhtémoc" => 6,
    "Delicias" => 5,
    "Nayarit" => 0,
    "Hidalgo" => 0
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mapa de Investigadores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <style>
        #map {
            height: 600px;
            width: 100%;
            margin: 2rem auto;
        }
    </style>
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
                        <h1 class="h3 mb-0 text-gray-800">Mapa de Investigadores Titulares</h1>
                    </div>
                <ul class="navbar-nav ml-auto"></ul>
            </nav>

            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Concentración de Investigadores Titulares por Sede</h6>
                    </div>
                    <div class="card-body">
                        <div id="map"></div>
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

<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet.heat/dist/leaflet-heat.js"></script>
<script src="js/includeHtml.js"></script>
<script>
    includeHTML();

    const datosPHP = <?php echo json_encode($ubicaciones); ?>;
    const coordenadas = {
        "Hermosillo": [29.1289554, -110.9089048],
        "Guaymas": [27.8983559, -110.8764186],
        "Culiacán": [24.7337913,-107.4569964],
        "Mazatlán": [23.28689,-106.4688971],
        "Cuauhtémoc": [28.447411,-106.8289868],
        "Delicias": [28.1725623,-105.4546488],
        "Nayarit": [21.751384, -104.845461],
        "Hidalgo": [20.276231, -98.738540]
    };

    const heatData = [];
    for (const ciudad in datosPHP) {
        if (coordenadas[ciudad] && datosPHP[ciudad] > 0) {
            heatData.push([...coordenadas[ciudad], datosPHP[ciudad]]);
        }
    }

    const mapa = L.map('map').setView([24.0, -105.0], 5);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(mapa);

    L.heatLayer(heatData, {
        radius: 25,
        blur: 15,
        maxZoom: 10
    }).addTo(mapa);
</script>

</body>
</html>