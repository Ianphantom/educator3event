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
                        <?php if($error != ""){ ?>
                            <div class="alert alert-danger" role="alert">
                                Username sudah digunakan. Harap menggunakan UserName lain
                            </div>
                        <?php } ?>
                        <form id="contact-form" method="post" action="<?php echo base_url() ?>/AccountCtl/registeringAccount" role="form">
                            <center><h2 class="font-weight-bold">Formulir Pendaftaran</h2></center><br><hr><br>
                            <center><img src="../../assets/img/favicon.ico" class="w-25" /></center><br><br>
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Username: </label>
                                            <input id="form_name" type="text" name="username" class="form-control" placeholder="Masukkan Username" required="required" data-error="Username Diperlukan">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Password: </label>
                                            <input id="form_lastname" type="password" name="password" class="form-control" placeholder="Masukkan Password " required="required" data-error="Password Diperlukan">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Nama Lengkap: </label>
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap" required="required" data-error="Nama Lengkap Diperlukan">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <label for="form_need">Tanggal Lahir:</label><br>
                                                <input id="form_name" type="date" name="tanggal"  class="form-control" required="required" data-error="Nama Institusi Diperlukan">    
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
                                            <input id="form_name" type="text" name="institusi" class="form-control" placeholder="Masukkan Nama Institusi" required="required" data-error="Nama Institusi Diperlukan">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Whatsapp: </label>
                                            <input id="form_lastname" type="number" name="phone" class="form-control" placeholder="Masukkan Nomor Handphone Anda" required="required" data-error="Nomor Handphone Diperlukan">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Nama Bank</label>
                                            <select type="text" name="namaBank" class="form-control" placeholder="Pilih Nama Bank" required="required" data-error="Nama Bank Diperlukan">
                                                <!-- isi nama bank nya disini -->
                                                <?php foreach ($banks as $bank){ ?>
                                                    <option value="<?php echo $bank['id'] ?>"><?php echo htmlentities($bank['nama_bank']);?></option>    
                                                <?php } ?>
                                                  <!-- <option value="a">sample bank</option>
                                                  <option value="b">sample bank</option>
                                                  <option value="c">sample bank</option>
                                                  <option value="d">sample bank</option>
                                                  <option value="e">sample bank</option> -->
                                                </select>

                                            <div class="help-block with-errors"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Nomor Rekening </label>
                                            <input id="form_name" type="number" name="norek" class="form-control" placeholder="Masukkan Rekening" required="required" data-error="Nomor Bank Diperlukan">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Nama Rekening </label>
                                            <input id="form_name" type="text" name="namerek" class="form-control" placeholder="Masukkan Rekening" required="required" data-error="Nama Bank Diperlukan">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row text-center py-3">
                                    <div class=" col-lg 10">
                                        <button style="height: 50px;width: 20%;border: none;outline: none;border-radius: 60px;font-weight: 600;background: #1f9288;color: white;" >Daftar</button>
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