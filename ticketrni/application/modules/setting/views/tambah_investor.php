<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test Data Table</title>

    <meta charset="UTF-8">
    <title>Request Item Code</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
    <script type="text/javascript" src="<?php echo config_item('base_url');?>assets/jQuery-1.12.4/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo config_item('base_url');?>assets/bootstrap-4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo config_item('base_url');?>assets/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo config_item('base_url');?>assets/bootstrap-4.0/css/bootstrap.min.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).ready(function() {
                $('.example').DataTable();
            });
        });
    </script>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo config_item('base_url');?>">Beranda</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Setting
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo config_item('base_url');?>index.php/setting/tambah_kategori">Tambah Kategori</a>
              <a class="dropdown-item" href="<?php echo config_item('base_url');?>index.php/setting/tambah_investor">Tambah Investor</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Informasi</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Laporan
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo config_item('base_url');?>index.php/laporan/laporan_transaksi">Laporan Transaksi</a>
              <a class="dropdown-item" href="<?php echo config_item('base_url');?>index.php/laporan/laporan_persentasi">Laporan Persentasi</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
      </div>
    </nav>

    <div class="form-group">
        <label for="lst_kategori">Kategori</label>
        <input type="text" class="form-control" id="lst_kategori">
    </div>

    <table class="table table-bordered table-hover" class="display" style="width:100%">
            <thead>
                <tr>
                    <th width="25"></th>
                    <th>Investor</th>
                    <th>Dewasa</th>
                    <th>Anak</th>
                    <th>Kuliah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"</td>
                    <td>Investor 1</td>
                    <td>10%</td>
                    <td>40%</td>
                    <td>30%</td>
                </tr>
                <tr>
                    <td><input type="checkbox"</td>
                    <td>Investor 2</td>
                    <td>40%</td>
                    <td>20%</td>
                    <td>30%</td>
                </tr>
                <tr>
                    <td><input type="checkbox"</td>
                    <td>Investor 3</td>
                    <td>50%</td>
                    <td>40%</td>
                    <td>40%</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th>Total</th>
                    <th>100%</th>
                    <th>100%</th>
                    <th>100%</th>
                </tr>
            </tfoot>
    </table>

    <br />
    <button type="button" class="btn btn-danger">Delete</button>

    <hr />

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Futsall</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Badminton</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tenis</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="form-group row container">
              <div class="col-2">
                <label for="lst_anak">Harga Dewasa:</label>
              </div>
              <div class="col-2">
                <input class="form-control" id="ex2" type="text">
              </div>
              <div class="col-3">
                <input class="form-control" id="ex2" type="text">
              </div>
            </div>
            <div class="form-group row container">
              <div class="col-2">
                <label for="lst_anak">Harga Aanak:</label>
              </div>
              <div class="col-2">
                <input class="form-control" id="ex2" type="text">
              </div>
              <div class="col-3">
                <input class="form-control" id="ex2" type="text">
              </div>
            </div>
            <div class="form-group row container">
              <div class="col-2">
                <label for="lst_anak">Harga Kuliah:</label>
              </div>
              <div class="col-2">
                <input class="form-control" id="ex2" type="text">
              </div>
              <div class="col-3">
                <input class="form-control" id="ex2" type="text">
              </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="form-group row container">
              <div class="col-2">
                <label for="lst_anak">Harga Dewasa:</label>
              </div>
              <div class="col-2">
                <input class="form-control" id="ex2" type="text">
              </div>
              <div class="col-3">
                <input class="form-control" id="ex2" type="text">
              </div>
            </div>
            <div class="form-group row container">
              <div class="col-2">
                <label for="lst_anak">Harga Aanak:</label>
              </div>
              <div class="col-2">
                <input class="form-control" id="ex2" type="text">
              </div>
              <div class="col-3">
                <input class="form-control" id="ex2" type="text">
              </div>
            </div>
            <div class="form-group row container">
              <div class="col-2">
                <label for="lst_anak">Harga Kuliah:</label>
              </div>
              <div class="col-2">
                <input class="form-control" id="ex2" type="text">
              </div>
              <div class="col-3">
                <input class="form-control" id="ex2" type="text">
              </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="form-group row container">
              <div class="col-2">
                <label for="lst_anak">Harga Dewasa:</label>
              </div>
              <div class="col-2">
                <input class="form-control" id="ex2" type="text">
              </div>
              <div class="col-3">
                <input class="form-control" id="ex2" type="text">
              </div>
            </div>
            <div class="form-group row container">
              <div class="col-2">
                <label for="lst_anak">Harga Aanak:</label>
              </div>
              <div class="col-2">
                <input class="form-control" id="ex2" type="text">
              </div>
              <div class="col-3">
                <input class="form-control" id="ex2" type="text">
              </div>
            </div>
            <div class="form-group row container">
              <div class="col-2">
                <label for="lst_anak">Harga Kuliah:</label>
              </div>
              <div class="col-2">
                <input class="form-control" id="ex2" type="text">
              </div>
              <div class="col-3">
                <input class="form-control" id="ex2" type="text">
              </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
</div>
<style type="text/css">
    .nav-tabs{
        margin-top: 10px;
        padding: 15px 0;
    }
</style>
</body>
</html>