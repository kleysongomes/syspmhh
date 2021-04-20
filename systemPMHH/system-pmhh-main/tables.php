<?php 
include("global.php");
include("kernel/verifica_login.php");
include("kernel/get_user_patente.php");
include("kernel/get_patente.php");
$usuarioNome = $_SESSION["usuario"];
$typeform = htmlspecialchars($_GET["type"]);
$getuserperm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
$perm = mysqli_num_rows($getuserperm);


$getusersudo = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}'");
$sqlfetchsudo = mysqli_fetch_array($getusersudo);
$usr_sudo = $sqlfetchsudo["usr_perm"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="shortcut icon" href="<?php echo $imagem_site ?>" />

    <!-- Title Page-->
    <title><?php echo $titulo_site ?> - Painel</title>

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

 
</head>

<body class="animsition">
    <div class="page-wrapper">

        <?php include("includes/sidebar.php");?>

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <?php include("includes/header.php"); ?>
            
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
               
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
               
            </section>
            <!-- END STATISTIC-->
<!-- Começo sistema de formulários -->
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="recent-report2">
                                    <h3 class="title-3"></h3>
                                    
                                    <?php 
                                
                                    if($typeform == "ver_policiais"):
                                        
                                        echo '  <table id="tableRelatorios" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>imagem</th>
                                                <th>nick</th>
                                                <th>cargo/patente</th>
                                                <th>Última promoção</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                    $sql_get_guias = mysqli_query($conn, "SELECT * FROM membros WHERE usr_habbo != 'theGuiihBR' AND usr_status != 3 ORDER BY usr_patente ASC");
                                    while($resguias = mysqli_fetch_array($sql_get_guias)) {
                                        

                                    ?>

                                       
                                            <tr>
                                                <td><img src="https://www.habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $resguias['usr_habbo'] ?>&action=std&direction=2&head_direction=2&gesture=std&size=b"></td>
                                                <td style='font-weight: bold;'><?php echo $resguias['usr_habbo'] ?></td>
                                                <td><?php
                                                $lista_ptt_id = $resguias['usr_patente'];
                                                 $select_u_p = mysqli_query($conn, "SELECT * FROM patentes WHERE id = '{$lista_ptt_id}'");
                                                 $r_u_p = mysqli_fetch_array($select_u_p);
                                                 $usr_execc = $resguias['usr_executivo'];
                                                 if($usr_execc == 1) {
                                                     echo $usr_patente = $r_u_p["patente_executivo"];
                                                 }
                                                 else {
                                                     echo $usr_patente = $r_u_p["patente"];
                                                 }
                                                ?></td>
                                                <td><?php echo date('d/m/Y H:i:s', strtotime($resguias['usr_promo'])) ?></td>
                                              
                                              
                                               <!--  -->
                                            </tr>
                                         
                                    <?php } 
                                echo '  
                                </tr>
                            </tbody>
                        </table>';
                                endif; ?>


                                    <?php if($typeform == "ver_avais" && $patente_id <= 5): ?>
                                    
                                  <table id="tableRelatorios" class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>imagem</th>
                                            <th>nick</th>
                                            <th>Data inicial</th>
                                            <th>Data final</th>
                                            <th>Motivo(s)</th>
                                            <th>Status</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                             <?php 
                             $sqlselect_avais = mysqli_query($conn, "SELECT * FROM avais ORDER BY id DESC");
                            while($fetchselect_avais = mysqli_fetch_array($sqlselect_avais)) {

                            
                             
                             ?>

                                   
                                        <tr>
                                            <td><img src="https://www.habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $fetchselect_avais['user'] ?>&action=std&direction=2&head_direction=2&gesture=std&size=b"></td>
                                            <td style='font-weight: bold;'><?php echo $fetchselect_avais['user'] ?></td>
                                            <td><?php echo date('d/m/Y', strtotime($fetchselect_avais['data_inicio'])); ?></td>
                                            <td><?php echo date('d/m/Y', strtotime($fetchselect_avais['data_fim'])); ?></td>
                                            <td><?php echo $fetchselect_avais['motivo']; ?></td>
                                            <td><?php 
                                            switch($fetchselect_avais['status']) {
                                                case 0:
                                                    $aval_stts = 'Pendente';
                                                break;
                                                case 1:
                                                    $aval_stts = 'Aprovado';
                                                break;
                                                case 2:
                                                    $aval_stts = 'Reprovado';
                                                break;
                                                default:
                                                $aval_stts = 'Erro';
                                            break;
                                            }
                                            echo $aval_stts; ?></td>
                                            <td>
                                          
                                            <a style="border-radius: 6px; background-color: green; color: white;" href="kernel/action.php?tipo=aprovar_aval&id=<?php echo $fetchselect_avais["id"]; ?> "><i class="fa fa-check"></i> Aprovar</a>
                                            <a style="border-radius: 6px; background-color: red; color: white;" href="kernel/action.php?tipo=reprovar_aval&id=<?php echo $fetchselect_avais["id"]; ?> "><i class="fa fa-ban"></i> Reprovar</a>
                                            </td>
                                            
                                          
                                          
                                           <!--  -->
                                        </tr>
                                     
                               <?php }?>
                                </tr>
                        </tbody>
                    </table>
            <?php    endif;  ?>



























                                    <?php if($typeform == "gerusers" && $usr_sudo > 1): 
                                    echo '  <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>imagem</th>
                                                        <th>nick</th>
                                                        <th>patente</th>
                                                        <th>status</th>
                                                        <th>ação</th>
                                                    </tr>
                                                </thead>
                                                <tbody>';
                                        $select_all_users = mysqli_query($conn, "SELECT * FROM painel WHERE usr_perm = 1 AND usr_habbo != '{$usuarioNome}' ORDER BY id ASC");
                                    while($r = mysqli_fetch_array($select_all_users)) {
                                        $usr_habbo = $r["usr_habbo"];
                                    $getmembro = mysqli_query($conn, "SELECT * FROM membros WHERE usr_habbo = '{$usr_habbo}'");
                                    $rmembro = mysqli_fetch_array($getmembro);
                                        $patente_id = $rmembro["usr_patente"];
                                        $usr_exec = $rmembro["usr_executivo"];
                                        $usr_status = $rmembro["usr_status"];
                                        $select_u_p = mysqli_query($conn, "SELECT * FROM patentes WHERE id = '{$patente_id}'");
                                        $r_u_p = mysqli_fetch_array($select_u_p);
                                        if($usr_exec == 1) {
                                            $usr_patente = $r_u_p["patente_executivo"];
                                        }
                                        else {
                                            $usr_patente = $r_u_p["patente"];
                                        }

                                        if($usr_status >= 2 && $usr_status <= 4) {
                                            $classe = "denied";
                                            $textoclasse = "Não ativo";
                                        }
                                        else {
                                            $classe = "process";
                                            $textoclasse = "Ativo";
                                        }
                                        ?>
                                      
                                            <tr>
                                                <td><img src="https://www.habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $usr_habbo ?>&action=std&direction=2&head_direction=2&gesture=std&size=b"></td>
                                                <td><?php echo $usr_habbo ?></td>
                                                <td><?php echo $usr_patente ?></td>
                                                <td class="<?php echo $classe ?>"><?php echo $textoclasse ?></td>
                                                <td><a style="color: red" href="kernel/action.php?tipo=remover_adm&user_id=<?php echo $r["id"]?>"><i class="fa fa-gavel"></i> Remover ADM</a></td>
                                            </tr>
                                         
                                    <?php } echo '  
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>';
                                endif; ?>


                                

                                    <?php 
                                    
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM guias WHERE nickname = '{$usuarioNome}'");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    
                                    if($typeform == "ver_guias" && $num_select_guia > 0):
                                        $fetch_select_guia = mysqli_fetch_array($sql_select_guia);
                                        $get_cargo_guia = $fetch_select_guia["cargo"];
                                        echo '  <table id="tableRelatorios" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>imagem</th>
                                                <th>nick</th>
                                                <th>cargo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                    $sql_get_guias = mysqli_query($conn, "SELECT * FROM guias ORDER BY id ASC");
                                    while($resguias = mysqli_fetch_array($sql_get_guias)) {
                                        
                                    ?>

                                       
                                            <tr>
                                                <td><img src="https://www.habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $resguias['nickname'] ?>&action=std&direction=2&head_direction=2&gesture=std&size=b"></td>
                                                <td style='font-weight: bold;'><?php echo $resguias['nickname'] ?></td>
                                                <td><?php
                                                switch($resguias['cargo']) {
                                                    case 1:
                                                        $cgg = 'Membro';
                                                    break;
                                                    case 2:
                                                        $cgg = 'Líder';
                                                    break;
                                                    default:
                                                    $cgg = 'Erro - contate a Direção';
                                                break;
                                                }
                                                echo $cgg; ?></td>
                                                <?php if($get_cargo_guia > 1):?>
                                                <td><a style="color: red;" href="kernel/action.php?tipo=remover_guia&nickname=<?php echo $resguias["nickname"]; ?> "><i class="fa fa-gavel"></i> Remover guia</a>
                                                <?php if($perm): ?><br> <a style="color: green;" href="kernel/action.php?tipo=transformar_lider_guia&nickname=<?php echo $resguias["nickname"]; ?> "><i class="fa fa-arrow-up"></i> Tornar líder</a><?php endif; ?>
                                                </td>
                                                <?php endif; ?>
                                              
                                              
                                               <!--  -->
                                            </tr>
                                         
                                    <?php } 
                                echo '  
                                </tr>
                            </tbody>
                        </table>';
                                endif; ?>



<?php 
                                    
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM professores WHERE nickname = '{$usuarioNome}'");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                               
                                    
                                    if($typeform == "ver_professores" && $num_select_guia > 0):
                                        $fetch_select_guia = mysqli_fetch_array($sql_select_guia);
                                        $get_cargo_guia = $fetch_select_guia["cargo"];
                                        echo '  <table id="tableRelatorios" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>imagem</th>
                                                <th>nick</th>
                                                <th>cargo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                    $sql_get_guias = mysqli_query($conn, "SELECT * FROM professores ORDER BY id ASC");
                                    while($resguias = mysqli_fetch_array($sql_get_guias)) {
                                        
                                    ?>

                                       
                                            <tr>
                                                <td><img src="https://www.habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $resguias['nickname'] ?>&action=std&direction=2&head_direction=2&gesture=std&size=b"></td>
                                                <td style='font-weight: bold;'><?php echo $resguias['nickname'] ?></td>
                                                <td><?php
                                                switch($resguias['cargo']) {
                                                    case 1:
                                                        $cgg = 'Membro';
                                                    break;
                                                    case 2:
                                                        $cgg = 'Líder';
                                                    break;
                                                    default:
                                                    $cgg = 'Erro - contate a Direção';
                                                break;
                                                }
                                                echo $cgg; ?></td>
                                                <?php if($get_cargo_guia > 1):?>
                                                <td><a style="color: red;" href="kernel/action.php?tipo=remover_professor&nickname=<?php echo $resguias["nickname"]; ?> "><i class="fa fa-gavel"></i> Remover professor</a>
                                                <?php if($perm): ?><br> <a style="color: green;" href="kernel/action.php?tipo=transformar_lider_professor&nickname=<?php echo $resguias["nickname"]; ?> "><i class="fa fa-arrow-up"></i> Tornar líder</a><?php endif; ?>
                                                </td>
                                                <?php endif; ?>
                                              
                                              
                                               <!--  -->
                                            </tr>
                                         
                                    <?php } 
                                echo '  
                                </tr>
                            </tbody>
                        </table>';
                                endif; ?>



<?php 
                                    
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM instrutores WHERE nickname = '{$usuarioNome}'");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    if($num_select_guia <= 0) {
                                        echo '';
                                    }
                                    else {
                                    $fetch_select_guia = mysqli_fetch_array($sql_select_guia);
                                    $get_cargo_guia = $fetch_select_guia["cargo"];
                                    
                                    if($typeform == "ver_instrutores" && $num_select_guia > 0):
                                    
                                        echo '  <table id="tableRelatorios" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>imagem</th>
                                                <th>nick</th>
                                                <th>cargo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                    $sql_get_guias = mysqli_query($conn, "SELECT * FROM instrutores ORDER BY id ASC");
                                    while($resguias = mysqli_fetch_array($sql_get_guias)) {
                                        
                                    ?>

                                       
                                            <tr>
                                                <td><img src="https://www.habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $resguias['nickname'] ?>&action=std&direction=2&head_direction=2&gesture=std&size=b"></td>
                                                <td style='font-weight: bold;'><?php echo $resguias['nickname'] ?></td>
                                                <td><?php
                                                switch($resguias['cargo']) {
                                                    case 1:
                                                        $cgg = 'Membro';
                                                    break;
                                                    case 2:
                                                        $cgg = 'Líder';
                                                    break;
                                                    default:
                                                    $cgg = 'Erro - contate a Direção';
                                                break;
                                                }
                                                echo $cgg; ?></td>
                                                <?php if($get_cargo_guia > 1):?>
                                                <td><a style="color: red;" href="kernel/action.php?tipo=remover_instrutores&nickname=<?php echo $resguias["nickname"]; ?> "><i class="fa fa-gavel"></i> Remover instrutor</a>
                                                <?php if($perm): ?><br> <a style="color: green;" href="kernel/action.php?tipo=transformar_lider_instrutores&nickname=<?php echo $resguias["nickname"]; ?> "><i class="fa fa-arrow-up"></i> Tornar líder</a><?php endif; ?>
                                                </td>
                                                <?php endif; ?>
                                              
                                              
                                               <!--  -->
                                            </tr>
                                         
                                    <?php } 
                                echo '  
                                </tr>
                            </tbody>
                        </table>';
                    endif; } ?>




















<?php 
                                    
                                    
                                    if($typeform == "ver_historico" && $perm > 0): ?>
                                    
                                         <table id='tableRelatorios'class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>De: </th>
                                                <th>Alvo: </th>
                                                <th>Tipo</th>
                                                <th>Msg/Obs</th>
                                                <th>Data</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $sql_get_guias = mysqli_query($conn, "SELECT * FROM historico ORDER BY id DESC");
                                    while($fetchresrelg = mysqli_fetch_array($sql_get_guias)) {
                                        
                                    ?>
<?php switch($fetchresrelg['tipo']) {
                                                 case -1:
                                                    $stts = 'Promoção CANCELADA';
                                                 break;
                                                 case -2:
                                                    $stts = 'Advertência CANCELADA';
                                                 break;
                                                 case -3:
                                                    $stts = 'Rebaixamento CANCELADO';
                                                 break;
                                                 case -4:
                                                    $stts = 'Treinamento CANCELADO';
                                                 break;
                                                 case -5:
                                                    $stts = 'Aval CANCELADO';
                                                 break;
                                                 case -6:
                                                    $stts = 'Demissão CANCELADA';
                                                 break;
                                                 case 1:
                                                    $stts = 'Promoção';
                                                 break;
                                                 case 2:
                                                    $stts = 'Advertência';
                                                 break;
                                                 case 3:
                                                    $stts = 'Rebaixamento';
                                                 break;
                                                 case 4:
                                                    $stts = 'Treinamento';
                                                 break;
                                                 case 5:
                                                    $stts = 'Aval';
                                                 break;
                                                 case 6:
                                                    $stts = 'Demissão';
                                                 break;
                                                 default:
                                                 $stts = 'Erro';
                                                break;
                                             } ?>

                                            <tr>
                                                <td><?php echo $fetchresrelg["id"] ?></td>
                                                <td style='font-weight: bold;'><?php echo $fetchresrelg['enviado_por'] ?></td>
                                               
                                             <td style='font-weight: bold;'><?php echo $fetchresrelg['usr_habbo'] ?></td>
                                             <td><?php echo $stts ?></td>
                                             <td><?php echo $fetchresrelg['msg'] ?></td>
                                             <td><?php echo date('d/m/Y H:i:s', strtotime($fetchresrelg['data'])); ?></td>
                                             
                                             <td>  <a style="border-radius: 6px; background-color: green; color: white;" href="kernel/action.php?tipo=aprovar_hist&type=<?php echo $fetchresrelg['tipo']; ?>&id=<?php echo $fetchresrelg["id"]; ?> "><i class="fa fa-check"></i> APROVAR</a>
                                            <a style="border-radius: 6px; background-color: red; color: white;" href="kernel/action.php?tipo=cancelar_hist&type=<?php echo $fetchresrelg['tipo']; ?>&id=<?php echo $fetchresrelg["id"]; ?> "><i class="fa fa-ban"></i> CANCELAR</a></td>
                                              
                                              
                                               <!--  -->
                                            </tr>
                                         
                                    <?php } ?>
                                 
                                </tr>
                            </tbody>
                        </table>
                               <?php endif; ?>






























                                    <?php 
                                    
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM guias WHERE nickname = '{$usuarioNome}' AND cargo = 2");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    
                                    if($typeform == "relatorios_guias" && $num_select_guia > 0): ?>
                                    
                                         <table id='tableRelatorios'class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Enviado por</th>
                                                <th>Aprovados</th>
                                                <th>Observações</th>
                                                <th>Tipo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $sql_get_guias = mysqli_query($conn, "SELECT * FROM relatorios WHERE tipo = 0 OR tipo = 1 OR tipo = 2 OR tipo = 3 ORDER BY id DESC");
                                    while($fetchresrelg = mysqli_fetch_array($sql_get_guias)) {
                                        
                                    ?>

                                       
                                            <tr>
                                                <td><?php echo $fetchresrelg["id"] ?></td>
                                                <td style='font-weight: bold;'><?php echo $fetchresrelg['usr_habbo'] ?></td>
                                               
                                             <td><?php echo $fetchresrelg['recrutas'] ?></td>
                                             <td><?php echo $fetchresrelg['observacoes'] ?></td>
                                             <td><?php
                                                switch($fetchresrelg['tipo']) {
                                                    case 0:
                                                        $cgg = 'TS';
                                                    case 1:
                                                        $cgg = 'T1';
                                                    break;
                                                    case 2:
                                                        $cgg = 'T2';
                                                    break;
                                                    case 3:
                                                        $cgg = 'T3';
                                                    break;
                                                    default:
                                                    $cgg = 'Erro - contate a Direção';
                                                break;
                                                }
                                                echo $cgg; ?></td>
                                             <td><i class='fa fa-pencil-square' style='color: darkblue;'></i> <a href=''>Editar</a></td>
                                              
                                              
                                               <!--  -->
                                            </tr>
                                         
                                    <?php } ?>
                                 
                                </tr>
                            </tbody>
                        </table>
                               <?php endif; ?>



                               <?php 
                                    
                                    $sql_select_ins = mysqli_query($conn, "SELECT * FROM instrutores WHERE nickname = '{$usuarioNome}' AND cargo = 2");
                                    $num_select_ins = mysqli_num_rows($sql_select_ins);
                                    
                                    
                                    if($typeform == "ver_cfos" && $num_select_ins > 0): ?>
                                    
                                         <table id='tableRelatorios'class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Enviado por</th>
                                                <th>Aprovados</th>
                                                <th>Observações</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $sql_get_guias = mysqli_query($conn, "SELECT * FROM relatorios WHERE tipo = 6 ORDER BY id DESC");
                                    while($fetchresrelg = mysqli_fetch_array($sql_get_guias)) {
                                        
                                    ?>

                                       
                                            <tr>
                                                <td><?php echo $fetchresrelg["id"] ?></td>
                                                <td style='font-weight: bold;'><?php echo $fetchresrelg['usr_habbo'] ?></td>
                                               
                                             <td><?php echo $fetchresrelg['recrutas'] ?></td>
                                             <td><?php echo $fetchresrelg['observacoes'] ?></td>
                                             <td><?php switch($fetchresrelg['status']) {
                                                 case 0:
                                                    $stts = 'Pendente';
                                                 break;
                                                 case 1:
                                                    $stts = 'Aprovado';
                                                 break;
                                                 case 2:
                                                    $stts = 'Reprovado';
                                                 break;
                                                 default:
                                                 $stts = 'Erro';
                                                break;
                                             }echo $stts; ?></td>
                                             <td>  <a style="border-radius: 6px; background-color: green; color: white;" href="kernel/action.php?tipo=aprovar_cfo&id=<?php echo $fetchresrelg["id"]; ?> "><i class="fa fa-check"></i> Aprovar</a>
                                            <a style="border-radius: 6px; background-color: red; color: white;" href="kernel/action.php?tipo=reprovar_cfo&id=<?php echo $fetchresrelg["id"]; ?> "><i class="fa fa-ban"></i> Reprovar</a></td>
                                              
                                              
                                               <!--  -->
                                            </tr>
                                         
                                    <?php } ?>
                                 
                                </tr>
                            </tbody>
                        </table>
                               <?php endif; ?>











                               <?php 
                                    
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM professores WHERE nickname = '{$usuarioNome}' AND cargo = 2");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    
                                    if($typeform == "relatorios_professores" && $num_select_guia > 0): ?>
                                    
                                         <table id='tableRelatorios'class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Enviado por</th>
                                                <th>Aprovados</th>
                                                <th>Observações</th>
                                                <th>Tipo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $sql_get_guias = mysqli_query($conn, "SELECT * FROM relatorios WHERE tipo = 4 OR tipo = 5 ORDER BY id DESC");
                                    while($fetchresrelg = mysqli_fetch_array($sql_get_guias)) {
                                        
                                    ?>

                                       
                                            <tr>
                                                <td><?php echo $fetchresrelg["id"] ?></td>
                                                <td style='font-weight: bold;'><?php echo $fetchresrelg['usr_habbo'] ?></td>
                                               
                                             <td><?php echo $fetchresrelg['recrutas'] ?></td>
                                             <td><?php echo $fetchresrelg['observacoes'] ?></td>
                                             <td><?php
                                                switch($fetchresrelg['tipo']) {
                                                    case 4:
                                                        $cgg = 'TE';
                                                    case 5:
                                                        $cgg = 'TF';
                                                    break;
                                                    default:
                                                    $cgg = 'Erro - contate a Direção';
                                                break;
                                                }
                                                echo $cgg; ?></td>
                                             <td><i class='fa fa-pencil-square' style='color: darkblue;'></i> <a href=''>Editar</a></td>
                                              
                                              
                                               <!--  -->
                                            </tr>
                                         
                                    <?php } ?>
                                 
                                </tr>
                            </tbody>
                        </table>
                               <?php endif; ?>






                               <?php 
                                    
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM instrutores WHERE nickname = '{$usuarioNome}' AND cargo = 2");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    
                                    if($typeform == "relatorios_instrutores" && $num_select_guia > 0): ?>
                                    
                                         <table id='tableRelatorios'class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Enviado por</th>
                                                <th>Aprovados</th>
                                                <th>Observações</th>
                                                <th>Tipo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $sql_get_guias = mysqli_query($conn, "SELECT * FROM relatorios WHERE tipo = 6 ORDER BY id DESC");
                                    while($fetchresrelg = mysqli_fetch_array($sql_get_guias)) {
                                        
                                    ?>

                                       
                                            <tr>
                                                <td><?php echo $fetchresrelg["id"] ?></td>
                                                <td style='font-weight: bold;'><?php echo $fetchresrelg['usr_habbo'] ?></td>
                                               
                                             <td><?php echo $fetchresrelg['recrutas'] ?></td>
                                             <td><?php echo $fetchresrelg['observacoes'] ?></td>
                                             <td><?php
                                                switch($fetchresrelg['tipo']) {
                                                    case 6:
                                                        $cgg = 'CFO';
                                                    break;
                                                    default:
                                                    $cgg = 'Erro - contate a Direção';
                                                break;
                                                }
                                                echo $cgg; ?></td>
                                             <td><i class='fa fa-pencil-square' style='color: darkblue;'></i> <a href=''>Editar</a></td>
                                              
                                              
                                               <!--  -->
                                            </tr>
                                         
                                    <?php } ?>
                                 
                                </tr>
                            </tbody>
                        </table>
                               <?php endif; ?>
















                                    
                                </div>
                                
                            </div>
                           

                           

                            
                        </div>
                    </div>
                </div>
            </section>
<!-- Fim sistema de formulários -->
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
    $('#tableRelatorios').DataTable();
} );
        </script>
</body>

</html>
<!-- end document-->
