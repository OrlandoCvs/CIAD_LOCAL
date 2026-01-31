<?php
// session_start();

// // if (!isset($_SESSION['usuario'])) {
// //     header("Location: login.php");
// //     exit;
// // }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STAR - Personal PosDocs</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Personal Postdoctorante</h1>
                    </div>
                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->

                        <!-- Nav Item - Messages -->

                        <!-- Nav Item - User Information -->

                    </ul>

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
                                            <th data-priority="2">Investigador Responsable</th>
                                            <th data-priority="4">ORCID</th>
                                            <th data-priority="5">SNII</th>
                                            <th data-priority="6">Vencimiento SNII</th>
                                            <th data-priority="7">Coordinación</th>
                                            <th data-priority="8">Correo institucional</th>
                                            <th data-priority="9">Inicio de la estancia</th>
                                            <th data-priority="10">Fin de la estancia</th>
                                            <th data-priority="11">Prórroga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>566389</td>
                                            <td>Sergio Gerardo Hernandez Leon</td>
                                            <td>Alí Jesús Asaff Torres</td>
                                            <td></td>
                                            <td>1</td>
                                            <td>2029</td>
                                            <td>Ciencia de los Alimentos</td>
                                            <td><a href="mailto:sergio.hernandez@ciad.mx">sergio.hernandez@ciad.mx</a>
                                            </td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2023</td>
                                            <td>30/9/2025</td>
                                        </tr>
                                        <tr>
                                            <td>664874</td>
                                            <td>Amed Gallegos Tabanico</td>
                                            <td>Luz Vázquez Moreno</td>
                                            <td></td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Ciencia de los Alimentos</td>
                                            <td><a href="mailto:amed.gallegos@ciad.mx">amed.gallegos@ciad.mx</a></td>
                                            <td>1/2/2025</td>
                                            <td>1/2/2027</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>101386</td>
                                            <td>Juan Pedro Ortiz Sanchez</td>
                                            <td>Martín Enrique Jara Marín</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Ciencia de los Alimentos</td>
                                            <td><a href="mailto:juanpedro.ortiz@ciad.mx">juanpedro.ortiz@ciad.mx</a>
                                            </td>
                                            <td>1/2/2024</td>
                                            <td>31/1/2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1229620</td>
                                            <td>Alexis Lamz Piedra</td>
                                            <td>Carlos Horacio Acota Muñíz </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Cuauhtémoc</td>
                                            <td><a href="mailto:alexis.lamz@ciad.mx">alexis.lamz@ciad.mx</a></td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>492666</td>
                                            <td>Mayra Cristina Garcia Anaya</td>
                                            <td>Carlos Horacio Acota Muñíz </td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>Cuauhtémoc</td>
                                            <td><a href="mailto:mayra.garcia@ciad.mx">mayra.garcia@ciad.mx</a></td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2023</td>
                                            <td>31/10/2025</td>
                                        </tr>
                                        <tr>
                                            <td>565486</td>
                                            <td>Daniel Alonso Perez Corral</td>
                                            <td>Claudio Ríos Velasco</td>
                                            <td></td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Cuauhtémoc</td>
                                            <td></td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2024</td>
                                            <td>31/10/2026</td>
                                        </tr>
                                        <tr>
                                            <td>639304</td>
                                            <td>Jesús Cristian Amaro Hernández</td>
                                            <td>David Roberto Sepúlveda Ahumada</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Cuauhtémoc</td>
                                            <td></td>
                                            <td>1/2/2025</td>
                                            <td>1/2/2027</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>565419</td>
                                            <td>Adrian Ponce de Leon Door</td>
                                            <td>David Roberto Sepúlveda Ahumada</td>
                                            <td></td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Cuauhtémoc</td>
                                            <td><a
                                                    href="mailto:adrian.poncedeleon@ciad.mx">adrian.poncedeleon@ciad.mx</a>
                                            </td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>273613</td>
                                            <td>Juan Daniel Lira Morales</td>
                                            <td>Cristóbal Chaidez Quiroz</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-7558-3963">http://orcid.org/0000-0002-7558-3963</a>
                                            </td>
                                            <td>C</td>
                                            <td>2027</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:daniel.lira@ciad.mx">daniel.lira@ciad.mx</a></td>
                                            <td>1/10/2022</td>
                                            <td>31/10/2023</td>
                                            <td>30/9/2025</td>
                                        </tr>
                                        <tr>
                                            <td>818472</td>
                                            <td>Jean Pierre Gonzalez Gomez</td>
                                            <td>Cristóbal Chaidez Quiroz</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0003-2994-4358">http://orcid.org/0000-0003-2994-4358</a>
                                            </td>
                                            <td>1</td>
                                            <td>2028</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:jean.gonzalez@ciad.mx">jean.gonzalez@ciad.mx</a></td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>6406247</td>
                                            <td>Marilyn Shomara Criollo Mendoza</td>
                                            <td>Erick Paul Gutiérrez Grijalva</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-2566-3711">http://orcid.org/0000-0002-2566-3711</a>
                                            </td>
                                            <td>C</td>
                                            <td>2028</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:marilyn.criollo@ciad.mx">marilyn.criollo@ciad.mx</a>
                                            </td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>627231</td>
                                            <td>Luis Angel Cabanillas Bojorquez</td>
                                            <td>José Basilio Heredia</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-8943-2891">http://orcid.org/0000-0002-8943-2891</a>
                                            </td>
                                            <td>1</td>
                                            <td>2026</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:luis.cabanillas@ciad.mx">luis.cabanillas@ciad.mx</a>
                                            </td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2023</td>
                                            <td>31/10/2025</td>
                                        </tr>
                                        <tr>
                                            <td>369192</td>
                                            <td>Nayely Leyva Lopez</td>
                                            <td>José Basilio Heredia</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0001-6222-6169">http://orcid.org/0000-0001-6222-6169</a>
                                            </td>
                                            <td>1</td>
                                            <td>2028</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:nayely.leyva@ciad.mx">nayely.leyva@ciad.mx</a></td>
                                            <td>1/10/2023</td>
                                            <td>30/9/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>565701</td>
                                            <td>Maria Belia Contreras Soto</td>
                                            <td>Juan Manuel Tovar Pedraza</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-2566-3711">http://orcid.org/0000-0002-2566-3711</a>
                                            </td>
                                            <td>C</td>
                                            <td>2026</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:belia.contreras@ciad.mx">belia.contreras@ciad.mx</a>
                                            </td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2024</td>
                                            <td>1/12/2026</td>
                                        </tr>
                                        <tr>
                                            <td>507154</td>
                                            <td>Jeny Hinojosa Gomez</td>
                                            <td>María Dolores Muy Rangel</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-1866-0408">http://orcid.org/0000-0002-1866-0408</a>
                                            </td>
                                            <td>C</td>
                                            <td>2026</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:jeny.hinojosa@ciad.mx">jeny.hinojosa@ciad.mx</a></td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2023</td>
                                            <td>30/9/2025</td>
                                        </tr>
                                        <tr>
                                            <td>209569</td>
                                            <td>Perla Marysol Uriarte Aceves</td>
                                            <td>María Dolores Muy Rangel</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0001-9090-6540">http://orcid.org/0000-0001-9090-6540</a>
                                            </td>
                                            <td>1</td>
                                            <td>2028</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:marysol.uriarte@ciad.mx">marysol.uriarte@ciad.mx</a>
                                            </td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2024</td>
                                            <td>1/10/2026</td>
                                        </tr>
                                        <tr>
                                            <td>531137</td>
                                            <td>Irvin Gonzalez Lopez</td>
                                            <td>Nohelia Castro del Campo</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0001-6134-4702">http://orcid.org/0000-0001-6134-4702</a>
                                            </td>
                                            <td>C</td>
                                            <td>2027</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:irvin.gonzalez@ciad.mx">irvin.gonzalez@ciad.mx</a></td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2024</td>
                                            <td>1/12/2026</td>
                                        </tr>
                                        <tr>
                                            <td>745673</td>
                                            <td>Jose Roberto Aguirre Sanchez</td>
                                            <td>Nohelia Castro del Campo</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-7378-0699">http://orcid.org/0000-0002-7378-0699</a>
                                            </td>
                                            <td>1</td>
                                            <td>2028</td>
                                            <td>Culiacán</td>
                                            <td><a href="mailto:jose.aguirre@ciad.mx">jose.aguirre@ciad.mx</a></td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>536865</td>
                                            <td>Jose Fernando Mendez Gonzalez</td>
                                            <td>José Juan Buenrostro Figueroa</td>
                                            <td><a
                                                    href="http://orcid.org/0002-1549-7123">http://orcid.org/0002-1549-7123</a>
                                            </td>
                                            <td>1</td>
                                            <td>2029</td>
                                            <td>Delicias</td>
                                            <td><a href="mailto:fernando.mendez@ciad.mx">fernando.mendez@ciad.mx</a>
                                            </td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2024</td>
                                            <td>30/9/2026</td>
                                        </tr>
                                        <tr>
                                            <td>639307</td>
                                            <td>Edwin Rojo Gutierrez</td>
                                            <td>Ramiro Baeza Jiménez</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-3921-3527">http://orcid.org/0000-0002-3921-3527</a>
                                            </td>
                                            <td>C</td>
                                            <td>2026</td>
                                            <td>Delicias</td>
                                            <td><a href="mailto:edwin.rojo@ciad.mx">edwin.rojo@ciad.mx</a></td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2023</td>
                                            <td>30/9/2025</td>
                                        </tr>
                                        <tr>
                                            <td>201384</td>
                                            <td>Maria del Rosario Baray Guerrero</td>
                                            <td>Ramiro Baeza Jiménez</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-0289-9000">http://orcid.org/0000-0002-0289-9000</a>
                                            </td>
                                            <td>1</td>
                                            <td>2028</td>
                                            <td>Delicias</td>
                                            <td></td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2023</td>
                                            <td>31/10/2025</td>
                                        </tr>
                                        <tr>
                                            <td>491315</td>
                                            <td>Martha Alejandra Flores Cuamea</td>
                                            <td>Diana María Perfecta Luque Agraz</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Desarrollo Regional</td>
                                            <td><a href="mailto:martha.flores@ciad.mx">martha.flores@ciad.mx</a></td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1240276</td>
                                            <td>Miguel Angel Esparza Escalante</td>
                                            <td>Guillermo Núñez Noriega</td>
                                            <td></td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Desarrollo Regional</td>
                                            <td><a href="mailto:miguel.esparza@ciad.mx">miguel.esparza@ciad.mx</a></td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>490635</td>
                                            <td>Cesar Gioberti Catalan Dibene</td>
                                            <td>Isabel Cristina Taddei Bringas</td>
                                            <td></td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Desarrollo Regional</td>
                                            <td><a href="mailto:gioberti.catalan@ciad.mx">gioberti.catalan@ciad.mx</a>
                                            </td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>545671</td>
                                            <td>Karla Teran Samaniego</td>
                                            <td>Jesús Martín Robles Parra</td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>Desarrollo Regional</td>
                                            <td><a href="mailto:karla.teran@ciad.mx">karla.teran@ciad.mx</a></td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2024</td>
                                            <td>1/12/2026</td>
                                        </tr>
                                        <tr>
                                            <td>47926</td>
                                            <td>Mayra Lucia Maycotte de la Peña</td>
                                            <td>Jesús Martín Robles Parra</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Desarrollo Regional</td>
                                            <td><a href="mailto:mayra.maycotte@ciad.mx">mayra.maycotte@ciad.mx</a></td>
                                            <td>1/2/2024</td>
                                            <td>31/1/2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>485832</td>
                                            <td>Diana Irais Cuamea Piña</td>
                                            <td>Mario Camberos Castro</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Desarrollo Regional</td>
                                            <td><a href="mailto:diana.cuamea@ciad.mx">diana.cuamea@ciad.mx</a></td>
                                            <td>1/2/2025</td>
                                            <td>1/2/2027</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>439119</td>
                                            <td>Cecilia Acuña Kaldman</td>
                                            <td>Martha Olivia Peña Ramos </td>
                                            <td></td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Desarrollo Regional</td>
                                            <td><a href="mailto:cecilia.acu%C3%B1a@ciad.mx">cecilia.acuña@ciad.mx</a>
                                            </td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2023</td>
                                            <td>31/10/2025</td>
                                        </tr>
                                        <tr>
                                            <td>490959</td>
                                            <td>Lucila del Carmen Armenta Mendez</td>
                                            <td>Juan Pablo Gallo Reynoso</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-0651-3638">http://orcid.org/0000-0002-0651-3638</a>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>Guaymas</td>
                                            <td><a href="mailto:lucila.armenta@ciad.mx">lucila.armenta@ciad.mx</a></td>
                                            <td>1/10/2021</td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2025</td>
                                        </tr>
                                        <tr>
                                            <td>287579</td>
                                            <td>Adriana Estefania Flores Moran</td>
                                            <td>Juan Pablo Gallo Reynoso</td>
                                            <td><a
                                                    href="https://orcid.org/0009-0009-0255-5329">https://orcid.org/0009-0009-0255-5329</a>
                                            </td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Guaymas</td>
                                            <td><a href="mailto:adriana.flores@ciad.mx">adriana.flores@ciad.mx</a></td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2024</td>
                                            <td>31/10/2026</td>
                                        </tr>
                                        <tr>
                                            <td>492318</td>
                                            <td>Cinthya Araceli Ruiz Pardo</td>
                                            <td>Waldo Argüelles Monal</td>
                                            <td><a
                                                    href="https://orcid.org/0000-0003-0506-2086">https://orcid.org/0000-0003-0506-2086</a>
                                            </td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Guaymas</td>
                                            <td><a href="mailto:cinthya.ruiz@ciad.mx">cinthya.ruiz@ciad.mx</a></td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2024</td>
                                            <td>1/12/2026</td>
                                        </tr>
                                        <tr>
                                            <td>621405</td>
                                            <td>Maria Montserrat Cruz Benitez</td>
                                            <td>Eneas Aguirre Von Wobeser</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-6915-5508">http://orcid.org/0000-0002-6915-5508</a>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>Hidalgo</td>
                                            <td><a href="mailto:maria.cruz@ciad.mx">maria.cruz@ciad.mx</a></td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2024</td>
                                            <td>30/9/2026</td>
                                        </tr>
                                        <tr>
                                            <td>265113</td>
                                            <td>Omar Anaya Reza</td>
                                            <td>Mayra de la Torre Martínez</td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>Hidalgo</td>
                                            <td><a href="mailto:omar.anaya@ciad.mx">omar.anaya@ciad.mx</a></td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2024</td>
                                            <td>1/12/2026</td>
                                        </tr>
                                        <tr>
                                            <td>287429</td>
                                            <td>Julia María Torres Verde</td>
                                            <td>Alejandra García Gasca</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td><a href="mailto:julia.torresv@ciad.mx">julia.torresv@ciad.mx</a></td>
                                            <td>1/11/2023</td>
                                            <td>31/10/2024</td>
                                            <td>31/10/2028</td>
                                        </tr>
                                        <tr>
                                            <td>174109</td>
                                            <td>Aimee Cervantes Escobar</td>
                                            <td>Arturo Ruiz Luna</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0001-8802-2367">http://orcid.org/0000-0001-8802-2367</a>
                                            </td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td><a href="mailto:aimee.cervantes@ciad.mx">aimee.cervantes@ciad.mx</a>
                                            </td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2024</td>
                                            <td>1/12/2026</td>
                                        </tr>
                                        <tr>
                                            <td>232791</td>
                                            <td>Abril Montijo Galindo</td>
                                            <td>Arturo Ruiz Luna</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td><a href="mailto:abril.montijo@ciad.mx">abril.montijo@ciad.mx</a></td>
                                            <td>1/2/2024</td>
                                            <td>31/1/2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Juanita Fonseca Parra</td>
                                            <td>Arturo Ruiz Luna</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-1626-6829">http://orcid.org/0000-0002-1626-6829</a>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td></td>
                                            <td>1/1/2021</td>
                                            <td>31/12/2023</td>
                                            <td>31/12/2025</td>
                                        </tr>
                                        <tr>
                                            <td>385077</td>
                                            <td>Victoria Araiza Gomez</td>
                                            <td>Bruno Goméz Gil Rodríguez Sala</td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td></td>
                                            <td>9/1/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>491212</td>
                                            <td>Erick Josue Navarro Barron</td>
                                            <td>Bruno Goméz Gil Rodríguez Sala</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td></td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2024</td>
                                            <td>1/10/2026</td>
                                        </tr>
                                        <tr>
                                            <td>352405</td>
                                            <td>Carolina Guadalupe Delgado Álvarez</td>
                                            <td>David Ulises Santos Ballardo</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td></td>
                                            <td>1/2/2025</td>
                                            <td>1/2/2027</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>275520</td>
                                            <td>Laura Patricia Silva Ledezma</td>
                                            <td>Francisco Javier Martínez Cordero</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td></td>
                                            <td>10/1/2023</td>
                                            <td>30/9/2024</td>
                                            <td>30/9/2025</td>
                                        </tr>
                                        <tr>
                                            <td>504227</td>
                                            <td>Gloria Isabel Valles Vega</td>
                                            <td>María Isabel Abdo de la Parra</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0003-2525-3410">http://orcid.org/0000-0003-2525-3410</a>
                                            </td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td><a href="mailto:isabel.valles@ciad.mx">isabel.valles@ciad.mx</a></td>
                                            <td>1/10/2021</td>
                                            <td>30/9/2022</td>
                                            <td>30/9/2025</td>
                                        </tr>
                                        <tr>
                                            <td>541867</td>
                                            <td>Karla Denisse Luna Avelar</td>
                                            <td>Miguel Betancourt Lozano</td>
                                            <td></td>
                                            <td>C</td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td><a href="mailto:karla.luna@ciad.mx">karla.luna@ciad.mx</a></td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2024</td>
                                            <td>1/12/2026</td>
                                        </tr>
                                        <tr>
                                            <td>486634</td>
                                            <td>Samuel Calderon Lievanos</td>
                                            <td>Miguel Betancourt Lozano</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td><a href="mailto:samuel.calderon@ciad.mx">samuel.calderon@ciad.mx</a>
                                            </td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>287429</td>
                                            <td>Julia María Torres Velarde</td>
                                            <td>Silvia Alejandra García Gasca</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Mazatlán</td>
                                            <td><a href="mailto:julia.torresv@ciad.mx">julia.torresv@ciad.mx</a></td>
                                            <td>1/2/2025</td>
                                            <td>1/2/2029</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>659435</td>
                                            <td>Juan Carlos Rene Dorantes de la O</td>
                                            <td>Gerardo Torres García</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Nayarit</td>
                                            <td><a href="mailto:carlos.dorantes@ciad.mx">carlos.dorantes@ciad.mx</a>
                                            </td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>329711</td>
                                            <td>Indira Yarely Lopez Cortes</td>
                                            <td>Gerardo Torres García</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Nayarit</td>
                                            <td><a href="mailto:indira.lopez@ciad.mx">indira.lopez@ciad.mx</a></td>
                                            <td>1/2/2024</td>
                                            <td>31/1/2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>786418</td>
                                            <td>Edgar Alonso Melgoza Gonzalez</td>
                                            <td>Jesús Hernández López</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Nutrición</td>
                                            <td><a href="mailto:edgar.mglez@ciad.mx">edgar.mglez@ciad.mx</a></td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>377834</td>
                                            <td>Génesis Vidal Buitimea Cantúa</td>
                                            <td>Luis Quihui Cota</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Nutrición</td>
                                            <td><a href="mailto:genesis.buitimeac@ciad.mx">genesis.buitimeac@ciad.mx</a>
                                            </td>
                                            <td>1/2/2025</td>
                                            <td>1/12/2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>425879</td>
                                            <td>Lourdes Santiago Lopez</td>
                                            <td>Aarón González Córdova</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-9756-9329">http://orcid.org/0000-0002-9756-9329</a>
                                            </td>
                                            <td>1</td>
                                            <td>2029</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:lourdes.santiago@ciad.mx">lourdes.santiago@ciad.mx</a>
                                            </td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>590525</td>
                                            <td>Joel Said Garcia Romo</td>
                                            <td>Aaron González Córdova </td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-3349-900X">http://orcid.org/0000-0002-3349-900X</a>
                                            </td>
                                            <td>1</td>
                                            <td>2027</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:joel.garcia@ciad.mx">joel.garcia@ciad.mx</a></td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2024</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>491262</td>
                                            <td>Jose Isidro Mendez Romero</td>
                                            <td>Belinda Vallejo Galland</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0001-7658-8929">http://orcid.org/0000-0001-7658-8929</a>
                                            </td>
                                            <td>C</td>
                                            <td>2027</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:isidro.mendez@ciad.mx">isidro.mendez@ciad.mx</a></td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2024</td>
                                            <td>30/9/2026</td>
                                        </tr>
                                        <tr>
                                            <td>427144</td>
                                            <td>Lilia Maria Beltran Barrientos</td>
                                            <td>Belinda Vallejo Galland</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0003-0976-6216">http://orcid.org/0000-0003-0976-6216</a>
                                            </td>
                                            <td>1</td>
                                            <td>2022</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:lilia.beltran@ciad.mx">lilia.beltran@ciad.mx</a></td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2024</td>
                                            <td>1/12/2025</td>
                                        </tr>
                                        <tr>
                                            <td>491233</td>
                                            <td>David Armando Encinas Basurto</td>
                                            <td>Elizabeth Carvajal Millán</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-4988-9192">http://orcid.org/0000-0002-4988-9192</a>
                                            </td>
                                            <td>1</td>
                                            <td>2027</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:david.encinas@ciad.mx">david.encinas@ciad.mx</a></td>
                                            <td>1/2/2024</td>
                                            <td>31/1/2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>312131</td>
                                            <td>Laura Camacho Jimenez</td>
                                            <td>Gloria Martina Yepiz Plascencia</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-0278-5943">http://orcid.org/0000-0002-0278-5943</a>
                                            </td>
                                            <td>1</td>
                                            <td>2025</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:laura.camacho@ciad.mx">laura.camacho@ciad.mx</a></td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2024</td>
                                            <td>30/11/2025</td>
                                        </tr>
                                        <tr>
                                            <td>411859</td>
                                            <td>Diana Medina Felix</td>
                                            <td>Marcel Martinez Porchas</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-0904-4099">http://orcid.org/0000-0002-0904-4099</a>
                                            </td>
                                            <td>1</td>
                                            <td>2027</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:diana.medina@ciad.mx">diana.medina@ciad.mx</a></td>
                                            <td>1/9/2022</td>
                                            <td>31/8/2023</td>
                                            <td>31/8/2025</td>
                                        </tr>
                                        <tr>
                                            <td>776665</td>
                                            <td>Miguel Ángel Rendón Rosales</td>
                                            <td>María de Jesús Torres Llanez</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0003-3026-8668">http://orcid.org/0000-0003-3026-8668</a>
                                            </td>
                                            <td>1</td>
                                            <td>2029</td>
                                            <td>TAOA</td>
                                            <td></td>
                                            <td>1/2/2025</td>
                                            <td>1/2/2029</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>271991</td>
                                            <td>José Luis Dávila Rámirez</td>
                                            <td>Martín Valenzuela Melendres</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0003-3376-2151">http://orcid.org/0000-0003-3376-2151</a>
                                            </td>
                                            <td>1</td>
                                            <td>2026</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:jose.davila@ciad.mx">jose.davila@ciad.mx</a></td>
                                            <td>1/2/2025</td>
                                            <td>1/2/2029</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>566265</td>
                                            <td>Elena Noheli Moreno Cordova</td>
                                            <td>Rogerio Rafael Sotelo Mundo</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-5177-7237">http://orcid.org/0000-0002-5177-7237</a>
                                            </td>
                                            <td>C</td>
                                            <td>2027</td>
                                            <td>TAOA</td>
                                            <td><a href="mailto:noheli.moreno@ciad.mx">noheli.moreno@ciad.mx</a></td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2024</td>
                                            <td>30/9/2026</td>
                                        </tr>
                                        <tr>
                                            <td>373047</td>
                                            <td>Nina Gisella Heredia Sandoval</td>
                                            <td>Alma Rosa Islas Rubio</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-8339-9082">http://orcid.org/0000-0002-8339-9082</a>
                                            </td>
                                            <td>1</td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a href="mailto:nina.heredia@ciad.mx">nina.heredia@ciad.mx</a></td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2023</td>
                                            <td>1/12/2026</td>
                                        </tr>
                                        <tr>
                                            <td>604772</td>
                                            <td>Alejandra Montserrat Preciado Saldaña</td>
                                            <td>Gustavo Adolfo González Aguilar</td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a
                                                    href="mailto:alejandra.preciado@ciad.mx">alejandra.preciado@ciad.mx</a>
                                            </td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2024</td>
                                            <td>1/11/2026</td>
                                        </tr>
                                        <tr>
                                            <td>372701</td>
                                            <td>Mitzuko Dautt Castro</td>
                                            <td>María Auxiliadora Islas Osuna</td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a href="mailto:mitzuko.dautt@ciad.mx">mitzuko.dautt@ciad.mx</a></td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2024</td>
                                            <td>1/12/2026</td>
                                        </tr>
                                        <tr>
                                            <td>425836</td>
                                            <td>Jesus Alberto Jimenez Leyva</td>
                                            <td>Martín Candelario Esqueda Valle</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a href="mailto:jesus.jimenez@ciad.mx">jesus.jimenez@ciad.mx</a></td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2024</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>490952</td>
                                            <td>Heriberto Garcia Coronado</td>
                                            <td>Martín Ernesto Tiznado Hernández</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a href="mailto:heriberto.garcia@ciad.mx">heriberto.garcia@ciad.mx</a>
                                            </td>
                                            <td>1/2/2025</td>
                                            <td>31/1/2028</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>492022</td>
                                            <td>Mario Sanchez Sanchez</td>
                                            <td>Miguel Ángel Martínez Téllez</td>
                                            <td></td>
                                            <td>C</td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a href="mailto:mario.sanchez@ciad.mx">mario.sanchez@ciad.mx</a></td>
                                            <td>1/12/2022</td>
                                            <td>30/11/2023</td>
                                            <td>1/12/2026</td>
                                        </tr>
                                        <tr>
                                            <td>626768</td>
                                            <td>Cristobal Joel Gonzalez Perez</td>
                                            <td>Miguel Ángel Martínez Téllez</td>
                                            <td></td>
                                            <td>C</td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a
                                                    href="mailto:cristobal.gonzalez@ciad.mx">cristobal.gonzalez@ciad.mx</a>
                                            </td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>517870</td>
                                            <td>Daniela Denisse Castro Enriquez</td>
                                            <td>Rene Renato Balandran Quintana</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0002-8576-5250">http://orcid.org/0000-0002-8576-5250</a>
                                            </td>
                                            <td>1</td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a href="mailto:daniela.castro@ciad.mx">daniela.castro@ciad.mx</a></td>
                                            <td>1/11/2022</td>
                                            <td>31/10/2023</td>
                                            <td>31/10/2025</td>
                                        </tr>
                                        <tr>
                                            <td>290673</td>
                                            <td>Itzel Yanira Lopez Peña</td>
                                            <td>Tomás Jesús Madera Santana</td>
                                            <td><a
                                                    href="http://orcid.org/0000-0003-2592-9804">http://orcid.org/0000-0003-2592-9804</a>
                                            </td>
                                            <td>C</td>
                                            <td></td>
                                            <td>TAOV</td>
                                            <td><a href="mailto:itzel.lopez@ciad.mx">itzel.lopez@ciad.mx</a></td>
                                            <td>1/10/2022</td>
                                            <td>30/9/2023</td>
                                            <td>30/9/2025</td>
                                        </tr>
                                        <tr>
                                            <td>235487</td>
                                            <td>Citlali Colin Chavez</td>
                                            <td>Miguel Ángel Martínez Téllez</td>
                                            <td></td>
                                            <td>1</td>
                                            <td></td>
                                            <td>TAOV-CIDAM</td>
                                            <td><a href="mailto:citlali.colin@ciad.mx">citlali.colin@ciad.mx</a></td>
                                            <td>1/9/2023</td>
                                            <td>31/8/2025</td>
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
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

</body>

</html>