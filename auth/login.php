<?php
require_once "../_config/config.php";
if(isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url()."';</script>";
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Pengurus</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/dist/css/AdminLTE.min.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_assets/icon_login.png')?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin</b> Adiwiyata</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masuk Untuk Melanjutkan</p>

    <?php
    if(isset($_POST['login'])) {
        $user = trim(mysqli_real_escape_string($con, $_POST['user']));
        $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
        $sql_login = mysqli_query($con, "SELECT * FROM tb_pengurus WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($con));
        if(mysqli_num_rows($sql_login) > 0) {
            $data = mysqli_fetch_object($sql_login);
            $_SESSION['user'] = $user;
            $_SESSION['level'] = $data->level;
            echo "<script>window.location='".base_url()."';</script>";
        } else { ?>
            <div class="row">
                <div class="col-lg-12 col-lg-offset-13">
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <strong>Login Gagal</strong> Username / password salah
                    </div>
                </div>
            </div>
        <?php
        }
    }
    ?>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="user" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" name="login" class="btn btn-success btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<script src="<?base_url('_assets/js/jquery.js')?>"></script>
<script src="<?base_url('_assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
<?php
}
?>