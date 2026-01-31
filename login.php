<?php
require_once 'conexion.php'; 
require_once 'ldap.php';    
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST['usuario'] ?? '';
    $password = $_POST['contrasena'] ?? '';

    if (!empty($login) && !empty($password)) {
        $auth = new AuthLDAP();
        if ($auth->Autenticar($login, $password)) {
            try {
                $stmt = $pdo->prepare("SELECT CVU, NombreCompleto, TipoPersonal FROM Personal WHERE CorreoInstitucional = ?");
                $stmt->execute([$login]);
                $datos = $stmt->fetch();

                if ($datos) {
                    $_SESSION['usuario'] = $login;
                    $_SESSION['cvu'] = $datos['CVU'];
                    $_SESSION['nombre'] = $datos['NombreCompleto'];
                    header("Location: personal_ciad.php"); 
                    exit;
                } else {
                    $error = "Usuario autenticado en CIAD, pero no registrado en STAR.";
                }
            } catch (PDOException $e) {
                $error = "Error de base de datos: " . $e->getMessage();
            }
        } else {
            $error = "Usuario o contraseña del CIAD incorrectos.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STAR - Login</title>

    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">

</head>

<body class="bg-gradient-primary">

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9 d-flex justify-content-center">
            
            <div class="card card-login o-hidden shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        
                        <div class="col-lg-6 d-none d-lg-flex col-carousel">
                            <div id="loginCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
                                
                                <ol class="carousel-indicators">
                                    <li data-target="#loginCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#loginCarousel" data-slide-to="1"></li>
                                    <li data-target="#loginCarousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner h-100">
                                    <div class="carousel-item active h-100">
                                        <div class="carousel-bg-img slide-1"></div>
                                    </div>
                                    <div class="carousel-item h-100">
                                        <div class="carousel-bg-img slide-2"></div>
                                    </div>
                                    <div class="carousel-item h-100">
                                        <div class="carousel-bg-img slide-3"></div>
                                    </div>
                                </div>

                                <a class="carousel-control-prev" href="#loginCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#loginCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Siguiente</span>
                                </a>

                            </div>
                        </div>
                        
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="p-5 w-100">
                                <div class="text-center">
                                    <img src="img/Logotipo CIAD_Aplicación horizontal.svg" 
                                         style="max-width: 300px; width: 100%;" 
                                         class="mb-4" 
                                         alt="Logo CIAD">
                                    
                                </div>

                                <?php if (!empty($error)): ?>
                                    <div class="alert alert-danger small text-center"><?= htmlspecialchars($error) ?></div>
                                <?php endif; ?>

                                <form class="user" method="post" action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user p-4 input-narrow" 
                                               name="usuario" placeholder="Usuario Institucional" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user p-4 input-narrow" 
                                               name="contrasena" placeholder="Contraseña" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block mt-4 p-3 input-narrow">
                                        Iniciar sesión
                                    </button>
                                </form>

                                <hr>
                                <div class="text-center">
                                    <small class="text-muted"> CIAD 2026</small>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="footer-logo">
    <img src="./img/CIAD_idTIzG1ctL_1.svg" alt="CIAD">
</div>




<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>