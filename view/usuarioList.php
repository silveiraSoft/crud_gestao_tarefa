<?php
include_once(__DIR__."/../superior.php");
?>
<div style="height:50px"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <!-- Botão para acionar modal -->
      <button type="button" id="btnNovo" class="btn btn-success" data-toggle="modal" data-target="#modalExemplo">Novo</button>
    </div>
  </div>
</div>
<div style="height:10px"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table id="tablaUsuario" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Logim</th>
                  <th>Status</th>
                  <th>Ações</th>
              </tr>
          </thead>
          <tbody>
            <?php
            if(isset($usuarios)){
            ?>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="text-center">
                      <div class="btn-group">
                        <button class="btn btn-primary btnEditar">Editar</button>
                        <button class="btn btn-danger btnEditar">Eliminar</button>
                      </div>
                    </div>  
                  </td> 
              </tr>
            <?php
            }
            ?> 
          </tbody>
          <tfoot>
              <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Logim</th>
                  <th>Status</th>
                  <th>Ações</th>
              </tr>
          </tfoot>
        </table>
      </div>  
    </div>
  </div>         
</div>
<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usuarioModalLabel">Novo Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formUsuario">
        <div class="modal-body">
            <div class="form-group">
              <label for="nm_usuario">Nome</label>
              <input type="text" class="form-control" id="nm_usuario">
            </div>
            <div class="form-group">
              <label for="usuario">Login</label>
              <input type="text" class="form-control" id="cd_usuario">
              <small id="usuarioHelp" class="form-text text-muted">Nunca vamos compartilhar seu usuário, com ninguém.</small>
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" id="senha" placeholder="Senha">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="status">
              <label class="form-check-label" for="status">Ativo</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" id="btnSalvar" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
include_once(__DIR__."/../inferior.php");