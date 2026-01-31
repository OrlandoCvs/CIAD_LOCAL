<?php
require_once "conexion.php";

// Consulta
$stmt = $pdo->query("
SELECT
    p.CVU AS cvu,
    p.NombreCompleto AS nombre,
    p.ORCID AS orcid,
    p.SNII AS snii,
    p.VencimientoSNII AS vencimiento_snii,
    p.CorreoInstitucional AS correo,
    i.Colaborador AS colaborador,
    i.Coordinacion AS coordinacion,
    i.InicioEstancia AS inicio_estancia,
    i.VigenciaEstancia AS vigencia_estancia
FROM personal p
JOIN ixm i ON p.CVU = i.CVU
WHERE p.TipoPersonal = 'IxM'
");

$filas = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>STAR - Personal IxM</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    <link rel="icon" type="image/x-icon" href="img/favicon.png">
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
        <h1 class="h3 mb-0 text-gray-800">Personal Investigadores por México</h1>
    </div>
</nav>

<div class="container-fluid">

<div class="card shadow mb-4">
<div class="card-body">
<div class="table-responsive">

<p class="text-muted small text-center d-block d-md-none">
    <i class="fas fa-info-circle"></i> Toca + para más detalles.
</p>

<table class="table table-bordered" id="dataTable" width="100%">
<thead>
<tr>
    <th>CVU</th>
    <th>Nombre Completo</th>
    <th>Colaborador</th>
    <th>ORCID</th>
    <th>SNII</th>
    <th>Vencimiento SNII</th>
    <th>Coordinación</th>
    <th>Correo institucional</th>
    <th>Inicio de la estancia</th>
    <th>Vigencia estancia</th>
</tr>
</thead>

<tbody>
<?php foreach ($filas as $row): ?>
<tr>
    <td><?= htmlspecialchars($row['cvu']) ?></td>
    <td><?= htmlspecialchars($row['nombre']) ?></td>
    <td><?= htmlspecialchars($row['colaborador']) ?></td>

    <td>
        <?php if (!empty($row['orcid'])): ?>
            <a href="<?= htmlspecialchars($row['orcid']) ?>" target="_blank">
                <?= htmlspecialchars($row['orcid']) ?>
            </a>
        <?php endif; ?>
    </td>

    <td><?= htmlspecialchars($row['snii']) ?></td>
    <td><?= htmlspecialchars($row['vencimiento_snii']) ?></td>
    <td><?= htmlspecialchars($row['coordinacion']) ?></td>

    <td>
        <?php if (!empty($row['correo'])): ?>
            <a href="mailto:<?= htmlspecialchars($row['correo']) ?>">
                <?= htmlspecialchars($row['correo']) ?>
            </a>
        <?php endif; ?>
    </td>

    <td><?= htmlspecialchars($row['inicio_estancia']) ?></td>
    <td><?= htmlspecialchars($row['vigencia_estancia']) ?></td>
</tr>
<?php endforeach; ?>
</tbody>

</table>
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

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>

<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>

<script src="js/includeHtml.js"></script>
<script>includeHTML();</script>

<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

</body>
</html>
