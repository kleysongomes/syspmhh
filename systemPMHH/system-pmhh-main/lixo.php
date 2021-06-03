#sidenbar                
                        <?php if($patente_id <= 5): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-suitcase"></i>Direção
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="tables.php?type=ver_avais">
                                        <i class="fas fa-sign-in-alt"></i>Aprovar/reprovar avais</a>
                                </li>
                               
                           
                            </ul>
                        </li>
                        <?php endif; ?>
                   
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Relatórios
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                    <a href="forms.php?type=aval">
                                        <i class="fas fa-sign-in-alt"></i>Solicitar Aval</a>
                                </li>
                             
                            </ul>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user-md"></i>Guias
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <?php if($getlider_guia > 1):?>
                            <li >
                                    <a href="forms.php?type=add_guia" style='color: red;'>
                                        <i class="fas fa-sign-in-alt"></i>Adicionar guia</a>
                                </li>
                           <?php endif; ?>
                                <li>
                                    <a href="forms.php?type=add_ts">
                                        <i class="fas fa-sign-in-alt"></i>T. Soldados (TS)</a>
                                </li>
                                <li>
                                    <a href="forms.php?type=add_t1">
                                        <i class="fas fa-sign-in-alt"></i>Treinamento 1 (Cabo)</a>
                                </li>
                                <?php if($getlider_guia > 1): ?>
                                    <li>
                                    <a href="forms.php?type=add_t2" style='color: red;'>
                                        <i class="fas fa-sign-in-alt"></i>T.2 (Tenente)</a>
                                </li>
                                <li>
                                    <a href="forms.php?type=add_t3" style='color: red;'>
                                        <i class="fas fa-sign-in-alt"></i>T.3 (Capitão)</a>
                                </li>
                                <li>
                                    <a href="tables.php?type=relatorios_guias" style="color: red;">
                                        <i class="fas fa-sign-in-alt"></i>Ver relatórios</a>
                                </li>
                                <?php endif; ?>
                                <li>
                                    <a href="tables.php?type=ver_guias">
                                        <i class="fas fa-sign-in-alt"></i>Ver lista de Guias</a>
                                </li>
                         
                            </ul>
                        </li>
                        

                        <?php if($num_select_guia > 0): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user-md"></i>Scripts Guias
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                          
                                <li>
                                    <a href="documento_ts.php">
                                        <i class="fas fa-sign-in-alt"></i>T. Soldados (TS)</a>
                                </li>
                                <li>
                                    <a href="documento_t1.php">
                                        <i class="fas fa-sign-in-alt"></i>Treinamento 1 (Cabo)</a>
                                </li>
                              
                                <li>
                                    <a href="documento_estatuto_guia.php">
                                        <i class="fas fa-sign-in-alt"></i>Estatuto Interno</a>
                                </li>
                         
                            </ul>
                        </li>
                        <?php endif; ?>













                                            <?php if($num_select_pf > 0): ?>
                                                <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Professores
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">

                            <?php if($getlider_pf > 1): ?>
                            <li >
                                    <a href="forms.php?type=add_professor" style='color: red;'>
                                        <i class="fas fa-sign-in-alt"></i>Adicionar professor</a>
                                </li>
                                <?php endif; ?>
                            <li>
                                    <a href="forms.php?type=add_te">
                                        <i class="fas fa-sign-in-alt"></i>T. Especializado (Sargento)</a>
                                </li>
                                <li>
                                    <a href="forms.php?type=add_tf">
                                        <i class="fas fa-sign-in-alt"></i>T. Formação (Subtenente)</a>
                                </li>
                             <?php if($getlider_pf > 1): ?>
                                <li >
                                    <a href="tables.php?type=relatorios_professores" style='color: red;'>
                                        <i class="fas fa-sign-in-alt"></i>Ver relatórios</a>
                                </li>
                                <li >
                                    <a href="tables.php?type=ver_professores" style='color: red;'>
                                        <i class="fas fa-sign-in-alt"></i>Ver professores</a>
                                </li>
                             <?php endif; ?>
                            </ul>
                        </li>
                                            <?php endif; ?>




                                            <?php if($num_select_pf > 0): ?>
                                                <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Scripts Professores
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">

                           
                            <li>
                                    <a href="documento_te.php">
                                        <i class="fas fa-sign-in-alt"></i>T. Especializado (Sargento)</a>
                                </li>
                                <li>
                                    <a href="documento_tf.php">
                                        <i class="fas fa-sign-in-alt"></i>T. Formação (Subtenente)</a>
                                </li>
                             
                            </ul>
                        </li>
                                            <?php endif; ?>
























                                            <?php if($num_select_ins > 0): ?>
                                                <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Instrutores
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <?php if($getlider_ins > 1): ?>
                            <li >
                                    <a href="forms.php?type=add_instrutor" style='color: red;'>
                                        <i class="fas fa-sign-in-alt"></i>Adicionar instrutor</a>
                                </li>
                                <li >
                                    <a href="tables.php?type=ver_instrutores" style='color: red;'>
                                        <i class="fas fa-sign-in-alt"></i>Ver instrutores</a>
                                </li>
                                <?php endif; ?>
                            <li>
                                    <a href="forms.php?type=add_cfo">
                                        <i class="fas fa-sign-in-alt"></i>C. Formação de Oficiais</a>
                                </li>
                               <?php if($getlider_ins > 1): ?>
                                <li>
                                    <a href="tables.php?type=relatorios_instrutores" style='color: red;'>
                                        <i class="fas fa-sign-in-alt"></i>Ver relatórios</a>
                                </li>
                                <li>
                                    <a href="tables.php?type=ver_cfos" style='color: red;'>
                                        <i class="fas fa-sign-in-alt"></i>Aprovar/reprovar CFO</a>
                                </li>
                               <?php endif; ?>
                             
                            </ul>
                        </li>
                                            <?php endif; ?>

                     
                            