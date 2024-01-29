<div class="page-inner ht-100v">
   <div id="main-wrapper">
      <div class="pageheader pd-y-25">
         <div class="col-md-12 col-lg-12">
            <div class="card mb-4 shadow-1">
               <div class="card-header">
                  <h4 class="card-header-title">
                     Usuario
                  </h4>
                  <div class="card-header-btn">
                     <a href="/erp/dashboard/transportador"><i class="ion-ios-arrow-back"></i> Voltar</a>
                  </div>
               </div>
               <div class="col-md-6 col-lg-12">
                  <form action="form-validation.html" data-parsley-validate>
                     <div class="card-body collapse show" id="collapse9">
                        <div class="nav-tabs-top">
                           <ul class="nav nav-tabs">
                              <li class="nav-item">
                                 <a class="nav-link active show" data-toggle="tab" href="#navs-top-home">Dados principais</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#navs-top-profile">Controle de acesso</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane fade active show" id="navs-top-home">
                                 <div class="card-body">
                                    <div class="row mg-b-25">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Nome: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="text" name="nome" placeholder="Digite o nome." required>
                                          </div>
                                       </div>

                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Senha: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="text" name="senha" placeholder="Digite a senha." required>
                                          </div>
                                       </div>

                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Cpf ou Cnpj: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="text" name="cnpj_cpf" placeholder="Digite o nome." required oninput="formatarCpfCnpj(this)">
                                          </div>
                                       </div>

                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Comissão: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="number" name="comissao" placeholder="Digite o valor da comissão." required>
                                          </div>
                                       </div>

                                       <div class="col-md-12">
                                          <label class="form-control-label">Empresa vinculado: <span class="tx-danger">*</span></label>
                                          <select id="basic2" name="id_empresa" class="selectpicker show-tick form-control tx-12" data-live-search="true">
                                             <?php foreach ($empresa as $data) {  ?>
                                                <option value="<?php echo $data['id_empresa'] ?>"><?php echo $data['razao_social'] ?> </option>
                                             <?php } ?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="navs-top-profile">
                                 <div class="card-body">
                                    <div class="row mg-b-25">

                                       <div class="col-md-4">
                                          <p class="tx-bold mg-b-5">Cadastros</p>
                                          <div class="custom-control custom-checkbox">
                                             <input id="closeButton" type="checkbox" value="checked" name="cliente" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="closeButton">
                                                Cliente
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="fornecedor" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Fornecedor
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="debugInfo" type="checkbox" name="categoria" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="debugInfo">
                                                categoria
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="progressBar" name="marca" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="progressBar">
                                                Marca
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="preventDuplicates" name="unidade" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="preventDuplicates">
                                                Unidade de medida
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="preventDuplicates" name="fabricante" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="preventDuplicates">
                                                Fabricante
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="preventDuplicates" name="carga" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="preventDuplicates">
                                                Carga operacional
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="preventDuplicates" name="vendedor" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="preventDuplicates">
                                                Vendedores
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="preventDuplicates" name="transportador" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="preventDuplicates">
                                                Transportador
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="preventDuplicates" name="registradora" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="preventDuplicates">
                                                Registradora
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="preventDuplicates" name="despesa" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="preventDuplicates">
                                                Despesa
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="preventDuplicates" name="receita" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="preventDuplicates">
                                                Receita
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="preventDuplicates" name="natureza" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="preventDuplicates">
                                                Natureza de operação
                                             </label>
                                          </div>
                                       </div>


                                       <div class="col-md-4">
                                          <p class="tx-bold mg-b-5">Caixa cofre</p>
                                          <div class="custom-control custom-checkbox">
                                             <input id="closeButton" name="caixa" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="closeButton">
                                                Caixa cofre
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="lancamento_cofre" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Lançamento
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="deposito_cofre" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Deposito
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="saldo_cofre" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Saldo
                                             </label>
                                          </div>
                                       </div>

                                       <div class="col-md-4">
                                          <p class="tx-bold mg-b-5">Banco</p>
                                          <div class="custom-control custom-checkbox">
                                             <input id="closeButton" type="checkbox" name="conta_bancaria" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="closeButton">
                                                Conta bancaria
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="movimento_banco" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Movimento
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="saldo_banco" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Saldo
                                             </label>
                                          </div>
                                       </div>


                                       <div class="col-md-4">
                                          <p class="tx-bold mg-b-5">Contas a receber</p>
                                          <div class="custom-control custom-checkbox">
                                             <input id="closeButton" type="checkbox" name="cadastro_contas_receber" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="closeButton">
                                                Cadastro de documentos
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="baixa_movimento_receber" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Baixa de movimento
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="controle_credito_receber" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Controle de credito
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="renegociacao_divida_receber" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Renegociação de divida
                                             </label>
                                          </div>
                                       </div>


                                       <div class="col-md-4">
                                          <p class="tx-bold mg-b-5">Contas a pagar</p>
                                          <div class="custom-control custom-checkbox">
                                             <input id="closeButton" type="checkbox" name="cadastro_documento_pagar" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="closeButton">
                                                Cadastro de documentos
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="baixa_movimento_pagar" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Baixa de movimento
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="controle_credito_pagar" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Controle de credito
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="renedociacao_divida_pagar" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Renegociação de divida
                                             </label>
                                          </div>
                                       </div>

                                       <div class="col-md-4">
                                          <p class="tx-bold mg-b-5">Vendas</p>
                                          <div class="custom-control custom-checkbox">
                                             <input id="closeButton" type="checkbox" name="abertura_caixa" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="closeButton">
                                                Abertura de caixa
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="vendas" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Vendas
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="condicionais" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Condicionais
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="emissao_nfe_nfce" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Emissão de NFe/NFCe
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="devolucao_venda" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Devolução de vendas
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="fechamento_registradora" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                fechamento da registradora
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="cancelamento_fechamento_registradora" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Cancelamento fechamento da registradora
                                             </label>
                                          </div>
                                       </div>


                                       <div class="col-md-4">
                                          <p class="tx-bold mg-b-5">Ordem de serviços</p>
                                          <div class="custom-control custom-checkbox">
                                             <input id="closeButton" name="ordem_servico" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="closeButton">
                                                Ordem de serviço
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="objetos" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Objetos
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="marcas" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Marcas
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="equipamento" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Equipamento
                                             </label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input id="addBehaviorOnToastClick" name="situacao" type="checkbox" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="addBehaviorOnToastClick">
                                                Situação
                                             </label>
                                          </div>
                                       </div>



                                       <div class="col-md-4">
                                          <p class="tx-bold mg-b-5">Dre</p>
                                          <div class="custom-control custom-checkbox">
                                             <input id="closeButton" type="checkbox" name="dre" value="checked" class="custom-control-input input-mini">
                                             <label class="custom-control-label" for="closeButton">
                                                Dre
                                             </label>
                                          </div>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                        <div class="">
                           <button class="btn btn-info pd-y-8">Cadastrar</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   function formatarCpfCnpj(input) {
      // Remove caracteres não numéricos
      var valor = input.value.replace(/\D/g, '');

      // Verifica se é CPF ou CNPJ
      if (valor.length <= 11) {
         // Formatar como CPF: 000.000.000-00
         input.value = valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
      } else {
         // Formatar como CNPJ: 00.000.000/0000-00
         input.value = valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
      }
   }
</script>