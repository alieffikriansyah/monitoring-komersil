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
   .lg-stat{
   width: 15px;
   height: 15px;
   border-radius: 50%;
   }
   .align-middle {
   padding-top: 2px;
   padding-left: 10px;
   }
   .modal-black{
   background-color: #131a22;
   }
   .modal-wt {
   color: #fff;
   }
   .pd-2{
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
   td, th {
   white-space: normal;
   }
   .btn.btn-icon2 {
   width: 35px;
   line-height: 20px;
   height: 35px;
   padding: 8px;
   text-align: center;
   }
   .table-bordered {
   border: 1px solid #EBEBEB;
   }
   table {
   border-spacing: 2px;
   }
   .table-bordered td, .table-bordered th {
   padding: 10px;
   }
   .table .thead-dark th {
   color: #fff;
   background-color: #878888b8;
   border-color: #878d93f5;
   }
   .putih{
   color: #fff;
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
               <h5><?=$title?></h5>
               <span><?=$title_des?></span>
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
            <div class="row">
               <div class="col-md-12">
                  <div class="card ">
                     <div class="card-block">
                        <div class="row" id="export">
                           <div class="col-md-12">
                              <div class="pull-right putih mb-10">
                                 <a class="btn btn-primary" onclick="AddData()"><i class="fa fa-file-excel-o "></i> Tambah</a>
                              </div>
                           </div>
                        </div>
                        <div id="complex-dt_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
                                 <div class="dataTables_length" id="complex-dt_length">
                                    <label>
                                       Show 
                                       <select name="complex-dt_length" aria-controls="complex-dt" class="form-control input-sm" id="limitData">
                                          <option value="10">10</option>
                                          <option value="25">25</option>
                                          <option value="50">50</option>
                                          <option value="100">100</option>
                                          <option value="1000">1000</option>
                                       </select>
                                       entries
                                    </label>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6">
                                 <div id="complex-dt_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="complex-dt" id="srcData"></label></div>
                              </div>
                           </div>
                           <div class="row">
                              <table class="table table-condensed table-striped table-bordered" id="tabel-data">
                                 <thead class="thead-blue">
                                    <tr>
                                       <th class="cemter-t">NO</th>
                                       <th class="cemter-t">Kode cabang</th>
                                       <th class="cemter-t">Pulau cabang</th>
                                       <th class="cemter-t">Provinsi cabang</th>
                                       <th class="cemter-t">Nama cabang</th>
                                       <th class="cemter-t">Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody id="Data-AP">
                                 </tbody>
                              </table>
                           </div>
                           <div class="row"  id="data-pag">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- [ page content ] end -->
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="m-cabang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
         <label class="col-sm-2 col-form-label">Kode cabang</label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="kode_cabang" id="kode_cabang">
         </div>
      </div>
     
    <div class="form-group row">
        <label>Pulau</label>
        <select name="id_pulau" id="id_pulau" class="form-control" required>
            <option value="">Pilih Pulau</option>
             <option value=""></option>
                              <?php foreach ($pulau as $p): ?>
                              <option value="<?=$p['id_pulau']?>"><?=$p['nama_pulau']?></option>
                              <?php endforeach; ?>
        </select>
    </div>
       <div class="form-group row">
         <label class="col-sm-2 col-form-label">Provinsi cabang</label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="provinsi_cabang" id="provinsi_cabang">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Nama cabang</label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="name_cabang" id="name_cabang">
         </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
   </div>
</form>
<script>
   var start = "";
   var end = "";
   
     
      LoadData();
    
      function LoadData(){
         show();
       
         $.ajax({
               url: "<?=base_url()?>Cabang/LoadData",
               type: 'post',
               // data: formData,
               contentType: false,
               processData: false,
   
               success: function(r){
                  var json = JSON.parse(r);
                  var header_table = "";
                  // var pag= "";
                  var no=1;
                  jQuery.each(json['Cabang'], function( i, val ) {
                      
                     var row = "";
                     header_table +=`<tr >
                                       <td style="text-align: center;">`+ no +`</td>
                                      
                                       <td style="text-align: center;">`+(val['kode_cabang'] == null ? '': val['kode_cabang'])+`</td>
                                       <td style="text-align: center;">`+(val['nama_pulau'] == null ? '': val['nama_pulau'])+`</td>
                                       <td style="text-align: center;">`+(val['provinsi_cabang'] == null ? '': val['provinsi_cabang'])+`</td>
                                       <td style="text-align: center;">`+(val['name_cabang'] == null ? '': val['name_cabang'])+`</td>
                                       
                                       <td style="text-align: center;">
                                          <button class="btn waves-effect waves-light btn-primary btn-icon" onclick="EditData(`+val['id_cabang']+`)"><i class="feather icon-edit"></i></button>
                                          <button class="btn waves-effect waves-light btn-danger btn-icon" onclick="ConfirmData(`+val['id_cabang']+`,'delete')"><i class="fa fa-trash"></i></button>
                                       </td>
                                    </tr>`;
                                    no++; 
                  });
                
                  $('#tabel-data > tbody:last-child').html(header_table);
                  //  $('#data-pag').html(json['pag']['label']);  
                 
                  hide ();
               }, error: function(){
                  hide ();
               }
         });   
         return false;
      }
    
    
    function AddData(){
      // show();
      $('#m-cabang').modal('show');
      $('#m-cabang').find('.modal-title').html('Tambah cabang Baru');   
      $('#m-cabang').find('form').attr('onsubmit','return SaveData(this)');
    }
   
    function EditData(id){
      // show();
      $('#m-cabang').modal('show');
      $('#m-cabang').find('.modal-title').html('Edit cabang');   
      $('#m-cabang').find('form').attr('onsubmit','return UpdateData(this,\''+id+'\')');
      $.ajax({
               url: "<?=base_url()?>Cabang/EditData/"+id,
               type: 'post',
               // data: formData,
               contentType: false,
               processData: false,
   
               success: function(r){
                  
                  var json = JSON.parse(r);
                  // $('#id_cabang').val(json['id_cabang']);  
                  $('#kode_cabang').val(json['kode_cabang']);
                  $('#name_cabang').val(json['name_cabang']);
               
               }, error: function(){
                  hide ();
               }
         });   
         return false;
    }
   
    
    function ConfirmData(id,tipe){
      var tit = '';
      var des = '';
      if (tipe == 'proses') {
         tit = "Proses Data";
         des = "Apakah Data Sudah Benar Untuk Diproses Lebih Lanjut?";
      }else if (tipe == 'delete'){
         tit = 'Hapus Data'
         des = "Apakah Sudah Yakin untuk Menghapus Data ini?";
      }
      cuteAlert({
         type: "question",
         title: tit,
         message: des,
         confirmText: "Okay",
         cancelText: "Cancel"
      }).then((e)=>{
         if ( e == ("confirm")){
            // ProsesData(id);
            (tipe =='proses' ? ProsesData(id): DeleteData(id))
         } 
               
      })
   }
   
   function DeleteData(id) {
    
        $.ajax({
            url: '<?=base_url('Cabang/')?>Delete/' + id,
            type: 'post',
            contentType: false,
            processData: false,
            success: function (r) {
               var json = JSON.parse(r);
               NF(json);
               LoadData();
            },
            error: function (xhr, status, error) {
              
                window.location.href = "<?=site_url('Cabang/index')?>";
            }
        });
   
    return false;
   }
   
   
   
   
   function SaveData(f) {
      show();
      // Ambil nilai id_pulau dari form
      var id_pulau = $('#id_pulau').val(); // Pastikan select pulau memiliki id="id_pulau"
      var formData = new FormData(f);
      $.ajax({
         url: '<?= base_url('Cabang/SaveData/') ?>',
         type: 'post',
         data: formData,
         contentType: false,
         processData: false,
         success: function (r) {
            var json = JSON.parse(r);
            NF(json);
            hide();
            $('#m-cabang').modal('hide');
            
            LoadData();
         },
         error: function () {
            LoadData();
            hide();
         }
      });
   
      return false;
   }
   
   
   function UpdateData(f,id){
   
   var formData = new FormData($(f)[0]);
  
   $.ajax({
      url: '<?= base_url('cabang/UpdateData/') ?>' + id,
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(r){
         var json = JSON.parse(r);
         NF(json);
         $('#m-cabang').modal('hide');
         LoadData();
         hide(); 
      }, error: function(){
         hide(); 
         window.location.href = "<?=site_url('cabang/index')?>";
      }
   });
   return false;
}
   
   
</script>