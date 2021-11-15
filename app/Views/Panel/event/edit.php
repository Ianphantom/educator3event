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

</head>

<body>
    <!-- Sidenav -->
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center" style="width: 50px; height: 50px;">
                <img src="https://educator.co.id/assets/images/icons/username.jpg" alt="" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                <div class="media-body">
                    <h4 class="m-0">Admin</h4>
                </div>
            </div><!-- az-img-user -->
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Admin Dashboard</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-dark bg-light">
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
        </ul>
    </div>
    <!-- Main content -->
    <div class="page-content p-5" id="content">
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
            <i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold hidden-mobile">Toggle</small>
        </button>

        <h2 class="display-4 text-white">Halo Admin </h2>
        <p class="lead text-white mb-0">Silahkan update info event pada form dibawah.</p>
        <div class="separator"></div>
        <div class="row text-white justify-content-center">
            <div id="form-content" class="col-lg-10">
                <a href="edit.php" class="btn btn-light bg-white btn-md mb-3 font-weight-bold">Update Event</a>
                <form id=" contact-form" method="post" action="contact.php" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama EO: </label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama EO" required="required" data-error="Name EO Diperlukan" value="Contoh">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Acara: </label>
                                <input type="text" name="surname" class="form-control" placeholder="Masukkan Nama Acara" required="required" data-error="Nama Acara Diperlukan" value="Contoh">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jumlah Kuota: </label>
                                <input type="number" name="name" class="form-control" placeholder="Masukkan Jumlah Kuota" required="required" data-error="Jumlah Kuota Diperlukan" value="123">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Normal: </label>
                                <input type="number" name="name" class="form-control" placeholder="Masukkan Harga Normal" required="required" data-error="Harga Normal Diperlukan" value="123">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Referal: </label>
                                <input type="number" name="name" class="form-control" placeholder="Masukkan Harga Referal" required="required" data-error="Harga Referal Diperlukan" value="123">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Komisi Referal: </label>
                                <input type="number" name="name" class="form-control" placeholder="Masukkan Harga Referal" required="required" data-error="Komisi Referal Diperlukan" value="123">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_name">Deskripsi: </label>
                                <textarea rows="15" type="text" name="desc" class="form-control" required="required" data-error="Deskripsi Diperlukan">Contoh</textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">UpdateBy</label>
                                <input type="text" class="form-control" name="updateBy" value="Admin" readonly>
                            </div>
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
    <script src="../../assets/js/dashboard.js"></script>

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