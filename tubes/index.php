<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

// Menghubungkan dengan file php lainnya
require 'php/functions.php';
// Melakukan query
$items = query("SELECT * FROM shoes");

//ketika tombol cari diklik
if (isset($_POST['cari'])) {
    $items = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="css/style.css" rel="">
    <title>Tubes PW</title>
</head>

<body>
    <!-- navbar -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper white" id="home">
                <div class="container black-text">
                    <a href="../index.html" class="brand-logo black-text">Zraben</a>
                    <a href="#" data-target="mobile-links" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#home" class="black-text">Home</a></li>
                        <li><a href="#about" class="black-text">About</a></li>
                        <li><a href="#product" class="black-text">Product</a></li>
                        <li><a href="#partners" class="black-text">Partners</a></li>
                        <li><a href="#contact" class="black-text">Contact</a></li>
                        <li><a href="php/login.php" class="waves-effect waves-light btn grey darken-2">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- end navbar -->
    <!-- sidenav -->
    <ul id="mobile-links" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="assets/img/bg-profile.jpg">
                </div>
                <a href="#user"><img class="circle" src="assets/img/bg-profile.jpg"></a>
                <a href="#name"><span class="white-text name">Ririn Syafira Kirana</span></a>
                <a href="#email"><span class="white-text email">ririnsyafirak@gmail.com</span></a>
            </div>
        </li>
        <li><a class="waves-effect" href="#home">Home</a></li>
        <li><a class="waves-effect" href="#about">About</a></li>
        <li><a class="waves-effect" href="#product">Product</a></li>
        <li><a href="#partners" class="black-text">Partners</a></li>
        <li><a class="waves-effect" href="#contact">Contact</a></li>
        <li><a class="waves-effect" href="php/login.php">Admin</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="waves-effect" href="../index.html">Index</a></li>
    </ul>
    <!-- end sidenav -->


    <!-- home -->
    <section id="home" class="section scrollspy">
        <div class="section" style="background-image: linear-gradient(white, lightgrey);">
            <div class="row container center-align black-text">
                <img src="assets/img/logo.png" alt="" class="responsive-img">
                <h5 style="color: black;">Best Shoes, For Best Style</h5><br>
            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="assets/img/background.jpg" alt="" class="reponsive-img"></div>
        </div>
    </section>

    <!-- endhome -->

    <!-- about -->
    <section id="about" class=" section scrollspy" style="background-image: linear-gradient(lightgrey, white);">
        <div class="container about center-align" style="margin-top: 70px;">
            <a class="btn-floating btn-large waves-effect waves-light grey darken-3" style="font-size: 25px; font-weight:600;">A</a>
            <a class="btn-floating btn-large waves-effect waves-light grey darken-3" style="font-size: 25px; font-weight:600;">B</a>
            <a class="btn-floating btn-large waves-effect waves-light grey darken-3" style="font-size: 25px; font-weight:600;">O</a>
            <a class="btn-floating btn-large waves-effect waves-light grey darken-3" style="font-size: 25px; font-weight:600;">U</a>
            <a class="btn-floating btn-large waves-effect waves-light grey darken-3" style="font-size: 25px; font-weight:600;">T</a>
            <br><br>
            <h5>Zraben comes from maltese which means shoes. Zraben is trusted as one of the shops that provides luxury shoe brands in Indonesia with original quality. Complete your shoe collection with us for the best fashion style</h5><br>
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header hoverable">
                        <i class="medium material-icons">stars</i>
                        <h6>Premium Quality</h6>
                        <span class="badge"><i class="medium material-icons">arrow_drop_down_circle</i></span>
                    </div>
                    <div class="collapsible-body">
                        <p>Zraben provides premium quality shoes imported directly from the factory</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header hoverable">
                        <i class="medium material-icons">local_offer</i>
                        <h6>Original Product</h6>
                        <span class="badge"><i class="medium material-icons">arrow_drop_down_circle</i></span>
                    </div>
                    <div class="collapsible-body">
                        <p>All products are imported by the brand principle so that its authenticity is guaranteed</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header hoverable">
                        <i class="material-icons">local_shipping</i>
                        <h6>Support National Shipping</h6>
                        <span class="badge"><i class="medium material-icons">arrow_drop_down_circle</i></span>
                    </div>
                    <div class="collapsible-body">
                        <p>We support national shipping anywhere with low cost and safe products</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <!-- product -->
    <section id="product" class="section scrollspy" style="background-image: linear-gradient(white, lightgrey);">
        <div class="judul">
            <marquee direction=”left” behavior="alternate" vspace="20">
                <h1 style=" font-weight: bold;">PRODUCT PRODUCT PRODUCT PRODUCT PRODUCT PRODUCT PRODUCT</h1>
            </marquee>
        </div>

        <div class="container">
            <form action="" method="POST">
                <input type="text" name="keyword" size="52" placeholder="Enter search keyword" autocomplete="off" class="keyword">
                <button type="submit" name="cari" class="tombol-cari">Cari</button>
            </form>
            <div class="livesearch">
                <table class="highlight responsive-table white centered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <?php if (empty($items)) : ?>
                        <tr>
                            <td colspan="4">
                                <p style="color: red; font-style: italic;">Item tidak ditemukan!</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <tbody>
                        <?php foreach ($items as $item) : ?>
                            <tr>
                                <td><?= $item["id"]; ?></td>
                                <td><img src="assets/img/<?= $item["img"]; ?>"></td>
                                <td><b><?= $item["name"]; ?></td>
                                <td><?= $item["category"]; ?></td>
                                <td>
                                    <a href="php/detail.php?id=<?= $item['id'] ?>" <?= $item["name"] ?>>View Product</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- partners -->
    <section id="partners" class="section scrollspy center-align" style="background-image: linear-gradient(lightgrey, white);">
        <div class="container" style="margin-top: 80px;">
            <h4>PARTNERS</h4>
            <div class="divider black"></div><br><br>
            <div class="row">
                <div class="col s12 m6 l3">
                    <img src="assets/img/gucci.png" alt="" style="max-width: 150px; padding-right:20px;">
                </div>
                <div class="col s12 m6 l3">
                    <img src="assets/img/nike.png" alt="" style="max-width: 150px;">
                </div>
                <div class="col s12 m6 l3">
                    <img src="assets/img/dior.png" alt="" style="max-width: 150px;">
                </div>
                <div class="col s12 m6 l3">
                    <img src="assets/img/lv.png" alt="" style="max-height: 120px;">
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l4">
                    <img src="assets/img/balenciaga.png" alt="" style="max-width: 150px;">
                </div>
                <div class="col s12 m6 l4">
                    <img src="assets/img/prada.png" alt="" style="max-width: 150px;">
                </div>
                <div class="col s12 m6 l4">
                    <img src="assets/img/converse.png" alt="" style="max-width: 150px;">
                </div>
            </div>
        </div>

    </section>
    <!-- end partners -->

    <!-- contact -->
    <section id="contact" class="section scrollspy white">
        <div class="container center-align" style="margin-top: 70px;">
            <h6 style="color: grey;">C O N T A C T</h6>
            <h4>CONTACT US</h4><br>
            <div class="divider"></div><br><br>
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card grey lighten-2">
                        <div class="card-content black-text">
                            <a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">call</i></a>
                            <span class="card-title" style="padding-top: 30px;">CONTACT NUMBER</span>
                            <p>Call our store: +1234567890</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card grey lighten-1">
                        <div class="card-content black-text">
                            <a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">email</i></a>
                            <span class="card-title" style="padding-top: 30px;">EMAIL ADDRESS</span>
                            <p>Email us: hello@zraben.com</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card grey lighten-1">
                        <div class="card-content black-text">
                            <a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">explore</i></a>
                            <span class="card-title" style="padding-top: 30px;">WEBSITE</span>
                            <p>Visit our website: zraben.com</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card grey lighten-2">
                        <div class="card-content black-text">
                            <a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">location_on</i></a>
                            <span class="card-title" style="padding-top: 30px;">ADDRESS</span>
                            <p>Jl. Dr. Setiabudi No. 193 Bandung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->


    <!-- footer -->
    <footer class="page-footer white" style="margin-top: 70px;background-image: linear-gradient(white, lightgrey);">
        <div class="footer-copyright center white">
            <div class="container black-text">
                © 2021 Ririn Syafira Kirana
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const parallaxEffect = document.querySelectorAll('.parallax');
            M.Parallax.init(parallaxEffect, {});
        });
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems, {
                accordion: false
            });
        });
        $(document).ready(function() {
            $('.scrollspy').scrollSpy();
        });
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
    </script>
</body>

</html>