<?php
// session_start();

// if (!isset($_SESSION['usuario'])) {
//     header("Location: login.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STAR - Personal IxM</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="img\favicon.png">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div include-html="sidebar.html"></div>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                    <div style="position: absolute; left: 50%; transform: translateX(-50%);">
                        <h1 class="h3 mb-0 text-gray-800">Personal Investigadores por México</h1>
                    </div>
                    </nav>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                        <!-- Nav Item - Alerts -->

                        <!-- Nav Item - Messages -->

                        <!-- Nav Item - User Information -->

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <p class="text-muted small text-center d-block d-md-none">
                                    <i class="fas fa-info-circle"></i> Toca + para más detalles.
                                </p>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th data-priority="3">CVU</th>
                                            <th data-priority="1">Nombre Completo</th>
                                            <th data-priority="2">Colaborador</th>
                                            <th data-priority="4">ORCID</th>
                                            <th data-priority="5">SNII</th>
                                            <th data-priority="6">Vencimiento SNII</th>
                                            <th data-priority="7">Coordinación</th>
                                            <th data-priority="8">Correo institucional</th>
                                            <th data-priority="9">Inicio de la estancia</th>
                                            <th data-priority="10">Vigencia estancia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>166850</td>
                                            <td>Hernández Oñate Miguel Ángel</td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td>2029</td>
                                            <td>CA</td>
                                            <td><a href="mailto:miguel.hernandez@ciad.mx">miguel.hernandez@ciad.mx</a>
                                            </td>
                                            <td>2025</td>
                                            <td>2035</td>
                                        </tr>
                                        <tr>
                                            <td>38634</td>
                                            <td>Aguirre von Webeser Eneas</td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td>2025</td>
                                            <td>CA (UR Hildago)</td>
                                            <td><a href="mailto:eneas.aguirre@ciad.mx">eneas.aguirre@ciad.mx </a></td>
                                            <td>2016</td>
                                            <td>2026</td>
                                        </tr>
                                        <tr>
                                            <td>271335</td>
                                            <td>Cabrera Ruiz Rosina</td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td>2028</td>
                                            <td>CA (UR Hildago)</td>
                                            <td><a href="mailto:rosina.cabrera@ciad.mx">rosina.cabrera@ciad.mx </a></td>
                                            <td>2016</td>
                                            <td>2026</td>
                                        </tr>
                                        <tr>
                                            <td>166897</td>
                                            <td>Gonzalez Mendoza Victor Manuel</td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td>2027</td>
                                            <td>CA (UR Hildago)</td>
                                            <td><a href="mailto:victor.gonzalez@ciad.mx">victor.gonzalez@ciad.mx</a>
                                            </td>
                                            <td>2024</td>
                                            <td>2034</td>
                                        </tr>
                                        <tr>
                                            <td>103477</td>
                                            <td>García Salazar Edith Miriam</td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td>2028</td>
                                            <td>CA (UR Hildago)</td>
                                            <td><a href="mailto:edith.garcia@ciad.mx">edith.garcia@ciad.mx</a></td>
                                            <td>2022</td>
                                            <td>2032</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Anzurez Valencia Edgar</td>
                                            <td></td>
                                            <td></td>
                                            <td>NA</td>
                                            <td></td>
                                            <td>CEIBAAS</td>
                                            <td><a href="mailto:edgar.anzurez@ciad.mx">edgar.anzurez@ciad.mx</a></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Gonzalez Robles Maura</td>
                                            <td></td>
                                            <td></td>
                                            <td>NA</td>
                                            <td></td>
                                            <td>CEIBAAS</td>
                                            <td><a href="mailto:maura.gonzalez@ciad.mx">maura.gonzalez@ciad.mx</a></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Virgen Ortiz José Juan</td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>CIDAM</td>
                                            <td><a href="mailto:jose.virgen@ciad.mx">jose.virgen@ciad.mx</a></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>275333</td>
                                            <td>Medrano Félix José Andrés</td>
                                            <td>Nohelia Castro del Campo</td>
                                            <td><a
                                                    href="https://orcid.org/0000-0003-4963-2175">https://orcid.org/0000-0003-4963-2175</a>
                                            </td>
                                            <td>1</td>
                                            <td>2025</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:jose.medrano@ciad.edu.mx">jose.medrano@ciad.edu.mx </a>
                                            </td>
                                            <td>2015</td>
                                            <td>2025</td>
                                        </tr>
                                        <tr>
                                            <td>166471</td>
                                            <td>Villicaña Torres María Claudia</td>
                                            <td>Josefina León Félix</td>
                                            <td><a
                                                    href="https://orcid.org/0000-0002-3737-8416">https://orcid.org/0000-0002-3737-8416</a>
                                            </td>
                                            <td>1</td>
                                            <td>2025</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:maria.villicana@ciad.mx">maria.villicana@ciad.mx</a>
                                            </td>
                                            <td>2017</td>
                                            <td>2027</td>
                                        </tr>
                                        <tr>
                                            <td>423316</td>
                                            <td>Gutierrez Grijalva Erick Paul</td>
                                            <td>José Basilio Heredia</td>
                                            <td><a
                                                    href="https://orcid.org/0000-0002-1366-408X">https://orcid.org/0000-0002-1366-408X</a>
                                            </td>
                                            <td>1</td>
                                            <td>2029</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:erick.gutierrez@ciad.mx">erick.gutierrez@ciad.mx</a>
                                            </td>
                                            <td>2018</td>
                                            <td>2028</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Ávalos Soriano Anaguiven</td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td><a href="mailto:anaguiven.avalos@ciad.mx">anaguiven.avalos@ciad.mx</a>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Guerrero Ruíz Carlos Abraham</td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td><a href="mailto:aguerrero@ciad.mx">aguerrero@ciad.mx</a></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>296819</td>
                                            <td>Vargas Ortiz Manuel Alejandro</td>
                                            <td>Aarón Fernando González Córdova</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-3949-8374">http://orcid.org/0000-0002-3949-8374</a>
                                            </td>
                                            <td>2</td>
                                            <td>2028</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:manuel.vargas@ciad.mx">manuel.vargas@ciad.mx</a></td>
                                            <td>2016</td>
                                            <td>2026</td>
                                        </tr>
                                        <tr>
                                            <td>270830</td>
                                            <td>Vargas Sanchez Rey David</td>
                                            <td>Armida Sánchez Escalante</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-8537-1155">http://orcid.org/0000-0002-8537-1155</a>
                                            </td>
                                            <td>1</td>
                                            <td>2026</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:rey.vargas@ciad.mx">rey.vargas@ciad.mx</a></td>
                                            <td>2018</td>
                                            <td>2028</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Quintana Obregón Eber Addí</td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a href="mailto:eber.quintana@ciad.mx">eber.quintana@ciad.mx</a></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>López Martínez Leticia Xochitl</td>
                                            <td></td>
                                            <td></td>
                                            <td>2</td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a href="mailto:leticia.lopez@ciad.mx">leticia.lopez@ciad.mx</a></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Dominguez Avila Jesus Abraham</td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a href="mailto:jesus.dominguez@ciad.mx">jesus.dominguez@ciad.mx </a>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <div include-html="footer.html"></div>

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Include HTML -->
    <script src="js/includeHtml.js"></script>
    <script>includeHTML();</script>
<!-- Responsive DataTables JS -->
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

</body>

</html>