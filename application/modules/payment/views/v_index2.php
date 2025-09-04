<!-- 
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css"> -->

<style>
   .pointer {
      cursor: pointer;
   }

   .hiddenRow {
      padding: 0 !important;
   }

   .form-group {
      margin-bottom: 0.50em;
   }

   .mb-10 {
      margin-bottom: 10px;
   }

   .lg-stat {
      width: 15px;
      height: 15px;
      border-radius: 50%;
   }

   .align-middle {
      padding-top: 2px;

      padding-left: 10px;
   }

   .modal-black {
      background-color: #131a22;
   }

   .modal-wt {
      color: #fff;
   }

   .pd-2 {
      padding-left: 5px;
      padding-right: 5px;
   }

   .label-primary {
      background: #4e79a7;
   }

   .label-success {
      background: #59a14f;
   }

   .label-danger {
      background: #e15759;
   }

   .label-primary {
      background: #5daaff;
   }

   td,
   th {
      white-space: normal;
   }

   .btn.btn-icon2 {
      width: 35px;
      line-height: 20px;
      height: 35px;
      padding: 8px;
      text-align: center;
   }

   .cemter-t {
      text-align: center;
   }

   table {

      border-spacing: 2px;
   }

   .table .thead-dark th {
      color: #fff;
      background-color: #878888b8;
      border-color: #878d93f5;
      vertical-align: middle;
      text-align: center;
   }



   .t-formatP th {
      vertical-align: middle;
   }

   .center {
      vertical-align: middle;
      text-align: center;
   }

   .form-group {
      margin-bottom: 0.50em;
   }
</style>
<div id="spinner" class="">
   <div class="loader is-loading">
      <div class="lds-dual-ring"></div>
   </div>
</div>
<div class="page-header card">
   <div class="row align-items-end">
      <div class="col-lg-8">
         <div class="page-header-title">
            <i class="feather icon-home bg-c-blue"></i>
            <div class="d-inline">
               <h5><?= $title ?></h5>
               <span><?= $title_des ?></span>
               <?php
               // echo "<pre>",print_r ( $this->session->userdata()),"</pre>";
               ?>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="page-header-breadcrumb">
         </div>
      </div>
   </div>
</div>
<div class="pcoded-inner-content">
   <div class="main-body">
      <div class="page-wrapper">
         <div class="page-body">
            <!-- [ page content ] start -->
            <!-- <div class="row">
               <div class="col-md-12">
                  <div class="card ">
                     <div class="card-block">
                        <form id="form-filter" class="row" onsubmit="return FilterData()">
                           <?php if (ses_role() == 'ADMINISTRATOR'): ?>
                              <div class="form-group col-md-3">
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Direksi </label>
                                    <div class="col-sm-6">
                                       <select name="UNIT" class="select2 form-control" style="width: 100%" id="UNIT">
                                          <option value="">-- Pilih --</option>


                                       </select>
                                    </div>
                                 </div>
                              </div>

                           <?php endif ?>
                           <div class="form-group col-md-3">
                              <div class="form-group row">
                                 <label class="col-sm-3 col-form-label">Tahun </label>
                                 <div class="col-sm-6">
                                    <select name="TAHUN" class="select2 form-control" style="width: 100%" id="TAHUN">
                                       <option value="">-- Pilih --</option>

                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4 ">
                              <div class="form-group row">
                                 <label class="col-sm-3 col-form-label">Pencapaian </label>
                                 <div class="col-sm-6">
                                    <select name="PENCAPAIAN" class="select2 form-control" style="width: 100%" id="PENCAPAIAN">
                                       <option value="">ALL</option>
                                       <option value="HIJAU">HIJAU</option>
                                       <option value="KUNING">KUNING</option>
                                       <option value="MERAH">MERAH</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group col-md-2">
                              <button class="btn btn-primary" type="submit">Search</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div> -->
            <div class="row">
               <div class="col-md-12">
                  <div class="card ">
                     <div class="card-block">
                     <div class="pull-right putih mb-10">
                                    <a class="btn btn-primary" onclick="AddData()"><i class="feather icon-plus-circle"></i> Buat Pekerjaan Perawatan</a>
                     </div>
                        <table class="table table-condensed table-striped table-bordered" id="tabel-data1">
                           <thead class="thead-blue">
                              <tr>
                                 <th class="cemter-t">No</th>
                                 <th class="cemter-t">Kode Perawatan</th>
                                 <th class="cemter-t">Jenis Perawatan</th>
                                 <th class="cemter-t">Total Pekerjaan</th>
                                 <th class="cemter-t">Status</th>
                                 <th class="cemter-t">Aksi</th>
                              </tr>
                           </thead>
                           <tbody id="Data-AP">

                           </tbody>
                        </table>
                       
                     </div>
                  </div>
               </div>
            </div>
            <!-- [ page content ] end -->
         </div>
      </div>
   </div>
</div>


<div class="modal fade" id="m-menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <form onsubmit="return SaveGroup(this)">
             <div class="modal-body">

             <div class="form-group row">
                   <label class="col-sm-2 col-form-label">Kode</label>
                   <div class="col-sm-6">
                      <input type="text" class="form-control" name="kode" id="kode" required>
                   </div>
                </div>
                <div class="form-group row">
                   <label class="col-sm-2 col-form-label">Nama</label>
                   <div class="col-sm-6">
                      <input type="text" class="form-control" name="name_pm" id="name_pm" required>
                   </div>
                </div>


             </div>
             <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
               
             </div>
          </form>
       </div>
    </div>
 </div>

<div class="modal fade modal-fullscreen-xl" id="ModalDetailJob" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog " role="document">
      <form id="form-monitoring" class="row" onsubmit="return UpdateData(this)">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-10">
                     <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jenis Alat</label>
                        <div class="col-sm-6">
                           <select class="form-control" name="id_jenisperangkat" id="id_jenisperangkat">
                              <option value=""></option>
                              <?php foreach ($jenis as $key => $value): ?>
                                 <option value="<?= $value['id_jenisperangkat'] ?>"><?= $value['nama'] ?></option>
                              <?php endforeach ?>

                           </select>

                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="job_name">Nama Pekerjaan</label>
                        <div class="col-sm-6">
                           <input type="text" name="job_name" id="job_name" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-2">

                     <button class="btn btn-primary " type="submit" form="form-monitoring" id="btn-action">Simpan</button>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-12">
                     <table class="table table-condensed  table-bordered" id="tabel-data-detail">
                        <thead class="thead-blue">
                           <th class="cemter-t">No</th>
                           <th class="cemter-t">Jenis Alat</th>
                           <th class="cemter-t">Nama Pekerjaan</th>
                           <th class="cemter-t">Status</th>
                           <th class="cemter-t">Action</th>
                        </thead>
                        <tbody id="detail_ap">
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
         </div>
      </form>
   </div>
</div>

<div class="modal fade modal-fullscreen-xl" id="m-detailjenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog " role="document">
      <form id="form-monitoring" class="row" onsubmit="return UpdateData(this)">
         <div class="modal-content">
            <div class="modal-header modal-black">
               <h5 class="modal-title modal-wt" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-10">
                     <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jenis Perangkat</label>
                        <div class="col-sm-6">
                           <select class="form-control" name="id_jenisperangkat" id="id_jenisperangkat">
                              <option value=""></option>
                              <?php foreach ($jenis as $key => $value): ?>
                                 <option value="<?= $value['id_jenisperangkat'] ?>"><?= $value['nama'] ?></option>
                              <?php endforeach ?>

                           </select>

                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="job_name">Nama Pekerjaan</label>
                        <div class="col-sm-6">
                           <input type="text" name="job_name" id="job_name" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-2">

                     <button class="btn btn-primary " type="submit" form="form-monitoring" id="btn-action">Simpan</button>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-12">
                     <table class="table table-condensed  table-bordered" id="tabel-data-detail">
                        <thead class="thead-blue">
                           <th class="cemter-t">No</th>
                           <th class="cemter-t">Jenis Perangkat</th>
                           <th class="cemter-t">Nama Pekerjaan</th>
                           <th class="cemter-t">Status</th>
                           <th class="cemter-t">Action</th>
                        </thead>
                        <tbody id="detail_ap">
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
         </div>
      </form>
   </div>
</div>
<script>
   FilterData();

   function FilterData() {
      show();
      var formData = new FormData();

      var TAHUN = $('#TAHUN').val();
      var PENCAPAIAN = $('#PENCAPAIAN').val();

      //   formData.append('TAHUN', TAHUN);
      //   formData.append('PENCAPAIAN', PENCAPAIAN);
      //    if ($('#UNIT').val() != null ) {

      //       var UNIT = $('#UNIT').val();
      //     formData.append('UNIT', UNIT);
      //    }


      $.ajax({
         url: "<?= base_url() ?>job_pm/LoadData",
         type: 'post',
         data: formData,
         contentType: false,
         processData: false,

         success: function(r) {
            var json = JSON.parse(r);
            var row = ""; 
            var no = 1;
            jQuery.each(json, function(i, val) {
               row += `<tr >
                                       <td >` + (no++) + `</td>
                                       <td >` + val['kode'] + `</td>
                                       <td >` + val['name_pm'] + `</td>
                                       <td >`;
                                       jQuery.each(val['detail'], function(ii, vall) {
                                          row +=`  <table style="width:100%">
                                                      <tr>
                                                         <td width="70%">
                                                         <a onclick="ViewJenis(` + val['idpm_type'] + `,` + vall['id_jenisperangkat'] + `)">`+vall['jenis']+`</a>
                                                         
                                                         </td>
                                                         <td width="30%">`+vall['jumlah']+`</td>
                                                      </tr>
                                                   </table>`;
                                       });
               row += `</td>
                                       <td >` + (val['status'] == 0 ? 'Not Active' : 'Active') + `</td>
                                       <td > 
                                           <div class="d-flex justify-content-center">
                                            <a class="btn btn-primary"onclick="EditDataBiasa(`+val['idpm_type']+`)"><i class="feather icon-edit"></i>Ubah </a> &nbsp &nbsp
                                            <a class="btn btn-primary" onclick="ViewDetail(` + val['idpm_type'] + `)"><i class="feather icon-eye"></i>Tambah Detail Pekerjaan </a>
                                            </div>
                                       </td>
                                    </tr>`;

            });
            console.log(row);
            $('#Data-AP').html(row);
            console.log(row);
            hide();
         },
         error: function() {
            hide();
         }
      });

      return false;
   }

   function AddData(){
      // show();
      $('#m-menu').modal('show');
      $('#m-menu').find('.modal-title').html('Buat Pekerjaan Perawatan');   
      $('#m-menu').find('form').attr('onsubmit','return SaveData(this)');
      // MenuParent();

    }

    function SaveData(f){
      show();
      var formData = new FormData($(f)[0]);
      // formData.append('id', id);
      $.ajax({
         url:  '<?=base_url('job_pm/')?>SaveData/',
       
         type: 'post',
         data: formData,
         contentType: false,
         processData: false,
         success: function(r){
            // $(f)[0].reset(); 
            $('#m-menu').modal('hide');
        
           FilterData();
          hide(); 
         }, error: function(){
            hide(); 
         }
      });

      return false;
   }

   function EditDataBiasa(id){
      // show();
      $('#m-menu').modal('show');
      $('#m-menu').find('.modal-title').html('Edit Menu');   
      $('#m-menu').find('form').attr('onsubmit','return UpdateData(this,\''+id+'\')');
      $.ajax({
               url: "<?=base_url()?>job_pm/EditData/"+id,
               type: 'post',
               // data: formData,
               contentType: false,
               processData: false,

               success: function(r){
                
                  var json = JSON.parse(r);
                  $('#id').val(json['id']);  
                  $('#tanggal').val(json['kode']);  
                  $('#jam').val(json['name_pm']);  
               
               }, error: function(){
                  hide ();
               }
         });   
         return false;
}

function UpdateData(f,id){
      show();
      var formData = new FormData($(f)[0]);
      // formData.append('id', id);
      $.ajax({
         url:  '<?=base_url('job_pm/')?>Update/'+id,
       
         type: 'post',
         data: formData,
         contentType: false,
         processData: false,
         success: function(r){
            $(f)[0].reset(); 
            $('#m-menu').modal('hide');
           FilterData();
          
          hide(); 
         }, error: function(){
            hide(); 
         }
      });
      return false;
   }



   function ViewDetail(id) {
      show();
      $('#ModalDetailJob').find('form').attr('onsubmit', 'return SaveDetail(this,\'' + id + '\')');
      $('#ModalDetailJob').modal('show');
      $('#ModalDetailJob').find('.modal-title').html('Detail Pekerjaan Perawatan');

      DetailData(id);
   }

   function DetailData(id) {
      show();
      $.ajax({
         url: "<?= base_url() ?>job_pm/LoadDataDetail/" + id,
         type: 'post',
         // data: formData,
         contentType: false,
         processData: false,

         success: function(r) {
            var json = JSON.parse(r);
            var row = "";
            var no = 1;
            jQuery.each(json, function(i, val) {
               var editButton = `<a class="btn waves-effect waves-light btn-primary btn-icon" onclick="EditData(${val['id_jobpm']},${val['id_pmtype']},${val['id_jenisperangkat']},'${val['nama']}')"><i class="feather icon-edit"></i></a>`;
               var deleteButton = `<a class="btn waves-effect waves-light btn-primary btn-icon btn-danger" onclick="DeleteDetail(` + val['id_jobpm'] + `,` + val['id_pmtype'] + `)"><i class="feather icon-trash"></i> </a>`;
               var btn = editButton + deleteButton;

               row += `<tr >
                                       <td >` + (no++) + `</td>
                                       <td >` + val['jenis'] + `</td>
                                       <td >` + val['nama'] + `</td>
                                       <td >` + (val['status'] == 0 ? 'Not Active' : 'Active') + `</td>
                                       <td > 
                                        ${btn}
                                       
                                       </td>
                                    </tr>`;
            });

            $('#tabel-data-detail> tbody:last-child').html(row);
            hide();
         },
         error: function() {
            hide();
         }
      });
      return false;
   }

   function SaveDetail(f, id) {
      show();
      var formData = new FormData($(f)[0]);

      $.ajax({
         url: "<?= base_url() ?>job_pm/SaveDetail/" + id,
         type: 'post',
         data: formData,
         contentType: false,
         processData: false,

         success: function(r) {
            // $('#ModakEditMonitoring').modal('hide');
            DetailData(id);
            hide();
         },
         error: function() {
            hide();
         }
      });

      return false;
   }

   function DeleteDetail(id, idp) {
      // show();

      $.ajax({
         url: "<?= base_url('job_pm/DeleteDetail/') ?>" + id,
         success: function(r) {
            console.log('tes');
            DetailData(idp);
            FilterData();
            hide();
         },
         error: function() {

         }
      });

   }

   function EditData(idjobpm, pm_type, idjenis, nama) {
      $('#ModalDetailJob').find('form').attr('onsubmit', 'return UpdateDetail(this,\'' + pm_type + '\',\'' + idjobpm + '\')');
      $('#ModalDetailJob').find('#btn-action').html('Update');

      $('#job_name').val(nama);
      $('#id_jenisperangkat').val(idjenis).change();

   }

   function UpdateDetail(f, pmtype, id) {
      show();
      var formData = new FormData($(f)[0]);

      $.ajax({
         url: '<?= base_url('job_pm/') ?>UpdateDetail/' + id,

         type: 'post',
         data: formData,
         contentType: false,
         processData: false,
         success: function(r) {
            $(f)[0].reset();
            $('#ModalDetailJob').find('form').attr('onsubmit', 'return SaveDetail(this,\'' + pmtype + '\')');
            $('#ModalDetailJob').find('#btn-action').html('Save');
            DetailData(pmtype);
            FilterData();;
            // ViewDetail(id,date);
            hide();
         },
         error: function() {
            hide();
         }
      });

      return false;

   }

   function ViewJenis(pmtype,jenis) {
      show();
      $('#ModalDetailJob').find('form').attr('onsubmit', 'return SaveDetail(this,\'' + pmtype + '\')');
      $('#ModalDetailJob').modal('show');
      $('#ModalDetailJob').find('.modal-title').html('Detail Pekerjaan Perawatan');

      DetailJenis(pmtype,jenis);
   }

   function DetailJenis(pmtype,jenis) {
      show();
      $.ajax({
         url: "<?= base_url() ?>job_pm/LoadDataDetailJenis/" + pmtype+'/'+jenis,
         type: 'post',
         // data: formData,
         contentType: false,
         processData: false,

         success: function(r) {
            var json = JSON.parse(r);
            var row = "";
            var no = 1;
            jQuery.each(json, function(i, val) {
               var editButton = `<a class="btn waves-effect waves-light btn-primary btn-icon" onclick="EditData(${val['id_jobpm']},${val['id_pmtype']},${val['id_jenisperangkat']},'${val['nama']}')"><i class="feather icon-edit"></i></a>`;
               var deleteButton = `<a class="btn waves-effect waves-light btn-primary btn-icon btn-danger" onclick="DeleteDetail(` + val['id_jobpm'] + `,` + val['id_pmtype'] + `)"><i class="feather icon-trash"></i> </a>`;
               var btn = editButton + deleteButton;

               row += `<tr >
                                       <td >` + (no++) + `</td>
                                       <td >` + val['jenis'] + `</td>
                                       <td >` + val['nama'] + `</td>
                                       <td >` + (val['status'] == 0 ? 'Not Active' : 'Active') + `</td>
                                       <td > 
                                        ${btn}
                                       
                                       </td>
                                    </tr>`;
            });

            $('#tabel-data-detail> tbody:last-child').html(row);
            hide();
         },
         error: function() {
            hide();
         }
      });
      return false;
   }

</script>