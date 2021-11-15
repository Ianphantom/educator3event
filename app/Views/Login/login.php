
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/form.css">
</head>

<body>
    <div class="header bg-gradient-primary py-7 py-lg-10 pt-lg-12">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Selamat datang di EDUCATOR LOGIN PAGE!</h1>
                        <?php if(!empty(session()->getFlashdata('success'))){?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Selamat! </strong><?php echo htmlentities(session()->getFlashdata('success')); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <?php if(!empty(session()->getFlashdata('fail'))){?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Maaf! </strong><?php echo htmlentities(session()->getFlashdata('fail')); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <p class="text-lead text-white">Masukan detail anda pada form dibawah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container" method="post" action="<?php echo base_url() ?>/AccountCtl/loggingAccount" role="form">
                    <div class="row justify-content-center mb-3">
                        <img src="../assets/img/favicon.ico" class="w-25" />
                    </div>
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" id="exampleInputUsername1" placeholder="UserName">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label float-left" for="exampleCheck1" style="font-size: 14px;">Remember Me</label>
                        <a href="ForgotPwd/inputmail.php" class="text-decoration-line float-right" style="font-size: 14px;">Forgot?</a>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <p class=" mb-0 text-center" style="margin-top: 10px; font-size: 15px;">Belum punya akun?&nbsp<br /><a href="Registration/regist.php" class="text-decoration-line">Daftar sekarang</a></p>
                    </div>
                </form>
            </section>
        </section>
    </section>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-12">
                    <div class="copyright text-center text-xl-center">
                        &copy; 2021 <a href="https://educator.co.id/" class="font-weight-bold ml-1" target="_blank" style="color: #fff;">EDUCATOR</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>