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
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashboard.css">

  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" />

</head>

<body>
  <!-- Sidenav -->
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="az-img-user online media d-flex align-items-center" style="width: 50px; height: 50px;">
        <img src="https://educator.co.id/assets/images/icons/username.jpg" alt="" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h5 class="m-0">Admin</h5>
        </div>
      </div><!-- az-img-user -->
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Admin Dashboard</p>

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="<?php echo base_url('panel/event') ?>" class="nav-link text-dark bg-light">
          <i class="fa fa-calendar mr-3 text-primary fa-fw"></i>
          <span>Event</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="../participant/index.php" class="nav-link text-dark bg-light">
          <i class="fa fa-users mr-3 text-primary fa-fw"></i>
          <span>Participant</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('AdminCtl/logout') ?>" class="nav-link text-dark bg-light">
          <i class="fas fa-sign-out-alt mr-3 text-primary fa-fw"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- Main content -->
  <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
      <i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold hidden-mobile">Toggle</small>
    </button>

    <h2 class="display-4 text-white">Halo Admin </h2>
    <p class="lead text-white mb-0">Silahkan tambahkan dan update event jika perlu.</p>
    <div class="separator"></div>
    <br>
    <div class="swal" data-swal="<?= session()->getFlashdata('success') ?>"></div>
    <div class="swal-fail" data-swal="<?= session()->getFlashdata('success') ?>"></div>
    <!-- <?php if (!empty(session()->getFlashdata('success'))) { ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat! </strong><?php echo htmlentities(session()->getFlashdata('success')); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?>
    <?php if (!empty(session()->getFlashdata('fail'))) { ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Maaf! </strong><?php echo htmlentities(session()->getFlashdata('fail')); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?> -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <a href="<?php echo base_url('panel/event/input') ?>" class="btn btn-light bg-white btn-md mb-3 font-weight-bold">Tambah Event</a>
          <table id="example" class="display responsive nowrap" style="width: 100%">
            <thead class="table-light">
              <tr>
                <th>Event Organizer</th>
                <th>Nama Event</th>
                <th>Kuota</th>
                <th>Harga Normal</th>
                <th>Harga Referal</th>
                <th>Komisi Referal</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody class="table-light">
              <?php foreach ($event as $e) : ?>
                <tr>
                  <td><?= $e['nama_eo'] ?></td>
                  <td><?= $e['nama_acara'] ?></td>
                  <td><?= $e['kuota'] ?></td>
                  <td><?= "Rp. " . number_format($e['harga_normal'], 2, ",", "."); ?></td>
                  <td><?= "Rp. " . number_format($e['harga_referral'], 2, ",", "."); ?></td>
                  <td><?= "Rp. " . number_format($e['komisi_referral'], 2, ",", "."); ?></td>
                  <td>
                    <div class="row">
                      <div class="col d-flex justify-content-center">
                        <a href="<?php echo base_url() ?>/panel/event/edit/<?php echo $e["id"] ?>" class="btn btn-sm btn-warning">Update</a>
                      </div>
                      <div class="col d-flex justify-content-center">
                        <a href="<?php echo base_url() ?>/EventCtl/deletingEvent/<?php echo $e["id"] ?>" class="btn btn-sm btn-danger tombol-hapus">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
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
  <script src="../../assets/js/dashboard.js"></script>

  <!-- DataTables -->
  <script src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="/assets/sweetalert2/sweetalert2.all.js"></script>
  <script src="/assets/js/script.js"></script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>


</html>