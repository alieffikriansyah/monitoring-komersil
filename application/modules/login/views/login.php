<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Monitoring Komersial</title>
      <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="" />
      <meta name="keywords" content="Performance Maintenance Apllication " />
      <meta name="author" content="Performance Maintenance Apllication " />
      <link rel="icon" href="<?=base_url()?>assets/ias_om_cgk.png" type="image/x-icon">
      <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet"> -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_v2/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?=base_url()?>assets_v2/pages/waves/css/waves.min.css" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_v2/icon/feather/css/feather.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_v2/icon/themify-icons/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_v2/icon/icofont/css/icofont.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_v2/icon/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_v2/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_v2/css/pages.css">
      <style type="text/css">
           body{
                height: 100vh;
                /*background-image: url(<?= base_url('') ?>);*/
                 background-image: url(<?= base_url('assets/unguoren.jpg') ?>);
                background-repeat: no-repeat;
                background-size: auto;
                 background-position: center; 
              
            }
      </style>
   </head>
   <body >
      <div class="theme-loader">
         <div class="loader-track">
            <div class="preloader-wrapper">
               <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="login-block">
<!-- <div class="d-flex justify-content-center align-items-center mt-4 gap-4">
    <img src="<?= base_url('assets/injourney.png') ?>" alt="InJourney" style="max-width: 200px; height: auto;">
    <img src="<?= base_url('assets/iass2.png') ?>" alt="IAS" style="max-width: 200px; height: auto;">
</div> -->
<!-- InJourney Logo - Fixed Top Left -->
<div style="
    position: fixed;
    top: 10px;
    left: 10px;
    padding: 3px;
    background: linear-gradient(135deg, #FFD700 0%, #FFEC8B 25%, #FFD700 50%, #FFEC8B 75%, #FFD700 100%);
    background-size: 200% 200%;
    animation: gradientShift 3s ease infinite;
    border-radius: 4px;
    z-index: 1000;
">
    <img src="<?= base_url('assets/injourney.png') ?>" alt="InJourney" style="
        max-width: 200px;
        height: auto;
        display: block;
        border-radius: 2px;
    ">
</div>

<!-- IAS Logo - Fixed Top Right -->
<div style="
    position: fixed;
    top: 10px;
    right: 10px;
    padding: 3px;
    background: linear-gradient(135deg, #FFD700 0%, #FFEC8B 25%, #FFD700 50%, #FFEC8B 75%, #FFD700 100%);
    background-size: 200% 200%;
    animation: gradientShift 3s ease infinite;
    border-radius: 4px;
    z-index: 1000;
">
    <img src="<?= base_url('assets/ias.png') ?>" alt="IAS" style="
        max-width: 150px;
        height: auto;
        display: block;
        border-radius: 2px;
    ">
</div>

         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                   <?= form_open("login") ?>
                     
                    <div class="auth-box card" style="background: #000;">
    <div class="card-block">
        <div class="row m-b-20">
            <div class="col-md-12">
                <h3 class="text-center txt-primary">Monitoring Kinerja</h3>
                <h3 class="text-center txt-primary">PT. IAS Support Indonesia</h3>
            </div>
        </div>
        <p class="text-muted text-center p-b-5"><?= flash("pesan") ?></p>
        
        <!-- Username Input -->
        <div class="form-group form-primary" style="
            position: relative;
            border-radius: 4px;
            padding: 2px;
            background: linear-gradient(135deg, 
                #FFD700 0%, 
                #FFEC8B 25%, 
                #FFD700 50%, 
                #FFEC8B 75%, 
                #FFD700 100%);
            background-size: 200% 200%;
            animation: gradientShift 3s ease infinite;
            margin-bottom: 20px;
        ">
            <div style="background: #e0e0e0; border-radius: 2px; padding: 15px;">
                <input type="text" name="username" id="username" class="form-control" required="" value="<?= flash('username2') ?>" style="
                    background: #e0e0e0;
                    color: #333;
                    border: none;
                    width: 100%;
                    outline: none;
                ">
                <span class="form-bar" style="background: #FFD700;"></span>
                <label class="float-label" style="color: #555;">Username</label>
            </div>
        </div>
        
        <!-- Password Input -->
        <div class="form-group form-primary" style="
            position: relative;
            border-radius: 4px;
            padding: 2px;
            background: linear-gradient(135deg, 
                #FFD700 0%, 
                #FFEC8B 25%, 
                #FFD700 50%, 
                #FFEC8B 75%, 
                #FFD700 100%);
            background-size: 200% 200%;
            animation: gradientShift 3s ease infinite;
            margin-bottom: 20px;
        ">
            <div style="background: #e0e0e0; border-radius: 2px; padding: 15px;">
                <input type="password" name="password" id="password" class="form-control" required="" style="
                    background: #e0e0e0;
                    color: #333;
                    border: none;
                    width: 100%;
                    outline: none;
                ">
                <span class="form-bar" style="background: #FFD700;"></span>
                <label class="float-label" style="color: #555;">Password</label>
            </div>
        </div>
        
        <div class="row m-t-30">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" style="
                    background: linear-gradient(135deg, #FFD700 0%, #FFEC8B 50%, #FFD700 100%);
                    color: #000;
                    font-weight: bold;
                    border: none;
                ">Login</button>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    .auth-box.card {
        border: 1px solid #FFD700;
        box-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
    }
    
    .txt-primary {
        color: #FFD700 !important;
    }
    
    .text-muted {
        color: #aaa !important;
    }
</style>
                  <?= form_close() ?>
               </div>
            </div>
         </div>
       </div>
<!-- <div class="d-flex justify-content-center align-items-center mt-4 gap-4">
    <img src="<?= base_url('assets/ias_om_cgk.png') ?>" alt="InJourney" 
         style="max-width: 300px; height: auto; margin-left: 50%; ">
</div>       -->
<!-- <div class="d-flex justify-content-center align-items-start mt-2">
    <img src="<?= base_url('assets/ias_om_cgk.png') ?>" alt="InJourney" 
         style="max-width: 400px; height: auto; margin-top: -120px; margin-left: 50%;">
</div> -->
      </section>
     
      <script type="text/javascript" src="<?=base_url()?>assets_v2/plugins/jquery/js/jquery.min.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets_v2/plugins/jquery-ui/js/jquery-ui.min.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets_v2/plugins/popper.js/js/popper.min.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets_v2/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?=base_url()?>assets_v2/pages/waves/js/waves.min.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets_v2/plugins/jquery-slimscroll/js/jquery.slimscroll.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets_v2/plugins/modernizr/js/modernizr.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets_v2/plugins/modernizr/js/css-scrollbars.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets_v2/js/common-pages.js"></script>

        <?php
        if (isset($plugin)) {
            foreach ($plugin as $pl) {
                if (isset($data_plugin)) {
                    $this->load->view($pl, $data_plugin);
                } else {
                    $this->load->view($pl);
                }
            }
        }
        ?>





        <!-- App functions and actions -->
        <script src="<?= base_url("assets") ?>/js/app.min.js"></script>
   </body>
</html>
<!-- 
