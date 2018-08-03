<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>System Ticketing</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <script type="text/javascript">
      var global = {};
      global['base_url'] = "<?php echo config_item('base_url');?>";
    </script>

    <script type="text/javascript" src="<?php echo config_item('base_url');?>assets/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo config_item('base_url');?>assets/jquery-ui.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo config_item('base_url');?>assets/base_grid.2.css">

    <script type="text/javascript" src="<?php echo config_item('base_url');?>assets/main.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo config_item('base_url');?>assets/main.css">

    <link href="https://fonts.googleapis.com/css?family=Siemreap|Cutive+Mono" rel="stylesheet" type="text/css">

    <style type="text/css">
      body>.box_header {
          background-image: url(<?php echo config_item('base_url');?>assets/backgroundheader.png);
          background-repeat: no-repeat;
          background-color: #cccccc;
          background-size: 100% 100%;
          min-height: 200px;    
      }
    </style>
</head>

<body>
    <div class="box_header">
        <a href="<?php echo config_item('base_url');?>">
            <img src="<?php echo config_item('base_url');?>assets/logo.png">
        </a>
        <div class="box_visimisi">Menjadi Perusahaan Distribusi dan Trading yang Unggul dan Terpercaya pada produk kesehatan, konsumer dan industrial melalui pelayanan terbaik bagi pelanggan dan meningkatkan nilai pemangku kepentingan (Stake Holder)</div>
    </div>
    <div class="box_service">
        <div class="service_head">
            <div class="col-prfl-1">
                <div class="item_head active">Pesawat</div>
            </div>
            <div class="col-prfl-1">
                <div class="item_head">Kereta</div>
            </div>
            <div class="col-prfl-1">
                <div class="item_head">Hotel</div>
            </div>
        </div>
        <div class="service_content">
            <div class="box_header">Cari Tiket Pesawatmu Sekarang Juga dan Dapatkan Kemudahannya !!</div>
            <div class="box_order col-prfl-12">
                <div class="box_step1 col-prfl-4">
                    <div class="box_header">1. Tujuan Penerbangan</div>
                    <div class="box_data">
                        <label class="col-prfl-12">Kota Asal</label>
                        <input type="text" class="col-prfl-12">
                        <label class="col-prfl-12">Kota Tujuan</label>
                        <input type="text" class="col-prfl-12">
                    </div>
                </div><div class="box_step2 col-prfl-4">
                    <div class="box_header">2. Tanggal Penerbangan</div>
                    <div class="box_data">
                        <label class="col-prfl-12">Tanggal Berangkat</label>
                        <input type="text" class="col-prfl-12">
                        <input type="radio" checked="" class="">Sekali Jalan
                        <input type="radio" class="">Pulang Pergi
                        <label class="col-prfl-12">Tanggal Pulang</label>
                        <input type="text" class="col-prfl-12">
                    </div>
                </div><div class="box_step3 col-prfl-4">
                    <div class="box_header">3. Penumpang</div>
                    <div class="box_data text-center">
                        <div class="col-prfl-4">Adult
                            <br>
                            <input class="col-prfl-12" type="text">
                        </div><div class="col-prfl-4">Child
                            <br>
                            <input class="col-prfl-12" type="text">
                        </div><div class="col-prfl-4 vspace-10">Baby
                            <br>
                            <input class="col-prfl-12" type="text">
                        </div><div class="col-prfl-12">
                            <input type="button" class="btn_cari col-prfl-12" value="Cari TIket">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box_commercial">
        <div class="col-prfl-4">
            <img src="<?php echo config_item('base_url');?>assets/commercial1.png" class="col-prfl-12">
        </div><div class="col-prfl-8 text-center">
            <div class="col-prfl-12">Unduh Aplikasi Pasar Produk BUMN</div>
            <div class="col-prfl-6">
                <div class="col-prfl-12">Scan Gambar DIbawah Ini</div>
                <img src="<?php echo config_item('base_url');?>assets/qrcode.png" class="col-prfl-6 col-prfl-lg-offset-3">
            </div><div class="col-prfl-6">
                <img src="<?php echo config_item('base_url');?>assets/playstore.png" class="col-prfl-6 col-prfl-lg-offset-3">
            </div>
        </div>

    </div>
    <div class="box_deals">
        <h2 class="col-prfl-12">Popular Deals</h2>
        <span class="box_more_deals">See more deals &gt;&gt;</span>
        <div class="box_part_item col-prfl-4">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png" class="">
        </div><div class="box_part_item col-prfl-4">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png">
        </div><div class="box_part_item col-prfl-4">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png">
        </div><div class="box_part_item col-prfl-4">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png">
        </div><div class="box_part_item col-prfl-4">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png">
        </div><div class="box_part_item col-prfl-4">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png">
        </div>
    </div>
    <div class="box_partners">
        <div class="col-prfl-3">
            <h2>Airline Parners</h2>
            <h4>Domestic &amp; International Airline Partners</h4>
            <p>
                We are partnering with various airlines across the globe to get you wherever you need to be
            </p>
        </div><div class="col-prfl-9">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png" width="70">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png" width="70">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png" width="70">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png" width="70">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png" width="70">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png" width="70">

            <img src="<?php echo config_item('base_url');?>assets/deal1.png" width="70">
            <img src="<?php echo config_item('base_url');?>assets/deal1.png" width="70">

        </div>
    </div>
    <div class="box_interest">
        <h2 class="col-prfl-12">What interests you ?</h2>
        <div class="box_header">
            <span>Top Flight Routes</span>
            <span>Top Hotel Destinations</span>
            <span>Top Packages Destinations</span>
            <span>For your Connectivity</span>
            <span>For Things To Do</span>
        </div>
        <div class="box_destination">
            <div class="col-prfl-4">Flight to Bali</div><div class="col-prfl-4">Flight to Singapore</div><div class="col-prfl-4">Flight to Lombok</div><div class="col-prfl-4">Flight to Jakarta</div><div class="col-prfl-4">Flight to Surabaya</div><div class="col-prfl-4">Flight to Kuala Lumpur</div><div class="col-prfl-4">Flight to Malang</div><div class="col-prfl-4">Flight to Medan</div><div class="col-prfl-4">Flight to Jogja</div><div>Flight to Bangkok</div>
        </div>
        <div class="box_footer">
            <div class="col-prfl-3">
                <h4>Layanan Pelanggan</h4>
                (021) 123456
                <br>cs@pasarprodukbumn.com
            </div><div class="col-prfl-3">
                <h4>Rute Pesawat Terpopuler</h4>
                Tiket pesawat tujuan bali (dari Jakarta)
                <br>Tiket pesawat tujuan malang (dari Jakarta)
                <br>Tiket pesawat tujuan papua (dari Jakarta)
                <br>
            </div><div class="col-prfl-3">
                <h4>Kategori Terpopuler</h4>
                Tiket pesawat tujuan bali (dari Jakarta)
                <br>Tiket pesawat tujuan malang (dari Jakarta)
                <br>Tiket pesawat tujuan papua (dari Jakarta)
                <br>
            </div><div class="col-prfl-3">
                <h4>Tentang Pasar Produk BUMN</h4>
                Hubungi Kami
                <br>Cara Pemesanan Tiket
                <br>Cara Pemesanan Produk Retail
                <br>Bantuan
                <br>Karir
                <br>
            </div>
            <div class="text-center">Copyright @2018 PT. Rajawali Nusindo</div>
        </div>
    </div>
    <div class="box_login_dlg">
        <span class="button_close float-right">(x)</span>
        <h3>Login to your account?</h3>
        <div>Email or mobile no</div>
        <input type="text">
        <div>Password</div>
        <div class="box_login_forgot">Forgot Password</div>
        <input type="text">
        <div class="float-left">
            <input type="button" value="Login" class="btn_login">
        </div><div>
            <div>No Account Yet?</div>
            <div>Register</div>
        </div>
        <div class="text-center col-prfl-12">
            Or Login With
        </div>
        <div class="col-prfl-6">
            <input type="button" class="btn_facebook" value="Facebook">
        </div><div class="col-prfl-6">
            <input type="button" class="btn_google" value="Google">
        </div>
    </div>

    <div class="box_register_dlg">
        <span class="button_close float-right">(x)</span>
        <h3 class="text-center">Bergabunglah dengan kami sebagai anggota Pasar BUMN</h3>
        <div>Email</div>
        <div class="box_reg_mobile">Use mobile number?</div>
        <input type="text" placeholder="e.g : email@example.com">
        <input type="button" value="Register">
        <div class="box_reg_info">Your data will be kept confidential and secure</div>

        <div class="box_reg_login">Already registered? Log in</div>

        <div class="bos_reg_info2">By registering. I agree with Term &amp; Conditions and Privacy Policy of Traveloka</div>

        <div class="register_facebook">Register Using Facebook</div>
        <div class="register_google">Register Using Google</div>
    </div>
</body>

</html>