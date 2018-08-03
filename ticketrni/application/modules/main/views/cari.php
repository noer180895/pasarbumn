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

    <script type="text/javascript" src="<?php echo config_item('base_url');?>assets/cari.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo config_item('base_url');?>assets/cari.css">

    <link href="//fonts.googleapis.com/css?family=Adamina&subset=latin" rel="stylesheet" type="text/css">

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
                <div class="item_head">Pesawat</div>
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


    <div class="box_list_flight">
        <h2>Jakarta (All Airports) -&gt; Palembang (PLM) Sultan Mahmud Badaruddin II</h2>
        <div>Wednesday, 22 June 2018 | 1 adults | Economy</div>
        <div class="box_filter_flight">
            <div>Filter :</div>
            <div class="filter_item_transit">
                <div class="trigger_box_popup">Transit</div>
                <div class="box_popup"><span class="button_close">(x)</span>
                    <h4>No Of Transit</h4>
                    <div>
                        <div>
                            <input type="checkbox">Direct</div>
                        <div>
                            <input type="checkbox">1 transit</div>
                        <div>
                            <input type="checkbox">2 transit</div>
                    </div>
                    <h4>Transit Duration</h4>
                    <div>Duration of at least one transit: 0h - 10h</div>
                    <div>
                        <img src="<?php echo config_item('base_url');?>assets/duration.png">
                    </div>
                    <h4>Transit Points</h4>
                    <div>
                        <div>
                            <input type="checkbox">Select All</div>
                        <div>
                            <input type="checkbox">Bali/Denpasar</div>
                        <div>
                            <input type="checkbox">Bandar Lampung</div>
                    </div>
                </div>
            </div>
            <div class="filter_item_time">
                <div class="trigger_box_popup">Time</div>
                <div class="box_popup"><span class="button_close">(x)</span>
                    <div class="col-prfl-6">
                        <h4>Departure Time</h4>
                        <div>
                            <input type="checkbox">00.00 - 06.00</div>
                        <div>
                            <input type="checkbox">06.00 - 12.00</div>
                        <div>
                            <input type="checkbox">12.00 - 18.00</div>
                    </div>
                    <div class="col-prfl-6">
                        <h4>ArrivalTime</h4>
                        <div>
                            <input type="checkbox">00.00 - 06.00</div>
                        <div>
                            <input type="checkbox">06.00 - 12.00</div>
                        <div>
                            <input type="checkbox">12.00 - 18.00</div>
                    </div>
                </div>
            </div>
            <div class="filter_item_airline">
                <div class="trigger_box_popup">Airline</div>
                <div class="box_popup"><span class="button_close">(x)</span>
                    <h4>Airline</h4>
                    <div>
                        <input type="checkbox">Garuda
                        <img src="<?php echo config_item('base_url');?>assets/garuda.png" width="25">
                    </div>
                    <div>
                        <input type="checkbox">Lion Air
                        <img src="<?php echo config_item('base_url');?>assets/lion.png" width="25">
                    </div>
                    <div>
                        <input type="checkbox">Citilink
                        <img src="<?php echo config_item('base_url');?>assets/garuda.png" width="25">
                    </div>
                </div>
            </div>
            <div>
                <div class="trigger_box_popup">More Filter</div>
                <div class="box_popup"><span class="button_close">(x)</span>
                    <h4>Price/Passenger</h4>
                    <div>
                        <img src="<?php echo config_item('base_url');?>assets/rangetime.png">
                    </div>
                    <h4>Facilities</h4>
                    <div>
                        <div>
                            <input type="checkbox">Bagage</div>
                        <div>
                            <input type="checkbox">In-flight meal</div>
                        <div>
                            <input type="checkbox">In-flight entertainment</div>
                        <div>
                            <input type="checkbox">Wifi</div>
                        <div>
                            <input type="checkbox">Power / USB Port</div>
                    </div>
                    <h4>Flight Preference</h4>
                    <div>
                        <div>
                            <input type="checkbox">Exclude overnight transit</div>
                        <div>
                            <input type="checkbox">Exclude late night flight</div>
                        <div>
                            <input type="checkbox">Exclude multiple checkin</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="trigger_box_popup">Sort</div>
                <div class="box_popup"><span class="button_close">(x)</span>
                    <h4>Sort</h4>
                    <div>
                        <input type="checkbox">Lowest Price</div>
                    <div>
                        <input type="checkbox">Earliest Departure</div>
                    <div>
                        <input type="checkbox">Latest Departure</div>
                    <div>
                        <input type="checkbox">Earliest Arrival</div>
                    <div>
                        <input type="checkbox">Latest Arrival</div>
                </div>
            </div>
            <div class="trigger_other_date">See other dates</div>
        </div>
        <div class="part_list_flight">
            <div class="col-prfl-2">
                <img src="<?php echo config_item('base_url');?>assets/garuda.png" width="30">Citilink</div><div class="col-prfl-2">
                <div>06:05</div>
                <div>Jakarta(CGK)</div>
            </div><div class="col-prfl-2">
                <div>07:15</div>
                <div>Palembang(PLM)</div>
            </div><div class="col-prfl-2">
                <div>1h 10m</div>
                <div>direct</div>
            </div><div class="col-prfl-2">
                <img src="<?php echo config_item('base_url');?>assets/bagage.png" width="25">
                <img src="<?php echo config_item('base_url');?>assets/food.png" width="25">
                <img src="<?php echo config_item('base_url');?>assets/movie.png" width="25">
            </div><div class="box_price col-prfl-2">
                <div>Rp 373.000</div>
                <div>
                    <input type="button" value="Choose">
                </div>
            </div>
            <span class="col-prfl-2">Flight Details</span>
            <span class="col-prfl-2">Fare Info</span>
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


</body>

</html>