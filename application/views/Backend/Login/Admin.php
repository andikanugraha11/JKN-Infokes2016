<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Login </title>

        <link href="<?php echo base_url("assets/Backend/css/bootstrap.min.css");?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/Backend/fonts/css/font-awesome.min.css");?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/Backend/css/animate.min.css");?>" rel="stylesheet">
        <!-- Custom styling plus plugins dashboard -->

        <link href="<?php echo base_url("assets/Backend/css/custom.css");?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/Backend/css/icheck/flat/green.css");?>" rel="stylesheet">


        <script src="<?php echo base_url("assets/Backend/js/jquery.min.js");?>"></script>
    </head>
    <body style="background:#F7F7F7;">

  <div class="">

    <div id="wrapper">
      <div class="animate form">
        <section class="login_content">
          <form>
            <h1>Login Admin</h1>
              
              <?php $attributes = array();?>
              <?php echo form_open('users/login_admin',$attributes);?>

                <div>
                    <?php $data=array('class'=>'form-control','name'=>'username','placeholder'=>'masukan username anda');?>
                    <?php echo form_input($data);?>
                </div>
                <div>
                    <?php $data=array('class'=>'form-control','name'=>'password','placeholder'=>'masukan password anda');?>
                    <?php echo form_password($data);?>
<!--                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" />-->
                </div>
                <div>
                    <a class="btn btn-info" href="<?php echo base_url();?>dashboard">Masuk</a>
                </div>
              <?php echo form_close();?>
              <div class="clearfix"></div>
              <br>
            <div class="separator">
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="" style="font-size: 26px;"></i>Jaminan Kesehatan Nasional</h1>

                <p>© <?php echo date('Y')?> All Rights Reserved. Kelompok 3 - 2IA01</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>
</html>
