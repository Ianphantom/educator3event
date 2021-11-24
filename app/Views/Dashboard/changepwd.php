<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Asia Pacific University Indonesian Student Society Official Website - AUISS">
    <meta name="author" content="AUISS">
    <title>Dashboard Page</title>

    <!-- Argon CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <script>
        function valid(){
            if(document.getElementById('newpass').value != document.getElementById('confirmpass').value){
                alert("Password yang anda masukkan tidak sama !!");
                document.getElementById("confirmpass").focus();
                return false;
            }
            return true;
        }    
    </script>
</head>



<body>
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center text-wrap" style="width: 50px; height: 50px;">
                <img src="https://educator.co.id/assets/images/icons/username.jpg" alt="" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                    <div class="media-body">
                        <h5 class="m-0 small"><?php echo $dashboard['nama_lengkap']; ?></h5>
                        <p class="font-weight-normal text-muted mb-0"><?php echo $dashboard['bank_nama']; ?></p>
                    </div>
            </div><!-- az-img-user -->
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Akun Anda</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="<?php echo base_url() ?>/dashboard/profile" class="nav-link text-dark bg-light">
                    <i class="fa fa-edit mr-3 text-primary fa-fw"></i>
                    <span>Ubah Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>/dashboard/password" class="nav-link text-dark bg-light">
                    <i class="fa fa-key mr-3 text-primary fa-fw"></i>
                    <span>Ubah Password</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>/AccountCtl/logout" class="nav-link text-dark bg-light">
                    <i class="fas fa-sign-out-alt mr-3 text-primary fa-fw"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <br />
        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Lainnya</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="<?= base_url('/') ?>" class="nav-link text-dark bg-light">
                    <i class="fas fa-home mr-3 text-primary fa-fw"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>/dashboard/referal" class="nav-link text-dark bg-light">
                    <i class="fa fa-bolt mr-3 text-primary fa-fw"></i>
                    <span>Referal Saya</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>/dashboard/transaksi" class="nav-link text-dark bg-light">
                    <i class="fa fa-shopping-cart mr-3 text-primary fa-fw"></i>
                    <span>Transaksi Saya</span>
                </a>
            </li>
        </ul>

    </div>
    <!-- Main content -->
    <div class="page-content p-5" id="content">
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
            <i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold hidden-mobile">Toggle</small>
        </button>

        <h2 class="display-4 text-white">Ubah Password </h2>
        <p class="lead text-white mb-0">Ubah password kamu dengan mengisi form dibawah.</p>
        <br>
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
        <div class="separator"></div>
        <div class="row text-white justify-content-center mb-3">
            <div id="form-content" class="col-lg-10">
                <form id=" contact-form" method="post" action="<?php echo base_url() ?>/AccountCtl/updatingPassword" role="form">
                    <div class="form-group">
                        <label for="form_name">Password Lama: </label>
                        <input type="password" class="form-control" name="password-lama" id="password-lama" placeholder="Masukkan Password Lama">
                    </div>
                    <div class="form-group">
                        <label for="form_name">Password Baru: </label>
                        <input type="password" class="form-control" name="password" id="newpass" placeholder="Masukkan Password Baru">
                    </div>
                    <div class="form-group">
                        <label for="form_name">Konfirmasi Password: </label>
                        <input type="password" class="form-control" name="password-konfirmasi" id="confirmpass" placeholder="Konfirmasi Password">
                    </div>
                    <div class="form-row justify-content-center py-3">
                        <div>
                            <button class="btn btn-light btn-block font-weight-bold" onclick="return valid();">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Footer -->
        <footer style="margin-top: 30px; margin-bottom: -30px; ">
            <div class="align-items-center justify-content-lg-between">
                <div class="">
                    <div class="copyright text-center text-lg-left">
                        &copy; 2021 <a href="https://educator.co.id/" class="font-weight-bold ml-1 text-light" target="_blank">EDUCATOR</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/js/dashboard.js"></script>
</body>

</html>