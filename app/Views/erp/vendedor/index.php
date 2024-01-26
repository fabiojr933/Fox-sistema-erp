<div class="page-inner ht-100v">
   <div id="main-wrapper">
      <div class="pageheader pd-y-25">
         <div class="col-md-12 col-lg-12">
            <div class="card mb-4 shadow-1">
               <div class="card-header">
                  <h4 class="card-header-title">
                     Vendedores cadastrados
                  </h4>
                  <div class="card-header-btn">
                     <a href="/erp/dashboard/vendedor/novo"><i class="ionicons ion-android-add-circle"></i> Novo</a>
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
                              <th>vendedor</th>
                              <th class="text-center w-100px">Actions</th>
                              <th data-hide="all">Job Title</th>
                              <th data-hide="all">DOB</th>
                              <th data-hide="all">Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Boudreaux</td>
                              <td class="text-right table-actions">
                                 <a class="table-action tx-gray-800 mg-r-10" href="/erp/dashboard/vendedor/editar/1"><i class="fa fa-pencil"></i></a>
                                 <a class="table-action tx-gray-800 mg-r-10" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                              </td>
                              <td>Traffic Court Referee</td>
                              <td>22 Jun 1972</td>
                              <td><span class="label label-table label-success">Active</span></td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Woldt</td>
                              <td class="text-right table-actions">
                                 <a class="table-action tx-gray-800 mg-r-10" href="javascript:void(0)"><i class="fa fa-pencil"></i></a>
                                 <a class="table-action tx-gray-800 mg-r-10" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                              </td>
                              <td>Airline Transport Pilot</td>
                              <td>3 Oct 1981</td>
                              <td><span class="label label-table label-dark">Disabled</span></td>
                           </tr>
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