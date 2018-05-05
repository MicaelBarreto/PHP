<?php 
    session_start();
    require_once "../src/partials/_head.php";
    require_once "../src/utils/Database.php";
    require_once '../src/dao/CompanyDAO.php'; 
    require_once "../src/utils/FlashMessage.php";
    include_once "../src/partials/_verify_auth_companies.php";
   

?>


        <div class="container-fluid display-table">
            <div class="row display-table-row">
                <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                    <div class="navi">
                        <ul>
                            <li><a href="../dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                            <li class="active"><a href="/companies/index.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Empresas</span></a></li>
                            <li><a href="../users.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-10">
                    <section>

                        <a href="/companies/cadastrar.php" class="btn btn-success float-right m-lg-3 ">Nova Companhia</a>
                        

                        <?php $companies = CompanyDAO::all(); ?>
                        
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Razão Social</th>
                                <th>Nome Fantasia</th>
                                <th>CNPJ</th>
                                <th>Inscrição Estadual</th>
                                <th>Endereço</th>
                                <th>Complemento</th>
                                <th>Telefone</th>
                                <th>Email</th>
                                <th>Comandos</th>
                            </tr>
                
                            <?php foreach($companies as $c) : ?>
                                <tr>
                                    <td><?= $c['id'] ?></td>
                                    <td><?= $c['rs'] ?></td>
                                    <td><?= $c['nf'] ?></td>
                                    <td><?= $c['CNPJ'] ?></td>
                                    <td><?= $c['ie'] ?></td>
                                    <td><?= $c['addr'] ?></td>
                                    <td><?= $c['comp'] ?></td>
                                    <td><?= $c['tel'] ?></td>
                                    <td><?= $c['email'] ?></td>
                                    <td>
                                        <a href="update.php?id=<?= $c['id'] ?>&rs=<?= $c['rs'] ?>&nf=<?= $c['nf'] ?>&CNPJ=<?= $c['CNPJ'] ?>&ie=<?= $c['ie'] ?>&addr=<?= $c['addr'] ?>&comp=<?= $c['comp'] ?>&tel=<?= $c['tel'] ?>&email=<?= $c['email'] ?>" class="btn btn-info">Alterar</a>
                                        <a href="excluir.php?id=<?= $c['id'] ?>" class="btn btn-danger">Excluir</a>    
                                    </td>
                                </tr>
                            <?php endforeach ?>

                    </section>
                </div>
            </div>
        </div>
    </div>
    </body>