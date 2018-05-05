<?php 
    session_start();
    require_once "../src/partials/_head.php";
    require_once '../src/entities/Company.php'; 
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
            
    <section class="col-md-10">
                        
        <form id="formulario" method="POST" action="/companies/salvar.php"> 
        <div class="form-group row">
            <label for="n1" class="col-sm-2 col-form-label">Razão Social</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="n1" placeholder="Razão Social" name="rs" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="n1" class="col-sm-2 col-form-label">Nome Fantasia</label> 
            <div class="col-sm-10">
            <input type="text" class="form-control" id="n1" placeholder="Nome Fantasia" name="nf" required> 
            </div>
        </div>
        <div class="form-group row">
            <label for="n1" class="col-sm-2 col-form-label">CNPJ</label> 
            <div class="col-sm-10">
            <input type="text" class="form-control" id="n1" placeholder="CNPJ" name="cnpj" pattern="[0-9]{14}" required> 
            </div>
        </div>
        <div class="form-group row">
            <label for="n1" class="col-sm-2 col-form-label">Inscrição Estadual</label> 
            <div class="col-sm-10">
            <input type="text" class="form-control" id="n1" placeholder="Inscrição Estadual" name="ie" pattern="[0-9]{9}" required> 
            </div>
        </div>
        <div class="form-group row">
            <label for="n1" class="col-sm-2 col-form-label">Endereço</label> 
            <div class="col-sm-10">
            <input type="text" class="form-control" id="n1" placeholder="Endereço" name="add" required> 
            </div>
        </div>
        <div class="form-group row">
            <label for="n1" class="col-sm-2 col-form-label">Complemento</label> 
            <div class="col-sm-10">
            <input type="text" class="form-control" id="n1" placeholder="Complemento" name="comp" required> 
            </div>
        </div>
        <div class="form-group row">
            <label for="n1" class="col-sm-2 col-form-label">Telefone</label>
            <div class="col-sm-10">
            <input type="tel" class="form-control" id="n1" placeholder="(xx)xxxxx-xxxx" name="tel" pattern="[0-9]{10}" required> 
            </div>
        </div>
        <div class="form-group row">
            <label for="n1" class="col-sm-2 col-form-label">Email</label> 
            <div class="col-sm-10">
            <input type="email" class="form-control" id="n1" placeholder="Email" name="email" required> 
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-success">Cadastrar</button>

            </div>
        </div>
        
        </form>
        
    </section>
    </div>
    </div>
</body>
</html>