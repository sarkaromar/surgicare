<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$title?></title>
        <link href="<?=base_url()?>assets/front/images/favicon.png" rel="shortcut icon" type="image/png">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?=base_url()?>assets/back/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/back/extra/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/back/extra/ionicons.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/back/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/back/plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/back/css/custom.css">
        <!--[if lt IE 9]>
        <script src="<?=base_url()?>assets/back/extra/html5shiv.min.js"></script>
        <script src="<?=base_url()?>assets/back/extra/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page" style="background: #043865;">
        <?php $gl = $this->session->flashdata('globalmsg'); ?>
        <?php if(!empty($gl)) :?>
            <!-- notice -->
            <div class="container projects-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success"><b><span class="glyphicon glyphicon-ok"></span></b> <?php echo $this->session->flashdata('globalmsg') ?></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="login-box">
            <div class="login-logo">
                <a href="<?=base_url()?>"><b style="color:#fff;font-size:60px;">Login Form</b></a>
            </div>
            <div class="login-box-body" style="box-shadow: 0px 0px 20px 5px;">
                <p class="login-box-msg">Hi Admin!</p>
                <?=form_open(site_url("login/logincheck"))?>
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" placeholder="Email" maxlength="128" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="rem"> &nbsp; Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
                        </div>
                    </div>
                <?=form_close()?>
            </div>
        </div>




        <script src="<?=base_url()?>assets/back/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="<?=base_url()?>assets/back/bootstrap/js/bootstrap.min.js"></script> 
        <script src="<?=base_url()?>assets/back/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%'
                });
            });
        </script>
    </body>
</html>