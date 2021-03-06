<?php 
include("global.php");
include("kernel/verifica_login.php");


if(isset($_POST['atualizar_anuncio'])) {
$conteudo_anuncio = $_POST['conteudo_anuncio'];
$sqlupdateanuncio = mysqli_query($conn, "UPDATE avisos SET mensagem = '{$conteudo_anuncio}' WHERE id = 1");
echo '<script type="text/javascript">alert("Anúncio atualizado com sucesso!");window.href.location="redirect_painel.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script data-ad-client="ca-pub-4513727924184300" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="System PMHH">
    <meta name="author" content="System PMHH">
    <meta name="keywords" content="System PMHH">
    <link rel="shortcut icon" href="<?php echo $imagem_site ?>" />

    <script src='https://cdn.tiny.cloud/1/mo4jrwwx09rnl6hezud8upgf2wy4yi2c3mlrx8zv9i385eew/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>
  <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>

    <!-- Title Page-->
    <title><?php echo $titulo_site ?> Documentação</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

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
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style>
.ttype-user {
  position: relative;
  display: inline-block;
}

.ttype-user .ttype-user-text {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.ttype-user:hover .ttype-user-text {
  visibility: visible;
}
</style>
</head>

<body class="animsition">
    <div class="page-wrapper">

        <?php include("includes/sidebar.php");?>

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <?php include("includes/header.php"); ?>
            
            <!-- END HEADER DESKTOP-->

           <?php include("includes/breadcrumb.php"); ?>

            <!-- STATISTIC-->
            <section class="statistic">
               
            </section>
            <!-- END STATISTIC-->
<?php 
$get_anuncios = mysqli_query($conn, "SELECT * FROM avisos WHERE id = 1");
$fetch_anuncios = mysqli_fetch_array($get_anuncios);
$anuncio_msg = $fetch_anuncios["mensagem"];

$sql_get_perm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}'");
$fetch_get_perm = mysqli_fetch_array($sql_get_perm);
$usr_permissao = $fetch_get_perm["usr_perm"];




?>
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                 <!-- RECENT REPORT 2-->
                                <div class="recent-report2">
                                <h3 style="text-align: center;" class="title-3">DOCUMENTAÇÃO - PMHH</h3><br>
                                   <iframe style="width: 100%; height: 800px;" src="https://docs.google.com/document/d/e/2PACX-1vT5Vk5Aw1OYguyNxF43sRryMDpDJOos1D6P1uQMg7eaThZqvfIJxETZVg9EKql674Tq0iDT2l6ti220/pub?embedded=true"></iframe>



                                </div>
                                <!-- END RECENT REPORT 2             -->
                            </div>


                            <!-- Começo últimos alistados -->
                            <div class="col-md-6">
                                <div class="task-progress">
                                    <h3 class="title-3">10 últimos alistados</h3>
                                    <div class="au-skill-container">
                                       <?php 
                                       $get_ultimos_alistados = mysqli_query($conn, "SELECT * FROM membros ORDER BY id LIMIT 10");
                                       while($res_ua = mysqli_fetch_array($get_ultimos_alistados)) {
                                           $nick_user = $res_ua["usr_habbo"];
                                           $patente_id = $res_ua["usr_patente"];
                                           $usr_exec = $res_ua["usr_executivo"];
                                           $select_u_p = mysqli_query($conn, "SELECT * FROM patentes WHERE id = '{$patente_id}'");
                                           $r_u_p = mysqli_fetch_array($select_u_p);
                                           if($usr_exec == 1) {
                                               $usr_patente = $r_u_p["patente_executivo"];
                                           }
                                           else {
                                               $usr_patente = $r_u_p["patente"];
                                           }

                                           echo '<div class="ttype-user"><img style="-webkit-filter: drop-shadow(0 1px 0 #333) drop-shadow(0 -1px 0 #333) drop-shadow(1px 0 0 #333) drop-shadow(-1px 0 0 #333);" src="https://www.habbo.com.br/habbo-imaging/avatarimage?user='.$nick_user.'&action=std&direction=2&head_direction=2&gesture=std&size=b" />
                                           <span class="ttype-user-text">'.$nick_user.' - '.$usr_patente.'</span>
                                         </div>';
                                       }
                                       ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim últimos alistados -->

                             <!-- Começo solicitações-->
                             <div class="col-md-6">
                                <div class="task-progress">
                                    <h3 class="title-3">Acesso rápido</h3>
                                    <div class="au-skill-container">
                                       <ul>
                                       <li>
                                         <a href="meu_perfil.php">Meu perfil</a><br>
                                       </li> 
                                       <li>
                                          <a href="user_configs.php">Altere sua Senha</a><br>
                                       </li>
                                       <hr>
                                       <?php 
                                       include("kernel/get_patente.php");
                                       if($patente_id <= 14):
                                       ?>
                                       <h6 style='text-align: center;'>Avançado</h6>
                                       <li>
                                        <a href="#">DEV</a><br>
                                    </li>
                                       <?php endif; ?>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim solicitações -->

                            
                        </div>
                    </div>
                </div>
            </section>

           <?php include("includes/footer.php"); ?>
            <!-- END PAGE CONTAINER-->
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
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
