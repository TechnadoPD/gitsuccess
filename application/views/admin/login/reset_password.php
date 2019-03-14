<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->settings_site_title;?></title>
  <link rel="icon" href="<?php echo base_url('uploads/settings/').$this->header_logo;?>" type="image/gif" sizes="16x16">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="<?php echo base_url('assets/admin/');?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
  <style>
  .toast-top-right{ top:43% !important; right:39% !important;background-color: #20a9d2!important}
  .vl {border-left: 3px solid green;height:100px;}
  .white{background-color:#ffffffd6;padding: 36px;border: 1px solid red;}.btn{border-radius: 0px;}.center{text-align: center;}
  .gap{padding-top:110px;}.form-control{border-radius: 0px !important;border: 1px solid #675e5e;}
</style>
</head>
<body class="hold-transition login-page" style="background-image: url(<?php echo base_url();?>assets/img/loginback.jpg);background-repeat:no-repeat;background-size: cover;background-position: center;">
  <?php if($this->session->flashdata('success')):?>
    <script>alert_success("<?php echo $this->session->flashdata('success')?>");</script>
  <?php endif;?>
  <?php if($this->session->flashdata('error')):?>
    <script>alert_danger("<?php echo $this->session->flashdata('error')?>");</script>
  <?php endif;?>
  <div class="login-box">
    <div class="login-logo">
      <a href="<?php echo base_url();?>">
        <img src="<?php echo base_url('uploads/settings/').$this->header_logo;?>">
      </a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Enter Your New Passowrd</p>
      <form action="<?php echo base_url('admin/reset-password/').$this->uri->segment(3);?>" method="post">
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="new_password" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <?php echo form_error('new_password'); ?>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="cnf_password" placeholder="Confirm Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <?php echo form_error('cnf_password'); ?>
        </div>
        <div class="row">
          <div class="col-xs-4 col-xs-offset-8">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>
</html>
