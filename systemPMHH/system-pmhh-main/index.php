<?php 
include("global.php");
echo "<div style='display: none;'>";

if($_SESSION["usuario"]) {
    header('Location: painel.php');
}
else {
    
}
echo "</div>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="System PMHH">
    <meta name="author" content="System PMHH">
    <meta name="keywords" content="System PMHH">

    <!-- Title Page-->
    <title><?php echo $titulo_site ?> - Login</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="<?php echo $imagem_site ?>" />

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition" >
    <div class="page-wrapper" style="background: rgb(0,0,0);
background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(97,97,97,1) 37%, rgba(19,32,59,1) 78%);">
        <div class="page-content--bge5" style="background: rgb(0,0,0);
background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(97,97,97,1) 37%, rgba(19,32,59,1) 78%);">
            <div class="container" style="background: rgb(0,0,0);
background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(97,97,97,1) 37%, rgba(19,32,59,1) 78%);">
                <div class="login-wrap">
                    <a href ="https://github.com/the1scient" target="_blank">
                    <img  src="https://i.imgur.com/dnek5gO.png"></a>
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <h3>System PMHH - Login <img src="<?php echo $imagem_site ?>" /></h3> 
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="kernel/login.php" method="post">
                                <div class="form-group">
                                    <label>Usu??rio</label>
                                    <input class="au-input au-input--full" type="text" name="usuario" placeholder="Digite seu usu??rio. Exemplo: BRKINGZ">
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input class="au-input au-input--full" type="password" name="senha" placeholder="Digite sua senha">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        
                                    </label>
                                    <label>
                                        <a href="esqueceu_senha.php">Esqueceu a senha?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Login</button>
                               
                            </form>
                            <div class="social-login-content">
                                    <div class="social-button">
                                    <button class="au-btn au-btn--block au-btn--black m-b-20" onclick="location.href='register.php'" style="background-color: black;">Registrar</button>
                                    </div>
                                </div>
                            <div class="register-link">
                            <p>Copyright ??
                                <script>document.write(new Date().getFullYear());</script> | Mantido por <a href="https://github.com/kleysongomes" style="color: black;" target="_blank">BRKINGZ</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
