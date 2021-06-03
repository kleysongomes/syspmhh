<?php 
include_once("./global.php");
include("kernel/get_patente.php");
$usuarioNome = $_SESSION["usuario"];

$sql_get_adm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
$count_get_adm = mysqli_num_rows($sql_get_adm);

$sql_select_guia = mysqli_query($conn, "SELECT * FROM guias WHERE nickname = '{$usuarioNome}'");
$num_select_guia = mysqli_num_rows($sql_select_guia);
if($num_select_guia <= 0) {

}
else {
    $fetch_select_guia = mysqli_fetch_array($sql_select_guia);
    $getlider_guia = $fetch_select_guia["cargo"];
}


$sql_select_pf = mysqli_query($conn, "SELECT * FROM professores WHERE nickname = '{$usuarioNome}'");
$num_select_pf = mysqli_num_rows($sql_select_pf);
if($num_select_pf <= 0) {

}
else {
    $fetch_select_pf = mysqli_fetch_array($sql_select_pf);
    $getlider_pf = $fetch_select_pf["cargo"];
}


$sql_select_ins = mysqli_query($conn, "SELECT * FROM instrutores WHERE nickname = '{$usuarioNome}'");
$num_select_ins = mysqli_num_rows($sql_select_ins);
if($num_select_ins <= 0) {

}
else {
    $fetch_select_ins = mysqli_fetch_array($sql_select_ins);
    $getlider_ins = $fetch_select_ins["cargo"];
    
}


$patente_id = $patente_id;


$getusersudo = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}'");
$sqlfetchsudo = mysqli_fetch_array($getusersudo);
$usr_sudo = $sqlfetchsudo["usr_perm"];

?>
<!-- MENU SIDEBAR DESKTOP-->
<aside class="menu-sidebar2">
            <div class="logo" style="background: #47494e;">
                <a href="painel.php">
                    <h3 style="color: white;"><img src="<?php echo $imagem_site ?>"> <?php echo $titulo_site ?> </h3>
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                   
                       <div style="margin-top: -35px; height: 120px; width: 50%; background: url(https://www.habbo.com.br/habbo-imaging/avatarimage?&user=<?php echo $usuarioNome ?>&action=&direction=4&head_direction=3&img_format=png&gesture=&headonly=0&size=l),  radial-gradient(circle, rgba(97,97,97,1) 64%, rgba(0,0,0,1) 85%); background-position: center top -30px; border-radius: 60px; "></div>
                  
                    <h4 style="font-family: cursive;"><?php echo $usuarioNome ?></h4>
                    <a href="#">Patente: <strong><?php echo $patente_nome ?></strong></a>                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="painel.php">
                                <i class="fas fa-home"></i>Home
                              
                            </a>
                           
                        </li>
                        <?php if($count_get_adm > 0): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#" style="color: red;">
                                <i class="fas fa-gavel"></i>Administração
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <?php if($usr_sudo > 1): ?>
                            <li>
                                    <a href="tables.php?type=gerusers">
                                    <i class="fas fa-gear"><i class="fas fa-users"></i></i>Gerenciar usuários com permissão</a>
                            </li>
                            
                            <li>
                                    <a href="forms.php?type=edit_lista_negra">
                                    <i class="fas fa-gear"><i class="fas fa-bullhorn"></i></i>Editar lista negra</a>
                            </li>
                            <?php endif; ?>
                                <li>
                                    <a href="viewlogs.php">
                                   <i class="fas fa-search"></i>Logs</a>
                                </li>
                                <li>
                                    <a href="verfakes_nome.php">
                                   <i class="fas fa-search"></i>Ver fakes por nome</a>
                                </li>
                                <li>
                                    <a href="verfakes_ip.php">
                                   <i class="fas fa-search"></i>Ver fakes por IP</a>
                                </li>
                                <li>
                                    <a href="tables.php?type=ver_historico">
                                   <i class="fas fa-search"></i>Ver histórico</a>
                                </li>
                                <li>
                                    <a href="forms.php?type=dar_adm_painel">
                                   <i class="fas fa-briefcase"></i>Dar perm. de admin painel</a>
                                </li>
                                <li>
                                    <a href="forms.php?type=setar_patente">
                                   <i class="fas fa-group"></i>Definir patente</a>
                                </li>
                                <li>
                                    <a href="forms.php?type=add_destaques">
                                   <i class="fas fa-group"></i>Adicionar destaques</a>
                                </li>
                                <li>
                                    <a href="forms.php?type=readmitir_policial">
                                   <i class="fas fa-group"></i>Readmitir policial</a>
                                </li>
                                <li>
                                    <a href="forms.php?type=atualizar_anuncio">
                                   <i class="fas fa-bullhorn"></i>Atualizar anúncio</a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                    
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-file"></i>Polícia Militar do Habbo Hotel
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>História da PMHH, CDP's e Medalhistas Permanentes</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>Históricos Militares</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>Apostilas, dicas e tutoriais a novos militares</a>
                                </li>
                             
                            </ul>
                        </li>


                        <?php if($patente_id <= 17): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-suitcase"></i>Setor Jurídico
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                        
                                    <?php if($patente_id <= 17): ?>
                                    <li class="has-sub">
                                        <a class="js-arrow" href="#">
                                            <i class="fas fa-suitcase"></i>Documentação Principal
                                            <span class="arrow">
                                                <i class="fas fa-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-sign-in-alt"></i>Estatuto dos Policiais Militares da Polícia Militar do Habbo Hotel</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-sign-in-alt"></i>[Anexo 1] Plano de Ação Emergencial (PAE)</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-sign-in-alt"></i>[Anexo 2] Código Penal Militar</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-sign-in-alt"></i>[Anexo 3] Normas de Vestimenta Militares</a>
                                            </li>
                                        
                                    
                                        </ul>
                                    </li>
                                    <?php endif; ?>

                                                <?php if($patente_id <= 17): ?>
                                    <li class="has-sub">
                                        <a class="js-arrow" href="#">
                                            <i class="fas fa-suitcase"></i>Portarias
                                            <span class="arrow">
                                                <i class="fas fa-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-sign-in-alt"></i>Portaria N° 2019/01 - Disposições gerais - OG/CG/CO</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-sign-in-alt"></i>Portaria N° 2019/02 - Transferência de Conta</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-sign-in-alt"></i>Portaria N° 2019/03 - Licença de serviço</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-sign-in-alt"></i>Portaria N° 2019/04 - Gratificações: medalhas militares</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-sign-in-alt"></i>Portaria N° 2019/05 - Veteranos e Reformados</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-sign-in-alt"></i>Portaria N° 2020/01 - Condecoração de medalhas</a>
                                            </li>
                                        
                                    
                                        </ul>
                                    </li>
                                    <?php endif; ?>

                               
                            </ul>
                        </li>
                        <?php endif; ?>


                        <?php if($patente_id <= 17): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-suitcase"></i>Setor de Transparência
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>Decretos Legais - Chefia de Polícia</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>Corregedoria- Decisões e Projetos</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>Boletim Interno</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>Tribunal Fiscal - Balanços & Relatório de O.G</a>
                                </li>
                                <?php if($patente_id <= 10): ?>  <!-- Perm OK -->
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>Avaliação Oficialato - Alto Comando</a>
                                </li>
                                <?php endif; ?>
                           
                            </ul>
                        </li>
                        <?php endif; ?>


                        <?php if($patente_id <= 17): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-suitcase"></i>Setor das Companhias
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>GMA</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>DEP</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>BPC</a>
                                </li>
                               
                           
                            </ul>
                        </li>
                        <?php endif; ?>



                        <?php if($patente_id <= 17): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-suitcase"></i>Setor das sub-Companhias
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>GAD</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>APM</a>
                                </li>
                               
                            </ul>
                        </li>
                        <?php endif; ?>


                        <?php if($patente_id <= 17): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-suitcase"></i>Setor dos Grupos de Função
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>COR</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>BOPE</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>SRH</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>SRP</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>TF</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-sign-in-alt"></i>SEOF</a>
                                </li>
                               
                            </ul>
                        </li>
                        <?php endif; ?>


                        <?php if($patente_id <= 17): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-suitcase"></i>DEV
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">

                               
                            <li>
                                <a href="forms.php?type=add_ts">
                                    <i class="fas fa-sign-in-alt"></i>Add Soldado</a>
                            </li>
   
                            <li>
                                <a href="tables.php?type=ver_policiais">
                                    <i class="fas fa-group"></i>Lista de Policiais</a>
                            </li>

                            </ul>
                        </li>
                        <?php endif; ?>


                        <li>
                            <a href="lista_negra.php" style="color: black;">
                                <i class="fas fa-ban"></i>Lista Negra</a>
                        </li>
                        
                     



                        
                        <li>
                            <a href="logout.php" style="color: black;">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR Desktop-->
