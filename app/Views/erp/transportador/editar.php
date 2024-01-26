<div class="page-inner ht-100v">
   <div id="main-wrapper">
      <div class="pageheader pd-y-25">
         <div class="col-md-12 col-lg-12">
            <div class="card mb-4 shadow-1">
               <div class="card-header">
                  <h4 class="card-header-title">
                    Editar transportador
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
                                 <a class="nav-link" data-toggle="tab" href="#navs-top-profile">Endereço</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#navs-top-messages">Placa</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane fade active show" id="navs-top-home">
                                 <div class="card-body">
                                    <div class="row mg-b-25">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Nome do transportador: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="text" name="transportador" placeholder="Digite o nome." required>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">CPF/CNPJ: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="text" name="CPF_CNPJ" placeholder="Digite o CPF/CNPJ." required>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Nome: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="text" name="Nome" placeholder="Digite o nome." required>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Email: </label>
                                             <input class="form-control" type="text" name="email" placeholder="Digite o email.">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Telefone: </label>
                                             <input class="form-control" type="text" name="telefone" placeholder="Digite o telefone.">
                                          </div>
                                       </div>

                                       <div class="col-md-6">
                                       <label class="form-control-label">Tipo transportador: <span class="tx-danger">*</span></label>
                                          <select id="basic2" class="selectpicker show-tick form-control tx-12" data-live-search="true">
                                             <option>ETC - Transportador de carga rodoviario </option>
                                             <option>TAC - Transportador de carga autonomo </option>
                                          </select>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="navs-top-profile">
                              <div class="card-body">
                              <div class="row mg-b-25">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Endereço: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="text" name="endereco" placeholder="Digite o endereço." required>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Complemento: </label>
                                             <input class="form-control" type="text" name="complemento" placeholder="Digite o complemento.">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Bairro: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="text" name="bairro" placeholder="Digite o bairro." required>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">UF: </label>
                                             <input class="form-control" type="text" name="uf" placeholder="Digite o estado.">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Cidade: </label>
                                             <input class="form-control" type="text" name="cidade" placeholder="Digite a Cidade.">
                                          </div>
                                       </div>
                                       
                                    </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="navs-top-messages">
                              <div class="card-body">
                              <div class="row mg-b-25">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Placa: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="text" name="placa" placeholder="Digite a placa." required>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">UF: <span class="tx-danger">*</span></label>
                                             <input class="form-control" type="text" name="uf" placeholder="Digite a UF." required>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Renavam:</label>
                                             <input class="form-control" type="text" name="renavam" placeholder="Digite o Renavam.">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Chassi: </label>
                                             <input class="form-control" type="text" name="chassi" placeholder="Digite o Chassi.">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-control-label">Capacidade: </label>
                                             <input class="form-control" type="text" name="telefone" placeholder="Digite o telefone.">
                                          </div>
                                       </div>

                                       <div class="col-md-6">
                                       <label class="form-control-label">Tipo rodado: <span class="tx-danger">*</span></label>
                                          <select id="basic2" class="selectpicker show-tick form-control tx-12" data-live-search="true">
                                             <option>Não aplicavel</option>
                                             <option>Truck</option>
                                             <option>Toco</option>
                                             <option>Cavalo mecânico</option>
                                             <option>Van</option>
                                          </select>
                                       </div>

                                       <div class="col-md-6">
                                       <label class="form-control-label">Tipo carroceria: <span class="tx-danger">*</span></label>
                                          <select id="basic2" class="selectpicker show-tick form-control tx-12" data-live-search="true">
                                             <option>Não aplicavel</option>
                                             <option>Aberta</option>
                                             <option>Fechada/Baú</option>
                                             <option>Graneleira</option>
                                             <option>Porta container</option>
                                          </select>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" checked="" id="customCheck2" name="ativo">
                           <label class="custom-control-label" for="customCheck2">Ativo?</label>
                        </div>
                     </div><br>
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
