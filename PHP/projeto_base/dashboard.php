<?php 
    session_start();
    require_once "src/utils/FlashMessage.php";
    include_once "src/partials/_verify_auth.php";
    include_once "src/partials/_head.php" 

?>

    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="/companies/index.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Empresas</span></a></li>
                        <li><a href="users.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
               <div class="user-dashboard">
                    <h1>Seja bem vindo!</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                            <p>Criado por Micael Barreto && Halyson Rabuski</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                    <input type="text" placeholder="Project Title" name="name">
                    <input type="text" placeholder="Post of Post" name="mail">
                    <input type="text" placeholder="Author" name="passsword">
                    <textarea placeholder="Desicrption"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>