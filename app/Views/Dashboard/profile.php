<?php
    foreach($data as $dashboard){ ?>
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
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/dashboard.css">

</head>

<body>
    <!-- Sidenav -->
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center text-wrap" style="width: 50px; height: 50px;">
                <img src="https://educator.co.id/assets/images/icons/username.jpg" alt="" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                    <div class="media-body">
                        <h5 class="m-0 small"><?php echo $dashboard->nama_lengkap; ?></h5>
                        <p class="font-weight-normal text-muted mb-0"><?php echo $dashboard->nama_bank; ?></p>
                    </div>
            </div><!-- az-img-user -->
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Akun Anda</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="../Dashboard/profile.php" class="nav-link text-dark bg-light">
                    <i class="fa fa-edit mr-3 text-primary fa-fw"></i>
                    <span>Ubah Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../Dashboard/changepwd.php" class="nav-link text-dark bg-light">
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
                <a href="../Dashboard/referal.php" class="nav-link text-dark bg-light">
                    <i class="fa fa-bolt mr-3 text-primary fa-fw"></i>
                    <span>Referal Saya</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="transaksi.php" class="nav-link text-dark bg-light">
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

        <h2 class="display-4 text-white">Ubah Profile </h2>
        <p class="lead text-white mb-0">Ubah profile anda dengan mengisi form dibawah.</p>
        <div class="separator"></div>
        <div class="row text-white justify-content-center">
            <div id="form-content" class="col-lg-10">
                <form id=" contact-form" method="post" action="contact.php" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Username: </label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Masukkan Username" required="required" data-error="Username Diperlukan" value="<?php echo $dashboard->username;?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Nama Bank </label>
                                    <input id="form_name" type="text" name="id" class="form-control" placeholder="Masukkan Nama Bank" required="required" data-error="Nama Bank Diperlukan" value="<?php echo $dashboard->nama_bank;?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Nama Lengkap: </label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap" required="required" data-error="Nama Lengkap Diperlukan" value="<?php echo $dashboard->nama_lengkap;?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Tanggal Lahir:</label><br>
                                    <input id="form_name" type="date" name="name" class="form-control" required="required" data-error="Nama Institusi Diperlukan" value="<?php echo $dashboard->tgl_lahir;?>">
                                    <div id="passwordHelpBlock" class="form-text">
                                    </div>

                                    <!-- date -->
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Institusi </label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Masukkan Nama Institusi" required="required" data-error="Nama Institusi Diperlukan" value="<?php echo $dashboard->institusi;?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Whatsapp: </label>
                                    <input id="form_lastname" type="number" name="phone" class="form-control" placeholder="Masukkan Nomor Handphone Anda" required="required" data-error="Nomor Handphone Diperlukan" value="<?php echo $dashboard->whatsapp;?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Nomor Bank </label>
                                    <input id="form_name" type="number" name="id" class="form-control" placeholder="Masukkan Nomor Bank" required="required" data-error="Nomor Bank Diperlukan" value="<?php echo $dashboard->bank_nomor;?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-row justify-content-center py-3">
                            <div>
                                <button class="btn btn-light btn-block font-weight-bold">Save Changes</button>
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
<?php }
?>