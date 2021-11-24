<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Asia Pacific University Indonesian Student Society Official Website - AUISS">
    <meta name="author" content="AUISS">
    <title>Dashboard Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .fa-shopping-cart:hover{
            color:#19968c !important;
            cursor: pointer;
        }


        div.copycode input[type="text"] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 20%;
            border-radius: 5px 0 0 5px;
        }

        div.copycode button {
            float: left;
            width: 10%;
            padding: 5px;
            background: #19968c;
            color: white;
            font-size: 17px;
            border: 1px solid black;
            border-left: none;
            cursor: pointer;
            border-radius: 0 5px 5px 0;
        }

        div.copycode button:hover {
            background: #53b49f;
        }

        @media (max-width: 768px) {
            .header {
                padding: 60px;
                background: #394043;
                color: white;
                font-size: 20px;
                border-radius: 30px 30px 0 0;
            }

            div.copycode input[type="text"] {
                padding: 10px;
                font-size: 17px;
                border: 1px solid grey;
                float: left;
                width: 50%;
                border-radius: 5px 0 0 5px;
            }

            div.copycode button {
                float: left;
                width: 30%;
                padding: 5px;
                background: #19968c;
                color: white;
                font-size: 17px;
                border: 1px solid black;
                border-left: none;
                cursor: pointer;
                border-radius: 0 5px 5px 0;
            }

            div.copycode button:hover {
                background: #53b49f;
            }

            .col-25,
            .col-75,
            input[type="text"] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>

</head>

<body>
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

        <h2 class="display-4 text-white">Hi, sobat Edu!</h2>
        <p class="lead text-white mb-0">Educator's Event Organizer</p>
        <div class="separator"></div>
        <center><h4 class="display-4 text-white" style="font-size:20px;">Masukkan kode referral anda</h4></center>
        <div class="row text-white justify-content-center copycode">
            <input type="text" placeholder="Kode Referral" id="koderef" class="form-control">
            <button class="btn btn-block" onclick="myFunction()" onmouseout="outFunc()">
                <i class="fa fa-keyboard mr-4 fa-fw">&nbspEnter</i>
            </button>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <table id="example" class="display responsive nowrap" style="width: 100%">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Judul event</th>
                                <th>Waktu</th>
                                <th>Nominal</th>
                                <th>Referal</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody class="table-light">
                            <tr>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>
                                    <div class="row">
                                        <i class="fa fa-shopping-cart" style="font-size:30px;color:black"></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>
                                    <center>
                                    <div class="row">
                                        <i class="fa fa-shopping-cart" style="font-size:30px;color:black"></i>
                                    </div>
                                    </center>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table><br>
                    <p class="lead text-white mb-0">APA ITU REFERRAL ?</p>                    
                    <p style="color: black;">Referral adalah program komisi jika kamu bisa mengajak teman untuk mengikuti event. Untuk mendapatkan kode referral kamu harus membuat akun terlebih dahulu, kemudian minta teman kamu untuk memasukkan username kamu ketika pembelian suatu event. Teman kamu dapat diskon, dan kamu dapat komisi! komisi akan diberikan setelah acara selesai.</p>

                    <p class="lead text-white mb-0">BAGAIMANA CARA MEMBUAT AKUN ?</p>                    
                    <p style="color: black;">Klik ikon profil di kanan atas, pilih Daftar. Isikan data diri kamu, jangan sampai lupa password ya...</p>

                    <p class="lead text-white mb-0">PEMBAYARAN VIA APA ?</p>                    
                    <p style="color: black;">Pembayaran menggunakan QR Code QRIS yang dapat discan menggunakan berbagai macam aplikasi seperti Gojek, OVO, DANA, ShopeePay, dan lainnya yang mendukung scan QRIS. Pembayaran akan diverifikasi otomatis setiap 5 menit, atau setiap kamu menekan tombol konfirmasi pembayaran.</p>

                </div>
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
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/referal.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>


</html>

