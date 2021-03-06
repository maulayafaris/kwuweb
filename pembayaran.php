<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembayaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            /* position: absolute; */
            top: 0;
            bottom: 0;
            width: 500px;
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="jumbotron">
            <h1 style="text-align: center;">DETAIL PEMBAYARAN</h1>
            <div class="alamatPengirim">
                <div class="row">
                    <div class="col-6">
                        <div id="map"></div>
                    </div>
                    <div class="col-6">
                        <h5>Alamat Pengiriman</h5>
                        <!-- <div id="alamat"></div> -->
                        <div class="area">
                            <textarea id="alamat" name="jalan" cols="60" rows="5" placeholder="Nama jalan rumahmu dan nomor rumah jika ada"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border: 5px solid white;border-radius: 5px;">
            <div class="barang">
                <div class="row">
                    <div class="col-2">
                        <img src="./img/sepatu.jpg" alt="puma" class="img-responsive img-fluid" style="width: 200px;height: 200px;">
                    </div>
                    <div class="col-5">
                        <div class="namaBarang">
                            <h5>Sepatu Puma border hitam original size S/M/L/XL</h5>
                        </div>
                        <div class="totBarang">
                            <p style="color:darkgrey;">1 barang (500 gr)</p>
                        </div>
                        <div class="harga">
                            <p style="font-weight: bold; color: red;">Rp500.000</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="jasa-pengirim">
                            <h6>Jasa Pengiriman</h6>
                        </div>
                        <div class="kurir form-groups">
                            <select name="pengirim" id="pengirims" class="form-control">
                                <option value="puma">KURIR PUMA</option>
                            </select>
                        </div>
                        <div class="estimasi">
                            <p>Estimasi : 2-4 Hari</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border: 5px solid white;border-radius: 5px;">
            <div class="ringkasan">
                <h5>Ringkasan Belanja</h5>
                <div class="row">
                    <div class="col-6">
                        <div class="totHarga">Total Harga (1 Barang)</div>
                    </div>
                    <div class="col-6">
                        Rp500.000
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="totOngkos">Total Ongkos Kirim (Km)</div>
                    </div>
                    <div class="col-6">
                        Rp20.000
                    </div>
                </div>
            </div>
            <hr style="border: 5px solid white;border-radius: 5px;">
            <div class="pembayaran">
                <div class="row">
                    <div class="col-9">
                        <h5>Total Tagihan</h5>
                        <div class="harga">
                            <h5>Rp.500.00</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="paymentSuccess.php" class="btn btn-success" style="width: 100%;">Bayar Sekarang!</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="mapAlamat.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>