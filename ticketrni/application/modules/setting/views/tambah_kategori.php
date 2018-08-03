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
    <script type="text/javascript" src="<?php echo config_item('base_url');?>assets/DataTables-1.10.18/js/.jqueryui.min.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo config_item('base_url');?>assets/bootstrap-4.0/css/bootstrap.min.css" />

    <script type="text/javascript">
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
        <h3>Daftar Kategori</h3>
        <table class="table table-bordered table-hover" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kategori 1</td>
                    </tr>
                    <tr>
                        <td>Kategori 2</td>
                    </tr>
                    <tr>
                        <td>Kategori 3</td>
                    </tr>
                </tbody>
        </table>
    </div>
    <button type="button" class="btn btn-danger">Delete</button>

    <hr />

    <div>
      <div class="form-group">
        <label for="lst_kategori">Tambah Kategori</label>
        <input type="text" class="form-control" id="lst_kategori">
      </div>
      <button type="submit" class="btn btn-default">Tambah</button>
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