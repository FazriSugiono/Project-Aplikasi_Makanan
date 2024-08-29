<?php 

date_default_timezone_set('asia/jakarta');




?>
<?php 
$kodepaket=$_POST['kodePaket'];
$jp=$_POST['jp'];
$hargapaket=$_POST['hargaPaket'];

$total=$jp * $hargapaket;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>

<body>

    <div class="container" style="margin-left:600px">
        <div class="row">
            <div class="col-lg-6 col-d-8 col-sm-12 bg-light">
                <img src="images/hanamasa-restaurant-logo.png" class="img-fluid mx-auto d-block" alt="" style="height: 100px">
                <h3 class="text-center">CALL US AT</h3>
                <h3 class="text-center">1-505-500</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12 bg-light">
                <table widht="100%">
                    <tr>
                        <td>Waktu Transaksi</td>
                        <td>&nbsp; : <?= date('d F Y h:i:s')?></td>
                    </tr>
                </table>
                <p class="text-center">----------------------------------------------------------------------------------------------------</p>
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12 bg-light text-center">
                        <tr>
                            <td>Nama Paket</td>
                            <td>:</td>
                            <td><?= $kodepaket ?></td><br>
                            <td>Jumlah Makanan</td>
                            <td>:</td>
                            <td><?= $jp ?></td><br>
                            <td>Harga</td>
                            <td>:</td>
                            <td><?= $hargapaket ?></td><br>
                            <td><?= $total ?></td>
                        </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>