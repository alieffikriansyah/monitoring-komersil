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
                                       <th class="cemter-t">Nama Company</th>
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
<div class="modal fade" id="m-company" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
         <label class="col-sm-2 col-form-label">Nama Company</label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="nama_company" id="nama_company">
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
               url: "<?=base_url()?>Company/LoadData",
               type: 'post',
               // data: formData,
               contentType: false,
               processData: false,
   
               success: function(r){
                  var json = JSON.parse(r);
                  var header_table = "";
                  // var pag= "";
                  var no=1;
                  jQuery.each(json['Company'], function( i, val ) {
                      
                     var row = "";
                     header_table +=`<tr >
                                       <td style="text-align: center;">`+ no +`</td>
                                       <td style="text-align: center;">`+(val['nama_company'] == null ? '': val['nama_company'])+`</td>
                                       
                                       <td style="text-align: center;">
                                          <button class="btn waves-effect waves-light btn-primary btn-icon" onclick="EditData(`+val['id_company']+`)"><i class="feather icon-edit"></i></button>
                                          <button class="btn waves-effect waves-light btn-danger btn-icon" onclick="DeleteData(`+val['id_company']+`,'delete')"><i class="fa fa-trash"></i></button>
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
      $('#m-company').modal('show');
      $('#m-company').find('.modal-title').html('Tambah Company Baru');   
      $('#m-company').find('form').attr('onsubmit','return SaveData(this)');
    }
   
   function EditData(id){
      // show();
      $('#m-company').modal('show');
      $('#m-company').find('.modal-title').html('Edit Company');   
      $('#m-company').find('form').attr('onsubmit','return UpdateData(this,\''+id+'\')');
      $.ajax({
               url: "<?=base_url()?>Company/EditData/"+id,
               type: 'post',
               // data: formData,
               contentType: false,
               processData: false,
   
               success: function(r){
                  
                  var json = JSON.parse(r);
                  $('#id_company').val(json['id_company']);  
                  $('#nama_company').val(json['nama_company']);
               
               }, error: function(){
                  hide ();
               }
         });   
         return false;
    }
   
   function DeleteData(id) {
    
        $.ajax({
            url: '<?=base_url('Company/')?>Delete/' + id,
            type: 'post',
            contentType: false,
            processData: false,
            success: function (r) {
               var json = JSON.parse(r);
               NF(json);
               LoadData();
            },
            error: function (xhr, status, error) {
              
                window.location.href = "<?=site_url('Company/index')?>";
            }
        });
   
    return false;
   }
   
   
   
   
   function SaveData(f) {
      show();
   
      var formData = new FormData(f);
      $.ajax({
         url: '<?= base_url('Company/SaveData/') ?>',
         type: 'post',
         data: formData,
         contentType: false,
         processData: false,
         success: function (r) {
            var json = JSON.parse(r);
            NF(json);
            hide();
            $('#m-company').modal('hide');
            
            LoadData();
         },
         error: function () {
            LoadData();
            hide();
         }
      });
   
      return false;
   }
   
   
  function UpdateData(form, id) {
    show();
    
    var formData = new FormData(form);
    formData.append('id_company', id);
    
    $.ajax({
        url: "<?=base_url()?>Company/Update",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            var res = JSON.parse(response);
            
            if (res.code == 200) {
                alert(res.msg);
                $('#m-company').modal('hide');
                LoadData();
            } else {
                alert("Error: " + res.msg);
            }
            hide();
        },
        error: function() {
            alert('Terjadi kesalahan koneksi');
            hide();
        }
    });
    
    return false;
}
   
   
</script>