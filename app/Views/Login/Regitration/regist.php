<!DOCTYPE html>
<html>

<head>
    <title>Form Pendaftaran</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://educator.co.id/azia/css/azia.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <body style="background-color:#1f9288;">
        <div class="container p-3 my-3 border" style="background-color:white; border-radius: 30px;  box-shadow: 0 0 10px 0 rgb(53, 52, 52)">

            <div class="container">

                <div class="row">
                    <div class="col-xl-8 offset-xl-2 py-5">
                        <form method="post" action="/AccountCtl/registeringAccount">
                            <center>
                                <h2 class="font-weight-bold">Formulir Pendaftaran</h2>
                            </center><br>
                            <hr><br>
                            <center><img src="../../assets/img/favicon.ico" class="w-25" /></center><br><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">Username: </label>
                                        <input id="username" type="text" name="username" class="form-control <?= $validation->hasError('username') ? 'is-invalid' : ''; ?>" placeholder=" Masukkan Username" value="<?= old('username') ?>" autofocus>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('username'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password: </label>
                                        <input id="password" type="password" name="password" class="form-control <?= $validation->hasError('username') ? 'is-invalid' : ''; ?>" placeholder="Masukkan Password">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap: </label>
                                        <input id="name" type="text" name="name" class="form-control <?= $validation->hasError('name') ? 'is-invalid' : ''; ?>" placeholder="Masukkan Nama Lengkap" value="<?= old('name') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('name'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal Lahir:</label><br>
                                        <input id="tanggal" type="date" name="tanggal" class="form-control <?= $validation->hasError('tanggal') ? 'is-invalid' : '' ?>" value="<?= old('tanggal') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="institusi">Institusi </label>
                                        <input id="institusi" type="text" name="institusi" class="form-control <?= $validation->hasError('institusi') ? 'is-invalid' : '' ?>" placeholder="Masukkan Nama Institusi" value="<?= old('institusi') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('institusi'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Whatsapp: </label>
                                        <input id="phone" type="text" name="phone" class="form-control <?= $validation->hasError('phone') ? 'is-invalid' : '' ?>" placeholder="Masukkan Nomor Handphone Anda" value="<?= old('phone') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('phone'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namaBank">Nama Bank</label>
                                        <select type="text" name="namaBank" class="form-control <?= $validation->hasError('namaBank') ? 'is-invalid' : '' ?>" placeholder="Pilih Nama Bank">
                                            <!-- isi nama bank nya disini -->

                                            <?php foreach ($banks as $bank) { ?>
                                                <option value="<?php echo $bank['id'] ?>"><?php echo htmlentities($bank['nama_bank']); ?></option>
                                            <?php } ?>
                                            <!-- <option value="a">sample bank</option>
                                                  <option value="b">sample bank</option>
                                                  <option value="c">sample bank</option>
                                                  <option value="d">sample bank</option>
                                                  <option value="e">sample bank</option> -->
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('namaBank'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="norek">Nomor Rekening </label>
                                        <input id="norek" type="text" name="norek" class="form-control <?= $validation->hasError('norek') ? 'is-invalid' : '' ?>" placeholder="Masukkan Rekening" value="<?= old('norek') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('norek'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namerek">Nama Rekening </label>
                                        <input id="namerek" type="text" name="namerek" class="form-control <?= $validation->hasError('namerek') ? 'is-invalid' : '' ?>" placeholder="Masukkan Rekening" value="<?= old('namerek') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('namerek'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row text-center py-3">
                                <div class=" col-lg 10">
                                    <button style="height: 50px;width: 20%;border: none;outline: none;border-radius: 60px;font-weight: 600;background: #1f9288;color: white;" type="submit">Daftar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
                <script src="contact.js"></script>
    </body>

</html>