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
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Status</th>
                  <th>Ações</th>
              </tr>
          </thead>
          <tbody>
              <tr>
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
          </tbody>
          <tfoot>
              <tr>
                  <th>Id</th>
                  <th>Usuario</th>
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
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>
<?php
include_once(__DIR__."/../inferior.php");