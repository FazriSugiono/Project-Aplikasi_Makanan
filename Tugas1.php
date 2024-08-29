<?php 
if (isset($_POST['kirim'])){
    $jp=$_POST['jp'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanamasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-danger width-10px">
            <div class="container-fluid">

                <a class="navbar-brand text-light"> <img src="hanamasa-restaurant-logo.png" alt="" style="height: 50px;">HANAMASA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" style="padding-left: 900px;">
                        <a class="nav-link active text-light" aria-current="page" href="Tugas.php">Home</a>
                        <a class="nav-link active text-light" aria-current="page" href="#">|</a>
                        <a class="nav-link active text-light" aria-current="page" href="Tugas1.php">Menu Makanan</a>
                    </div>
                </div>
                <nav class="navbar bg-danger">
                    <div class="container-fluid">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success bg-light" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </nav>
    </div>
    <br>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    
                    <img src="images/01hzen6182m04t0stqyfne6wxd.jpg" class="d-block w-100" alt="" style="height: 800px;">
                </div>
                <div class="carousel-item active">
                    <img src="images/Daging-Yakiniku-All-You-Can-Eat-Hanamasa-1.jpg" class="d-block w-100" alt="" style="height: 800px;">
                </div>
                <div class="carousel-item active">
                    <img src="images/picture-1468288938.jpg" class="d-block w-100" alt="" style="height: 800px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <h1 class="text-center">Daftar Makanan</h1>
        <br>
                <div class="row">
                    <?php
                    $menupaket =
                        [
                            [
                                'kode'          => 'YAKINIKU',
                                'nama_paket'    => 'Beef Marinated Special',
                                'harga_paket'   => 150000,
                                'gambar'        => '_YAKINIKU__Beef_Marinated_Special_B.jpg'
                            ],
                            [
                                'kode'          => 'SYABU',
                                'nama_paket'    => 'Cumi',
                                'harga_paket'   => 75000,
                                'gambar'        => '_SYABU-SYABU__Cumi_A.jpg'
                            ],
                            [
                                'kode'          => 'ROBATAYAKI',
                                'nama_paket'    => 'Beef Rool Onion',
                                'isi_paket'     => '1 Pcs Chiken Cup <br>',
                                'harga_paket'   => 55000,
                                'gambar'        => '_ROBATAYAKI__Beef_Roll_Onion_C.jpg'
                            ],
                            [
                                'kode'          => 'DESSERT',
                                'nama_paket'    => 'Asinan',
                                'harga_paket'   => 30000,
                                'gambar'        => '_DESSERT__Asinan_B_x.jpg'
                            ],
                        ];
                    foreach ($menupaket as $data) {
                    ?>

                        <div class="col">
                            <div class="card mb-3" style="width: 18rem;">
                                <img src="images/<?php echo $data['gambar'] ?>" alt="....">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['nama_paket'] ?></h5>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal<?php echo $data['kode'] ?>">
                                        Details
                                    </button>
                                    <button type="button" class="btn btn-danger text-light" data-bs-toggle="modal" data-bs-target="#pesanModal<?php echo $data['kode'] ?>" >
                                        + Order
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="detailModal<?php echo $data['kode'] ?>" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="detailModalLabel">Details <?php echo $data['nama_paket'] ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        echo '<b>Composition :<br></b>';
                                        echo $data['nama_paket'] . '<br>';
                                        echo '<b>Harga : Rp. ' . $data['harga_paket'] . '</b><br>';
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn- bg-danger text-light" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn- bg-primary text-light" data-bs-toggle="modal" data-bs-target="#pesanModal<?php echo $data['kode'] ?>">Pesan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- Modal Pesan-->
                            <div class="modal fade" id="pesanModal<?php echo $data['kode'] ?>" tabindex="-1" aria-labelledby="pesanModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="pesanModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="order.php" method="post"
                                            id="pesanForm<?php echo $data['kode'] ?>" target="_blank">
                                            <div class="form-group">
                                                <label for="jumlahPesanan" required>Jumlah Pesanan</label>
                                                <input type="number" id="jumlahPesanan" class="form-control"  name="jp" required>
                                            </div>
                                            <input type="hidden" name="kodePaket" value="<?php echo $data['kode'] ?>">
                                            <input type="hidden" name="hargaPaket"value="<?php echo $data['harga_paket'] ?>">
                                            <input type="hidden" name="namaPaket" value="<?php echo $data['nama_paket'] ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" name="kirim">Pesan</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                        
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br>



</div>
</div>
<footer class="text-center bg-body-tertiary">
    <!-- Grid container -->
    <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a
                data-mdb-ripple-init
                class="btn btn-link btn-floating btn-lg text-body m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a
                data-mdb-ripple-init
                class="btn btn-link btn-floating btn-lg text-body m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a
                data-mdb-ripple-init
                class="btn btn-link btn-floating btn-lg text-body m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a
                data-mdb-ripple-init
                class="btn btn-link btn-floating btn-lg text-body m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a
                data-mdb-ripple-init
                class="btn btn-link btn-floating btn-lg text-body m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
            <!-- Github -->
            <a
                data-mdb-ripple-init
                class="btn btn-link btn-floating btn-lg text-body m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2020 Copyright:
        <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>