<?php 
include("global.php");
include("kernel/verifica_login.php");
include("kernel/get_patente.php");
$usuarioNome = $_SESSION["usuario"];
$typeform = htmlspecialchars($_GET["type"]);

if(isset($_POST["enviar_ts"])) {
    $usuarios = htmlspecialchars($_POST["usuarios"]);
    $str = str_replace(' ', '', $usuarios);
    $str = explode("/", $str);
    $obs = $_POST["observacoes"];
    foreach($str as $usr) {
        $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$usr}', '4', 'Foi aprovado no TS.')");
        $query_inserir = mysqli_query($conn, "INSERT INTO membros(usr_habbo, usr_patente, usr_responsavel) VALUES('{$usr}', '17', '{$usuarioNome}')");
        $query_insertguia = mysqli_query($conn, "INSERT INTO guias(nickname, cargo) VALUES('{$usr}', '1')");
    }
    $query_relatorio_ts = mysqli_query($conn, "INSERT INTO relatorios(usr_habbo, recrutas, observacoes, tipo) VALUES('{$usuarioNome}', '{$usuarios}', '{$obs}', '0')");
    echo "<script type='text/javascript'>alert('Relatório de TS enviado com sucesso.');window.location.href='forms.php?type=add_ts';</script>";
}
elseif(isset($_POST['enviar_t1'])) {
$usuarios = htmlspecialchars($_POST['usuarios']);
$str = str_replace(' ', '', $usuarios);
$str = explode("/", $str);
foreach($str as $usr) {
    $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$usr}', '4', 'Foi aprovado no T1.')");
}
$obs = $_POST['observacoes'];
$query_relatorio_ts = mysqli_query($conn, "INSERT INTO relatorios(usr_habbo, recrutas, observacoes, tipo) VALUES('{$usuarioNome}', '{$usuarios}', '{$obs}', '1')");

echo "<script type='text/javascript'>alert('Relatório de T1 enviado com sucesso.');window.location.href='forms.php?type=add_t1';</script>";

}

elseif(isset($_POST['enviar_t2'])) {
    $usuarios = htmlspecialchars($_POST['usuarios']);
    $str = str_replace(' ', '', $usuarios);
$str = explode("/", $str);
foreach($str as $usr) {
    $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$usr}', '4', 'Foi aprovado no T2.')");
}
    $obs = $_POST['observacoes'];
    $query_relatorio_ts = mysqli_query($conn, "INSERT INTO relatorios(usr_habbo, recrutas, observacoes, tipo) VALUES('{$usuarioNome}', '{$usuarios}', '{$obs}', '2')");
    echo "<script type='text/javascript'>alert('Relatório de T2 enviado com sucesso.');window.location.href='forms.php?type=add_t2';</script>";
    
    }
    elseif(isset($_POST['enviar_t3'])) {
        $usuarios = htmlspecialchars($_POST['usuarios']);
        $str = str_replace(' ', '', $usuarios);
        $str = explode("/", $str);
foreach($str as $usr) {
    $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$usr}', '4', 'Foi aprovado no T3.')");
}
        $obs = $_POST['observacoes'];
        $query_relatorio_ts = mysqli_query($conn, "INSERT INTO relatorios(usr_habbo, recrutas, observacoes, tipo) VALUES('{$usuarioNome}', '{$usuarios}', '{$obs}', '3')");
        echo "<script type='text/javascript'>alert('Relatório de T3 enviado com sucesso.');window.location.href='forms.php?type=add_t3';</script>";
        
        }
        elseif(isset($_POST['enviar_te'])) {
            $usuarios = $_POST['usuarios'];
            $str = str_replace(' ', '', $usuarios);
$str = explode("/", $str);
foreach($str as $usr) {
    $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$usr}', '4', 'Foi aprovado no TE.')");
}
            $obs = $_POST['observacoes'];
            $query_relatorio_ts = mysqli_query($conn, "INSERT INTO relatorios(usr_habbo, recrutas, observacoes, tipo) VALUES('{$usuarioNome}', '{$usuarios}', '{$obs}', '4')");
            echo "<script type='text/javascript'>alert('Relatório de TE enviado com sucesso.');window.location.href='forms.php?type=add_te';</script>";
            
            }
            elseif(isset($_POST['enviar_tf'])) {
                $usuarios = htmlspecialchars($_POST['usuarios']);
                $str = str_replace(' ', '', $usuarios);
$str = explode("/", $str);
foreach($str as $usr) {
    $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$usr}', '4', 'Foi aprovado no TF.')");
}
                $obs = $_POST['observacoes'];
                $query_relatorio_ts = mysqli_query($conn, "INSERT INTO relatorios(usr_habbo, recrutas, observacoes, tipo) VALUES('{$usuarioNome}', '{$usuarios}', '{$obs}', '5')");
                echo "<script type='text/javascript'>alert('Relatório de TF enviado com sucesso.');window.location.href='forms.php?type=add_tf';</script>";
                
                }
                elseif(isset($_POST['enviar_cfo'])) {
                    $usuarios = htmlspecialchars($_POST['usuarios']);
                    $str = str_replace(' ', '', $usuarios);
$str = explode("/", $str);
foreach($str as $usr) {
    $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$usr}', '4', 'Foi aprovado no CFO.')");
}
                    $obs = $_POST['observacoes'];
                    $query_relatorio_ts = mysqli_query($conn, "INSERT INTO relatorios(usr_habbo, recrutas, observacoes, tipo) VALUES('{$usuarioNome}', '{$usuarios}', '{$obs}', '6')");
                    echo "<script type='text/javascript'>alert('Relatório de CFO enviado com sucesso.');window.location.href='forms.php?type=add_cfo';</script>";
                    
                    }

elseif(isset($_POST["enviar_aval"])) {
    $data_inicio = $_POST["data_inicio"];
    $data_fim = $_POST["data_fim"];
    $motivos = $_POST["motivos"];
    $query_insert = mysqli_query($conn, "INSERT INTO avais(user, data_inicio, data_fim, motivo) VALUES('{$usuarioNome}', '{$data_inicio}', '{$data_fim}', '{$motivos}')");
    echo "<script type='text/javascript'>alert('Aval solicitado com sucesso.');window.location.href='painel.php';</script>";
}

elseif(isset($_POST['enviar_destaque'])) {
    $sql_update_destaques_inferior = mysqli_query($conn, "UPDATE membros SET usr_destaque = 0 WHERE usr_destaque = 1");
    $sql_update_destaques_superior = mysqli_query($conn, "UPDATE membros SET usr_destaque = 0 WHERE usr_destaque = 2");

    $destaque_inferior = $_POST["destaque_inferior"];
    $destaque_superior = $_POST["destaque_superior"];
$sql_new_destaque_inf = mysqli_query($conn, "UPDATE membros SET usr_destaque = 1 WHERE usr_habbo = '{$destaque_inferior}'");
$sql_new_destaque_sup = mysqli_query($conn, "UPDATE membros SET usr_destaque = 2 WHERE usr_habbo = '{$destaque_superior}'");
echo "<script type='text/javascript'>alert('Destaques atualizados com sucesso!');window.location.href='painel.php';</script>";


}

elseif(isset($_POST['promover'])) {
    # Verificação: usuário auto-promovendo
    $nick = $_POST['nickname'];
    $motivos = $_POST['motivos'];
    
    if($_POST['nickname'] == $usuarioNome) {
        echo "<script type='text/javascript'>alert('Você não pode se auto-promover!');window.location.href='painel.php';</script>";
        $usr_ip = $_SERVER['REMOTE_ADDR'];
        $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou se auto-promover.', '{$usr_ip}', '2')");

    }
    else {
    # verificação de poder de promoção:
        # pegar patente do usuário sendo promovido
        $sql_get_u_ptt = mysqli_query($conn, "SELECT * FROM membros WHERE usr_habbo = '{$nick}'");
        $fetch_get_u_ptt = mysqli_fetch_array($sql_get_u_ptt);
        $uptt_id = $fetch_get_u_ptt["usr_patente"];
        
        # comparação:
        if($poder_promover_patente < $uptt_id) { # Pode promover
            echo "<script type='text/javascript'>alert('Usuário promovido com sucesso!');window.location.href='painel.php';</script>";
            $newpatente_id = $uptt_id - 1;
            $usr_ip = $_SERVER['REMOTE_ADDR'];
        $sql_promover = mysqli_query($conn, "UPDATE membros SET usr_patente = '{$newpatente_id}', usr_responsavel = '{$usuarioNome}', usr_promo = CURRENT_TIMESTAMP() WHERE usr_habbo = '{$nick}'");
        $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Promoveu o usuário {$nick} - {$motivos}', '{$usr_ip}', '1')");
        $sql_insertnoti = mysqli_query($conn, "INSERT INTO notificacoes(enviado_por, user, msg, noti_type) VALUES('{$usuarioNome}', '{$nick}', 'Você foi promovido! Motivos/descrições: {$motivos}', '1')");
        $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$nick}', '1', '{$motivos}')");

    }
        else { # Não pode promover
            echo "<script type='text/javascript'>alert('Você não pode promover este usuário!');window.location.href='painel.php';</script>";
            $usr_ip = $_SERVER['REMOTE_ADDR'];
            $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou promover o usuário {$nick} mas não possui permissões.', '{$usr_ip}', '2')");

        }
    
        }



}

elseif(isset($_POST['rebaixar'])) {
    # Verificação: usuário auto-rebaixando
    $nick = $_POST['nickname'];
    $motivos = $_POST['motivos'];
    
    if($_POST['nickname'] == $usuarioNome) {
        echo "<script type='text/javascript'>alert('Você não pode se auto-rebaixar!');window.location.href='painel.php';</script>";
        $usr_ip = $_SERVER['REMOTE_ADDR'];
        $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou se auto-rebaixar.', '{$usr_ip}', '2')");

    }
    else {
    # verificação de poder de rebaixamento:
        # pegar patente do usuário sendo rebaixado
        $sql_get_u_ptt = mysqli_query($conn, "SELECT * FROM membros WHERE usr_habbo = '{$nick}'");
        $fetch_get_u_ptt = mysqli_fetch_array($sql_get_u_ptt);
        $uptt_id = $fetch_get_u_ptt["usr_patente"];
        
        # comparação:
        if($poder_rebaixar_patente <= $uptt_id) { # Pode rebaixar
            echo "<script type='text/javascript'>alert('Usuário rebaixado com sucesso!');window.location.href='painel.php';</script>";
            $newpatente_id = $uptt_id + 1;
            $usr_ip = $_SERVER['REMOTE_ADDR'];
        $sql_promover = mysqli_query($conn, "UPDATE membros SET usr_patente = '{$newpatente_id}', usr_responsavel = '{$usuarioNome}', usr_promo = CURRENT_TIMESTAMP() WHERE usr_habbo = '{$nick}'");
        $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Rebaixou o usuário {$nick} - {$motivos}', '{$usr_ip}', '1')");
        $sql_insertnoti = mysqli_query($conn, "INSERT INTO notificacoes(enviado_por, user, msg, noti_type) VALUES('{$usuarioNome}', '{$nick}', 'Você foi rebaixado. Motivos/descrições: {$motivos}', '3')");
        $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$nick}', '3', '{$motivos}')");

    }
        else { # Não pode rebaixar
            echo "<script type='text/javascript'>alert('Você não pode rebaixar este usuário!');window.location.href='painel.php';</script>";
            $usr_ip = $_SERVER['REMOTE_ADDR'];
            $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou rebaixar o usuário {$nick} mas não possui permissões.', '{$usr_ip}', '2')");

        }
    
        }



}






elseif(isset($_POST['demitir'])) {
    # Verificação: usuário auto-demitindo.
    $nick = $_POST['nickname'];
    $motivos = $_POST['motivos'];
    
    if($_POST['nickname'] == $usuarioNome) {
        echo "<script type='text/javascript'>alert('Você não pode se auto-demitir!');window.location.href='painel.php';</script>";
        $usr_ip = $_SERVER['REMOTE_ADDR'];
        $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou se auto-demitir.', '{$usr_ip}', '2')");

    }
    else {
    # verificação de poder de rebaixamento:
        # pegar patente do usuário sendo demitido
        $sql_get_u_ptt = mysqli_query($conn, "SELECT * FROM membros WHERE usr_habbo = '{$nick}'");
        $fetch_get_u_ptt = mysqli_fetch_array($sql_get_u_ptt);
        $uptt_id = $fetch_get_u_ptt["usr_patente"];
        
        # comparação:
        if($poder_demitir_patente <= $uptt_id) { # Pode demitir
            echo "<script type='text/javascript'>alert('Usuário demitido com sucesso!');window.location.href='painel.php';</script>";
            $usr_ip = $_SERVER['REMOTE_ADDR'];
        $sql_promover = mysqli_query($conn, "UPDATE membros SET usr_status = '3', usr_responsavel = '{$usuarioNome}', usr_promo = CURRENT_TIMESTAMP() WHERE usr_habbo = '{$nick}'");
        $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Demitiu o usuário {$nick} - {$motivos}', '{$usr_ip}', '1')");
        $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$nick}', '6', '{$motivos}')");

    }
        else { # Não pode demitir
            echo "<script type='text/javascript'>alert('Você não pode demitir este usuário!');window.location.href='painel.php';</script>";
            $usr_ip = $_SERVER['REMOTE_ADDR'];
            $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou demitir o usuário {$nick} mas não possui permissões.', '{$usr_ip}', '2')");

        }
    
        }



}







elseif(isset($_POST['advertir'])) {
    # Verificação: usuário auto-rebaixando
    $nick = $_POST['nickname'];
    $motivos = $_POST['motivos'];
    
    if($_POST['nickname'] == $usuarioNome) {
        echo "<script type='text/javascript'>alert('Você não pode se auto-advertir!');window.location.href='painel.php';</script>";
        $usr_ip = $_SERVER['REMOTE_ADDR'];
        $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou se auto-advertir.', '{$usr_ip}', '2')");

    }
    else {
    # verificação de poder de advertencias:
        # pegar patente do usuário sendo advertido
        $sql_get_u_ptt = mysqli_query($conn, "SELECT * FROM membros WHERE usr_habbo = '{$nick}'");
        $fetch_get_u_ptt = mysqli_fetch_array($sql_get_u_ptt);
        $uptt_id = $fetch_get_u_ptt["usr_patente"];
        
        # comparação:
        if($poder_rebaixar_patente <= $uptt_id) { # Pode advertir
            $newpatente_id = $uptt_id + 1;
            $usr_ip = $_SERVER['REMOTE_ADDR'];
        $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Advertiu o usuário {$nick} - {$motivos}', '{$usr_ip}', '1')");
        $sql_insertnoti = mysqli_query($conn, "INSERT INTO notificacoes(enviado_por, user, msg, noti_type) VALUES('{$usuarioNome}', '{$nick}', 'Você foi advertido. Motivos/descrições: {$motivos}', '2')");
        $sql_inserhist = mysqli_query($conn, "INSERT INTO historico(enviado_por, usr_habbo, tipo, msg) VALUES('{$usuarioNome}', '{$nick}', '2', '{$motivos}')");
        echo "<script type='text/javascript'>alert('Usuário advertido com sucesso!');window.location.href='painel.php';</script>";

    }
        else { # Não pode advertir
            echo "<script type='text/javascript'>alert('Você não pode advertir este usuário!');window.location.href='painel.php';</script>";
            $usr_ip = $_SERVER['REMOTE_ADDR'];
            $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou advertir o usuário {$nick} mas não possui permissões.', '{$usr_ip}', '2')");

        }
    
        }



}



elseif(isset($_POST['add_guia'])) {
$nickname_guia = htmlspecialchars($_POST['nickname_guia']);
$observacoes = htmlspecialchars($_POST['observacoes']);
    # verificação de permissão como lider dos guias
    $sql_select_guia = mysqli_query($conn, "SELECT * FROM guias WHERE nickname = '{$usuarioNome}' AND cargo = 2");
    $num_select_guia = mysqli_num_rows($sql_select_guia);
    if($num_select_guia > 0) {
        $sql_new_guia = mysqli_query($conn, "INSERT INTO guias(nickname, cargo) VALUES('{$nickname_guia}', 1)");
        $usr_ip = $_SERVER['REMOTE_ADDR'];
        $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Adicionou {$nickname_guia} para os guias. Motivo: {$observacoes}', '{$usr_ip}', '1')");
        $sql_insertnoti = mysqli_query($conn, "INSERT INTO notificacoes(enviado_por, user, msg, noti_type) VALUES('{$usuarioNome}', '{$nick}', 'Você foi adicionado aos guias! Motivos/descrições: {$motivos}', '1')");
        echo "<script type='text/javascript'>alert('Guia adicionado com sucesso!');window.location.href='painel.php';</script>";

    }
    else {
        echo "<script type='text/javascript'>alert('Você não pode fazer isto!');window.location.href='painel.php';</script>";
        $usr_ip = $_SERVER['REMOTE_ADDR'];
        $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou adicionar {$nickname_guia} aos guias mas não possui permissões.', '{$usr_ip}', '2')");

    }

}

elseif(isset($_POST['add_professor'])) {
    $nickname_guia = htmlspecialchars($_POST['nickname_guia']);
    $observacoes = htmlspecialchars($_POST['observacoes']);
        # verificação de permissão como lider dos guias
        $sql_select_guia = mysqli_query($conn, "SELECT * FROM professores WHERE nickname = '{$usuarioNome}' AND cargo = 2");
        $num_select_guia = mysqli_num_rows($sql_select_guia);
        if($num_select_guia > 0) {
            $sql_new_guia = mysqli_query($conn, "INSERT INTO professores(nickname, cargo) VALUES('{$nickname_guia}', 1)");
            $usr_ip = $_SERVER['REMOTE_ADDR'];
            $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Adicionou {$nickname_guia} para os professores. Motivo: {$observacoes}', '{$usr_ip}', '1')");
            $sql_insertnoti = mysqli_query($conn, "INSERT INTO notificacoes(enviado_por, user, msg, noti_type) VALUES('{$usuarioNome}', '{$nick}', 'Você foi adicionado aos professores! Motivos/descrições: {$motivos}', '1')");
            echo "<script type='text/javascript'>alert('Professor adicionado com sucesso!');window.location.href='painel.php';</script>";
    
        }
        else {
            echo "<script type='text/javascript'>alert('Você não pode fazer isto!');window.location.href='painel.php';</script>";
            $usr_ip = $_SERVER['REMOTE_ADDR'];
            $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou adicionar {$nickname_guia} aos professores mas não possui permissões.', '{$usr_ip}', '2')");
    
        }
    
    }



    elseif(isset($_POST['add_instrutor'])) {
        $nickname_guia = htmlspecialchars($_POST['nickname_guia']);
        $observacoes = htmlspecialchars($_POST['observacoes']);
            # verificação de permissão como lider dos guias
            $sql_select_guia = mysqli_query($conn, "SELECT * FROM instrutores WHERE nickname = '{$usuarioNome}' AND cargo = 2");
            $num_select_guia = mysqli_num_rows($sql_select_guia);
            if($num_select_guia > 0) {
                $sql_new_guia = mysqli_query($conn, "INSERT INTO instrutores(nickname, cargo) VALUES('{$nickname_guia}', 1)");
                $usr_ip = $_SERVER['REMOTE_ADDR'];
                $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Adicionou {$nickname_guia} para os instrutores. Motivo: {$observacoes}', '{$usr_ip}', '1')");
                $sql_insertnoti = mysqli_query($conn, "INSERT INTO notificacoes(enviado_por, user, msg, noti_type) VALUES('{$usuarioNome}', '{$nick}', 'Você foi adicionado aos instrutores! Motivos/descrições: {$motivos}', '1')");
                echo "<script type='text/javascript'>alert('Professor adicionado com sucesso!');window.location.href='painel.php';</script>";
        
            }
            else {
                echo "<script type='text/javascript'>alert('Você não pode fazer isto!');window.location.href='painel.php';</script>";
                $usr_ip = $_SERVER['REMOTE_ADDR'];
                $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou adicionar {$nickname_guia} aos instrutores mas não possui permissões.', '{$usr_ip}', '2')");
        
            }
        
        }



elseif(isset($_POST["definir_patente"])) {
  $nickname = htmlspecialchars($_POST['nickname']);
  $nova_patente = $_POST['nova_patente'];

  # verificar adm
  $sql_get_perm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
$count_get_perm = mysqli_fetch_array($sql_get_perm);
# tem adm
if($count_get_perm > 0) {
    $usr_ip = $_SERVER['REMOTE_ADDR'];
    $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Alterou (adm) a patente de {$nickname}. PatenteID: {$nova_patente}', '{$usr_ip}', '1')");
$update_new_patente = mysqli_query($conn, "UPDATE membros SET usr_patente = '{$nova_patente}' WHERE usr_habbo = '{$nickname}'");

    echo "<script type='text/javascript'>alert('Patente alterada com sucesso!');window.location.href='painel.php';</script>";

}
# não tem adm
else {
    $usr_ip = $_SERVER['REMOTE_ADDR'];
    $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou mudar a patente de {$nickname} mas não possui permissões.', '{$usr_ip}', '2')");
    echo "<script type='text/javascript'>alert('Você não pode fazer isso!');window.location.href='painel.php';</script>";

}

    }

    elseif(isset($_POST["mudar_user_tipo"])) {
        $nickname = htmlspecialchars($_POST['nickname']);
        $patente_tipo = $_POST['patente_tipo'];
      
        # verificar adm
        $sql_get_perm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
      $count_get_perm = mysqli_fetch_array($sql_get_perm);
      # tem adm
      if($count_get_perm > 0) {
          $usr_ip = $_SERVER['REMOTE_ADDR'];
          $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Alterou o tipo de {$nickname}. TipoID: {$patente_tipo}', '{$usr_ip}', '1')");
      $update_new_patente = mysqli_query($conn, "UPDATE membros SET usr_executivo = '{$patente_tipo}' WHERE usr_habbo = '{$nickname}'");
      
          echo "<script type='text/javascript'>alert('Tipo de patente alterada com sucesso!');window.location.href='painel.php';</script>";
      
      }
      # não tem adm
      else {
          $usr_ip = $_SERVER['REMOTE_ADDR'];
          $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou alterar o tipo de patente de {$nickname} mas não possui permissões.', '{$usr_ip}', '2')");
          echo "<script type='text/javascript'>alert('Você não pode fazer isso!');window.location.href='painel.php';</script>";
      
      }
      
          }








elseif(isset($_POST['alterar_senha'])) {
    $nickname = $_POST['nickname'];
    $senha = $_POST['senha'];

     # verificar adm
  $sql_get_perm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
  $count_get_perm = mysqli_fetch_array($sql_get_perm);
  # tem adm
  if($count_get_perm > 0) {
      $usr_ip = $_SERVER['REMOTE_ADDR'];
      $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Alterou (adm) a senha de {$nickname}.', '{$usr_ip}', '1')");
  $update_new_patente = mysqli_query($conn, "UPDATE painel SET usr_senha = md5('{$senha}') WHERE usr_habbo = '{$nickname}'");
      echo "<script type='text/javascript'>alert('Senha alterada com sucesso!');window.location.href='painel.php';</script>";
  
  }
  # não tem adm
  else {
      $usr_ip = $_SERVER['REMOTE_ADDR'];
      $sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Tentou mudar a senha de {$nickname} mas não possui permissões.', '{$usr_ip}', '2')");
      echo "<script type='text/javascript'>alert('Você não pode fazer isso!');window.location.href='painel.php';</script>";
  
  }

}

elseif(isset($_POST['atualizar_anuncio'])) {
    $conteudo_anuncio = $_POST['conteudo_anuncio'];
    $sqlupdateanuncio = mysqli_query($conn, "UPDATE avisos SET mensagem = '{$conteudo_anuncio}' WHERE id = 1");
    echo '<script type="text/javascript">alert("Anúncio atualizado com sucesso!");window.href.location="redirect_painel.php";</script>';
    }

elseif(isset($_POST['atualizar_lista_negra'])) {
        $conteudo_anuncio = $_POST['conteudo_anuncio'];
        $sqlupdateanuncio = mysqli_query($conn, "UPDATE avisos SET mensagem = '{$conteudo_anuncio}' WHERE id = 2");
        echo '<script type="text/javascript">alert("Lista negra atualizada com sucesso!");window.href.location="redirect_painel.php";</script>';
        }


elseif(isset($_POST['dar_adm_painel'])) {
    $nickname = $_POST['nickname'];
    $tipo_adm = $_POST['tipo_adm'];

$sqlupdateadm = mysqli_query($conn, "UPDATE painel SET usr_perm = '{$tipo_adm}' WHERE usr_habbo = '{$nickname}'");
$usr_ip = $_SERVER['REMOTE_ADDR'];
$sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Deu permissão de admin tipo {$tipo_adm} para {$nickname}', '{$usr_ip}', '1')");
echo '<script type="text/javascript">alert("Permissão dada com sucesso!");window.href.location="redirect_painel.php";</script>';

}


elseif(isset($_POST['readmitir_policial'])) {
    $nickname = $_POST['nickname'];
$sqlupdatemembro = mysqli_query($conn, "UPDATE membros SET usr_status = 1 WHERE usr_habbo = '{$nickname}'");
$usr_ip = $_SERVER['REMOTE_ADDR'];
$sql_insertlog = mysqli_query($conn, "INSERT INTO logs(usr_habbo, msg, usr_ip, log_tipo) VALUES('{$usuarioNome}', 'Readmitiu {$nickname}', '{$usr_ip}', '1')");
echo '<script type="text/javascript">alert("Usuário readmitido com sucesso!");window.href.location="redirect_painel.php";</script>';
}


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
                                    
                                    <?php if($typeform == "aval" && $patente_id <= 14): ?>
                                        <div class="card">
                                    <div class="card-header">
                                       Solicitar <strong>Aval</strong>
                                       nickname                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Data de Início</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="datetime-local" id="hf-password" name="data_inicio" placeholder="" class="form-control">
                                                    <span class="help-block">Data de início</span>
                                                </div>
                                                <div class="col col-md-3">
                                                    <label for="data_fim" class=" form-control-label">Data Final</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="datetime-local" id="hf-password" name="data_fim" placeholder="" class="form-control">
                                                    <span class="help-block">Data de fim</span>
                                                </div>
                                                <div class="col col-md-3">
                                                    <label for="motivos" class=" form-control-label">Motivos</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="motivos" id="textarea-input" rows="2" placeholder="Motivo(s) do aval:" class="form-control"></textarea>
                                                    <span class="help-block">Digite o motivo do aval.</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="enviar_aval" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>


                                

                                    <?php 
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM guias WHERE nickname = '{$usuarioNome}'");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    if($typeform == "add_ts" && $num_select_guia > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> TS (Treinamento de Soldados)
                                       <br> <small>Obs: usuários já serão inseridos diretamente no System.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nick dos Aprovados</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="usuarios" name="usuarios" placeholder="Digite os novos usuários separados por /" class="form-control">
                                                    <span class="help-block">Separe com /<br> Exemplo: ,Mulequinho/BRKINGZ/Fulano</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Observações</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="observacoes" id="textarea-input" rows="2" placeholder="Digite aqui observações, caso possua alguma. Caso não possua, deixe em branco." class="form-control"></textarea>
                                                    <span class="help-block">Digite suas observações</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="enviar_ts" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>



                                    <?php 
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM guias WHERE nickname = '{$usuarioNome}'");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    if($typeform == "add_t1" && $num_select_guia > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> T1 (Treinamento p/ Cabos)
                                       <br> <small>Obs: lembre-se de preencher corretamente os campos.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nick dos Aprovados</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="usuarios" name="usuarios" placeholder="Digite os aprovados separados por /" class="form-control">
                                                    <span class="help-block">Separe com /<br> Exemplo: ,Mulequinho/BRKINGZ/Fulano</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Observações</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="observacoes" id="textarea-input" rows="2" placeholder="Digite aqui observações, caso possua alguma. Caso não possua, deixe em branco." class="form-control"></textarea>
                                                    <span class="help-block">Digite suas observações</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="enviar_t1" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>




                                    <?php 
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM guias WHERE nickname = '{$usuarioNome}' AND cargo = 2");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    if($typeform == "add_t2" && $num_select_guia > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> T2 (Treinamento p/ Tenentes)
                                       <br> <small>Obs: lembre-se de preencher corretamente os campos.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nick dos Aprovados</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="usuarios" name="usuarios" placeholder="Digite os aprovados separados por /" class="form-control">
                                                    <span class="help-block">Separe com /<br> Exemplo: ,Mulequinho/BRKINGZ/Fulano</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Observações</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="observacoes" id="textarea-input" rows="2" placeholder="Digite aqui observações, caso possua alguma. Caso não possua, deixe em branco." class="form-control"></textarea>
                                                    <span class="help-block">Digite suas observações</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="enviar_t2" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>



                                    <?php 
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM guias WHERE nickname = '{$usuarioNome}' AND cargo = 2");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    if($typeform == "add_t3" && $num_select_guia > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> T3 (Treinamento p/ Capitães)
                                       <br> <small>Obs: lembre-se de preencher corretamente os campos.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nick dos Aprovados</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="usuarios" name="usuarios" placeholder="Digite os aprovados separados por /" class="form-control">
                                                    <span class="help-block">Separe com /<br> Exemplo: ,Mulequinho/BRKINGZ/Fulano</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Observações</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="observacoes" id="textarea-input" rows="2" placeholder="Digite aqui observações, caso possua alguma. Caso não possua, deixe em branco." class="form-control"></textarea>
                                                    <span class="help-block">Digite suas observações</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="enviar_t3" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>



                                    <?php 
                                   $sql_select_pf = mysqli_query($conn, "SELECT * FROM professores WHERE nickname = '{$usuarioNome}'");
                                   $num_select_pf = mysqli_num_rows($sql_select_pf);
                                    
                                    if($typeform == "add_te" && $num_select_pf > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> Treinamento Especializado (p/ Sargentos)
                                       <br> <small>Obs: lembre-se de preencher corretamente os campos.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nick dos Aprovados</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="usuarios" name="usuarios" placeholder="Digite os aprovados separados por /" class="form-control">
                                                    <span class="help-block">Separe com /<br> Exemplo: ,Mulequinho/BRKINGZ/Fulano</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Observações</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="observacoes" id="textarea-input" rows="2" placeholder="Digite aqui observações, caso possua alguma. Caso não possua, deixe em branco." class="form-control"></textarea>
                                                    <span class="help-block">Digite suas observações</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="enviar_te" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>

                                    <?php 
                                   $sql_select_pf = mysqli_query($conn, "SELECT * FROM professores WHERE nickname = '{$usuarioNome}'");
                                   $num_select_pf = mysqli_num_rows($sql_select_pf);
                                    
                                    if($typeform == "add_tf" && $num_select_pf > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> Treinamento de Formação (p/ Subtenentes)
                                       <br> <small>Obs: lembre-se de preencher corretamente os campos.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nick dos Aprovados</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="usuarios" name="usuarios" placeholder="Digite os aprovados separados por /" class="form-control">
                                                    <span class="help-block">Separe com /<br> Exemplo: ,Mulequinho/BRKINGZ/Fulano</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Observações</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="observacoes" id="textarea-input" rows="2" placeholder="Digite aqui observações, caso possua alguma. Caso não possua, deixe em branco." class="form-control"></textarea>
                                                    <span class="help-block">Digite suas observações</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="enviar_tf" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>




                                    <?php 
                               $sql_select_ins = mysqli_query($conn, "SELECT * FROM instrutores WHERE nickname = '{$usuarioNome}'");
                               $num_select_ins = mysqli_num_rows($sql_select_ins);
                                    
                                    if($typeform == "add_cfo" && $num_select_ins > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> Curso de Formação de Oficiais (CFO)
                                       <br> <small>Obs: lembre-se de preencher corretamente os campos.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nick dos Aprovados</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="usuarios" name="usuarios" placeholder="Digite os aprovados separados por /" class="form-control">
                                                    <span class="help-block">Separe com /<br> Exemplo: ,Mulequinho/BRKINGZ/Fulano</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Observações</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="observacoes" id="textarea-input" rows="2" placeholder="Digite aqui observações, caso possua alguma. Caso não possua, deixe em branco." class="form-control"></textarea>
                                                    <span class="help-block">Digite suas observações</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="enviar_cfo" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>








                                <?php 
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM guias WHERE nickname = '{$usuarioNome}' AND cargo = 2");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    if($typeform == "add_guia" && $num_select_guia > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> Guia
                                       <br> <small>Obs: o novo guia será inserido diretamente no System.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nickname_guia" class=" form-control-label">Nick do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nickname_guia" name="nickname_guia" placeholder="Digite os novos usuários separados por /" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Observações</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="observacoes" id="textarea-input" rows="2" placeholder="Digite aqui observações, caso possua alguma. Caso não possua, deixe em branco." class="form-control"></textarea>
                                                    <span class="help-block">Digite suas observações. Lembrete: é visível a todos.</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="add_guia" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>


                                    <?php 
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM professores WHERE nickname = '{$usuarioNome}' AND cargo = 2");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    if($typeform == "add_professor" && $num_select_guia > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> Professor
                                       <br> <small>Obs: o novo professor será inserido diretamente no System.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nickname_guia" class=" form-control-label">Nick do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nickname_guia" name="nickname_guia" placeholder="Digite os novos usuários separados por /" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Observações</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="observacoes" id="textarea-input" rows="2" placeholder="Digite aqui observações, caso possua alguma. Caso não possua, deixe em branco." class="form-control"></textarea>
                                                    <span class="help-block">Digite suas observações. Lembrete: é visível a todos.</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="add_professor" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>




                                    <?php 
                                    $sql_select_guia = mysqli_query($conn, "SELECT * FROM instrutores WHERE nickname = '{$usuarioNome}' AND cargo = 2");
                                    $num_select_guia = mysqli_num_rows($sql_select_guia);
                                    
                                    if($typeform == "add_instrutor" && $num_select_guia > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> Instrutor
                                       <br> <small>Obs: o novo Instrutor será inserido diretamente no System.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nickname_guia" class=" form-control-label">Nick do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nickname_guia" name="nickname_guia" placeholder="Digite os novos usuários separados por /" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Observações</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="observacoes" id="textarea-input" rows="2" placeholder="Digite aqui observações, caso possua alguma. Caso não possua, deixe em branco." class="form-control"></textarea>
                                                    <span class="help-block">Digite suas observações. Lembrete: é visível a todos.</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="add_instrutor" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>

















                                    <?php 
                                   $getuserperm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
                                   $perm = mysqli_num_rows($getuserperm);

                                    if($typeform == "add_destaques" && $perm > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar</strong> Destaques
                                       <br> <small>Obs: usuários já serão inseridos diretamente no System como destaques.</small>
                                    </div>
                                    <?php 
                                    #dest superior
                                        $sql_get_superior = mysqli_query($conn, "SELECT * FROM membros WHERE usr_destaque = 2");
                                        $fetch_get_superior = mysqli_fetch_array($sql_get_superior);
                                        $nome_superior = $fetch_get_superior["usr_habbo"];
                                    #dest inferior                                  
                                    $sql_get_inferior = mysqli_query($conn, "SELECT * FROM membros WHERE usr_destaque = 1");
                                    $fetch_get_inferior = mysqli_fetch_array($sql_get_inferior);
                                    $nome_inferior = $fetch_get_inferior["usr_habbo"];
                                    ?>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Destaque Inferior</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input style="font-weight: bold;" type="text" id="usuarios" value="<?php echo $nome_inferior ?>" name="destaque_inferior" placeholder="Digite o novo destaque inferior" class="form-control">
                                                    <span class="help-block">Lembre-se de digitar o nick corretamente.</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Destaque Superior</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input style="font-weight: bold;" type="text" id="usuarios" value="<?php echo $nome_superior ?>" name="destaque_superior" placeholder="Digite o novo destaque inferior" class="form-control">
                                                <span class="help-block">Lembre-se de digitar o nick corretamente.</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="enviar_destaque" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>





                                    <?php 
                                   $getuserperm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
                                   $perm = mysqli_num_rows($getuserperm);

                                    if($typeform == "atualizar_anuncio" && $perm > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Atualizar</strong> Anúncio
                                       <br> <small>Obs: edite com cuidado. É visível a todos.</small>
                                    </div>
                                    <?php 
                                    $sql_get_anuncio = mysqli_query($conn, "SELECT * FROM avisos WHERE id = 1");
                                    $fetch_get_anuncio = mysqli_fetch_array($sql_get_anuncio);
                                    $mensagem_anuncio = $fetch_get_anuncio["mensagem"];
                                    ?>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                          
                                            <div class="row form-group">
                                            <div class="col-12 col-md-3">
                                            <label>Anúncio: </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="conteudo_anuncio" id="textareaAnuncio" rows="5" placeholder="Digite algo para o anúncio." class="form-control"><?php echo $mensagem_anuncio ?></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="atualizar_anuncio" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>




                                    <?php 
                                   $getuserperm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
                                   $perm = mysqli_num_rows($getuserperm);

                                    if($typeform == "mudar_user_tipo" && $perm > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Mudar</strong> Tipo de patente
                                       <br> <small>Obs: use esta ferramenta com cautela.</small>
                                    </div>
                                    
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nick do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input style="font-weight: bold;" type="text" id="usuarios" name="nickname" value="<?php echo $_GET['user'] ?>" placeholder="Digite o nick do policial" class="form-control">
                                                    <span class="help-block">Lembre-se de digitar o nick corretamente.</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Tipo de militar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                            <select name="patente_tipo">
                                            
                                            <option value="0">Militar padrão</option>
                                            <option value="1">Executivo pago</option>
                                            </select>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="mudar_user_tipo" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Mudar tipo de usuário
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>










                                    <?php 
                                   $getuserperm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm = 2");
                                   $perm = mysqli_num_rows($getuserperm);

                                    if($typeform == "edit_lista_negra" && $perm > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Editar</strong> Lista Negra
                                       <br> <small>Obs: edite com cuidado. É visível a todos.</small>
                                    </div>
                                    <?php 
                                    $sql_get_anuncio = mysqli_query($conn, "SELECT * FROM avisos WHERE id = 2");
                                    $fetch_get_anuncio = mysqli_fetch_array($sql_get_anuncio);
                                    $mensagem_anuncio = $fetch_get_anuncio["mensagem"];
                                    ?>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                          
                                            <div class="row form-group">
                                            <div class="col-12 col-md-3">
                                            <label>Anúncio: </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="conteudo_anuncio" id="textareaAnuncio" rows="5" placeholder="Digite algo para o anúncio." class="form-control"><?php echo $mensagem_anuncio ?></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="atualizar_lista_negra" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>










                                    <?php 
                                   $getuserperm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
                                   $perm = mysqli_num_rows($getuserperm);

                                    if($typeform == "readmitir_policial" && $perm > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Atualizar</strong> Anúncio
                                       <br> <small>Obs: edite com cuidado. É visível a todos.</small>
                                    </div>
                                    
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                          
                                            <div class="row form-group">
                                            <div class="col-12 col-md-3">
                                            <label>Nick do policial: </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                            <input style="font-weight: bold;" type="text" id="usuarios" name="nickname" placeholder="Digite o nick do policial" class="form-control">
                     </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="readmitir_policial" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Enviar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>
































                                    <?php 
                                   $getuserperm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
                                   $perm = mysqli_num_rows($getuserperm);

                                    if($typeform == "setar_patente" && $perm > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Definir</strong> Patente
                                       <br> <small>Obs: use esta ferramenta com cautela.</small>
                                    </div>
                                    
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nick do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input style="font-weight: bold;" type="text" id="usuarios" name="nickname" placeholder="Digite o nick do policial" class="form-control">
                                                    <span class="help-block">Lembre-se de digitar o nick corretamente.</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nova patente</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                            <select name="nova_patente">
                                            <?php $sql_get_all_patentes = mysqli_query($conn, "SELECT * FROM patentes ORDER BY id DESC");
                                        while($f_a_ptt = mysqli_fetch_array($sql_get_all_patentes))  { ?>
                                        <option value="<?php echo $f_a_ptt["id"] ?>"><?php echo $f_a_ptt["patente"]." - ".$f_a_ptt["patente_executivo"] ?></option>
                                    <?php }?>
                                            </select>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="definir_patente" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Definir patente
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>





                                    <?php 
                                   $getuserperm = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm >= 1");
                                   $perm = mysqli_num_rows($getuserperm);

                                    if($typeform == "mudar_user_senha" && $perm > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                        <strong>Alterar</strong> Senha
                                       <br> <small>Obs: use esta ferramenta com cautela.</small>
                                    </div>
                                    
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nick do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input style="font-weight: bold;" type="text" id="usuarios" value="<?php echo $_GET['user'] ?>" name="nickname" placeholder="Digite o nick do policial" class="form-control">
                                                    <span class="help-block">Lembre-se de digitar o nick corretamente.</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="usuarios" class=" form-control-label">Nova senha</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="password" id="usuarios"  name="senha" placeholder="Digite a nova senha do usuário" class="form-control">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="alterar_senha" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Alterar senha
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>






                                    <?php if($typeform == "promover" && $patente_id <= 12): ?>
                                        <div class="card">
                                    <div class="card-header">
                                       <strong>Promover</strong> Policial
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Nickname do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input style='font-weight: bold;'type="text" id="hf-password" name="nickname" value="<?php echo $_GET["user"]; ?>"placeholder="Digite o nick de um policial" class="form-control">
                                                    <span class="help-block">Digite o nick do policial <strong>corretamente</strong>. Apenas um policial por vez.</span>
                                                </div>
                                                
                                                <div class="col col-md-3">
                                                    <label for="motivos" class=" form-control-label">Motivos</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="motivos" id="textarea-input" rows="2" placeholder="Motivo(s) da promoção:" class="form-control"></textarea>
                                                    <span class="help-block">Digite o motivo da promoção. OBS: Estará visível para a administração e nas notificações do usuário promovido.</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="promover" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Promover
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>



                                    <?php if($typeform == "rebaixar" && $patente_id <= 12): ?>
                                        <div class="card">
                                    <div class="card-header">
                                       <strong>Rebaixar</strong> Policial
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Nickname do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input style='font-weight: bold;'type="text" id="hf-password" name="nickname" value="<?php echo $_GET["user"]; ?>"placeholder="Digite o nick de um policial" class="form-control">
                                                    <span class="help-block">Digite o nick do policial <strong>corretamente</strong>. Apenas um policial por vez.</span>
                                                </div>
                                                
                                                <div class="col col-md-3">
                                                    <label for="motivos" class=" form-control-label">Motivos</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="motivos" id="textarea-input" rows="2" placeholder="Motivo(s) do rebaixamento:" class="form-control"></textarea>
                                                    <span class="help-block">Digite o motivo do rebaixamento. OBS: Estará visível para a administração e nas notificações do usuário rebaixado.</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="rebaixar" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Rebaixar
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>

                                    <?php if($typeform == "demitir" && $patente_id <= 12): ?>
                                        <div class="card">
                                    <div class="card-header">
                                       <strong>Demitir</strong> Policial
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Nickname do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input style='font-weight: bold;'type="text" id="hf-password" name="nickname" value="<?php echo $_GET["user"]; ?>"placeholder="Digite o nick de um policial" class="form-control">
                                                    <span class="help-block">Digite o nick do policial <strong>corretamente</strong>. Apenas um policial por vez.</span>
                                                </div>
                                                
                                                <div class="col col-md-3">
                                                    <label for="motivos" class=" form-control-label">Motivos</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="motivos" id="textarea-input" rows="2" placeholder="Motivo(s) da demissão + link do print (imgur ou equivalente)" class="form-control"></textarea>
                                                    <span class="help-block">Digite o motivo da demissão + link. OBS: Estará visível para a administração e no histórico do usuário demitido.</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="demitir" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Demitir
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>




                                    <?php if($typeform == "advertir" && $patente_id <= 12): ?>
                                        <div class="card">
                                    <div class="card-header">
                                       <strong>Advertir</strong> Policial
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Nickname do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input style='font-weight: bold;'type="text" id="hf-password" name="nickname" value="<?php echo $_GET["user"]; ?>"placeholder="Digite o nick de um policial" class="form-control">
                                                    <span class="help-block">Digite o nick do policial <strong>corretamente</strong>. Apenas um policial por vez.</span>
                                                </div>
                                                
                                                <div class="col col-md-3">
                                                    <label for="motivos" class=" form-control-label">Motivos</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea name="motivos" id="textarea-input" rows="2" placeholder="Motivo(s) da advertência:" class="form-control"></textarea>
                                                    <span class="help-block">Digite o motivo da advertência. OBS: Estará visível para a administração e nas notificações & histórico do usuário advertido.</span>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="advertir" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Advertir
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                    <?php endif; ?>








                                    <?php
                                    $sql_get_sudo = mysqli_query($conn, "SELECT * FROM painel WHERE usr_habbo = '{$usuarioNome}' AND usr_perm = 2");
                                    $num_get_sudo = mysqli_num_rows($sql_get_sudo);

                                    if($typeform == "dar_adm_painel" && $num_get_sudo > 0): ?>
                                        <div class="card">
                                    <div class="card-header">
                                       <strong>Dar</strong> Permissão de Admin
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="data_inicio" class=" form-control-label">Nickname do Policial</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input style='font-weight: bold;'type="text" id="hf-password" name="nickname" placeholder="Digite o nick de um policial" class="form-control">
                                                    <span class="help-block">Digite o nick do policial <strong>corretamente</strong>. Apenas um policial por vez.</span>
                                                </div>
                                                
                                                <div class="col col-md-3">
                                                    <label for="motivos" class=" form-control-label">Tipo de adm</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                               <select name="tipo_adm" id="">
                                               <option value="1">Admin normal</option>
                                               <option value="2">Super admin (não recomendado)</option>
                                               </select>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" name="dar_adm_painel" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> Dar adm
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Resetar
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
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
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>

<script>
var editor = new FroalaEditor('#textareaAnuncio')
</script>
</body>

</html>
<!-- end document-->
