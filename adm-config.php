<div class="login-box-body text-center center">
    <form action="adm-definir-percentual.php" method="post">
        <label for="nome">Percentual de Lucro (%)</label>
        <div class="form-group has-feedback" align="center">
            <input name="percentual" type="number" step="0.1" class="form-control" style="width: 50%" align="center"  id="valor" placeholder="Ex: 40.2" ">
            <span  form-control-feedback"></span>
        </div>

        <div class="col-xs-pull-6">
            <p>*O valor do percentual está em porcentagem.</p>
        </div>

        <div class="col-xs-pull-6">

        </div>

        <div class="col-xs-pull-6">
        <p>*A atualização do percentual gera um impacto direto nos preços dos Produtos, então é preciso precaução ao atulizar esse dado.</p>
        </div>

        <div class="col-xs-pull-6">

        </div>

        <div class="col-xs-pull-6">
            <p>*Se necessário é possível visualizar as alterações do porcentual de lucro, tendo resgistrado a Data de Atualização e o Administrador que realizou a mesma. Para acessar esses dados <a href="#">CLIQUE AQUI</a>.</p>
        </div>

        <div class="row">
            <div class="col-xs-4">
                <button type="button" href="index.php" class="btn btn-secondary btn-block btn-flat grey">Limpar</button>
            </div>

            <div class="col-xs-4">

            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Atualizar</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

</div>