<div class="page-inner ht-100v">
   <div id="main-wrapper">
      <div class="pageheader pd-y-25">
         <div class="col-md-12 col-lg-12">
            <div class="card mb-4 shadow-1">
               <div class="card-header">
                  <h4 class="card-header-title">
                     Empresa cadastrados
                  </h4>
                  <div class="card-header-btn">
                     <a href="/erp/dashboard/empresa/novo"><i class="ionicons ion-android-add-circle"></i> Novo</a>
                  </div>
               </div>
               <div class="card-body collapse show" id="collapse5">
                  <div class="card-body collapse show" id="collapse2">
                     <div class="row">
                        <div class="mg-20 form-inline wd-100p">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label class="control-label">Status</label>
                                 <select id="foo-filter-status" class="form-control">
                                    <option value="">Pesquisa completa</option>
                                 </select>
                              </div>
                           </div>  
                           <div class="col-sm-6">
                              <div class="form-group ft-right">
                                 <input id="foo-search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                              </div>
                           </div>
                        </div>
                     </div>
                     <table id="foo-filtering" class="table toggle-circle-filled" data-page-size="7">
                        <thead>
                           <tr>
                              <th data-toggle="true">Id</th>
                              <th>Razão social</th>
                              <th class="text-center w-100px">Actions</th>
                              <th data-hide="all">Nome fantasia</th>
                              <th data-hide="all">CPF/CNPJ</th>
                              <th data-hide="all">Endereço</th>
                              <th data-hide="all">Telefone</th>
                              <th data-hide="all">Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($empresa as $dados) { ?>
                              <tr>
                                 <td><?php echo $dados['id_empresa'] ?></td>
                                 <td><?php echo $dados['razao_social'] ?></td>
                                 <td class="text-right table-actions">
                                    <a class="table-action tx-gray-800 mg-r-10" href="/erp/dashboard/empresa/editar/<?php echo $dados['id_empresa'] ?>"><i class="fa fa-pencil"></i></a>
                                    <a class="table-action tx-gray-800 mg-r-10" href="#" onclick="confirmarExclusao(<?php echo $dados['id_empresa'] ?>)"><i class="fa fa-trash"></i></a>
                                 </td>
                                 <td><?php echo $dados['nome_fantasia'] ?></td>
                                 <td><?php echo $dados['cnpj_cpf'] ?></td>
                                 <td><?php echo $dados['endereco'] ?></td>
                                 <td><?php echo $dados['telefone'] ?></td>
                                 <td><span class="label label-table label-success"><?php echo $dados['ativo'] ?></span></td>
                              </tr>
                           <?php } ?>
                        </tbody>
                        <tfoot>
                           <tr>
                              <td colspan="5">
                                 <div class="ft-right">
                                    <ul class="pagination"></ul>
                                 </div>
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<script>
  function confirmarExclusao(idEmpresa) {
    var confirmacao = confirm("Tem certeza que deseja excluir?");
    if (confirmacao) {
      window.location.href = "/erp/dashboard/empresa/excluir/" + idEmpresa;
    } else {
      window.location.href = "/erp/dashboard/empresa";
    }
  }
</script>

