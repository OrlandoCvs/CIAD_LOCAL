<?php
// session_start();

// if (!isset($_SESSION['usuario'])) {
//         header("Location: login.php");
//         exit;
// }
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STAR - Personal CIAD</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="img/favicon.png">

  <!-- DataTables styles -->
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
                                        <button id="sidebarToggleTop"
                                                class="btn btn-link d-md-none rounded-circle mr-3">
                                                <i class="fa fa-bars"></i>
                                        </button>
                                        <div style="position: absolute; left: 50%; transform: translateX(-50%);">
                                                <h1 class="h3 mb-0 text-gray-800">Personal de CIAD</h1>
                                        </div>
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

                                                                <table id="dataTable" class="table table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                                                                <thead>
                                                                <tr>
                                                                        <th data-priority="3">Ubicación</th>
                                                                        <th data-priority="5">Categoría</th>
                                                                        <th data-priority="9">CVU</th>
                                                                        <th data-priority="1">Nombre Completo</th>
                                                                        <th data-priority="8">ORCID</th>
                                                                        <th data-priority="6">SNII</th>
                                                                        <th data-priority="7">Vencimiento SNII</th>
                                                                        <th data-priority="4">Coordinación</th>
                                                                        <th data-priority="2">Correo institucional</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/ali-asaff-torres/">Asaff
                                                                                                        Torres
                                                                                                        Ali Jesus</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>2</td>
                                                                                        <td>2029</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:asaff@ciad.mx">asaff@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-mayra-de-la-torre-martinez/">De
                                                                                                        La Torre
                                                                                                        Martinez Maria
                                                                                                        Mayra</a></td>
                                                                                        <td></td>
                                                                                        <td>Emérita</td>
                                                                                        <td>Emérita</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:mdelatorre@ciad.mx">mdelatorre@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITB</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/leticia-garcia-rico/">Garcia
                                                                                                        Rico
                                                                                                        Leticia</a></td>
                                                                                        <td></td>
                                                                                        <td>2</td>
                                                                                        <td>2029</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:lgarciar@ciad.mx">lgarciar@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jose-angel-huerta-ocampo/">Huerta
                                                                                                        Ocampo Jose
                                                                                                        Angel</a></td>
                                                                                        <td></td>
                                                                                        <td>2</td>
                                                                                        <td>2029</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:jose.huerta@ciad.mx">jose.huerta@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/martin-enrique-jara-marini/">Jara
                                                                                                        Marini Martin
                                                                                                        Enrique</a></td>
                                                                                        <td></td>
                                                                                        <td>2</td>
                                                                                        <td>2028</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:mjara@ciad.mx">mjara@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/veronica-mata-haro/">Mata
                                                                                                        Haro
                                                                                                        Veronica</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>2</td>
                                                                                        <td>2026</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:vmata@ciad.mx">vmata@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/gabriela-ramos-clamont-montfort/">Ramos
                                                                                                        Clamont Montfort
                                                                                                        Gabriela</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>2</td>
                                                                                        <td>2026</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:gramos@ciad.mx">gramos@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/marisela-rivera-dominguez/">Rivera
                                                                                                        Dominguez
                                                                                                        Marisela</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>2</td>
                                                                                        <td>2029</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:marisela@ciad.mx">marisela@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/ana-isabel-valenzuela-quintanar/">Valenzuela
                                                                                                        Quintanar Ana
                                                                                                        Isabel</a></td>
                                                                                        <td></td>
                                                                                        <td>1</td>
                                                                                        <td>2027</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:aquintanar@ciad.mx">aquintanar@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/irasema-del-carmen-vargas-arispuro/">Vargas
                                                                                                        Arispuro Irasema
                                                                                                        Del Carmen</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>3</td>
                                                                                        <td>2028</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:iris@ciad.mx">iris@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/luz-vazquez-moreno/">Vazquez
                                                                                                        Moreno Luz</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>Emérita</td>
                                                                                        <td>Emérita</td>
                                                                                        <td>Ciencia de los Alimentos
                                                                                        </td>
                                                                                        <td><a href="mailto:lvazquez@ciad.mx">lvazquez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/rogerio-sotelo-mundo/">Sotelo
                                                                                                        Mundo Rogerio
                                                                                                        Rafael</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0001-5543-6889">http://orcid.org/0000-0001-5543-6889</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2033</td>
                                                                                        <td>Coordinación de
                                                                                                Investigación</td>
                                                                                        <td><a href="mailto:rrs@ciad.mx">rrs@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITA</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/gabriela-del-valle-pignataro/">Del
                                                                                                        Valle Pignataro
                                                                                                        Gabriela</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Coordinación de Vinculación
                                                                                        </td>
                                                                                        <td><a href="mailto:gvp@ciad.mx">gvp@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/aaron-fernando-gonzalez-cordova/">Gonzalez
                                                                                                        Cordova Aaron
                                                                                                        Fernando</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Coordinación de Vinculación
                                                                                        </td>
                                                                                        <td><a href="mailto:aaronglz@ciad.mx">aaronglz@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/carlos-horacio-acosta-muniz/">Acosta
                                                                                                        Muñiz Carlos
                                                                                                        Horacio</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td><a href="mailto:cacosta@ciad.mx">cacosta@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/guadalupe-isela-olivas-orozco/">Olivas
                                                                                                        Orozco Guadalupe
                                                                                                        Isela</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td><a href="mailto:golivas@ciad.mx">golivas@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jose-de-jesus-ornelas-paz/">Ornelas
                                                                                                        Paz Jose De
                                                                                                        Jesus</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td><a href="mailto:jornelas@ciad.mx">jornelas@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/claudio-rios-velasco/">Rios
                                                                                                        Velasco
                                                                                                        Claudio</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td><a href="mailto:claudio.rios@ciad.mx">claudio.rios@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/david-roberto-sepulveda-ahumada/">Sepulveda
                                                                                                        Ahumada David
                                                                                                        Roberto</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td><a href="mailto:dsepulveda@ciad.mx">dsepulveda@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/paul-baruk-zamudio-flores/">Zamudio
                                                                                                        Flores Paul
                                                                                                        Baruk</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Cuauhtémoc</td>
                                                                                        <td><a href="mailto:pzamudio@ciad.mx">pzamudio@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITB</td>
                                                                                        <td>74240</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/miguel-angel-angulo-escalante/">Angulo
                                                                                                        Escalante Miguel
                                                                                                        Angel</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-6295-6337">https://orcid.org/0000-0002-6295-6337</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2028</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:mangulo@ciad.mx">mangulo@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITA</td>
                                                                                        <td>224549</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jose-armando-carrillo-fasio/">Carrillo
                                                                                                        Fasio Jose
                                                                                                        Armando</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-3443-6289">https://orcid.org/0000-0002-3443-6289</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:acarrillo@ciad.mx">acarrillo@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITB</td>
                                                                                        <td>38725</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/nohelia-castro-del-campo/">Castro
                                                                                                        Del Campo
                                                                                                        Nohelia</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-0738-492X">https://orcid.org/0000-0002-0738-492X</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2025</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:ncastro@ciad.mx">ncastro@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITC</td>
                                                                                        <td>22313</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/cristobal-chaidez-quiroz/">Chaidez
                                                                                                        Quiroz
                                                                                                        Cristobal</a>
                                                                                        </td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0001-5071-8270">https://orcid.org/0000-0001-5071-8270</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2025</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:chaqui@ciad.mx">chaqui@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITC</td>
                                                                                        <td>6299</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/raymundo-saul-garcia-estrada/">Garcia
                                                                                                        Estrada Raymundo
                                                                                                        Saul</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0001-6129-8128">https://orcid.org/0000-0001-6129-8128</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2038</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:rsgarcia@ciad.mx">rsgarcia@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td>35424</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jose-basilio-heredia/">Heredia
                                                                                                        Jose Basilio</a>
                                                                                        </td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0003-1017-957X">https://orcid.org/0000-0003-1017-957X</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2029</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:jbheredia@ciad.mx">jbheredia@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITC</td>
                                                                                        <td>122130</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/josefina-leon-felix/">Leon
                                                                                                        Felix
                                                                                                        Josefina</a>
                                                                                        </td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0003-3755-881X">https://orcid.org/0000-0003-3755-881X</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2027</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:ljosefina@ciad.mx">ljosefina@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITA</td>
                                                                                        <td>49975</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/osvaldo-lopez-cuevas/">Lopez
                                                                                                        Cuevas
                                                                                                        Osvaldo</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-7262-6593">https://orcid.org/0000-0002-7262-6593</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2027</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:osvaldo.lopez@ciad.mx">osvaldo.lopez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITC</td>
                                                                                        <td>12653</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-dolores-muy-rangel/">Muy
                                                                                                        Rangel Maria
                                                                                                        Dolores</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-6971-535X">https://orcid.org/0000-0002-6971-535X</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2026</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:mdmuy@ciad.mx">mdmuy@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITC</td>
                                                                                        <td>50436</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/adriana-sanudo-barajas/">Sañudo
                                                                                                        Barajas Josefa
                                                                                                        Adriana</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-8467-8497">https://orcid.org/0000-0002-8467-8497</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2027</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:adriana@ciad.mx">adriana@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITC</td>
                                                                                        <td>252989</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/juan-manuel-tovar-pedraza/">Tovar
                                                                                                        Pedraza Juan
                                                                                                        Manuel</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-8560-959X">https://orcid.org/0000-0002-8560-959X</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2027</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:juan.tovar@ciad.mx">juan.tovar@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Culiacán</td>
                                                                                        <td>ITA</td>
                                                                                        <td>202295</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jose-benigno-valdez-torres/">Valdez
                                                                                                        Torres Jose
                                                                                                        Benigno</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-9155-6981">https://orcid.org/0000-0002-9155-6981</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2026</td>
                                                                                        <td>Culiacán</td>
                                                                                        <td><a href="mailto:jvaldez@ciad.mx">jvaldez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Delicias</td>
                                                                                        <td>ITA</td>
                                                                                        <td>160474</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/sandra-monica-alvarado-gonzalez/">Alvarado
                                                                                                        Gonzalez Sandra
                                                                                                        Monica</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-5219-8018">https://orcid.org/0000-0002-5219-8018</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2029</td>
                                                                                        <td>Delicias</td>
                                                                                        <td><a href="mailto:salvarado@ciad.mx">salvarado@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Delicias</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td>209622</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/ramiro-baeza-jimenez/">Baeza
                                                                                                        Jimenez
                                                                                                        Ramiro</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0003-1706-5014">https://orcid.org/0000-0003-1706-5014</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2025</td>
                                                                                        <td>Delicias</td>
                                                                                        <td><a href="mailto:ramiro.baeza@ciad.mx">ramiro.baeza@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Delicias</td>
                                                                                        <td>ITB</td>
                                                                                        <td>269054</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jose-juan-buenrostro-figueroa/">Buenrostro
                                                                                                        Figueroa Jose
                                                                                                        Juan</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-5314-9824">https://orcid.org/0000-0002-5314-9824</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2025</td>
                                                                                        <td>Delicias</td>
                                                                                        <td><a href="mailto:jose.buenrostro@ciad.mx">jose.buenrostro@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Delicias</td>
                                                                                        <td>ITA</td>
                                                                                        <td>86635</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/celia-chavez-mendoza/">Chavez
                                                                                                        Mendoza
                                                                                                        Celia</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-2136-591X">https://orcid.org/0000-0002-2136-591X</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2029</td>
                                                                                        <td>Delicias</td>
                                                                                        <td><a href="mailto:celia.chavez@ciad.mx">celia.chavez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Delicias</td>
                                                                                        <td>ITC</td>
                                                                                        <td>22210</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/esteban-sanchez-chavez/">Sanchez
                                                                                                        Chavez
                                                                                                        Esteban</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-6845-4290">https://orcid.org/0000-0002-6845-4290</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2025</td>
                                                                                        <td>Delicias</td>
                                                                                        <td><a href="mailto:esteban@ciad.mx">esteban@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITB</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/elba-martina-abril-valdez/">Abril
                                                                                                        Valdez Elba
                                                                                                        Martina</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:abril@ciad.mx">abril@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/carlos-gabriel-borbon-morales/">Borbon
                                                                                                        Morales Carlos
                                                                                                        Gabriel</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:cborbon@ciad.mx">cborbon@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/joaquin-bracamontes-nevarez/">Bracamontes
                                                                                                        Nevarez
                                                                                                        Joaquin</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:joaco@ciad.mx">joaco@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/mario-camberos-castro/">Camberos
                                                                                                        Castro Mario</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:mcamberos@ciad.mx">mcamberos@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITB</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-jose-cubillas-rodriguez/">Cubillas
                                                                                                        Rodriguez Maria
                                                                                                        Jose</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:mjcubillas@ciad.mx">mjcubillas@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITA</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-cristina-garza-lagler/">Garza
                                                                                                        Lagler Maria
                                                                                                        Cristina</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:maria.garza@ciad.mx">maria.garza@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-del-carmen-hernandez-moreno/">Hernandez
                                                                                                        Moreno Maria Del
                                                                                                        Carmen</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:mar@ciad.mx">mar@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/luis-huesca-reynoso/">Huesca
                                                                                                        Reynoso Luis</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:lhuesca@ciad.mx">lhuesca@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jesus-francisco-laborin-alvarez/">Laborin
                                                                                                        Alvarez Jesus
                                                                                                        Francisco</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:laborin@ciad.mx">laborin@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jorge-ines-leon-balderrama/">Leon
                                                                                                        Balderrama Jorge
                                                                                                        Ines</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:jleon@ciad.mx">jleon@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITB</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/diana-maria-perfecta-luque-agraz/">Luque
                                                                                                        Agraz Diana
                                                                                                        Maria
                                                                                                        Perfecta</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:dluque@ciad.mx">dluque@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/juana-maria-melendez-torres/">Melendez
                                                                                                        Torres Juana
                                                                                                        Maria</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:jmelendez@ciad.mx">jmelendez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/guillermo-nunez-noriega/">Nuñez
                                                                                                        Noriega
                                                                                                        Guillermo</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:gnunez@ciad.mx">gnunez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITA</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/martha-olivia-pena-ramos/">Peña
                                                                                                        Ramos Martha
                                                                                                        Olivia</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:mpena@ciad.mx">mpena@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITA</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jesus-martin-robles-parra/">Robles
                                                                                                        Parra Jesus
                                                                                                        Martin</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:jrobles@ciad.mx">jrobles@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/rosario-roman-perez/">Roman
                                                                                                        Perez
                                                                                                        Rosario</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:rroman@ciad.mx">rroman@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITA</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/gilda-salazar-antunez/">Salazar
                                                                                                        Antunez
                                                                                                        Gilda</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:gisal@ciad.mx">gisal@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/vidal-salazar-solano/">Salazar
                                                                                                        Solano Vidal</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:vidal@ciad.mx">vidal@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITB</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/patricia-lorenia-salido-araiza/">Salido
                                                                                                        Araiza Patricia
                                                                                                        Lorenia</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:psalido@ciad.mx">psalido@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/isabel-cristina-taddei-bringas/">Taddei
                                                                                                        Bringas Isabel
                                                                                                        Cristina</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:ctaddei@ciad.mx">ctaddei@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/pablo-wong-gonzalez/">Wong
                                                                                                        Gonzalez
                                                                                                        Pablo</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Desarrollo</td>
                                                                                        <td><a href="mailto:pwong@ciad.mx">pwong@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Guaymas</td>
                                                                                        <td>ITC</td>
                                                                                        <td>26197</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/waldo-manuel-arguelles-monal/">Argüelles
                                                                                                        Monal Waldo
                                                                                                        Manuel</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-8356-1123">https://orcid.org/0000-0002-8356-1123</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2037</td>
                                                                                        <td>Guaymas</td>
                                                                                        <td><a href="mailto:waldo@ciad.mx">waldo@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Guaymas</td>
                                                                                        <td>ITC</td>
                                                                                        <td>14624</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/juan-pablo-gallo-reynoso/">Gallo
                                                                                                        Reynoso Juan
                                                                                                        Pablo</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0003-1156-6037">https://orcid.org/0000-0003-1156-6037</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2030</td>
                                                                                        <td>Guaymas</td>
                                                                                        <td><a href="mailto:jpgallo@ciad.mx">jpgallo@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Guaymas</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td>26270</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jaqueline-garcia-hernandez/">Garcia
                                                                                                        Hernandez
                                                                                                        Jaqueline</a>
                                                                                        </td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-5251-0526">https://orcid.org/0000-0002-5251-0526</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2025</td>
                                                                                        <td>Guaymas</td>
                                                                                        <td><a href="mailto:jaqueline@ciad.mx">jaqueline@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Guaymas</td>
                                                                                        <td>ITC</td>
                                                                                        <td>9924</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/alfonso-gardea-bejar/">Gardea
                                                                                                        Bejar Alfonso
                                                                                                        Antero</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-6842-2678">https://orcid.org/0000-0002-6842-2678</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2034</td>
                                                                                        <td>Guaymas</td>
                                                                                        <td><a href="mailto:gardea@ciad.mx">gardea@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Guaymas</td>
                                                                                        <td>ITB</td>
                                                                                        <td>33431</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/lorena-olivia-noriega-orozco/">Noriega
                                                                                                        Orozco Lorena
                                                                                                        Olivia</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://orcid.org/0000-0002-9855-0865">https://orcid.org/0000-0002-9855-0865</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2029</td>
                                                                                        <td>Guaymas</td>
                                                                                        <td><a href="mailto:lnoriega@ciad.mx">lnoriega@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITA</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-isabel-abdo-de-la-parra/">Abdo
                                                                                                        De La Parra
                                                                                                        Maria Isabel</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:abdo@ciad.mx">abdo@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/pablo-almazan-rueda/">Almazan
                                                                                                        Rueda Pablo</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:almazan@ciad.mx">almazan@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/cesar-alejandro-berlanga-robles/">Berlanga
                                                                                                        Robles Cesar
                                                                                                        Alejandro</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:cesar@ciad.mx">cesar@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/miguel-betancourt-lozano/">Betancourt
                                                                                                        Lozano
                                                                                                        Miguel</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:mbl@ciad.mx">mbl@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITB</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/omar-calvario-martinez/">Calvario
                                                                                                        Martinez
                                                                                                        Omar</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:ocalvario@ciad.mx">ocalvario@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-cristina-chavez-sanchez/">Chavez
                                                                                                        Sanchez Maria
                                                                                                        Cristina</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:marcris@ciad.mx">marcris@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/silvia-alejandra-garcia-gasca/">Garcia
                                                                                                        Gasca Silvia
                                                                                                        Alejandra</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:alegar@ciad.mx">alegar@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/bruno-gomez-gil-rodriguez-sala/">Gomez
                                                                                                        Gil Rodriguez
                                                                                                        Sala Bruno</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:bruno@ciad.mx">bruno@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/crisantema-hernandez-gonzalez/">Hernandez
                                                                                                        Gonzalez
                                                                                                        Crisantema</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:chdez@ciad.mx">chdez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-soledad-morales-covarrubias/">Morales
                                                                                                        Covarrubias
                                                                                                        Maria
                                                                                                        Soledad</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:marisol@ciad.mx">marisol@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/arturo-ruiz-luna/">Ruiz
                                                                                                        Luna
                                                                                                        Arturo</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:arluna@ciad.mx">arluna@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITB</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/david-ulises-santos-ballardo/">Santos
                                                                                                        Ballardo David
                                                                                                        Ulises</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:ulises.ballardo@ciad.mx">ulises.ballardo@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mazatlán</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/sonia-araceli-soto-rodriguez/">Soto
                                                                                                        Rodriguez Sonia
                                                                                                        Araceli</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Mazatlán</td>
                                                                                        <td><a href="mailto:ssoto@ciad.mx">ssoto@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/heliodoro-aleman-mateo/">Aleman
                                                                                                        Mateo
                                                                                                        Heliodoro</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:helio@ciad.mx">helio@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/martha-nydia-ballesteros/">Ballesteros
                                                                                                        Vasquez Martha
                                                                                                        Nydia</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:nydia@ciad.mx">nydia@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/ana-maria-calderon-de-la-barca/">Calderon
                                                                                                        De La Barca Cota
                                                                                                        Ana Maria</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:amc@ciad.mx">amc@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/julian-esparza-romero/">Esparza
                                                                                                        Romero
                                                                                                        Julian</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:julian@ciad.mx">julian@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Guaymas</td>
                                                                                        <td>ITA</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-isabel-grijalva-haro/">Grijalva
                                                                                                        Haro Maria
                                                                                                        Isabel</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:grijalva@ciad.mx">grijalva@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jesus-hernandez-lopez/">Hernandez
                                                                                                        Lopez Jesus</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:jhdez@ciad.mx">jhdez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/rosa-olivia-mendez-estrada/">Mendez
                                                                                                        Estrada Rosa
                                                                                                        Olivia</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:romendez@ciad.mx">romendez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>JDIV-ITB</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maricela-montalvo-corral/">Montalvo
                                                                                                        Corral
                                                                                                        Maricela</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:MARICELA.MONTALVO@ciad.MX">maricela.montalvo@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/silvia-yolanda-moya-camarena/">Moya
                                                                                                        Camarena Silvia
                                                                                                        Yolanda</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:moyas@ciad.mx">moyas@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-isabel-ortega-velez/">Ortega
                                                                                                        Velez Maria
                                                                                                        Isabel</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:iortega@ciad.mx">iortega@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/araceli-pinelli-saavedra/">Pinelli
                                                                                                        Saavedra
                                                                                                        Araceli</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:pinelli@ciad.mx">pinelli@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/luis-quihui-cota/">Quihui
                                                                                                        Cota
                                                                                                        Luis</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Nutrición</td>
                                                                                        <td><a href="mailto:lquihui@ciad.mx">lquihui@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/beatriz-olivia-camarena-gomez/">Camarena
                                                                                                        Gomez Beatriz
                                                                                                        Olivia</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>Programas Académicos</td>
                                                                                        <td><a href="mailto:betica@ciad.mx">betica@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>35827</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/elizabeth-carvajal-millan/">Carvajal
                                                                                                        Millan
                                                                                                        Elizabeth</a>
                                                                                        </td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0003-4390-7457">http://orcid.org/0000-0003-4390-7457</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2027</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:ecarvajal@ciad.mx">ecarvajal@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITB</td>
                                                                                        <td>86705</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/karina-dalila-garcia-orozco/">Garcia
                                                                                                        Orozco Karina
                                                                                                        Dalila</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0002-6274-1002">http://orcid.org/0000-0002-6274-1002</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2028</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:orozco@ciad.mx">orozco@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>94991</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/celia-olivia-garcia-sifuentes/">Garcia
                                                                                                        Sifuentes Celia
                                                                                                        Olivia</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0003-0927-7885">http://orcid.org/0000-0003-0927-7885</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2025</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:sifuentes@ciad.mx">sifuentes@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/silvia-gomez-jimenez/">Gomez
                                                                                                        Jimenez
                                                                                                        Silvia</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:s.gomez@ciad.mx">s.gomez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>66573</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/humberto-gonzalez-rios/">Gonzalez
                                                                                                        Rios
                                                                                                        Humberto</a>
                                                                                        </td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0002-7463-778X">http://orcid.org/0000-0002-7463-778X</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2029</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:hugory@ciad.mx">hugory@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>38495</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/adrian-hernandez-mendoza/">Hernandez
                                                                                                        Mendoza
                                                                                                        Adrian</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0002-2360-7484">http://orcid.org/0000-0002-2360-7484</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2026</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:ahernandez@ciad.mx">ahernandez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>35828</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jaime-lizardi-mendoza/">Lizardi
                                                                                                        Mendoza
                                                                                                        Jaime</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0003-4636-4371">http://orcid.org/0000-0003-4636-4371</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2028</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:jalim@ciad.mx">jalim@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>36689</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/yolanda-leticia-lopez-franco/">Lopez
                                                                                                        Franco Yolanda
                                                                                                        Leticia</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0002-3934-4578">http://orcid.org/0000-0002-3934-4578</a>
                                                                                        </td>
                                                                                        <td>1</td>
                                                                                        <td>2026</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:lopezf@ciad.mx">lopezf@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>206328</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/marcel-martinez-porchas/">Martinez
                                                                                                        Porchas
                                                                                                        Marcel</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0003-4074-6731">http://orcid.org/0000-0003-4074-6731</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2025</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:marcel@ciad.mx">marcel@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>37358</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/miguel-angel-mazorra-manzano/">Mazorra
                                                                                                        Manzano Miguel
                                                                                                        Angel</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0002-1425-4250">http://orcid.org/0000-0002-1425-4250</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2026</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:mazorra@ciad.mx">mazorra@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>121383</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/adriana-teresita-muhlia-almazan/">Muhlia
                                                                                                        Almazan Adriana
                                                                                                        Teresita</a>
                                                                                        </td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0001-9398-7980">http://orcid.org/0000-0001-9398-7980</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2029</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:amuhlia@ciad.mx">amuhlia@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>7868</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/ramon-pacheco-aguilar/">Pacheco
                                                                                                        Aguilar
                                                                                                        Ramon</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0002-1669-8007">http://orcid.org/0000-0002-1669-8007</a>
                                                                                        </td>
                                                                                        <td>Emérito</td>
                                                                                        <td>Emérito</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:rpacheco@ciad.mx">rpacheco@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>JDIV-ITC</td>
                                                                                        <td>122104</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/etna-aida-pena-ramos/">Peña
                                                                                                        Ramos
                                                                                                        Etna Aida</a>
                                                                                        </td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0001-7990-2514">http://orcid.org/0000-0001-7990-2514</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2027</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:aida@ciad.mx">aida@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>122202</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/juan-carlos-ramirez-suarez/">Ramirez
                                                                                                        Suarez Juan
                                                                                                        Carlos</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0001-8512-1271">http://orcid.org/0000-0001-8512-1271</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2025</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:jcramirez@ciad.mx">jcramirez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>30849</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/armida-sanchez-escalante/">Sanchez
                                                                                                        Escalante
                                                                                                        Armida</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0002-5966-5512">http://orcid.org/0000-0002-5966-5512</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2028</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:armida-sanchez@ciad.mx">armida-sanchez@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>30561</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/gaston-torrescano-urrutia/">Torrescano
                                                                                                        Urrutia Gaston
                                                                                                        Ramon</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-003-1117-501X">http://orcid.org/0000-003-1117-501X</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2029</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:gtorrescano@ciad.mx">gtorrescano@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITA</td>
                                                                                        <td>73430</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/martin-valenzuela-melendres/">Valenzuela
                                                                                                        Melendres
                                                                                                        Martin</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0002-7347-9599">http://orcid.org/0000-0002-7347-9599</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2029</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:martin@ciad.mx">martin@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>15447</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/belinda-vallejo-cordoba/">Vallejo
                                                                                                        Galland
                                                                                                        Belinda</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0001-8312-7039">http://orcid.org/0000-0001-8312-7039</a>
                                                                                        </td>
                                                                                        <td>Emérita</td>
                                                                                        <td>Emérita</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:vallejo@ciad.mx">vallejo@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>6526</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/armando-francisco-vargas-albores/">Vargas
                                                                                                        Albores Armando
                                                                                                        Francisco</a>
                                                                                        </td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0002-9677-1808">http://orcid.org/0000-0002-9677-1808</a>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                        <td>2035</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:fvalbores@ciad.mx">fvalbores@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td>11133</td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/gloria-martina-yepiz-plascencia/">Yepiz
                                                                                                        Plascencia
                                                                                                        Gloria
                                                                                                        Martina</a></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="http://orcid.org/0000-0001-5730-4011">http://orcid.org/0000-0001-5730-4011</a>
                                                                                        </td>
                                                                                        <td>3</td>
                                                                                        <td>2039</td>
                                                                                        <td>TAOA</td>
                                                                                        <td><a href="mailto:gyepiz@ciad.mx">gyepiz@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/jesus-fernando-ayala-zavala/">Ayala
                                                                                                        Zavala Jesus
                                                                                                        Fernando</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:jayala@ciad.mx">jayala@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/rene-renato-balandran-quintana/">Balandran
                                                                                                        Quintana Rene
                                                                                                        Renato</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:rbalandran@ciad.mx">rbalandran@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITA</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/carmen-arminda-contreras-vergara/">Contreras
                                                                                                        Vergara Carmen
                                                                                                        Arminda</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:contreras@ciad.mx">contreras@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/martin-candelario-esqueda-valle/">Esqueda
                                                                                                        Valle Martin
                                                                                                        Candelario</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:esqueda@ciad.mx">esqueda@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/gustavo-adolfo-gonzalez-aguilar/">Gonzalez
                                                                                                        Aguilar Gustavo
                                                                                                        Adolfo</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:gustavo@ciad.mx">gustavo@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/maria-auxiliadora-islas-osuna/">Islas
                                                                                                        Osuna Maria
                                                                                                        Auxiliadora</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:islasosu@ciad.mx">islasosu@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/alma-rosa-islas-rubio/">Islas
                                                                                                        Rubio Alma
                                                                                                        Rosa</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:aislas@ciad.mx">aislas@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>JDIV-ITB</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/tomas-jesus-madera-santana/">Madera
                                                                                                        Santana Tomas
                                                                                                        Jesus</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:madera@ciad.mx">madera@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/miguel-angel-martinez-tellez/">Martinez
                                                                                                        Tellez Miguel
                                                                                                        Angel</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:norawa@ciad.mx">norawa@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/ana-maria-mendoza-wilson/">Mendoza
                                                                                                        Wilson Ana
                                                                                                        Maria</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:mwilson@ciad.mx">mwilson@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/luz-del-carmen-montoya-ballesteros/">Montoya
                                                                                                        Ballesteros Luz
                                                                                                        Del Carmen</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:lmontoya@ciad.mx">lmontoya@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/agustin-rascon-chu/">Rascon
                                                                                                        Chu
                                                                                                        Agustin</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:arascon@ciad.mx">arascon@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITA</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/alberto-sanchez-estrada/">Sanchez
                                                                                                        Estrada
                                                                                                        Alberto</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:aestrada@ciad.mx">aestrada@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/herlinda-soto-valdez/">Soto
                                                                                                        Valdez
                                                                                                        Herlinda</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:hsoto@ciad.mx">hsoto@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/martin-ernesto-tiznado-hernandez/">Tiznado
                                                                                                        Hernandez Martin
                                                                                                        Ernesto</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:tiznado@ciad.mx">tiznado@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITC</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/rosalba-troncoso-rojas/">Troncoso
                                                                                                        Rojas
                                                                                                        Rosalba</a></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:rtroncoso@ciad.mx">rtroncoso@ciad.mx</a>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Hermosillo</td>
                                                                                        <td>ITA</td>
                                                                                        <td></td>
                                                                                        <td><a target="_blank"
                                                                                                        rel="noopener noreferrer"
                                                                                                        href="https://www.ciad.mx/personal/francisco-vasquez-lara/">Vasquez
                                                                                                        Lara
                                                                                                        Francisco</a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>TAOV</td>
                                                                                        <td><a href="mailto:fvas@ciad.mx">fvas@ciad.mx</a>
                                                                                        </td>
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
                                <div class="modal-body">Select "Logout" below if you are ready to end your current
                                        session.</div>
                                <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Cancel</button>
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
         <!--  -->

        <!-- Include HTML -->
        <script src="js/includeHtml.js"></script>
        <script>includeHTML();</script>

<!-- Responsive DataTables JS -->
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>
</body>

</html>