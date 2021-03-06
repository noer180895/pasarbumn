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
    <script type="text/javascript" src="<?php echo config_item('base_url');?>assets/DataTables-1.10.18/js/dataTables.jqueryui.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo config_item('base_url');?>assets/bootstrap-4.0/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo config_item('base_url');?>assets/DataTables-1.10.18/css/jquery.dataTables.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo config_item('base_url');?>assets/DataTables-1.10.18/css/dataTables.jqueryui.min.css" />

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

    <div class="table-responsive">
        <h3>Detail Transaksi</h3>
        <table class="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th width="25"></th>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>10 Juni 2018 20:00:00</td>
                        <td>Futsall</td>
                        <td>Anak</td>
                        <td>40000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th width="25"></th>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                    </tr>
                </tfoot>
        </table>
    </div>

    <hr />

    <div class="table-responsive">
        <h3>Total Pendapatan</h3>
        <table class="table table-bordered table-hover example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th width="25"></th>
                        <th>Kategori</th>
                        <th>Dewasa</th>
                        <th>Anak</th>
                        <th>Kuliah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"</td>
                        <td>Kategori 1</td>
                        <td>50000</td>
                        <td>40000</td>
                        <td>30000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"</td>
                        <td>Kategori 2</td>
                        <td>50000</td>
                        <td>45000</td>
                        <td>25000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"</td>
                        <td>Kategori 3</td>
                        <td>50000</td>
                        <td>40000</td>
                        <td>30000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Kategori</th>
                        <th>Dewasa</th>
                        <th>Anak</th>
                        <th>Kuliah</th>
                    </tr>
                </tfoot>
        </table>
    </div>

</div>
<style type="text/css">
    .table-responsive{
        margin-top: 10px;
        padding: 15px 0;
    }
    .table-responsive td{
        cursor: pointer;
    }
</style>
</body>
</html>