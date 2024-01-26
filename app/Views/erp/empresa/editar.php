<div class="page-inner ht-100v">
   <div id="main-wrapper">
      <div class="pageheader pd-y-25">
         <div class="col-md-12 col-lg-12">
            <div class="card mb-4 shadow-1">
               <div class="card-header">
                  <h4 class="card-header-title">
                     Empresa
                  </h4>
                  <div class="card-header-btn">
                     <a href="/erp/dashboard/carga"><i class="ion-ios-arrow-back"></i> Voltar</a>
                  </div>
               </div>
               <div class="card-body collapse show" id="collapse5">
                  <form action="/erp/dashboard/empresa/salvar" data-parsley-validate method="post">
                     <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-control-label">Razao social: <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" name="razao_social" value="<?php echo $empresa['razao_social'] ?>" placeholder="Digite o nome." required>
                              </div>
                           </div>
                           
                           <input class="form-control" type="hidden" name="id_empresa" value="<?php echo $empresa['id_empresa'] ?>">

                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-control-label">Nome fantasia: <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" name="nome_fantasia" value="<?php echo $empresa['nome_fantasia'] ?>" placeholder="Digite o nome." required>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-control-label">Cpf ou Cnpj: <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" name="cnpj_cpf" value="<?php echo $empresa['cnpj_cpf'] ?>" placeholder="Digite o nome." required  oninput="formatarCpfCnpj(this)" >
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-control-label">Inscricao estadual: <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="number" name="ie" value="<?php echo $empresa['ie'] ?>" placeholder="Digite o nome." required>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <label class="form-control-label">Emite NFe e NFCe: <span class="tx-danger">*</span></label>
                              <select id="basic2" name="emite_nfe" class="selectpicker show-tick form-control tx-12" data-live-search="true">
                                 <option value="S" <?php echo $empresa['emite_nfe'] == 'S' ? 'selected' : '' ?> >Sim </option>
                                 <option value="N" <?php echo $empresa['emite_nfe'] == 'N' ? 'selected' : '' ?> >Não </option>
                              </select>
                           </div>

                           <div class="col-md-6">
                              <label class="form-control-label">Regime: <span class="tx-danger">*</span></label>
                              <select id="basic2" name="crt" class="selectpicker show-tick form-control tx-12" data-live-search="true">
                                 <option value="Simples nacional" <?php echo $empresa['crt'] == 'Simples nacional' ? 'selected' : '' ?>>Simples nacional </option>
                                 <option value="Lucro presumido" <?php echo $empresa['crt'] == 'Lucro presumido' ? 'selected' : '' ?>>Lucro presumido </option>
                                 <option value="Lucro real" <?php echo $empresa['crt'] == 'Lucro real' ? 'selected' : '' ?>>Lucro real </option>
                              </select>
                           </div>

                           <div class="col-md-4">
                              <div class="form-group">
                                 <label class="form-control-label">Cep: <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" name="cep" value="<?php echo $empresa['cep'] ?>" placeholder="Digite o nome." required>
                              </div>
                           </div>

                           <div class="col-md-8">
                              <div class="form-group">
                                 <label class="form-control-label">Endereço: <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" name="endereco" value="<?php echo $empresa['endereco'] ?>" placeholder="Digite o nome." required>
                              </div>
                           </div>

                           <div class="col-md-4">
                              <div class="form-group">
                                 <label class="form-control-label">Telefone: <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" name="telefone" value="<?php echo $empresa['telefone'] ?>" placeholder="Digite o nome." required>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-control-label">Bairro: <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" name="bairro" value="<?php echo $empresa['bairro'] ?>" placeholder="Digite o nome." required>
                              </div>
                           </div>

                           <div class="col-md-2">
                              <div class="form-group">
                                 <label class="form-control-label">Numero: <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" name="numero" value="<?php echo $empresa['numero'] ?>" placeholder="Digite o nome." required>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" name="email" value="<?php echo $empresa['email'] ?>" placeholder="Digite o nome." required>
                              </div>
                           </div>



                           <div class="col-md-12">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" <?php echo $empresa['ativo'] == 'S' ? 'checked' : '' ?>  id="customCheck2" name="ativo">
                                 <label class="custom-control-label" for="customCheck2">Ativo?</label>
                              </div>
                           </div>
                           <div class="form-layout-footer bd pd-20 bd-t-0">
                              <button type="submit" class="btn btn-info pd-y-8">Cadastrar</button>
                           </div>
                        </div>
                  </form>
               </div>
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