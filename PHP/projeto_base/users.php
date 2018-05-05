<?php
session_start();
require_once "src/utils/FlashMessage.php";
include_once "src/partials/_verify_auth.php";
include_once "src/partials/_head.php";
include_once "src/dao/UserDAO.php";
require_once "src/utils/Database.php";

?>

<div class="container-fluid display-table">
    <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
            <div class="navi">
                <ul>
                    <li><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                    <li><a href="/companies/index.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Empresas</span></a></li>
                    <li class="active"><a href="users.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-10">
            <section>

                <?php $users = UserDAO::all(); ?>
                
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Usuário</th>
                    </tr>
        
                    <?php foreach($users as $u) : ?>
                        <tr>
                            <td><?= $u['id'] ?></td>
                            <td><?= $u['username'] ?></td>
                        </tr>
                    <?php endforeach ?>

            </section>
        </div>
    </div>
</div>
</body>