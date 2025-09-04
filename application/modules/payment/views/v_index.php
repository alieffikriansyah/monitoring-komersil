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
                                 <div id="complex-dt_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="complex-dt" id="srcData" onkeyup="LoadData()"></label></div>
                              </div>
                           </div>
                           <div class="row">
                              <table class="table table-condensed table-striped table-bordered" id="tabel-data">
                                 <thead class="thead-blue">
                                    <tr>
                                       <th class="cemter-t">NO</th>
                                       <th class="cemter-t">No Payment</th>
                                       <th class="cemter-t">Tanggal Payment</th>
                                       <th class="cemter-t">No Kontrak</th>
                                       <th class="cemter-t">Nilai Kontrak</th>
                                       <th class="cemter-t">Tanggal Mulai Kontrak</th>
                                       <th class="cemter-t">Tanggal Akhir Kontrak</th>
                                       <th class="cemter-t">Kode cabang</th>
                                       <th class="cemter-t">cabang</th>
                                       <th class="cemter-t">User Create</th>
                                       <th class="cemter-t">User Edit</th>
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



<div class="modal fade" id="m-kontrak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                     <label class="col-sm-2 col-form-label">No Payment</label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" name="no_payment" id="no_payment">
                     </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pilih No Kontrak</label>
                     <div class="col-sm-6">
                        <select name="id_kontrak" id="id_kontrak" class="form-control" required>
                              <option value="">Pilih No Kontrak</option>
                              <option value=""></option>
                                                <?php foreach ($kontrak as $c): ?>
                                                <option value="<?=$c['id_kontrak']?>"><?=$c['no_kontrak']?></option>
                                                <?php endforeach; ?>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-2 col-form-label">Tanggal Payment</label>
                     <div class="col-sm-6">
                        <input type="date" class="form-control" name="tanggal_payment" id="tanggal_payment" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-2 col-form-label">User Create</label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" name="user_create" id="user_create" 
                                 value="<?= $this->session->userdata('username'); ?>" readonly>
                     </div>
                  </div>
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  </div>
               </div>
            </form>
      </div>
   </div>
</div>

<div class="modal fade modal-fullscreen-xl" id="m-FormD" tabindex="-1" role="dialog" aria-labelledby="paymentDetailModal" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="paymentDetailModalTitle">Detail Payment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="pcoded-inner-content">
               <div class="main-body">
                  <div class="page-wrapper">
                     <div class="page-body">
                        <!-- [ page content ] start -->
                        <div class="row">
                           <div class="col-md-12 col-lg-12">
                              <div class="card ">
                                 <div class="card-header">
                                    <h5>Detail Items</h5>
                                    <div class="pull-right putih mb-10">
                                       <a class="btn btn-primary" onclick="AddDataDetail()"><i class="fa fa-plus"></i> Tambah Detail</a>
                                    </div>
                                 </div>
                                 <div class="card-block">
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
                                                   </select>
                                                   entries
                                                </label>
                                             </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6">
                                             <div id="complex-dt_filter1" class="dataTables_filter1"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="complex-dt" id="srcData"></label></div>
                                          </div>
                                       </div>
                                       <div class="row mt-3">
                                          <table class="table table-condensed table-striped table-bordered" id="tabel-data-detail">
                                             <thead class="thead-blue">
                                                <tr>
                                                   <th class="center-t">NO</th>
                                                   <th class="center-t">No Payment</th>
                                                   <th class="center-t">No Payment detail</th>
                                                   <th class="center-t">PYMHD</th>
                                                   <th class="center-t">Account Receivable</th>
                                                   <th class="center-t">Cash</th>
                                                   <th class="center-t">Tanggal Payment Detail</th>
                                                   <th class="center-t">User Create</th>
                                                   <th class="center-t">User Edit</th>
                                                   <th class="center-t">Aksi</th>
                                                </tr>
                                             </thead>
                                             <tbody id="payment-detail-body">
                                                <!-- Data akan diisi oleh JavaScript -->
                                             </tbody>
                                          </table>
                                       </div>
                                       <div class="row" id="data-pag">
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
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="M-FormT" tabindex="-1" role="dialog" aria-labelledby="AddDetailModal" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="AddDetailModal">Tambah Detail Payment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form onsubmit="return SaveDetail(this)">
            <div class="modal-body">
               <!-- Input No Payment -->
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No Payment Detail</label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control" name="no_payment_detail" id="no_payment_detail" required>
                  </div>
               </div>
               
               <!-- Input No Kontrak -->
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pilih No Kontrak</label>
                  <div class="col-sm-6">
                     <select name="id_payment" id="id_payment" class="form-control" required>
                        <option value="">Pilih No paymnet</option>
                        <?php foreach ($payment as $c): ?>
                           <option value="<?= $c['id_payment'] ?>"><?= $c['no_payment'] ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
               </div>

               <!-- Input Tanggal Payment -->
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal Payment</label>
                  <div class="col-sm-6">
                     <input type="date" class="form-control" name="tanggal_payment_detail" id="tanggal_payment_detail" required>
                  </div>
               </div>

               <!-- Input User Create -->
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">User Create</label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control" name="user_create" id="user_create" value="<?= $this->session->userdata('username'); ?>" readonly>
                  </div>
               </div>
               
               <!-- Input Pymhd -->
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pymhd</label>
                  <div class="col-sm-6">
                     <input type="number" step="any" class="form-control" name="pymhd" id="pymhd" required>
                  </div>
               </div>

               <!-- Input Account Receivable -->
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Account Receivable</label>
                  <div class="col-sm-6">
                     <input type="number" step="any" class="form-control" name="account_receivable" id="account_receivable" required>
                  </div>
               </div>

               <!-- Modal Footer -->
               <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>


<script>


   
   var start = "";
   var end = "";
   
     
      LoadData();
    
     function LoadData() {
       var searchValue = document.getElementById('srcData').value.toLowerCase();  // Ambil nilai dari input search
   show(); // Tampilkan loading indicator

   $.ajax({
      url: "<?=base_url()?>Payment/LoadData", // Sesuaikan URL dengan controller yang sesuai
      type: 'post',
      contentType: false,
      processData: false,
      
      success: function(r) {
         var json = JSON.parse(r);
         var header_table = "";
         var no = 1;

         // Loop untuk setiap data kontrak
         jQuery.each(json['Payment'], function(i, val) {
            // Menyusun baris tabel dengan data kontrak
            header_table += `
               <tr>
                  <td style="text-align: center;">${no}</td>
                  <td style="text-align: center;">${(val['no_payment'] == null ? '' : val['no_payment'])}</td>
                  <td style="text-align: center;">${(val['tanggal_payment'] == null ? '' : val['tanggal_payment'])}</td>
                  <td style="text-align: center;">${(val['no_kontrak'] == null ? '' : val['no_kontrak'])}</td>
                  <td style="text-align: center;">${(val['nilai_kontrak'] == null ? '' : val['nilai_kontrak'])}</td>
                  <td style="text-align: center;">${(val['start_kontrak'] == null ? '' : val['start_kontrak'])}</td>
                  <td style="text-align: center;">${(val['end_kontrak'] == null ? '' : val['end_kontrak'])}</td>
                  <td style="text-align: center;">${(val['kode_cabang'] == null ? '' : val['kode_cabang'])}</td>
                  <td style="text-align: center;">${(val['name_cabang'] == null ? '' : val['name_cabang'])}</td>
                  <td style="text-align: center;">${(val['user_create'] == null ? '' : val['user_create'])}</td>
                  <td style="text-align: center;">${(val['user_edit'] == null ? '' : val['user_edit'])}</td>
                  <td style="text-align: center;">
                      <!-- Detail kirim id_payment ke ViewDetail -->
                      <button class="btn waves-effect waves-light btn-secondary btn-icon" onclick="ViewDetail(${val['id_payment']})">
                          Detail
                      </button>
                     <button class="btn waves-effect waves-light btn-primary btn-icon" onclick="EditData(${val['id_payment']})"><i class="feather icon-edit"></i></button>
                     <button class="btn waves-effect waves-light btn-danger btn-icon" onclick="ConfirmData(${val['id_payment']}, 'delete')"><i class="fa fa-trash"></i></button>
                  </td>
               </tr>`;
            no++;
         });

         // Menampilkan hasil dalam tabel
         $('#tabel-data > tbody').html(header_table);

         hide(); // Menyembunyikan loading indicator
      },
      error: function() {
         hide(); // Menyembunyikan loading indicator jika terjadi error
      }
   });

   return false;
}

function ViewDetail(id) {
    $('#m-FormD').modal('show');
    $('#m-FormD').find('.modal-title').html('Detail Payment');
    LoadDataDetail(id);
}


   // LoadDataDetail(id);
    
function LoadDataDetail(id) {
   
      // console.log("ID yang diteruskan:", id);  // Cek ID yang diteruskan
   show(); // Tampilkan loading indicator

   $.ajax({
      url: "<?=base_url()?>Payment/LoadDataDetail/" + id, 
      
      type: 'post',
      contentType: false,
      processData: false,
      
      success: function(r) {
         // console.log("Response detail:", r); // debug
         console.log("Request URL:", "<?=base_url()?>Payment/LoadDataDetail/" + id);
         var json = JSON.parse(r);
         var header_table = "";
         var no = 1;

         // Loop untuk setiap data kontrak
         jQuery.each(json['payment_detail'], function(i, val) {
            // Menyusun baris tabel dengan data kontrak
            header_table += `
               <tr>
                  <td style="text-align: center;">${no}</td>
                  <td style="text-align: center;">${(val['no_payment'] == null ? '' : val['no_payment'])}</td>
                  <td style="text-align: center;">${(val['no_payment_detail'] == null ? '' : val['no_payment_detail'])}</td>
                  <td style="text-align: center;">${(val['pymhd'] == null ? '' : val['pymhd'])}</td>
                  <td style="text-align: center;">${(val['account_receivable'] == null ? '' : val['account_receivable'])}</td>
                  <td style="text-align: center;">${(val['cash'] == null ? '' : val['cash'])}</td>
                  <td style="text-align: center;">${(val['tanggal_payment_detail'] == null ? '' : val['tanggal_payment_detail'])}</td>
                  <td style="text-align: center;">${(val['user_create'] == null ? '' : val['user_create'])}</td>
                  <td style="text-align: center;">${(val['user_edit'] == null ? '' : val['user_edit'])}</td>
                  <td style="text-align: center;">
                    
                     <button class="btn waves-effect waves-light btn-primary btn-icon" onclick="EditData(${val['id_payment_detail']})"><i class="feather icon-edit"></i></button>
                     <button class="btn waves-effect waves-light btn-danger btn-icon" onclick="DeleteDataDetail(${val['id_payment_detail']}, 'delete')"><i class="fa fa-trash"></i></button>
                  </td>
               </tr>`;
            no++;
         });

         // Menampilkan hasil dalam tabel
         $('#tabel-data-detail > tbody').html(header_table);

         hide(); // Menyembunyikan loading indicator
      },
      error: function() {
         hide(); // Menyembunyikan loading indicator jika terjadi error
      }
   });

   return false;
}

    
    
    function AddData(){
      // show();
      $('#m-kontrak').modal('show');
      $('#m-kontrak').find('.modal-title').html('Tambah Payment Baru');   
      $('#m-kontrak').find('form').attr('onsubmit','return SaveData(this)');
    }
   
    function EditData(id){
      // show();
      $('#m-kontrak').modal('show');
      $('#m-kontrak').find('.modal-title').html('Edit cabang');   
      $('#m-kontrak').find('form').attr('onsubmit','return UpdateData(this,\''+id+'\')');
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
            url: '<?=base_url('payment/')?>Delete/' + id,
            type: 'post',
            contentType: false,
            processData: false,
            success: function (r) {
               var json = JSON.parse(r);
               NF(json);
               LoadData();
            },
            error: function (xhr, status, error) {
              
                window.location.href = "<?=site_url('payment/index')?>";
            }
        });
   
    return false;
   }
   
   
   
   
   function SaveData(f) {
      show();
      // Ambil nilai id_pulau dari form
     
      var formData = new FormData(f);
      $.ajax({
         url: '<?= base_url('Payment/SaveData/') ?>',
         type: 'post',
         data: formData,
         contentType: false,
         processData: false,
         success: function (r) {
            var json = JSON.parse(r);
            NF(json);
            hide();
            $('#m-kontrak').modal('hide');
            
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

function AddDataDetail() {
      show();
    
      $('#M-FormT').modal('show');
      $('#M-FormT').find('.modal-title').html('Tambah Detail Payment');
      $('#M-FormT').find('form').attr('onsubmit','return SaveDetail(this)');
   }

function AddDataDetail() {
    show();    

    // Menyembunyikan spinner loader
    $('#spinner').hide();  // Menyembunyikan loader
    $('.loader-bg').hide();  // Menyembunyikan background loader

    $('#M-FormT').modal('show');
    $('#M-FormT').find('.modal-title').html('Tambah Detail Payment');
    $('#M-FormT').find('form').attr('onsubmit','return SaveDetail(this)');
}

function SaveDetail(f) {
    show();
    
    // Ambil data dari form
    var formData = new FormData(f);

    $.ajax({
        url: "<?= base_url() ?>payment/SaveDetail/", // Pastikan URL ini benar
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (r) {
            var json = JSON.parse(r);
            if (json.status === 'success') {
                hide();
                $('#M-FormT').modal('hide');
                // Panggil fungsi untuk memuat data detail yang baru
                LoadDetailData(id);
            } else {
                alert("Gagal menyimpan data!");
                hide();
            }
        },
        error: function () {
            alert("Terjadi kesalahan saat mengirim data.");
            hide();
        }
    });

    return false;
}
    function ConfirmDataDetail(id){
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
  function DeleteDataDetail(id) {
    
        $.ajax({
            url: '<?=base_url('payment/')?>DeleteDetail/' + id,
            type: 'post',
            contentType: false,
            processData: false,
            success: function (r) {
               var json = JSON.parse(r);
               NF(json);
               LoadDetailData(id);
               location.reload();   
            },
            error: function (xhr, status, error) {
              
                window.location.href = "<?=site_url('payment/index')?>";
            }
        });
   
    return false;
   }

   
   
</script>