<!DOCTYPE html>
<html lang="en">

<head>
    <title>Educator's Event</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/BT/bootstrap/dist/css/bootstrap.min.css">
    <link rel="icon" href="<?php echo base_url(); ?>/assets/img/favicon.ico">
    <link href="https://educator.co.id/azia/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="https://educator.co.id/azia/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="https://educator.co.id/azia/lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css">

    <style>
        .fa-shopping-cart:hover {
            color: #19968c !important;
            cursor: pointer;
        }
    </style>

</head>

<body>

    <section id="hello">
        <div id="hello-caption">
            <div class="container">
                <div class="col-sm-10 col-sm-offset-1">
                    <h1 class="display-3" style="font-weight:900;">Hi, sobat Edu!</h1>
                    <h5 style="font-weight: 300;">Selamat datang di Educator's event</h5>

                    <a href="#navb" class="btn btn-secondary-outline btn-sm" role="button">&darr; Beranda</a>
                </div>
            </div>
        </div>
    </section>


    <div class="navigation" id="navb">
        <a class="active" href="#home">Beranda</a>
        <div class="login-signup">
            <!--
            <a href="#">Sign-up</a>
            <a href="#">Login</a>
            -->
            <a href="Dashboard/profile.php">Dashboard</a>
        </div>

    </div>

    <!-- Educator's logo -->
    <center><img src="<?php echo base_url(); ?>/assets/img/favicon.ico" width="15%" style="margin-top: 60px;"> </center><br>
    <center>
        <h2 style="font-size: 30px;">Educator's Event Organizer</h2>
    </center><br><br>
    <hr>


    <div class="page-content p-5" id="content">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <table id="example" class="display responsive nowrap" style="width: 100%">
                        <p style="font-size: 20px; font-weight: 900;">Available Events</p>

                        <thead class="table-light">
                            <tr>
                                <th>JUDUL</th>
                                <th>KUOTA</th>
                                <th>HARGA NORMAL</th>
                                <th>HARGA (REFERRAL)</th>
                                <th>KOMISI (REFERRAL)</th>
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
                                <td>
                                    <div class="row">
                                        <i class="fa fa-shopping-cart" style="font-size:30px;color:black"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>Contoh</td>
                                <td>
                                    <div class="row">
                                        <i class="fa fa-shopping-cart" style="font-size:30px;color:black"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table><br>
                    <p class="lead text-white mb-0" style="font-weight: 600;"><mark>APA ITU REFERRAL ?</mark></p>
                    <p style="color: black;">Referral adalah program komisi jika kamu bisa mengajak teman untuk mengikuti event. Untuk mendapatkan kode referral kamu harus membuat akun terlebih dahulu, kemudian minta teman kamu untuk memasukkan username kamu ketika pembelian suatu event. Teman kamu dapat diskon, dan kamu dapat komisi! komisi akan diberikan setelah acara selesai.</p>

                    <p class="lead text-white mb-0" style="font-weight: 600;"><mark>BAGAIMANA CARA MEMBUAT AKUN ?</mark></p>
                    <p style="color: black;">Klik ikon profil di kanan atas, pilih Daftar. Isikan data diri kamu, jangan sampai lupa password ya...</p>

                    <p class="lead text-white mb-0" style="font-weight: 600;"><mark>PEMBAYARAN VIA APA ?</mark></p>
                    <p style="color: black;">Pembayaran menggunakan QR Code QRIS yang dapat discan menggunakan berbagai macam aplikasi seperti Gojek, OVO, DANA, ShopeePay, dan lainnya yang mendukung scan QRIS. Pembayaran akan diverifikasi otomatis setiap 5 menit, atau setiap kamu menekan tombol konfirmasi pembayaran.</p>
                    <br>
                </div>
            </div>
        </div>

        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <p>Copyright © Educator ID 2021</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>/assets/js/dashboard.js"></script>

        <!-- DataTables -->
        <script src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
</body>

</html>